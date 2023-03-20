<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ristorante da Paolo -> id: 2
        // Piatti Ristorante da Polo -> id: da 6 a 10

        $dishIds = Dish::whereIn('id', [6, 7])->pluck('id')->toArray();
        $dishIds2 = Dish::whereIn('id', [9, 7])->pluck('id')->toArray();
        $dishIds3 = Dish::whereIn('id', [9, 7])->pluck('id')->toArray();
        $dishIds4 = Dish::whereIn('id', [9, 7, 6, 8])->pluck('id')->toArray();

        // Crea tre ordini associati a questi piatti
        Order::create([
            'status' => 'In lavorazione',
            'total_order' => '18.50',
            'order_time' => '2023/01/17',
            'order_date' => '2023/01/17',
            'customer_name' => 'Mario Rossi',
            'customer_address' => 'Via Boolean Careers, 6',
            'customer_phone' => '3313131313',
            'customer_email' => 'mariorossi@gmail.com',
            'restaurant_id' => '2',
            'created_at' => '2023/01/16 09:01:46',
            'updated_at' => '2023/01/16 09:01:46',
        ])->dishes()->attach($dishIds);

        Order::create([
            'status' => 'In lavorazione',
            'total_order' => '27.00',
            'order_time' => '2023/02/23',
            'order_date' => '2023/02/23',
            'customer_name' => 'Luigi Bianchi',
            'customer_address' => 'Via False Street, 123',
            'customer_phone' => '3355555555',
            'customer_email' => 'luigibianchi@gmail.com',
            'restaurant_id' => '2',
            'created_at' => '2023/02/16 10:15:23',
            'updated_at' => '2023/02/16 10:15:23',
        ])->dishes()->attach($dishIds2);

        Order::create([
            'status' => 'Completato',
            'total_order' => '30.00',
            'order_time' => '2023/03/23',
            'order_date' => '2023/03/23',
            'customer_name' => 'Giovanni Verdi',
            'customer_address' => 'Via Boolean Careers, 8',
            'customer_phone' => '3344444444',
            'customer_email' => 'giovanniverdi@gmail.com',
            'restaurant_id' => '2',
            'created_at' => '2023/03/23 11:20:45',
            'updated_at' => '2023/03/23 11:20:45',
        ])->dishes()->attach($dishIds3);

        Order::create([
            'status' => 'Completato',
            'total_order' => '40.00',
            'order_time' => '2023/03/23',
            'order_date' => '2023/03/23',
            'customer_name' => 'Giovanni Verdi',
            'customer_address' => 'Via Boolean Careers, 8',
            'customer_phone' => '3344444444',
            'customer_email' => 'giovanniverdi@gmail.com',
            'restaurant_id' => '2',
            'created_at' => '2023/03/23 11:20:45',
            'updated_at' => '2023/03/23 11:20:45',
        ])->dishes()->attach($dishIds3);

        Order::create([
            'status' => 'Completato',
            'total_order' => '100.00',
            'order_time' => '2023/03/23',
            'order_date' => '2023/03/23',
            'customer_name' => 'Giovanni Verdi',
            'customer_address' => 'Via Boolean Careers, 8',
            'customer_phone' => '3344444444',
            'customer_email' => 'giovanniverdi@gmail.com',
            'restaurant_id' => '2',
            'created_at' => '2023/03/23 11:20:45',
            'updated_at' => '2023/03/23 11:20:45',
        ])->dishes()->attach($dishIds4);

        Order::create([
            'status' => 'Completato',
            'total_order' => '76.00',
            'order_time' => '2023/03/23',
            'order_date' => '2023/03/23',
            'customer_name' => 'Paolo Meneguzzi',
            'customer_address' => 'Via Boolean Careers, 8',
            'customer_phone' => '3344444444',
            'customer_email' => 'paolomeneguzzi@gmail.com',
            'restaurant_id' => '2',
            'created_at' => '2023/03/23 11:20:45',
            'updated_at' => '2023/03/23 11:20:45',
        ])->dishes()->attach($dishIds4);

        Order::create([
            'status' => 'Completato',
            'total_order' => '76.00',
            'order_time' => '2023/03/23',
            'order_date' => '2023/03/23',
            'customer_name' => 'Paolo Meneguzzi',
            'customer_address' => 'Via Boolean Careers, 8',
            'customer_phone' => '3344444444',
            'customer_email' => 'paolomeneguzzi@gmail.com',
            'restaurant_id' => '2',
            'created_at' => '2023/03/23 11:20:45',
            'updated_at' => '2023/03/23 11:20:45',
        ])->dishes()->attach($dishIds3);

        Order::create([
            'status' => 'Completato',
            'total_order' => '16.00',
            'order_time' => '2023/03/23',
            'order_date' => '2023/03/23',
            'customer_name' => 'Paolo Meneguzzi',
            'customer_address' => 'Via Boolean Careers, 8',
            'customer_phone' => '3344444444',
            'customer_email' => 'paolomeneguzzi@gmail.com',
            'restaurant_id' => '2',
            'created_at' => '2023/03/23 11:20:45',
            'updated_at' => '2023/03/23 11:20:45',
        ])->dishes()->attach($dishIds2);

        Order::create([
            'status' => 'Completato',
            'total_order' => '36.00',
            'order_time' => '2023/02/23',
            'order_date' => '2023/02/23',
            'customer_name' => 'Paolo Meneguzzi',
            'customer_address' => 'Via Boolean Careers, 8',
            'customer_phone' => '3344444444',
            'customer_email' => 'paolomeneguzzi@gmail.com',
            'restaurant_id' => '2',
            'created_at' => '2023/02/23 11:20:45',
            'updated_at' => '2023/02/23 11:20:45',
        ])->dishes()->attach($dishIds4);

        Order::create([
            'status' => 'In lavorazione',
            'total_order' => '26.00',
            'order_time' => '2023/01/23',
            'order_date' => '2023/01/23',
            'customer_name' => 'Paolo Maccarrone',
            'customer_address' => 'Via Boolean Careers, 8',
            'customer_phone' => '3344444444',
            'customer_email' => 'paolomaccarrone@gmail.com',
            'restaurant_id' => '2',
            'created_at' => '2023/01/23 11:20:45',
            'updated_at' => '2023/01/23 11:20:45',
        ])->dishes()->attach($dishIds3);

        Order::create([
            'status' => 'In lavorazione',
            'total_order' => '20.00',
            'order_time' => '2023/01/23',
            'order_date' => '2023/01/23',
            'customer_name' => 'Paolo Maccarrone',
            'customer_address' => 'Via Boolean Careers, 8',
            'customer_phone' => '3344444444',
            'customer_email' => 'paolomaccarrone@gmail.com',
            'restaurant_id' => '2',
            'created_at' => '2023/01/23 11:20:45',
            'updated_at' => '2023/01/23 11:20:45',
        ])->dishes()->attach($dishIds);
    }
}