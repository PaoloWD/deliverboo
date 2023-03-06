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
                        <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        
                        @if(str_contains($dish->image, "https"))
                        <img class="img-thumbnail mt-4" src="{{ $dish->image }}" style="height:230px" alt="">
                        @else
                        <img  class="img-thumbnail mt-4" src="{{asset('/storage/'. $dish->image)}}" style="height:230px" alt="">
                        @endif
                    </div>

                    {{-- visibility input --}}

                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switch" name="visibility"
                            {{ old('visibility', $dish->visibility) ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="switch">Visibilità</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-custom me-2">Salva</button>

                    <a class="btn btn-primary btn-custom" href="{{ route('dashboard') }}">Ritorna ai tuoi piatti</a>

                </form>
              </div>
                
            </div>
        </div>

    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            let validText = false;
            let validEmail = false;
            let validPassword = false;
            let texts = document.querySelectorAll('input[type="text"]');
            let emails = document.querySelectorAll('input[type="email"]');
            let passwords = document.querySelectorAll('input[type="password"]');
            texts.forEach(element => {
                if (element.value.length === 0){
                    validText = false;
                    element.dataset.error = 'Il campo di testo deve essere compilato';
                    alert(element.dataset.error);
                } else if (element.value.length < 8){
                    validText = false;
                    element.dataset.error = 'Il campo di testo deve contenere minimo 8 caratteri';
                    alert(element.dataset.error);
                } else if (element.value.length > 255){
                    validText = false;
                    element.dataset.error = 'Il campo di testo non può superare i 255 caratteri';
                    alert(element.dataset.error);
                }else {
                    validText = true;
                    element.dataset.error = '';
                }
                if (element.dataset.error === ''){
                    element.classList.remove('is-invalid');
                }else {
                    element.classList.remove('is-invalid');
                    element.classList.add('is-invalid');
                }
            });
            emails.forEach(element => {
                if (element.value.length === 0){
                    validEmail = false;
                    element.dataset.error = 'Il campo email deve essere compilato';
                    alert(element.dataset.error);
                } else if (element.value.length < 8){
                    validEmail = false;
                    element.dataset.error = 'Il campo email deve contenere minimo 8 caratteri';
                    alert(element.dataset.error);
                } else if (element.value.length > 255){
                    validEmail = false;
                    element.dataset.error = 'Il campo email non può superare i 255 caratteri';
                    alert(element.dataset.error);
                }else {
                    validEmail = true;
                    element.dataset.error = '';
                }
                if (element.dataset.error === ''){
                    element.classList.remove('is-invalid');
                }else {
                    element.classList.remove('is-invalid');
                    element.classList.add('is-invalid');
                }
            });
            passwords.forEach(element => {
                if (element.value.length === 0){
                    validPassword = false;
                    element.dataset.error = 'Il campo password deve essere compilato';
                    alert(element.dataset.error);
                } else if (element.value.length < 8){
                    validPassword = false;
                    element.dataset.error = 'Il campo password deve contenere minimo 8 caratteri';
                    alert(element.dataset.error);
                } else if (element.value.length > 255){
                    validPassword = false;
                    element.dataset.error = 'Il campo password non può superare i 255 caratteri';
                    alert(element.dataset.error);
                }else {
                    validPassword = true;
                    element.dataset.error = '';
                }
                if (element.dataset.error === ''){
                    element.classList.remove('is-invalid');
                }else {
                    element.classList.remove('is-invalid');
                    element.classList.add('is-invalid');
                }
            });
            if(validText && validEmail && validPassword){
                this.submit();
            }
        });
    </script>
@endsection
