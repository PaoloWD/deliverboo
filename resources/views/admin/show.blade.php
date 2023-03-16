@extends('layouts.app')

@section('content')
<div class="bg-dashboard">
    <div class="container">
        <div class="pt-5 text-center">
            <div class="card p-5 rounded-5" style="opacity: 0.95">
                <h1 class="custom-color">Risultati della ricerca</h1>
                <div class="card show-restaurant mt-4 p-4">
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
                    
                    <div class="text-center mt-4">
                        <a href="{{ route('dashboard') }}">
                            <button class="btn btn-success btn-custom"> Torna al pannello di controllo </button>
                        </a>
                    </div>
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