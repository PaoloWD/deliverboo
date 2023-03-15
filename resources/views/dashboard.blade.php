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

                        {{-- <div class="container">
                                    
                                    @if ($restaurant?->user_id === Auth::user()->id)

                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Owner</th>
                                            <th scope="col">Restaurant Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">VAT</th>
                                            <th scope="col">Categories</th>
                                            

                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td><h4 class="pt-1">{{$restaurant->user_id}}</h4></td>
                                            <td><h4 class="pt-1">{{$restaurant->name}}</h4></td>
                                            <td>
                                                <img class="card-img-top" src="{{ asset('storage/' . $restaurant->image) }}" alt="restaurant image"></td>
                                            <td><h4 class="pt-1">{{$restaurant->vat}}</h4></td>
                                            <td>
                                                @foreach ($restaurant->categories as $categories)
                                                    <div class="badge text-bg-danger costum-bg rounded-pill my-3">
                                                        {{$categories->name}}
                                                    </div>
                                                @endforeach</td>
                                            
                                          </tr>
                                        </tbody>
                                      </table>

                                      <div class="mt-5">

                                        <a href="{{ route('dishes.create') }}"> 
                                            <button class="btn btn-success btn-custom">
                                                Create your Dish <i class=" ps-3 fa-solid fa-plus"></i> 
                                            </button>
                                        </a>
                                    </div>
                                    @else
                                        <div class="card dashboard text-center ">
                                            <h3>{{ __('Create your restaurant profile!') }} </h3>
                                        <div class="mt-3">
                                            <h3>Add your restaurant </h3>
                                            <a href="{{ route('restaurants.create') }}"> 
                                                <button class="btn btn-success mt-5 btn-custom">
                                                    <i class="fa-solid fa-plus"></i> 
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                              
                        </div> --}}
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
                                    @if($dishes)
                                        @foreach ($dishes as $dish)
                                            <div class="position-absolute" style="right:200px; bottom:20px">
                                                <a href="{{ route('dishes.show', $dish->id) }}">
                                                    <button class="btn btn-sm btn-success btn-custom shadow">
                                                        I tuoi piatti <i class="fa-solid fa-magnifying-glass ms-2"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                    <a href="{{ route('restaurants.showOrders', $restaurant->id) }}">
                                        <button class="btn btn-success btn-custom shadow">
                                            Riepilogo ordini <i class=" ps-3 fa-solid fa-plus"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
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
                            

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Immagine</th>
                                        <th scope="col">Nome del piatto</th>
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

                            <div class="container text-center">
                                <a href="{{ route('chart') }}">
                                    <button class="btn btn-success mt-5 btn-custom">
                                        Vedi le tue statistiche
                                    </button>
                                </a>
                            </div>
                        @elseif (Auth::user()->role === 'admin')
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nome Categoria</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        <h6 class="py-3">{{ $category->name }}</h6>
                                    </td>
                                    <td>
                                        <a href={{route('categories.edit', $category->id)}}>
                                            <button class="btn btn-custom"> 
                                                <i class="fa-solid fa-pen"></i>  
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="delete-form d-inline-block">
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
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Immagine</th>
                                    <th scope="col">Nome del Ristorante</th>
                                    <th scope="col">Partita Iva</th>
                                    <th scope="col">Via</th>
                                    <th scope="col">Proprietario</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @if(isset($restaurants) )
                                @foreach ($restaurants as $restaurant)
                                <tr>
                                    @if(str_contains($restaurant->image, "https"))
                                    
                                    <td>
                                        <img class="card-img-top restaurant-img" src="{{$restaurant->image}}"
                                        alt="" style="height:51px; width:51px">
                                    </td>
                                    @else
                                    <td>
                                        <img class="card-img-top restaurant-img" src="{{ asset('storage/' . $restaurant->image) }}"
                                        alt="" style="height:51px; width:51px">
                                    </td>
                                    @endif
                                   
                                    
                                    <td>
                                        <h6 class="py-3">{{ $restaurant->name }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{$restaurant->vat}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{$restaurant->address }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{$restaurant->id}}</h6>
                                    </td>
                                    <td>
                                        <a href={{route('categories.edit', $restaurant->id)}}>
                                            <button class="btn btn-custom"> 
                                                <i class="fa-solid fa-pen"></i>  
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('categories.destroy', $restaurant->id) }}" method="POST" class="delete-form d-inline-block">
                                            @csrf()
                                            @method('delete')
                                    
                                            <button class="btn btn-success btn-custom">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                          </form>
                                    </td>
                                </tr>
                                @endforeach

                                @endif
                            </tbody>
                        </table> 
                        
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
