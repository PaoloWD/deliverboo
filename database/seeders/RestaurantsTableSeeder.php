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
                $category_id = Category::whereIn('id', [1,4])->pluck('id')->toArray();
                Restaurant::create([

                    'name' => 'Ristorante da Francesco',
                    'image' => 'https://www.mongalletto.it/wp-content/uploads/2016/10/ristorante-terrazza.jpg',
                    'vat' => '12345678901',
                    'address' => 'Via Roma, 1',
                    'user_id' => 1,
                    ])->categories()->attach($category_id);
        
                

                $category_id = Category::find(3)->id;
                Restaurant::create([
                    'name' => 'Ristorante da Paolo',
                    'image' => 'https://www.lerocce.com/wp-content/uploads/2019/01/terrazza_ulivi.jpg',
                    'vat' => '56345348901',
                    'address' => 'Via Roma, 4',
                    'user_id' => 2,

                ])->categories()->attach($category_id);
                
                $category_id = Category::whereIn('id', [3, 5, 6])->pluck('id')->toArray();
                Restaurant::create([
                   'name' => 'Ristorante da Matteo',
                   'image' => 'https://media-magazine.trivago.com/agriturismo-con-spa-umbria-borgomandoleto-esterno.jpg',
                   'vat' => '99996348901',
                   'address' => 'Via Roma, 5',
                   'user_id' => 3,
                   ])->categories()->attach($category_id);

                $category_id = Category::find(10)->id;
                Restaurant::create([
                    'name' => 'Ristorante da Luiggina',
                    'image' => 'https://agriturismocaiferri.it/wp-content/uploads/2022/06/IMG-20220627-WA0004.jpg',
                    'vat' => '66445348901',
                    'address' => 'Via Roma, 6',
                    'user_id' => 4,
                ])->categories()->attach($category_id);
           
                $category_id = Category::whereIn('id', [4, 6, 2])->pluck('id')->toArray();
                Restaurant::create([
                    'name' => 'Ristorante da Giorgia',
                    'image' => 'https://www.ristorantemovida.it/wp-content/uploads/2020/10/ristorante_movida_bg-home_2.jpg',
                    'vat' => '56374659801',
                    'address' => 'Via Roma, 7',
                    'user_id' => 5,
                ])->categories()->attach($category_id);

                //Ristoranti nuovi

                $category_id = Category::whereIn('id', [1,4])->pluck('id')->toArray();
                Restaurant::create([

                    'name' => 'Ristorante da Gabriella',
                    'image' => 'https://www.mongalletto.it/wp-content/uploads/2016/10/ristorante-terrazza.jpg',
                    'vat' => '12345678901',
                    'address' => 'Via Roma, 1',
                    'created_at' => '2023/02/12 11:20:45',
                    'updated_at' => '2023/02/12 11:20:45',
                    'user_id' => 6,
                    ])->categories()->attach($category_id);
        
                

                $category_id = Category::find(3)->id;
                Restaurant::create([
                    'name' => 'Ristorante da Luca',
                    'image' => 'https://www.lerocce.com/wp-content/uploads/2019/01/terrazza_ulivi.jpg',
                    'vat' => '56345348901',
                    'address' => 'Via Roma, 4',
                    'created_at' => '2023/01/12 11:20:45',
                    'updated_at' => '2023/01/12 11:20:45',
                    'user_id' => 7,

                ])->categories()->attach($category_id);
                
                $category_id = Category::whereIn('id', [3, 5, 6])->pluck('id')->toArray();
                Restaurant::create([
                   'name' => 'Ristorante da Biagio',
                   'image' => 'https://media-magazine.trivago.com/agriturismo-con-spa-umbria-borgomandoleto-esterno.jpg',
                   'vat' => '99996348901',
                   'address' => 'Via Roma, 5',
                   'created_at' => '2023/01/12 11:20:45',
                    'updated_at' => '2023/01/12 11:20:45',
                   'user_id' => 8,
                   ])->categories()->attach($category_id);

                $category_id = Category::find(10)->id;
                Restaurant::create([
                    'name' => 'Ristorante da Lucio',
                    'image' => 'https://agriturismocaiferri.it/wp-content/uploads/2022/06/IMG-20220627-WA0004.jpg',
                    'vat' => '66445348901',
                    'address' => 'Via Roma, 6',
                    'created_at' => '2023/01/12 11:20:45',
                    'updated_at' => '2023/01/12 11:20:45',
                    'user_id' => 9,
                ])->categories()->attach($category_id);
           
                $category_id = Category::whereIn('id', [4, 6, 2])->pluck('id')->toArray();
                Restaurant::create([
                    'name' => 'Ristorante da Davide',
                    'image' => 'https://www.ristorantemovida.it/wp-content/uploads/2020/10/ristorante_movida_bg-home_2.jpg',
                    'vat' => '56374659801',
                    'address' => 'Via Roma, 7',
                    'created_at' => '2023/01/12 11:20:45',
                    'updated_at' => '2023/01/12 11:20:45',
                    'user_id' => 10,
                ])->categories()->attach($category_id);

                        
    }
}