@extends('layouts.app')
@section('content')
<div class="bg-dashboard">
    <div class="home-jumbotron fix py-5 overflow-hidden">
        <div class="container shadow rounded-4 p-5 presentation-banner h-100 overflow-auto">
            <div class="container">
                {{-- <a class="color-transparent" href="{{ route('categories.create') }}">
                    <button class="btn  btn-success btn-custom shadow">
                        Aggiungi categoria
                    </button>
                </a>
                <a class="color-transparent" href="{{ route('statistics') }}">
                    <button class="btn ms-2 btn-custom shadow">
                        Vedi le tue statistiche
                    </button>
                </a> --}}
                <div class="mt-3 mb-3">
                    <form action="{{ route('categories.search')}}" method="GET">
                        <div class="row justify-content-end">
                            <div class="col-4">
                                <div class="my-border d-flex p-2 rounded-5">
                                    <input class="form-control d-inline border-0" type="text" name="name" placeholder="Nome della categoria">
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
                        <th scope="col">Nome Categoria</th>
                        <th scope="col">Modifica</th>
                        <th scope="col">Elimina</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>
                            <h6 class="py-3">{{$category->name}}</h6>
                        </td>
                        <td>
                            <a href={{route('categories.edit', $category->id)}}>
                                <button class="btn btn-custom"> 
                                    <i class="fa-solid fa-pen"></i>  
                                </button>
                            </a>
                        </td>
                        <td>
                           
                            <form action="{{route('categories.destroy', $category->id)}}" method="POST" class="delete-form d-inline-block">
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

            <div class="d-flex justify-content-center mt-5">
                <a class="link-show " href={{ route('dashboard') }}>
                    <button class="btn btn-success btn-custom shadow">
                        Torna alla tua dashboard
                    </button>
                </a>    
            </div>

        </div>
    </div>
</div>
@endsection