@extends('layouts.app')
@section('content')
    <div class="bg-dashboard">
        <div class="home-jumbotron fix py-5 overflow-hidden">
            <div class="container shadow rounded-4 p-5 presentation-banner h-100 overflow-auto">
                <div class="">
                    <h2 class="py-2 custom-color">
                        Ciao <strong>{{ Auth::user()->name }}</strong>!
                    </h2>
                    <h5 class="custom-color">  Questa è la tua pagina personale!</h5>
                  
                </div>
                <div>
                    <div class="py-3">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if ($restaurant?->user_id === Auth::user()->id)
                            <div class="card text-bg-dark shadow">
                                @if(str_contains($restaurant->image, "https"))
                                    <img class="card-img-top dish-img" src="{{$restaurant->image}}"
                                    alt="" style="height: 200px">
                                @elseif (!$restaurant->image)
                                <img class="card-img-top  restaurant-img" src="https://www.lerocce.com/wp-content/uploads/2019/01/terrazza_ulivi.jpg" alt="" style="height: 200px">
                                @else  
                                    <img src="{{ asset('storage/' . $restaurant->image) }}" class="card-img restaurant-img" alt="..."
                                    style="height: 200px">
                                @endif

                                <div class="card-img-overlay">
                                    <h3 class="card-title">{{ $restaurant->name }}</h3>
                                    <div class="position-absolute" style="right:20px; bottom:20px">

                                        <a href="{{ route('restaurants.show', $restaurant->id) }}">
                                            <button class="btn btn-sm btn-success btn-custom shadow">
                                                Il tuo ristorante <i class="fa-solid fa-magnifying-glass ms-2"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="position-absolute d-none d-md-block" style="right:350px; bottom:20px">
                                        <div class="">
                                            <a href="{{ route('chart', $restaurant->id) }}">
                                                <button class="btn btn-sm btn-success btn-custom shadow">
                                                    Statistiche <i class="fa-solid fa-magnifying-glass ms-2"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    @if($dishes)
                                        @foreach ($dishes as $dish)
                                            <div class="position-absolute d-none d-md-block" style="right:200px; bottom:20px">
                                                <a href="{{ route('dishes.show', $dish->id) }}">
                                                    <button class="btn btn-sm btn-success btn-custom shadow">
                                                        I tuoi piatti <i class="fa-solid fa-magnifying-glass ms-2"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="d-none d-md-block">
                                        <a href="{{ route('restaurants.showOrders', $restaurant->id) }}">
                                            <button class="btn btn-success btn-custom shadow">
                                                Riepilogo ordini
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-md-flex justify-content-between">
                                <div class="mt-5 mb-3">

                                    <a href="{{ route('dishes.create') }}">
                                        <button class="btn btn-success btn-custom shadow">
                                            Crea il tuo piatto <i class=" ps-3 fa-solid fa-plus"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="mt-5 mb-3">
                                    <form action="{{ route('dishes.search') }}" method="GET">
                                        <input type="text" name="name" placeholder="Cerca nome del piatto">
                                        <button type="submit" class="btn btn-success btn-custom shadow">Cerca</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-md-none col-12 mt-2">
                                    <a href="{{ route('restaurants.showOrders', $restaurant->id) }}">
                                        <button class="btn btn-success w-100 btn-custom shadow">
                                            Riepilogo ordini
                                        </button>
                                    </a>
                                </div>
                                <div class="d-md-none col-12 mt-2">
                                    <a href="{{ route('chart', $restaurant->id) }}">
                                        <button class="btn btn-sm btn-success btn-custom w-100 shadow">
                                            Statistiche
                                        </button>
                                    </a>
                                </div>
                                <div class="d-md-none col-12 ">
                                    <div class="mt-2">
                                        <a href="{{ route('dishes.create') }}">
                                            <button class="btn btn-success btn-custom w-100 shadow">
                                                Crea il tuo piatto <i class=" ps-3 fa-solid fa-plus"></i>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Immagine</th>
                                        <th scope="col">Nome del piatto</th>
                                        <th scope="col">Tipologia</th>
                                        <th scope="col">Descrizione</th>
                                        <th scope="col">Ingredienti</th>
                                        <th scope="col">Prezzo</th>
                                        <th scope="col">Visibilità</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dishes as $dish)
                                    <tr>
                                        @if(str_contains($dish->image, "https"))
                                        
                                        <td>
                                            <img class="card-img-top dish-img" src="{{$dish->image}}"
                                            alt="" style="height:51px; width:51px">
                                        </td>
                                        @else
                                        <td>
                                            <img class="card-img-top dish-img" src="{{ asset('storage/' . $dish->image) }}"
                                            alt="" style="height:51px; width:51px">
                                        </td>
                                        @endif
                                       
                                        
                                        <td>
                                            <h6 class="py-3">{{ $dish->name }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="py-3">{{ $dish->type }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="py-3">{{Str::limit($dish->description, 15)}}</h6>
                                        </td>
                                        <td>
                                            <h6 class="py-3">{{Str::limit($dish->ingredients, 20) }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="py-3">{{ number_format($dish->price, 2, ',', '.') }} €</h6>
                                        </td>                                         
                                        <td>
                                            @if($dish->visibility === 0)
                                                <h6 class="py-3 text-center"><i class="fa-solid fa-eye-slash "></i></h6>
                                            @else
                                                <h6 class="py-3 text-center"><i class="fa-solid fa-eye "></i></h6>
                                            @endif
                                        </td>
                                        <td>
                                            <a href={{route('dishes.edit', $dish->id)}}>
                                                <button class="btn btn-custom"> 
                                                    <i class="fa-solid fa-pen"></i>  
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST" class="delete-form d-inline-block">
                                                @csrf()
                                                @method('delete')
                                        
                                                <button class="btn btn-success btn-custom">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                              </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> 

                            
                        @elseif (Auth::user()->role === 'admin')

                        <div class="container">

                            <div class="row g-3 mt-5">
                                {{-- statistiche --}}
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                  <div class="card custom-bg shadow">
                                    <div class="card-body text-center">
                                      <h3 class="card-title text-white">Visualizzazione statistiche</h3>
                                      <div class="d-none d-lg-block">
                                        <a class="color-transparent" href="{{ route('statistics') }}">
                                          <button class="btn custom-color shadow" style="background-color: white">Vedi le tue statistiche</button>
                                        </a>
                                      </div>
                                      <div class="d-lg-none">
                                        <a class="color-transparent" href="{{ route('statistics') }}">
                                          <button class="btn custom-color shadow" style="background-color: white"><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- categorie --}}
                                <div class="col-sm-6">
                                  <div class="card shadow">
                                    <div class="card-body text-center">
                                      <h3 class="card-title">Gestione categorie</h3>
                                      <div class="d-none d-lg-block">
                                          <a class="color-transparent" href="{{ route('categories.create') }}">
                                            <button class="btn btn-success btn-custom shadow mt-1">
                                                Aggiungi categoria
                                            </button>
                                        </a>
                                        <a class="color-transparent" href="{{ route('index.categories') }}">
                                            <button class="btn ms-2 btn-custom shadow mt-1">
                                                Vedi le categorie esistenti
                                            </button>
                                        </a>
                                      </div>
                                      <div class="d-lg-none">
                                        <a class="color-transparent" href="{{ route('categories.create') }}">
                                          <button class="btn btn-success btn-custom shadow">
                                            <i class="fa-solid fa-plus"></i>
                                          </button>
                                      </a>
                                      <a class="color-transparent" href="{{ route('index.categories') }}">
                                          <button class="btn ms-2 btn-custom shadow ">
                                            <i class="fa-solid fa-eye"></i>
                                          </button>
                                      </a>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- ristoranti --}}
                                <div class="col-sm-6">
                                    <div class="card shadow">
                                      <div class="card-body text-center">
                                        <h3 class="card-title">Gestione ristoranti</h3>
                                        <div class="d-none d-lg-block">
                                            <a class="color-transparent" href="{{ route('index.restaurants') }}">
                                                <button class="btn btn-custom shadow">
                                                    Vedi i ristoranti registrati
                                                </button>
                                            </a>
                                        </div>
                                        <div class="d-lg-none">
                                            <a class="color-transparent" href="{{ route('index.restaurants') }}">
                                                <button class="btn btn-custom shadow">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                            </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  {{-- ristoratori --}}
                                  <div class="col-sm-6">
                                      <div class="card custom-bg shadow">
                                          <div class="card-body text-center">
                                              <h3 class="card-title text-white">Gestione ristoratori</h3>
                                              <div class="d-none d-lg-block">
                                                  <a class="color-transparent" href="{{ route('index.users') }}">
                                                      <button class="btn custom-color shadow" style="background-color: white">
                                                          Vedi i ristoratori registrati
                                                      </button>
                                                  </a>
                                              </div>
                                              <div class="d-lg-none">
                                                <a class="color-transparent" href="{{ route('index.users') }}">
                                                    <button class="btn custom-color shadow" style="background-color: white">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            </div>

                        @else
                            <div class="card dashboard shadow text-center ">
                                <h3>{{ __('Crea il profilo del tuo ristorante!') }} </h3>
                                <div class="mt-3">
                                    <h3>Aggiungi il tuo ristorante!</h3>
                                    <a href="{{ route('restaurants.create') }}">
                                        <button class="btn btn-success mt-5 btn-custom">
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
