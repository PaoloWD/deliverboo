@extends('layouts.app')

@section('content')
<div class="bg-dashboard pt-5">

    <div class="container py-5 h-100 ">
        <div class="container-form rounded-5 shadow h-100 ">
            <div class="h-100 overflow-auto px-3">
                <h1 class="custom-color mb-3">Crea un nuovo piatto</h1>
            
            <form action="{{ route('dishes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                {{-- name-input --}}
                <div class="mb-3">
                    <label class="form-label">Nome:</label>
                    <input type="text"
                    class="form-control @error('name') is-invalid @elseif(old('name')) is-valid  @enderror"
                    value="{{ $errors->has('name') ? '' : old('name') }}" name="name" required>
                    
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Description-input --}}
                <div class="mb-3">
                    <label class="form-label">Descrizione:</label>
                    <input type="text"
                    class="form-control @error('description') is-invalid @elseif(old('description')) is-valid  @enderror"
                    value="{{ $errors->has('description') ? '' : old('description') }}" name="description" required>
                    
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                {{-- Ingredients-input --}}
                <div class="mb-3">
                    <label class="form-label">Ingredienti:</label>
                    <input type="text"
                    class="form-control @error('ingredients') is-invalid @elseif(old('ingredients')) is-valid  @enderror"
                    value="{{ $errors->has('ingredients') ? '' : old('ingredients') }}" name="ingredients" required>
                    
                    @error('ingredients')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                {{-- Price-input --}}
                <div class="mb-3">
                    <label class="form-label">Prezzo:</label>
                    <input type="number" step="0.01" pattern="[0-9]+(\.[0-9]{1,2})?"
                    class="form-control @error('price') is-invalid @elseif(old('price')) is-valid  @enderror"
                    value="{{ $errors->has('price') ? '' : old('price') }}" name="price" required>
                    
                    @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Cover-image-input --}}
                <div class="mb-3">
                    <label class="form-label">Immagine:</label>
                    <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image" required>
                </div>
                
                {{-- Visibility-input --}}
                <div class="mb-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="switch" name="visibility"
                      {{ old('visibility', 1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="switch">Visibilità</label>
                  </div>

                <button type="submite" class="btn btn-primary btn-custom">Salva</button>
            </div>
            </div>
            
        </div>
    </div>
        @endsection
