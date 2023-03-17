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

        $orders = [
            [
                $dish_id = Dish::find(6)->id, // Recupera l'ID del piatto con ID = 6-10
                $order = new Order(),
                $order->status = 'In lavorazione',
                $order->total_order = '8.00',
                $order->order_time = '2023-01-17',
                $order->order_date = '2023-01-17',
                $order->customer_name = 'Mario Rossi',
                $order->customer_address = 'Via Boolean Careers, 6',
                $order->customer_phone = '3313131313',
                $order->customer_email = 'mariorossi@gmail.com',
                $order->restaurant_id = '2',
                $order->created_at = '2023-01-16 09:01:46',
                $order->updated_at = '2023-01-16 09:01:46',
                $order->save(),

                $order->dishes()->attach($dish_id), // Assegna l'ID dell'ordine alla tabella ponte

            ],
            [
                $dish_id = Dish::find(7)->id,
                $order = new Order(),
                $order->status = 'Completato',
                $order->total_order = '10.50',
                $order->order_time = '2023-02-17',
                $order->order_date = '2023-02-17',
                $order->customer_name = 'Giuseppe Verdi',
                $order->customer_address = 'Via Boolean Careers, 7',
                $order->customer_phone = '3311313131',
                $order->customer_email = 'giuseppeverdi@gmail.com',
                $order->restaurant_id = '2',
                $order->created_at = '2023-02-17 09:01:47',
                $order->updated_at = '2023-02-17 09:01:47',
                $order->save(),

                $order->dishes()->attach($dish_id),

            ],
/*             [
                $dish_id = Dish::find()->id,
                $order = new Order(),
                $order->status = '',
                $order->total_order = '',
                $order->order_time = '',
                $order->order_date = '',
                $order->customer_name = '',
                $order->customer_address = '',
                $order->customer_phone = '',
                $order->customer_email = '',
                $order->restaurant_id = '2',
                $order->created_at = '',
                $order->updated_at = '',
                $order->save(),

                $order->dishes()->attach($dish_id),

            ],
            [
                $dish_id = Dish::find()->id,
                $order = new Order(),
                $order->status = '',
                $order->total_order = '',
                $order->order_time = '',
                $order->order_date = '',
                $order->customer_name = '',
                $order->customer_address = '',
                $order->customer_phone = '',
                $order->customer_email = '',
                $order->restaurant_id = '2',
                $order->created_at = '',
                $order->updated_at = '',
                $order->save(),

                $order->dishes()->attach($dish_id),

            ],
            [
                $dish_id = Dish::find()->id,
                $order = new Order(),
                $order->status = '',
                $order->total_order = '',
                $order->order_time = '',
                $order->order_date = '',
                $order->customer_name = '',
                $order->customer_address = '',
                $order->customer_phone = '',
                $order->customer_email = '',
                $order->restaurant_id = '2',
                $order->created_at = '',
                $order->updated_at = '',
                $order->save(),

                $order->dishes()->attach($dish_id),

            ],
            [
                $dish_id = Dish::find()->id,
                $order = new Order(),
                $order->status = '',
                $order->total_order = '',
                $order->order_time = '',
                $order->order_date = '',
                $order->customer_name = '',
                $order->customer_address = '',
                $order->customer_phone = '',
                $order->customer_email = '',
                $order->restaurant_id = '2',
                $order->created_at = '',
                $order->updated_at = '',
                $order->save(),

                $order->dishes()->attach($dish_id),

            ], */
        ];

        // Ciclo sugli ordini e li inserisco nella tabella "orders"
        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
