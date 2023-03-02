<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Italiano',
            'Cinese',
            'Iternazionale',
            'Giapponese',
            'Messicano',
            'Indiano',
            'Pesce',
            'Carne',
            'Pizza',
            'Vegetariano',
            'Vegano',
            'Celiaco'
         ];
         foreach ($categories as $category) {
             $newCategory = new Category();
             $newCategory->name = $category;
             $newCategory->save();
         }
    }
}