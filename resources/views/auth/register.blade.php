@extends('layouts.app')

@section('content')
<div class="login-jumbotron pt-5">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card presentation-banner shadow rounded-4 overflow-hidden border-0">
                    <div class="card-header custom-bg">
                        <div class="logo fs-4 fw-bold d-flex align-items-center text-white" style="height:40px">
                            <i class="fa-solid fa-bowl-food px-2"></i>
                            DeliveBoo
                        </div>
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="mb-4 row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name *') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="mb-4 row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address *') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="mb-4 row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password *') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="mb-4 row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password *') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="mb-4 row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-custom">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        let validText = true;
        let validEmail = true;
        let validPassword = true;
        let texts = document.querySelectorAll('input[type="text"]');
        let emails = document.querySelectorAll('input[type="email"]');
        let passwords = document.querySelectorAll('input[type="password"]');
        texts.forEach(element => {
            if (element.value.length === 0){
                validText = false;
                element.dataset.error = 'Il campo di testo deve essere compilato';
                if(element.parentNode.children.length > 1){
                    element.parentNode.removeChild(element.parentNode.lastChild)
                }
                const errorElement = document.createElement('div');
                errorElement.classList.add('invalid-feedback');
                errorElement.innerText = element.dataset.error;
                element.parentNode.appendChild(errorElement);
            } else if (element.value.length < 8){
                validText = false;
                element.dataset.error = 'Il campo di testo deve contenere minimo 8 caratteri';
                if(element.parentNode.children.length > 1){
                    element.parentNode.removeChild(element.parentNode.lastChild)
                }
                const errorElement = document.createElement('div');
                errorElement.classList.add('invalid-feedback');
                errorElement.innerText = element.dataset.error;
                element.parentNode.appendChild(errorElement);
            } else if (element.value.length > 255){
                validText = false;
                element.dataset.error = 'Il campo di testo non può superare i 255 caratteri';
                if(element.parentNode.children.length > 1){
                    element.parentNode.removeChild(element.parentNode.lastChild)
                }
                const errorElement = document.createElement('div');
                errorElement.classList.add('invalid-feedback');
                errorElement.innerText = element.dataset.error;
                element.parentNode.appendChild(errorElement);
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
                if(element.parentNode.children.length > 1){
                    element.parentNode.removeChild(element.parentNode.lastChild)
                }
                const errorElement = document.createElement('div');
                errorElement.classList.add('invalid-feedback');
                errorElement.innerText = element.dataset.error;
                element.parentNode.appendChild(errorElement);
            } else if (element.value.length < 8){
                validEmail = false;
                element.dataset.error = 'La mail deve avere minimo 8 caratteri';
                if(element.parentNode.children.length > 1){
                    element.parentNode.removeChild(element.parentNode.lastChild)
                }
                    const errorElement = document.createElement('div');
                    errorElement.classList.add('invalid-feedback');
                    errorElement.innerText = element.dataset.error;
                    element.parentNode.appendChild(errorElement);
                
            } else if (element.value.length > 255){
                validEmail = false;
                element.dataset.error = 'La mail non può superare i 255 caratteri';
                if(element.parentNode.children.length > 1){
                    element.parentNode.removeChild(element.parentNode.lastChild)
                }
                const errorElement = document.createElement('div');
                errorElement.classList.add('invalid-feedback');
                errorElement.innerText = element.dataset.error;
                element.parentNode.appendChild(errorElement);
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
                element.dataset.error = 'La password deve essere compilato';
                const errorElement = document.createElement('div');
                errorElement.classList.add('invalid-feedback');
                errorElement.innerText = element.dataset.error;
                element.parentNode.appendChild(errorElement);
            } else if (element.value.length < 8){
                validPassword = false;
                element.dataset.error = 'La password deve contenere minimo 8 caratteri';
                const errorElement = document.createElement('div');
                errorElement.classList.add('invalid-feedback');
                errorElement.innerText = element.dataset.error;
                element.parentNode.appendChild(errorElement);
            } else if (element.value.length > 255){
                validPassword = false;
                element.dataset.error = 'La password non può superare i 255 caratteri';
                if(errorElement){
                    return
                } else {
                    const errorElement = document.createElement('div');
                    errorElement.classList.add('invalid-feedback');
                    errorElement.innerText = element.dataset.error;
                    element.parentNode.appendChild(errorElement);
                }
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
