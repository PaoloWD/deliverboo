@extends('layouts.app')
@section('content')
    <div class="bg-dashboard">
        <div class="home-jumbotron fix py-5 overflow-hidden">
            <div class="container shadow rounded-4 p-5 presentation-banner h-100 overflow-auto">
                <div class="">
                    <h2 class="py-2 custom-color">
                        Welcome <strong>{{ Auth::user()->name }}</strong>!
                    </h2>
                    <h5 class="py-2 custom-color"> This is your personal page!</h5>
                </div>
                <div>
                    <div class="py-5">
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
                                <img src="{{ asset('storage/' . $restaurant->image) }}" class="card-img" alt="..."
                                    style="height: 200px">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">{{ $restaurant->name }}</h3>
                                    <div class="position-absolute" style="right:20px; bottom:20px">

                                        <a href="#"> 
                                            <button class="btn btn-sm btn-success btn-custom shadow">
                                                View Your Resaturant <i class="fa-solid fa-magnifying-glass"></i> 
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mb-3">

                                <a href="{{ route('dishes.create') }}"> 
                                    <button class="btn btn-success btn-custom shadow">
                                        Create your Dish <i class=" ps-3 fa-solid fa-plus"></i> 
                                    </button>
                                </a>
                            </div>

                            <table class="table">
                                <thead>
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Image</th>
                                    <th scope="col">Owner</th>
                                    <th scope="col">Restaurant Name</th>
                                    <th scope="col">VAT</th>
                                    <th scope="col">Categories</th>
                                    

                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row" class="py-3">1</th>
                                    <td>
                                        <img class="card-img-top" src="{{ asset('storage/' . $restaurant->image) }}" alt="restaurant image" style="height:51px; width:51px">
                                    </td>
                                    <td><h6 class="py-3">{{$restaurant->user_id}}</h6></td>
                                    <td><h6 class="py-3">{{$restaurant->name}}</h6></td>
                                    <td><h6 class="py-3">{{$restaurant->vat}}</h6></td>
                                    <td>
                                        @foreach ($restaurant->categories as $categories)
                                            <div class="badge text-bg-danger custom-bg rounded-pill my-3">
                                                {{$categories->name}}
                                            </div>
                                        @endforeach</td>
                                    
                                  </tr>
                                </tbody>
                              </table>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
