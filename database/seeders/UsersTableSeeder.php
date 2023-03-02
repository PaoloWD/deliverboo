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
                'name' => 'Mario Rossi',
                'email' => 'mario@example.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Paolo Bianchi',
                'email' => 'paolo@example.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Laura Neri',
                'email' => 'laura@example.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Marco Verdi',
                'email' => 'marco@example.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Giuseppe Gialli',
                'email' => 'giuseppe@example.com',
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
