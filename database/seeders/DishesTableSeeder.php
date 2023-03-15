<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
            // Piatti del primo ristorante
            [
                'name' => 'Pizza Margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'Pizza classica Napoletana con pomodoro, mozzarella e basilico',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico',
                'price' => 8.50,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'Pasta classica Romana con pancetta, uova, pecorino e pepe nero',
                'ingredients' => 'pasta, pancetta, uova, pecorino, pepe nero',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Insalata mista',
                'image' => 'https://www.calendariodelciboitaliano.it/wp-content/uploads/2017/07/insalatamistaheader1.jpg',
                'description' => 'Ciotola grande di insalata mista tutti i gusti più uno',
                'ingredients' => 'lattuga, pomodoro, cetriolo, olive nere',
                'price' => 6.00,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Tiramisu_-_Raffaele_Diomede.jpg',
                'description' => 'Dolce al cucchiaio con savoiardi, mascarpone e caffè',
                'ingredients' => 'savoiardi, mascarpone, caffè',
                'price' => 5.50,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Vino Rosso',
                'image' => 'https://shop.tastefromabruzzo.com/wp-content/uploads/2021/01/Alarius-Montepulciano-Cioti.jpg',
                'description' => 'Bottiglia di Alarius Montepulciano d\'Abruzzo, denominazione di origine controllata',
                'ingredients' => 'Montepulciano d\'Abruzzo',
                'price' => 18.00,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            // Piatti del secondo ristorante
            [
                'name' => 'Pizza margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'La classica pizza margherita tipica Napoletana con pomodoro, mozzarella e basilico',
                'ingredients' => 'Farina, pomodoro, mozzarella, basilico',
                'price' => 8.00,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Spaghetti alla carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'I classici spaghetti alla carbonara tipica Romana con uova, guanciale e pecorino',
                'ingredients' => 'Spaghetti, uova, guanciale, pecorino',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Tagliatelle al ragù',
                'image' => 'https://i.pinimg.com/564x/3e/44/35/3e4435aac4fb65311d4454227d0360d4.jpg',
                'description' => 'Le tagliatelle fatte in casa con il ragù di carne',
                'ingredients' => 'Tagliatelle fatte in casa, carne macinata, pomodoro, carota, sedano, cipolla',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => 'https://i.pinimg.com/564x/bb/42/80/bb4280de62c397b550f61dfaefb50b58.jpg',
                'description' => 'Le bruschette cotte su fuoco a legna con pomodoro, aglio e basilico',
                'ingredients' => 'Pane, pomodoro, aglio, basilico',
                'price' => 4.50,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Vino Bianco',
                'image' => 'https://i.pinimg.com/564x/f8/c0/a1/f8c0a1c2d3458a71c2d22bc89901743c.jpg',
                'description' => 'Pinot Grigio delle Venezzi 2010',
                'ingredients' => 'Moscato bianco',
                'price' => 16.00,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            // Piatti del terzo ristorante
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/39/0f/1e/390f1ea66d83518e5569c64357688edb.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'price' => 14.00,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Fritto misto di mare',
                'image' => 'https://i.pinimg.com/564x/a5/1c/cd/a51ccd4a71a38778a6f3d5ff3d54a9f6.jpg',
                'description' => 'Il fritto misto di mare con calamari, gamberi e scampi',
                'ingredients' => 'Calamari, gamberi, scampi',
                'price' => 9.50,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Zuppa di pesce',
                'image' => 'https://i.pinimg.com/564x/0f/86/38/0f86380725360dd6c28e630cc082c6f7.jpg',
                'description' => 'Zuppa di pesce accompagnata con crostini di pane casereccio',
                'ingredients' => 'Gamberi, seppie, prezzemolo',
                'price' => 11.00,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Tagliata di carne',
                'image' => 'https://i.pinimg.com/564x/65/22/2e/65222e4c247b634055ae88532e879d71.jpg',
                'description' => 'Secondo piatto che si ottiene con una rapida cottura al sangue di un taglio di carne ben preciso',
                'ingredients' => 'entrecôte, costata di manzo, con o senza osso, fiorentina',
                'price' => 20.90,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Hamburger Panino',
                'image' => 'https://i.pinimg.com/564x/e2/b1/7c/e2b17cd05269aefaa4224c0a119ed5e6.jpg',
                'description' => 'Hamburger con doppio strato di carne',
                'ingredients' => 'Carne, cipolle caramellate, ketchup, cheddar, pomodoro, lattuga, pane al sesamo',
                'price' => 25.50,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            // Piatti del quarto ristorante
            [
                'name' => 'Spaghetti cacio e pepe',
                'image' => 'https://i.pinimg.com/564x/6b/6d/00/6b6d00588e6b305b543d8dafe42a0a06.jpg',
                'description' => 'Cremosissima pasta cacio e pepe',
                'ingredients' => 'Pasta, pepe, pecorino romano',
                'price' => 5.00,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/7f/0e/8d/7f0e8d4509254e0aa93148d1f1d1a260.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'price' => 16.70,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Parmigiana',
                'image' => 'https://i.pinimg.com/564x/d7/b2/c8/d7b2c8639165adaefe509e75ebe13615.jpg',
                'description' => 'Primo vegetariano con melanzane e mozzarella ',
                'ingredients' => 'Melanzane, mozzarella, pomodoro, parmigiano ',
                'price' => 7.90,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Involtini di zucchine e salmone ',
                'image' => 'https://i.pinimg.com/564x/45/00/a9/4500a95598ce655bd767563c0f877a38.jpg',
                'description' => 'Antipasto con zucchine grigliate e salmone',
                'ingredients' => 'Zucchine, salmone, Philadelphia',
                'price' => 10.90,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Cheesecake',
                'image' => 'https://i.pinimg.com/564x/6f/e1/c5/6fe1c5185ac0cb278416a3c6ad36fb3c.jpg',
                'description' => 'Dolce a cucchiaio con frutti di bosco',
                'ingredients' => 'Philadelphia, panna, frutti di bosco, vaniglia',
                'price' => 7.60,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            // Piatti del quinto ristorante
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/3d/0f/89/3d0f8949530d3a0f19e8389af8727236.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'price' => 12.40,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => 'https://i.pinimg.com/564x/10/7f/13/107f130050a0d8ecc2eb741e25dc861f.jpg',
                'description' => 'Le bruschette cotte su fuoco a legna con pomodoro, aglio e basilico',
                'ingredients' => 'Pane, pomodoro, aglio, basilico',
                'price' => 4.90,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Fritto misto di mare',
                'image' => 'https://i.pinimg.com/564x/49/66/80/49668042eef05fa5187f12eeedf4c91d.jpg',
                'description' => 'Il fritto misto di mare con calamari, gamberi e scampi',
                'ingredients' => 'Calamari, gamberi, scampi',
                'price' => 8.80,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Involtini di zucchine e salmone ',
                'image' => 'https://i.pinimg.com/564x/45/00/a9/4500a95598ce655bd767563c0f877a38.jpg',
                'description' => 'Antipasto con zucchine grigliate e salmone',
                'ingredients' => 'Zucchine, salmone, Philadelphia',
                'price' => 10.90,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Torta di Mele',
                'image' => 'https://i.pinimg.com/564x/b8/95/b8/b895b893646ef8e5b8d22db7361e2846.jpg',
                'description' => 'Classica torta di mele della nonna fatta in casa',
                'ingredients' => 'Mele, zucchero, burro, cannella',
                'price' => 3.90,
                'visibility' => true,
                'restaurant_id' => 5
            ],
        ];

        // Ciclo sui piatti e li inserisco nella tabella "dishes"
        foreach ($dishes as $dish) {
            Dish::create($dish);
        }

        // Invece di fare 5 seeder diversi ho avuto la seguente ILLUMINAZIONE:
/*         {
            $faker = Faker::create();
    
            // Crea 5 piatti per ogni ristorante
            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <= 5; $j++) {
                    $dish = [
                        'name' => $faker->word(),
                        'image' => $faker->imageUrl(640, 480, 'food'),
                        'description' => $faker->sentence(),
                        'ingredients' => $faker->words(10, true),
                        'price' => $faker->randomFloat(2, 5, 50),
                        'visibility' => true,
                        'restaurant_id' => $i
                    ];
    
                    Dish::create($dish);
                }
            }
        } */
        // Faker me l'ha intata. Si ritorna al piano A... CI PENSO IO!
    }
}