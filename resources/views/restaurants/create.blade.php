@extends('layouts.app')

@section('content')

    <div class="bg-dashboard">
        <div class="home-jumbotron fix home-jumbotron-hover py-5 overflow-hidden">
            <div class="container  shadow rounded-4 p-5 presentation-banner h-100 overflow-auto">
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

                <h2 class="custom-color">CREA IL TUO RISTORANTE</h2>

                <form action="{{ route('restaurants.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- name-input --}}
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text"
                            class="form-control @error('name') is-invalid @elseif(old('name')) is-valid  @enderror"
                            value="{{ $errors->has('name') ? '' : old('name') }}" name="name" required>

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            {{-- @elseif(old('name'))
                        valid-feedback
                        <div class="valid-feedback">
                        Ottimo lavoro!
                        </div> --}}
                        @enderror
                    </div>

                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">


                    {{-- address-input --}}
                    <div class="mb-3">
                        <label class="form-label">Indirizzo</label>
                        <input type="text"
                            class="form-control @error('address') is-invalid @elseif(old('address')) is-valid  @enderror"
                            value="{{ $errors->has('address') ? '' : old('address') }}" name="address" required>

                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            {{-- @elseif(old('address'))
                        valid-feedback
                        <div class="valid-feedback">
                        Ottimo lavoro!
                        </div> --}}
                        @enderror
                    </div>


                    {{-- vat-input --}}
                    <div class="mb-3">
                        <label class="form-label">Partita Iva </label>
                        <input type="text"
                            class="form-control @error('vat') is-invalid @elseif(old('vat')) is-valid  @enderror"
                            value="{{ $errors->has('vat') ? '' : old('vat') }}" name="vat" required>

                        @error('vat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            {{-- @elseif(old('vat'))
                        valid-feedback
                        <div class="valid-feedback">
                        Ottimo lavoro!
                        </div> --}}
                        @enderror
                    </div>

                    {{-- image input --}}
                    <div class="mb-3">
                        <label class="form-label">Immagine di copertina</label>
                        <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image" required>
                        {{-- @error('image')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror --}}
                    </div>



                    {{-- categories input --}}
                    {{-- @dd($technologies) --}}
                    <div class="py-3">
                        <div class="py-2">Categorie</div>
                        <div class="row d-block d-md-flex justify-content-center px-3">
                            @foreach ($categories as $category)
                                <div class="form-check col-2">
                                    <input class="form-check-input @error('categories') is-invalid @enderror"
                                        type="checkbox" value="{{ $category->id }}" id="category_{{ $loop->index }}"
                                        name="categories[]"
                                        {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="category_{{ $loop->index }}">
                                        {{ $category->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                    </div>


                    <button type="submit" class="btn btn-primary btn-custom mt-4">Salva</button>
            </div>
        </div>
    </div>

@endsection
