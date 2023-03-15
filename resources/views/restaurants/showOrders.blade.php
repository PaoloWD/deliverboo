@extends('layouts.app')

@section('content')
    <div class="bg-dashboard pt-5">

        <div class="container py-5 h-100 ">
            <div class="container-form rounded-4">
                <h1 class="fw-bolder custom-color">Ordini ricevuti</h1>
                <table class="table table-striped table-hover mt-3">
                    <thead class="text-white custom-bg">
                        <tr class="text-center">
                            <th scope="col">ID </th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Indirizzo</th>
                            <th scope="col">Numero di telefono</th>
                            <th scope="col">Email</th>
                            <th scope="col">Totale ordine</th>
                            <th scope="col">Data</th>
                            <th scope="col">Dettagli ordine</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order )
                        <tr class="text-center">
                            <td>
                                <h6 class="py-3">Ordine #{{ $order->id }}</h6>
                            </td>
                            <td>
                                <h6 class="py-3">{{$order->customer_name}}</h6>
                            </td>
                            <td>
                                <h6 class="py-3">{{$order->customer_address}}</h6>
                            </td>
                            <td>
                                <h6 class="py-3">{{$order->customer_phone}}</h6>
                            </td>
                            <td>
                                <h6 class="py-3">{{$order->customer_email}}</h6>
                            </td>    
                            <td>
                                <h6 class="py-3">{{ number_format($order->total_order, 2, ',', '.') }} €</h6>
                            </td>
                            <td>
                                <h6 class="py-3">{{$order->created_at}}</h6>
                            </td>    
                            <td>
                                <button type="button" class="btn btn-custom p-2 mt-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"> Vedi dettagli </button>
                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                                    <div class="offcanvas-header">
                                        <h2 class="offcanvas-title custom-color fw-bold" id="offcanvasLabel">Piatti Ordinati</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body text-start">
                                        @foreach($orders as $order)
                                            <div>
                                                <h3 class="custom-color fw-bold">Ordine #{{ $order->id }}</h3>
                                                <ul>
                                                    @foreach($order->dishes->groupBy('id') as $dish)
                                                        <li> <span class="fw-bold">Nome:</span> {{ $dish->first()->name }} <span class="fw-bold">Quantità:</span> {{ $dish->count() }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach  
                    </tbody>
                </table> 
            </div>
        </div>
    </div>

<script>
</script>
@endsection
