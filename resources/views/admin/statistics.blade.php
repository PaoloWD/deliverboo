@extends('layouts.app')

@section('content')

<div class="container pb-5">
    <h2 class="custom-color py-5">Statistiche Generali:</h2>
    <canvas id="myChart"></canvas>
    <div class="d-flex justify-content-center mt-5">
        <a class="link-show " href={{ route('dashboard') }}>
            <button class="btn btn-success btn-custom shadow">
                Torna alla tua dashboard
            </button>
        </a>    
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var restaurantCounts=  {!! json_encode($restaurantCounts) !!};
    var totalsByMonth = {!! json_encode($totalsByMonth) !!};
    var months = [];
    var counts = [];
    var sums = [];  
 
    restaurantCounts.forEach(function(item){
        sums.push(item.count);
    })
    
    totalsByMonth.forEach(function(item){
        months.push(item.month);
        counts.push(item.total);
        // sums.push(item.sum);
    }); 
    
    

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: months,
            datasets: [{
                label: 'Incasso',
                data: counts,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'Ristoranti iscritti',
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