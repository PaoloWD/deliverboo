@extends('layouts.app')

@section('content')
<div class="bg-dashboard">
    <div class="container">
        <div class="pt-5 text-center">
            <div class="card p-5 rounded-5" style="opacity: 0.95">
                <h1 class="custom-color">Questo è il tuo ristorante!</h1>
                <div class="card show-restaurant mt-4 p-4">
                    <div class="card-title text-center">
                        <h2></h2>
                    </div>
                    <div class="card-img-top text-center">
                        <img class="img-fluid" src="{{ asset('storage/' . $restaurant->image) }}" alt="" style="height:200px" alt="">
                    </div>
                    <div class="card-text">
                        <p><strong>Nome del Ristorante:</strong> {{$restaurant->name}}</p>
                        <p><strong>Partita iva:</strong> {{$restaurant->vat}}</p>
                        <p><strong>Indirizzo:</strong> {{$restaurant->address}}</p>
                        <p><strong>Categorie:</strong>
                            @foreach ($restaurant->categories as $categories )
                            <div class="badge text-bg-danger custom-bg rounded-pill my-3 shadow">
                                {{ $categories->name }}
                            </div>
                            @endforeach 
                        </p>
                    </div>
                    <div class="text-center mt-4">
                        <a href="{{ route('dashboard') }}">
                            <button class="btn btn-success btn-custom"> Torna al pannello di controllo </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
