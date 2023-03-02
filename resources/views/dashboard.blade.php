@extends('layouts.app')
@section('content')
<div class="bg-dashboard">
    <div class="container">
        <h2 class="fs-4 pt-4 text-white">
            <div class="text-white">Benvenuto {{Auth::user()->name}}</div>
        </h2>
            <div>
                <div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if ($restaurant?->user_id === Auth::user()->id)
                    <img src="{{ asset('storage/' . $restaurant->image) }}" alt="">
                    @foreach ($restaurant->categories as $categories )
                        {{$categories->name}}
                    @endforeach
                    Nome del ristorante: {{$restaurant->name}}
                    P. Iva del ristorante: {{$restaurant->vat}}
                    Proprietario del ristorante: {{$restaurant->user_id}}

                    <a class="btn btn-primary" href="{{ route('dishes.create') }}">Aggiungi nuovo piatto</a>
                @else
                <div class="card dashboard text-center ">
                    <h3>{{ __('Create your restaurant profile!') }} </h3>
                <div class="mt-3">
                    <h3>Add your restaurant </h3>
                    <a href="{{ route('restaurants.create') }}"> 
                        <button class="btn btn-success">
                            <i class="fa-solid fa-plus"></i> 
                        </button>
                    </a>
                </div>
            </div>
                @endif
                    
            </div>
        </div>
    </div>
</div>
@endsection
