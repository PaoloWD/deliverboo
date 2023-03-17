@extends('layouts.app')

@section('content')
    <div class="bg-dashboard py-5 ">
        <div class="container h-100 overflow-auto">
            <div class="container-form rounded-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="fw-bolder custom-color">Ordini ricevuti</h1>
                    <a class="btn btn-primary btn-custom shadow" href="{{ route('dashboard') }}">Torna alla Dashboard</a>
                </div>
                <table class="table table-striped table-hover mt-3">
                    <thead class="text-white custom-bg">
                        <tr class="text-center">
                            <th scope="col">Stato</th>
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
                        @foreach ($orders as $order)
                            @if ($order->status === 'In lavorazione' || $order->status === 'OK')
                                <tr class="text-center">
                                    <td>
                                        <form action="{{route('restaurants.showOrders', $order)}}" method="POST" class="status-check">
                                            @csrf
                                            @method('PUT')
                                            
                                            {{-- <input class="form-check-input py-2 px-2 mt-3" type="checkbox" name=""
                                                value="{{ $order->id }}" id="check-{{ $order->id }}"> --}}
                                                <i class="fa-solid fa-circle-xmark py-2 px-2 mt-1 fs-2"></i>
                                        </form>
                                    </td>
                                    <td>
                                        <h6 class="py-3">Ordine #{{ $order->id }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{ $order->customer_name }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{ $order->customer_address }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{ $order->customer_phone }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{ $order->customer_email }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{ number_format($order->total_order, 2, ',', '.') }} €</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{ $order->created_at->format('d/m/Y H:i') }}</h6>
                                    </td>
                                    <td>
                                        <button class="btn btn-custom p-2 mt-2" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseExample{{ $order->id }}" aria-expanded="false"
                                            aria-controls="collapseExample">Vedi dettagli</button>

                                    </td>
                                </tr>
                                <tr class="collapse pt-3" id="collapseExample{{ $order->id }}">
                                    <td><span class="fw-bold">Nome:</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="fw-bold">Quantità:</span> </td>
                                </tr>
                                @foreach ($order->dishes->groupBy('id') as $dish)
                                    <tr class="collapse pt-3" id="collapseExample{{ $order->id }}">
                                        <td>
                                            {{ $dish->first()->name }}
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td> </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{ $dish->count() }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>


                <div class="my-5"></div>



                <h1 class="fw-bolder custom-color">Ordini completati</h1>
                <table class="table table-striped table-hover mt-3">
                    <thead class="text-white custom-bg">
                        <tr class="text-center">
                            <th scope="col">Stato</th>
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
                        @foreach ($orders as $order)
                            @if ($order->status === 'Completato')
                                <tr class="text-center">
                                    <td>

                                        <form action="{{route('restaurants.showOrders', $order)}}" method="POST" class="status-check">
                                            @csrf
                                            @method('PATCH')
                                            <i class="fa-solid fa-circle-check py-2 px-2 mt-1 fs-2"></i>
                                            {{-- <input class="form-check-input py-2 px-2 mt-3" type="checkbox" name=""
                                            value="{{ $order->id }}" id="check-{{ $order->id }}" checked> --}}
                                        </form>
                                        
                                    </td>
                                    <td>
                                        <h6 class="py-3">Ordine #{{ $order->id }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{ $order->customer_name }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{ $order->customer_address }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{ $order->customer_phone }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{ $order->customer_email }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{ number_format($order->total_order, 2, ',', '.') }} €</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{ $order->created_at }}</h6>
                                    </td>
                                    <td>
                                        <button class="btn btn-custom p-2 mt-2" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseExample{{ $order->id }}" aria-expanded="false"
                                            aria-controls="collapseExample">Vedi dettagli</button>

                                    </td>
                                </tr>
                                <tr class="collapse pt-3" id="collapseExample{{ $order->id }}">
                                    <td><span class="fw-bold">Nome:</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="fw-bold">Quantità:</span> </td>
                                </tr>
                                @foreach ($order->dishes->groupBy('id') as $dish)
                                    <tr class="collapse pt-3" id="collapseExample{{ $order->id }}">
                                        <td>
                                            {{ $dish->first()->name }}
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td> </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{ $dish->count() }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>


        const pippo = document.querySelectorAll('.status-check');

        pippo.forEach(form => {
            form.addEventListener('click', () => {
                form.submit()
            })
        })


    </script>
@endsection