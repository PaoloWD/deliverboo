@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center my-5">
            <h2 class="custom-color">Statistiche dei tuoi ordini</h2>
            <a class="link-show " href={{ route('dashboard') }}>
                <button class="btn btn-success btn-custom shadow">
                    Torna alla dashboard
                </button>
            </a>    
        </div>
        <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var chartData = {!! json_encode($chartData) !!};
        var months = [];
        var counts = [];
        var sums = [];      
        chartData.forEach(function(item){
            months.push(item.month);
            counts.push(item.count);
            sums.push(item.sum);
        });      
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: months,
                datasets: [{
                    label: 'Conteggio ordini',
                    data: counts,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Incasso',
                    data: sums,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>
@endsection