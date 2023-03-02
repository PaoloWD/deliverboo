<?php

namespace Database\Seeders;

use App\Models\Category;
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
                $category_id = Category::find(1)->id, // Recupera l'ID della categoria con ID = 1
                $restaurant = new Restaurant(),
                $restaurant->name = 'Ristorante da Francesco',
                $restaurant->image = '',
                $restaurant->vat = '12345678901',
                $restaurant->address = 'Via Roma, 1',
                $restaurant->user_id = 1,
                $restaurant->save(),
        
                $restaurant->categories()->attach($category_id), // Assegna l'ID della categoria alla tabella ponte
                
            ],
            [
                $category_id = Category::find(3)->id, // Recupera l'ID della categoria con ID = 3
                $restaurant = new Restaurant(),
                $restaurant->name = 'Ristorante da Paolo',
                $restaurant->image = '',
                $restaurant->vat = '56345348901',
                $restaurant->address = 'Via Roma, 4',
                $restaurant->user_id = 2,
                $restaurant->save(),
                $restaurant->categories()->attach($category_id),
        
            ],
            [
                $category_id = Category::find(7)->id, // Recupera l'ID della categoria con ID = 7
                $restaurant = new Restaurant(),
                $restaurant->name = 'Ristorante da Matteo',
                $restaurant->image = '',
                $restaurant->vat = '99996348901',
                $restaurant->address = 'Via Roma, 5',
                $restaurant->user_id = 3,
                $restaurant->save(),
                $restaurant->categories()->attach($category_id),
            ],
            [
                $category_id = Category::find(10)->id, // Recupera l'ID della categoria con ID = 10
                $restaurant = new Restaurant(),
                $restaurant->name = 'Ristorante da Luiggina',
                $restaurant->image = '',
                $restaurant->vat = '66445348901',
                $restaurant->address = 'Via Roma, 6',
                $restaurant->user_id = 4,
                $restaurant->save(),
                $restaurant->categories()->attach($category_id),
            ],
            [
                $category_id = Category::find(3)->id, // Recupera l'ID della categoria con ID = 3
                $restaurant = new Restaurant(),
                $restaurant->name = 'Ristorante da Giorgia',
                $restaurant->image = '',
                $restaurant->vat = '56374659801',
                $restaurant->address = 'Via Roma, 7',
                $restaurant->user_id = 5,
                $restaurant->save(),
                $restaurant->categories()->attach($category_id),
            ]
        ];

        // Ciclo sui ristoranti e li inserisco nella tabella "restaurants"
        foreach ($restaurants as $restaurant) {
            Restaurant::create($restaurant);
        }
    }
}