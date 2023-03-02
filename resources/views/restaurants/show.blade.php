@extends('layouts.app')

@section('content')
<div class="bg-dashboard">
    <div class="container">
        <div class="pt-5 text-center">
            <div class="card p-5 rounded-5" style="opacity: 0.95">
                <h1 class="custom-color">This is your restaurant!</h1>
                <div class="card show-restaurant mt-4 p-4">
                    <div class="card-title text-center">
                        <h2></h2>
                    </div>
                    <div class="card-img-top text-center">
                        <img class="img-fluid" src="" alt="">
                    </div>
                    <div class="card-text">
                        <p>Nome del Ristorante: {{$restaurant->name}}</p>
                        <p>VAT: {{$restaurant->vat}}</p>
                        <p>Indirizzo: {{$restaurant->address}}</p>
                        <p>Categorie:
                            @foreach ($restaurant->categories as $categories )
                            <div class="badge text-bg-danger custom-bg rounded-pill my-3 shadow">
                                {{ $categories->name }}
                            </div>
                            @endforeach 
                        </p>
                    </div>
                    <div class="text-center mt-4">
                        <a href="{{ route('dashboard') }}">
                            <button class="btn btn-success btn-custom"> Back to Dashboard </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
