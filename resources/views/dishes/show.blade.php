@extends('layouts.app')

@section('content')
<div class="bg-dashboard">
    <div class="container">
        <div class="py-5">
            <div class="card shadow p-5 rounded-5" style="opacity: 0.95">
                <h1 class="custom-color text-center">Your dish!</h1>
                <div class="card shadow dashboard mt-4 p-4">
                    <div class="card-title text-center">
                        <h2> - nome del piatto - </h2>
                    </div>
                    <div class="card-img-top text-center pb-3">
                        <img class="img-fluid" src="" alt="">
                    </div>
                    <div class="card-text">
                        <p>Description: </p>
                        <p>Ingredients: </p>
                        <p>Price: €</p>
                    </div>
                    <div class="text-center mt-3">
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
