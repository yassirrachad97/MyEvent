<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;

class EvenementController extends Controller
{

        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $evenements = Evenement::all();
            return view('evenements.index', compact('evenements'));
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
        public function store(StoreEvenementRequest $request)
        {
            Evenement::create($request->validated());
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


