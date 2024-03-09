<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $villes = [
            'Casablanca',
            'Rabat',
            'Fès',
            'Marrakech',
            'Agadir',
            'Tanger',
            'Salé',
            'Meknès',
            'Oujda',
            'Kénitra',
            'Tétouan',
            'Témara',
            'Safi',
            'Mohammédia',
            'El Jadida',
            'Béni Mellal',
            'Taza',
            'Khémisset',
            'Nador',
            'Larache'
        ];

        foreach ($villes as $ville) {
            DB::table('localisations')->insert([
                'ville' => $ville,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
