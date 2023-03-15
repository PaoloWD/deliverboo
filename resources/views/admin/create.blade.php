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

            <form id="my-form" action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome categoria *</label>
                    <input type="text"
                        class="form-control @error('name') is-invalid @elseif(old('name')) is-valid  @enderror"
                        value="{{ $errors->has('name') ? '' : old('name') }}" name="name" required>

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit">Aggiungi categoria</button>
            </form>
        </div>
    </div>
</div>
@endsection