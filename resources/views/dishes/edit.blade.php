@extends('layouts.app')

@section('content')
@if ($errors->any())
                    <div class="alert alert-danger">
                        I dati inseriti non sono validi:

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
<div class="container py-5">
    <h1>Edit your plate</h1>
        <form action="{{ route('dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        {{-- name-input --}}
        <div class="mb-3">
            <label class="form-label">Nome del Piatto</label>
            <input type="text" 
            class="form-control @error('name') is-invalid @elseif(old('name')) is-valid  @enderror"
            value="{{$dish->name}}"
            name="name">

            @error('name')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>

        {{-- description-input --}}
        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea cols="30" rows="5" 
             name="description"
             class="form-control @error('description') is-invalid @enderror">{{$dish->description}}</textarea>
        </div>

        {{-- ingredients-input --}}
        <div class="mb-3">
          <label class="form-label">Ingredienti</label>
          <input type="text" 
          class="form-control @error('ingredients') is-invalid @elseif(old('ingredients')) is-valid  @enderror"
          value="{{$dish->ingredients}}"
          name="ingredients">

          @error('ingredients')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
          @enderror
        </div>

        {{-- price-input --}}
        <div class="mb-3">
          <label class="form-label">Prezzo</label>
          <input type="number" 
          class="form-control @error('price') is-invalid @elseif(old('price')) is-valid  @enderror"
          value="{{$dish->price}}"
          name="price">

          @error('price')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
          @enderror
      </div>

        {{-- image input --}}
        <div class="mb-3">
            <label class="form-label">Immagine</label>
            <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image">
            @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror 

            <img  class="img-thumbnail" src="{{asset('/dish'. $dish->image)}}" alt="">
          </div>
          
          {{-- visibility input --}}
          
          <div class="mb-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch" name="visibility"
              {{ old('visibility', $dish->visibility) ? 'checked' : '' }} value="1">
            <label class="form-check-label" for="switch">Visibility</label>
          </div>
        <button type="submit" class="btn btn-primary">Save</button>

        <a class="btn btn-warning" href="{{route('dashboard')}}">Return To dish</a>

        </form>
</div>

@endsection