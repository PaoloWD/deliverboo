@extends('layouts.app')

@section('content')
    <div class="home-jumbotron fix py-5 overflow-hidden">


        <div class="container shadow  p-5 presentation-banner h-100  rounded-4">
            <div class="row h-100 overflow-auto justify-content-center">
                <h1 class="custom-color text-center col-12">I tuoi piatti!</h1>
                @foreach ($dishes as $dish)
                    <div class="col-12 col-md-6 col-lg-4 pb-3 ">
                        <div class="py-5 h-100">
                            <div class="card shadow dashboard mt-4 p-4 h-100 rounded-4">
                                <div class="card-title title-dishes text-center">
                                    <h2> {{ $dish->name }} </h2>
                                </div>
                                <div class="card-img-top text-center pb-3">
                                    @if (str_contains($dish->image, 'https'))
                                        <img class="card-img-top dish-img" src="{{ $dish->image }}" alt=""
                                            style="height:230px">
                                    @else
                                        <img class="card-img-top dish-img" src="{{ asset('storage/' . $dish->image) }}"
                                            alt="" style="height:230px">
                                    @endif
                                </div>
                                <div class="card-text flex-grow-1">
                                    <p><strong>Descrizione:</strong> {{ $dish->description }} </p>
                                    <p><strong>Ingredienti:</strong> {{ $dish->ingredients }} </p>
                                    <p><strong>Prezzo:</strong> {{ number_format($dish->price, 2, ',', '.') }} €</p>
                                </div>
                                <div class="d-flex gap-2  justify-content-center">
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
                                        <button class="btn btn-success btn-custom ">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>


    </div>
    <script>
        const forms = document.querySelectorAll(".delete-form");
        forms.forEach((form) => {
            form.addEventListener("submit", function(e) {
                e.preventDefault();
                const conferma = confirm("Sicuro?");
                if (conferma === true) {
                    form.submit();
                }
            })
        })
    </script>
@endsection
