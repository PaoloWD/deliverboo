@extends('layouts.app')

@section('content')

    <div class="bg-dashboard">
        <div class="home-jumbotron fix home-jumbotron-hover py-5 overflow-hidden">
            <div class="container  shadow rounded-4 p-5 presentation-banner">
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

                <h2 class="custom-color">CREATE NEW RESTAURANT</h2>

                <form action="{{ route('restaurants.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- name-input --}}
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text"
                            class="form-control @error('name') is-invalid @elseif(old('name')) is-valid  @enderror"
                            value="{{ $errors->has('name') ? '' : old('name') }}" name="name">

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
                        <label class="form-label">Address</label>
                        <input type="text"
                            class="form-control @error('address') is-invalid @elseif(old('address')) is-valid  @enderror"
                            value="{{ $errors->has('address') ? '' : old('address') }}" name="address">

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
                        <label class="form-label">Vat-code</label>
                        <input type="text"
                            class="form-control @error('vat') is-invalid @elseif(old('vat')) is-valid  @enderror"
                            value="{{ $errors->has('vat') ? '' : old('vat') }}" name="vat">

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
                        <label class="form-label">Cover Image</label>
                        <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image">
                        {{-- @error('image')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror --}}
                    </div>



                    {{-- categories input --}}
                    {{-- @dd($technologies) --}}
                    <div class="py-3">
                        <div class="py-2">Categories:</div>
                        <div class="row justify-content-center px-3">
                            @foreach ($categories as $category)
                                <div class="form-check col-2">
                                    <input class="form-check-input @error('categories') is-invalid @enderror"
                                        type="checkbox" value="{{ $category->id }}" id="category_{{ $loop->index }}"
                                        name="categories[]"
                                        {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="category_{{ $loop->index }}">
                                        {{ $category->name }}
                                    </label>
                                    @error('categories')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            @endforeach
                        </div>

                    </div>


                    <button type="submite" class="btn btn-primary btn-custom mt-4">Save</button>

                    {{-- <a class="btn btn-warning" href="{{route('admin.projects.index')}}">Return To Projects</a> --}}
            </div>
        </div>
    </div>

@endsection
