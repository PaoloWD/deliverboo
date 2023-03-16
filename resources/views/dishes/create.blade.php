@extends('layouts.app')

@section('content')
    <div class="bg-dashboard pt-5">

        <div class="container py-5 h-100 ">
            <div class="container-form rounded-5 shadow h-100 ">
                <div class="h-100 overflow-auto px-3">
                    <h1 class="custom-color mb-3">Crea un nuovo piatto</h1>

                    <form id="my-form" action="{{ route('dishes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- name-input --}}
                        <div class="mb-3">
                            <label class="form-label">Nome *</label>
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
                            <label class="form-label">Descrizione *</label>
                            <input type="text"
                                class="form-control @error('description') is-invalid @elseif(old('description')) is-valid  @enderror"
                                value="{{ $errors->has('description') ? '' : old('description') }}" name="description"
                                required>

                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Ingredients-input --}}
                        <div class="mb-3">
                            <label class="form-label">Ingredienti *</label>
                            <input type="text"
                                class="form-control @error('ingredients') is-invalid @elseif(old('ingredients')) is-valid  @enderror"
                                value="{{ $errors->has('ingredients') ? '' : old('ingredients') }}" name="ingredients"
                                required>

                            @error('ingredients')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Price-input --}}
                        <div class="mb-3">
                            <label class="form-label">Prezzo *</label>
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
                            <label class="form-label">Immagine *</label>
                            <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image"
                                required>
                        </div>

                        {{-- Select type --}}
                        <label for="type">Seleziona il tipo di piatto:</label>
                        <select name="type" id="type">
                            <option value="Antipasto">Antipasto</option>
                            <option value="Pizza">Antipasto</option>
                            <option value="Primo">Primo</option>
                            <option value="Secondo">Secondo</option>
                            <option value="Contorno">Contorno</option>
                            <option value="Bevanda">Bevanda</option>
                            <option value="Dolce">Dolce</option>
                            <option value="Panino">Panino</option>
                        </select>

                        {{-- Visibility-input --}}
                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="switch" name="visibility"
                                {{ old('visibility', 1) ? 'checked' : '' }} value="1">
                            <label class="form-check-label" for="switch">Visibilità </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-custom me-2">Salva</button>
                        <a class="btn btn-primary btn-custom" href="{{ route('dashboard') }}">Annulla</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
<script>
        document.querySelector('#my-form').addEventListener('submit', function(e) {
          e.preventDefault();
          let validText1 = true;
          let validText2 = true;
          let validText3 = true;
          let validPrice1 = true;
          let validPrice2 = true;
          let validFile = true;
          let texts = document.querySelectorAll('input[type="text"]');
          let price = document.querySelectorAll('input[type="number"]');
          let file = document.querySelectorAll('input[type="file"]');
          texts.forEach(element => {
              if (element.value.length === 0){
                  validText1 = false;
                  element.dataset.error = 'Il campo di testo deve essere compilato';
                  if(element.parentNode.children.length > 1){
                      element.parentNode.removeChild(element.parentNode.lastChild)
                  }
                  const errorElement = document.createElement('div');
                  errorElement.classList.add('invalid-feedback');
                  errorElement.innerText = element.dataset.error;
                  element.parentNode.appendChild(errorElement);
              } else if (element.value.length < 8){
                console.log("click nome",element.value.length );
                  validText2 = false;
                  element.dataset.error = 'Il campo di testo deve contenere minimo 8 caratteri';
                  if(element.parentNode.children.length > 1){
                      element.parentNode.removeChild(element.parentNode.lastChild)
                  }
                  const errorElement = document.createElement('div');
                  errorElement.classList.add('invalid-feedback');
                  errorElement.innerText = element.dataset.error;
                  element.parentNode.appendChild(errorElement);
                  } else if (element.value.length > 255){
                  validText3 = false;
                  element.dataset.error = 'Il campo di testo non può superare i 255 caratteri';
                  if(element.parentNode.children.length > 1){
                      element.parentNode.removeChild(element.parentNode.lastChild)
                  }
                  const errorElement = document.createElement('div');
                  errorElement.classList.add('invalid-feedback');
                  errorElement.innerText = element.dataset.error;
                  element.parentNode.appendChild(errorElement);
              }else {
                    element.dataset.error = '';
                }
                if (element.dataset.error === ''){
                    element.classList.remove('invalid-feedback');
                    element.classList.remove('is-invalid');
                }else {
                    element.classList.remove('is-invalid');
                    element.classList.add('is-invalid');
                }
          });
          price.forEach(element => {
            if (element.value.length === 0){
                  validPrice1 = false;
                  element.dataset.error = 'inserisci un prezzo';
                  if(element.parentNode.children.length > 1){
                      element.parentNode.removeChild(element.parentNode.lastChild)
                  }
                  const errorElement = document.createElement('div');
                  errorElement.classList.add('invalid-feedback');
                  errorElement.innerText = element.dataset.error;
                  element.parentNode.appendChild(errorElement);
              } else if (element.value.length >= 5){
                  validPrice2 = false;
                  element.dataset.error = 'Il prezzo è troppo alto';
                  if(element.parentNode.children.length > 1){
                      element.parentNode.removeChild(element.parentNode.lastChild)
                  }
                  const errorElement = document.createElement('div');
                  errorElement.classList.add('invalid-feedback');
                  errorElement.innerText = element.dataset.error;
                  element.parentNode.appendChild(errorElement);
                  }else {
                    element.dataset.error = '';
                }
                if (element.dataset.error === ''){
                    element.classList.remove('invalid-feedback');
                    element.classList.remove('is-invalid');
                }else {
                    element.classList.remove('is-invalid');
                    element.classList.add('is-invalid');
                }
          });
          if(validText1 && validText2 & validText3 && validPrice1 && validPrice2){
              this.submit();
          }
      });
</script>
@endsection
