<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Definisco i dati degli utenti
        $users = [
            [
                'name' => 'Francesco Pelliccia',
                'email' => 'francesco@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Paolo Lo Re',
                'email' => 'paolo@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Matteo Tagliapietra',
                'email' => 'matteo@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Luiggina Rossi',
                'email' => 'luiggina@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Giorgia Venturelli',
                'email' => 'giorgia@gmail.com',
                'password' => Hash::make('password')
            ],
            //Nuovi utenti
            [
                'name' => 'Gabriella Chessa',
                'email' => 'gabriella@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Luca Coniglio',
                'email' => 'luca@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Biagio Mangani',
                'email' => 'biagio@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Lucio Bo',
                'email' => 'lucio@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Davide Arrighi',
                'email' => 'davide@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Supremo',
                'email' => 'supremo@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('password')
            ],
        ];

        // La password è criptata utilizzando la funzione Hash::make.

        // Ciclo sugli utenti e li inserisco nella tabella "users"
        foreach ($users as $user) {
            User::create($user);
        }
    }
}