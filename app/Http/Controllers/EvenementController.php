<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;
use App\Models\Categorie;
use App\Models\Localisation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{

        /**
         * Display a listing of the resource.
         */
        public function index()
    {
        $evenements = Evenement::all();
        $categories = Categorie::all();
        $localisation = Localisation::all();

        $data = [
            'evenements' => $evenements,
            'categories' => $categories,
            'Localisation' => $localisation,
        ];
        return view('backOffice.evenement', compact('data'));
    }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('evenements.create');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            // Valider les données du formulaire
            try {
                $validatedData = $request->validate([
                    'title' => 'required|string|max:255',
                    'description' => 'required|string|max:255',
                    'content' => 'required|string',
                    'date' => 'required|date',
                    'localisation_id' => 'required|exists:localisations,id',
                    'categories_id' => 'required|exists:categories,id',
                    'image' => 'required|image|max:2048',
                ]);
            } catch (Exception $e) {
                dd($e->getMessage());
            }

            // Vérifier si une image a été téléchargée
            if ($request->hasFile('image')) {
                // Stocker l'image dans le dossier 'uploads' du dossier 'public'
                $imagePath = $request->file('image')->store('uploads', 'public');
            }

            // Créer un nouvel événement avec les données validées et l'emplacement de l'image
            $evenement = Evenement::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'content' => $validatedData['content'],
                'date' => $validatedData['date'],
                'localisation_id' => $validatedData['localisation_id'],
                'categories_id' => $validatedData['categories_id'],
                'organisateur_id' => 2,
                'image' => $imagePath ?? null,
            ]);

            // Rediriger avec un message de succès
            return redirect()->route('evenements.index')->with('success', 'Événement créé avec succès.');
        }


        /**
         * Display the specified resource.
         */
        public function show(Evenement $evenement)
        {
            return view('evenements.show', compact('evenement'));
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Evenement $evenement)
        {
            return view('evenements.edit', compact('evenement'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(UpdateEvenementRequest $request, Evenement $evenement)
        {
            $evenement->update($request->validated());
            return redirect()->route('evenements.index')->with('success', 'Événement mis à jour avec succès.');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Evenement $evenement)
        {
            $evenement->delete();
            return redirect()->route('evenements.index')->with('success', 'Événement supprimé avec succès.');
        }
    }


