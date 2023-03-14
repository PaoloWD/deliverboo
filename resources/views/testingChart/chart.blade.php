@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <h4 class="pt-5 pb-3">Statistiche dei tuoi ordini:</h4>

        <p>
            possibili query in OrdersController
            
            $totalOrders = DB::table('orders')
            ->where('restaurant_id', 1)
            ->count();

            $jenOrders= DB::table('orders')
            ->whereMonth('created_at', '=', 1)
            ->count();

            $yearlyOrders = DB::table('orders')
                    ->select(DB::raw('YEAR(created_at) as year'), DB::raw('count(*) as total'))
                    ->groupBy('year')
                    ->get();

            foreach ($yearlyOrders as $year) {
                echo 'Anno: ' . $year->year . ', Ordini totali: ' . $year->total;
            }
        </p>

        <h6>scegliere grafico e divisione tabelle</h6>
        
        <canvas id="prova"></canvas>

        <canvas id="orders" class="my-5"></canvas>

        <canvas id="orders2" class="my-5"></canvas>
        
       

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const canvas= document.getElementById('prova');
        const orders= document.getElementById('orders');
        const orders2= document.getElementById('orders2');

        new Chart(canvas, {
            type: 'line',
            data: {
                labels: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio'],
                datasets: [
                     {
                     label: 'Totale Ordini',
                     backgroundColor: '#f87979',
                     data: [40, 39, 10, 40, 39, 80, 40]
                     },
                    {
                    label: 'Totale incasso',
                    backgroundColor: 'rgb(4, 91, 98)',
                    data: [30, 20, 30, 10, 9, 4, 10],
                    }
                ]
            },
            
            option: {
                responsive: true,
                maintainAspectRatio: true
            }
        })

        new Chart(orders, {
            type: 'line',
            data: {
                labels: ['Lasagne', 'Carbonara', 'Ragù', 'Costata', 'Maggio', 'Giugno', 'Luglio'],
                datasets: [
                    {
                    label: 'Totale Ordini',
                    backgroundColor: '#f87979',
                    data: [40, 39, 10, 40, 39, 80, 40]
                    },
                ]
            },
            
            option: {
                responsive: true,
                maintainAspectRatio: true
            }
        })

        new Chart(orders2, {
            type: 'radar',
            data: {
                labels: [
                    'Eating',
                    'Drinking',
                    'Sleeping',
                    'Designing',
                    'Coding',
                    'Cycling',
                    'Running'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [65, 59, 90, 81, 56, 55, 40],
                    fill: true,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    pointBackgroundColor: 'rgb(255, 99, 132)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(255, 99, 132)'
                }, {
                    label: 'My Second Dataset',
                    data: [28, 48, 40, 19, 96, 27, 100],
                    fill: true,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(54, 162, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true
            }
        })


        
    </script>

@endsection