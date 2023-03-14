@extends('layouts.app')

@section('content')
    <div class="bg-dashboard pt-5">

        <div class="container py-5 h-100 ">
            <div class="container-form rounded-4">
                <h1 class="fw-bolder custom-color">Ordini ricevuti</h1>
                <table class="table table-striped table-hover">
                    <thead class="text-white custom-bg">
                        <tr>
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
                        <tr>
                        @foreach ($orders as $order )
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
                                <button class="btn btn-custom mt-2">Vedi dettagli</button>
                            </td>
                        </tr>
                            @endforeach
                            
                    </tbody>
                </table> 
                
                <table class="table table-striped table-hover">
                    <thead class="text-white custom-bg">
                        <tr>
                            <th scope="col" class="prova">Nome</th>
                            <th scope="col">Quantità</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h6 class="py-3">Nome</h6>
                            </td>
                            <td>
                                <h6 class="py-3">quantità</h6>
                            </td>
                        </tr>
                            
                    </tbody>
                </table> 
            </div>

        </div>
    </div>

<script>



</script>
@endsection
