<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Definisco i dati dei ristoranti
        $restaurants = [
            [
                'name' => 'Ristorante da Francesco',
                'image' => '',
                'vat' => '12345678901',
                'address' => 'Via Roma, 1',
                'user_id' => 1
            ],
            [
                'name' => 'Trattoria da Paolo',
                'image' => '',
                'vat' => '23456789012',
                'address' => 'Via Milano, 2',
                'user_id' => 2
            ],
            [
                'name' => 'Osteria da Matteo',
                'image' => '',
                'vat' => '34567890123',
                'address' => 'Via Venezia, 3',
                'user_id' => 3
            ],
            [
                'name' => 'Ristorante da Luiggina',
                'image' => '',
                'vat' => '45678901234',
                'address' => 'Via Torino, 4',
                'user_id' => 4
            ],
            [
                'name' => 'Trattoria da Giorgia',
                'image' => '',
                'vat' => '56789012345',
                'address' => 'Via Firenze, 5',
                'user_id' => 5
            ]
        ];

        // Ciclo sui ristoranti e li inserisco nella tabella "restaurants"
        foreach ($restaurants as $restaurant) {
            Restaurant::create($restaurant);
        }
    }
}
