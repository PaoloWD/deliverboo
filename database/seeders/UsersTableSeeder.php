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
                'email' => 'Matteo@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Luiggina Rossi',
                'email' => 'marco@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Giorgia Venturelli',
                'email' => 'giuseppe@gmail.com',
                'password' => Hash::make('password')
            ]
        ];

        // La password è criptata utilizzando la funzione Hash::make.

        // Ciclo sugli utenti e li inserisco nella tabella "users"
        foreach ($users as $user) {
            User::create($user);
        }
    }
}