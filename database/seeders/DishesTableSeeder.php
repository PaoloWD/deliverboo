<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Definisco i dati dei piatti
        $dishes = [
            [
                'name' => 'Pizza Margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'Pizza con pomodoro, mozzarella e basilico',
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'price' => 8.50,
                'visibility' => true
            ],
            [
                'name' => 'Carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'Pasta con pancetta, uova, pecorino e pepe nero',
                'ingredients' => 'pasta, pancetta, uova, pecorino, pepe nero',
                'price' => 12.00,
                'visibility' => true
            ],
            [
                'name' => 'Insalata mista',
                'image' => 'hhttps://www.calendariodelciboitaliano.it/wp-content/uploads/2017/07/insalatamistaheader1.jpg',
                'description' => 'Lattuga, pomodoro, cetriolo e olive nere',
                'ingredients' => 'lattuga, pomodoro, cetriolo, olive nere',
                'price' => 6.00,
                'visibility' => true
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Tiramisu_-_Raffaele_Diomede.jpg',
                'description' => 'Dolce al cucchiaio con savoiardi, mascarpone e caffè',
                'ingredients' => 'savoiardi, mascarpone, caffè',
                'price' => 5.50,
                'visibility' => true
            ],
            [
                'name' => 'Vino Rosso',
                'image' => 'https://shop.tastefromabruzzo.com/wp-content/uploads/2021/01/Alarius-Montepulciano-Cioti.jpg',
                'description' => 'Bottiglia di Montepulciano d\'Abruzzo',
                'ingredients' => 'Montepulciano d\'Abruzzo',
                'price' => 18.00,
                'visibility' => true
            ]
        ];

        // Ciclo sui piatti e li inserisco nella tabella "dishes"
        foreach ($dishes as $dish) {
            Dish::create($dish);
        }
    }
}
