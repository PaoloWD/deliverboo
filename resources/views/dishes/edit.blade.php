@extends('layouts.app')

@section('content')

    <div class="bg-dashboard py-5">
        <div class="container h-100 overflow-auto">
            <div class="container-form rounded-5 shadow h-100 ">
              <div class="h-100 overflow-auto px-3">
                <h1 class="custom-color">Modifica il tuo piatto</h1>
                <form action="{{ route('dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    {{-- name-input --}}
                    <div class="mb-3">
                        <label class="form-label">Nome:</label>
                        <input type="text"
                            class="form-control @error('name') is-invalid @elseif(old('name')) is-valid  @enderror"
                            value="{{ $dish->name }}" name="name" required>

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- description-input --}}
                    <div class="mb-3">
                        <label class="form-label">Descrizione:</label>
                        <textarea cols="30" rows="5" name="description"
                            class="form-control @error('description') is-invalid @enderror" required>{{ $dish->description }}</textarea>
                            @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>

                    {{-- ingredients-input --}}
                    <div class="mb-3">
                        <label class="form-label">Ingredienti:</label>
                        <input type="text"
                            class="form-control @error('ingredients') is-invalid @elseif(old('ingredients')) is-valid  @enderror"
                            value="{{ $dish->ingredients }}" name="ingredients" required>

                        @error('ingredients')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- price-input --}}
                    <div class="mb-3">
                        <label class="form-label">Prezzo:</label>
                        <input type="number" step="0.01" pattern="[0-9]+(\.[0-9]{1,2})?"
                            class="form-control @error('price') is-invalid @elseif(old('price')) is-valid  @enderror"
                            value="{{ $dish->price }}" name="price" required>

                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- image input --}}
                    <div class="mb-3">
                        <label class="form-label">Immagine:</label>
                        <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image" required>
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- <img class="img-thumbnail" src="{{ asset('/dish' . $dish->image) }}" alt=""> --}}
                    </div>

                    {{-- visibility input --}}

                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switch" name="visibility"
                            {{ old('visibility', $dish->visibility) ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="switch">Visibilità</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-custom">Salva</button>

                    <a class="btn btn-primary btn-custom" href="{{ route('dashboard') }}">Ritorna ai tuoi piatti</a>

                </form>
              </div>
                
            </div>
        </div>

    </div>


@endsection
