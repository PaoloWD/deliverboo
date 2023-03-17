@extends('layouts.app')
@section('content')
<div class="bg-dashboard">
    <div class="home-jumbotron fix py-5 overflow-hidden">
        <div class="container shadow rounded-4 p-5 presentation-banner h-100 overflow-auto">
            <div class="container mt-5 mb-3">
                <form action="{{route('users.search')}}" method="GET">
                    <div class="row justify-content-end">
                        <div class="col-4">
                            <div class="my-border d-flex p-2 rounded-5">
                                <input class="form-control d-inline border-0" type="text" name="name" placeholder="Email dell'utente">
                                <button class="rounded-5 btn btn-custom custom-bg px-4 py-1" type="submit"><i class="fa-solid fa-magnifying-glass  text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-striped table-hover">
                <thead class="custom-bg text-white">
                    <tr>
                        <th scope="col">Nome Utente</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Creato il</th>
                        <th scope="col">ID</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($users) )
                        @foreach ($users as $user)
                            @if(!$user->role)
                                <tr>
                                    <td>
                                        <h6 class="py-3">{{$user->name}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{$user->email}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{$user->created_at}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="py-3">{{$user->id}}</h6>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endif
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