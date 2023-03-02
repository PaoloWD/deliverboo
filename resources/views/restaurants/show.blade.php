@extends('layouts.app')

@section('content')
<div class="bg-dashboard">
    <div class="container">
        <div class="pt-4 text-center">
            <div class="card" style="opacity: 0.8">
                <h1>You have created your restaurant!</h1>
            </div>
        </div>
        <div class="card show-restaurant mt-4 p-4">
            <div class="card-title text-center">
                <h2></h2>
            </div>
            <div class="card-img-top text-center">
                <img class="img-fluid" src="" alt="">
            </div>
            <div class="card-text">
                <p>VAT: {{$restaurant->vat}}</p>
                <p>Address: {{$restaurant->address}}</p>
                <p>Categorie:
                    @foreach ($restaurant->categories as $categories )
                        {{$categories->name}}
                    @endforeach 
                </p>
            </div>
            <div class="text-center">
                <a href="{{ route('dashboard') }}">
                    <button class="btn btn-success"> torna indietro </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
