@extends('layouts.app')

@section('content')
    <div class="home-jumbotron fix py-5 overflow-hidden">


        <div class="container shadow  p-5 presentation-banner h-100  rounded-4">
            <div class="row h-100 overflow-auto justify-content-center">
                <h1 class="custom-color text-center col-12">Your dishes!</h1>
                @foreach ($dishes as $dish)
                <div class="col-12 col-md-3 col-lg-4 pb-3">
                    <div class="card shadow dashboard mt-4 p-4" style="height: 535px;">
                        <div class="card-title text-center">
                            <h2> {{ $dish->name }} </h2>
                        </div>
                        <div class="card-img-top text-center pb-3">
                            <img class="img-fluid" src="{{ asset('storage/' . $dish->image) }}" alt="">
                        </div>
                        <div class="card-text flex-grow-1">
                            <p>Description: {{ $dish->description }} </p>
                            <p>Ingredients: {{ $dish->ingredients }} </p>
                            <p>Price: {{ $dish->price }}€</p>
                        </div>
                        <div class="d-flex gap-2 d-md-inline-block d-lg-flex justify-content-center">
                            <a class="link-show" href="{{ route('dashboard') }}">
                                <button class="btn btn-success btn-custom">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </a>
                            <a class="link-show" href={{ route('dishes.edit', $dish->id) }}>
                                <button class="btn btn-custom"> 
                                    <i class="fa-solid fa-pen"></i>    
                                </button>
                            </a>
                        <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST"
                            class="delete-form d-inline-block">
                            @csrf()
                            @method('delete')
                                <button class="btn btn-success btn-custom mt-md-1 mt-lg-0">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
            @endforeach
            </div>
            
        </div>


    </div>
@endsection
