@extends('layouts.app')
@section('content')
<div class="bg-dashboard">
    <div class="home-jumbotron fix py-5 overflow-hidden">
        <div class="container shadow rounded-4 p-5 presentation-banner h-100 overflow-auto">
            <div class="mt-5 mb-3">
                <div class="container text-end">
                    <form action="{{route ('restaurants.search')}}" method="GET">
                        <div class="row justify-content-end">
                            <div class="col-4">
                                <div class="my-border d-flex p-2 rounded-5">
                                    <input class="form-control d-inline border-0" type="text" name="name" placeholder="Nome del ristorante">
                                    <button class="rounded-5 btn btn-custom custom-bg px-4 py-1" type="submit"><i class="fa-solid fa-magnifying-glass  text-white"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead class="custom-bg text-white">
                    <tr>
                        <th scope="col">Immagine</th>
                        <th scope="col">Nome del Ristorante</th>
                        <th scope="col">Partita Iva</th>
                        <th scope="col">Via</th>
                        <th scope="col">Creato il</th>
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
                            <h6 class="py-3">{{$restaurant->name}}</h6>
                        </td>
                        <td>
                            <h6 class="py-3">{{$restaurant->vat}}</h6>
                        </td>
                        <td>
                            <h6 class="py-3">{{$restaurant->address}}</h6>
                        </td>
                        <td>
                            <h6 class="py-3">{{$restaurant->created_at}}</h6>
                        </td>
                        
                    </tr>
                    @endforeach

                    @endif
                </tbody>
            </table> 
        </div>
    </div>
</div>
@endsection