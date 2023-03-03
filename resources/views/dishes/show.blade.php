@extends('layouts.app')

@section('content')
<div class="bg-dashboard">
    <div class="container">
        <div class="py-5">
            <div class="card shadow p-5 rounded-5" style="opacity: 0.95">
            @foreach ($dishes as $dish)
                <h1 class="custom-color text-center">Your dish!</h1>
                <div class="card shadow dashboard mt-4 p-4">
                    <div class="card-title text-center">
                        <h2> {{$dish->name}} </h2>
                    </div>
                    <div class="card-img-top text-center pb-3">
                        <img class="img-fluid" src="" alt="">
                    </div>
                    <div class="card-text">
                        <p>Description: {{$dish->description}} </p>
                        <p>Ingredients: {{$dish->ingredients}} </p>
                        <p>Price: {{$dish->price}}€</p>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('dashboard') }}">
                            <button class="btn btn-success btn-custom"> Back to Dashboard </button>
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <a href={{route('dishes.edit', $dish->id)}}>
                            <button class="btn btn-success btn-custom"> Modifica </button>
                        </a>
                    </div>
                    <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST" class="delete-form d-inline-block">
                        @csrf()
                        @method('delete')
                
                        <button class="btn btn-danger">
                          X
                        </button>
                      </form>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
