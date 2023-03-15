@extends('layouts.app')
@section('content')

<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Profile') }}
    </h2>
    <div class="card p-4 mb-4 bg-white shadow rounded-lg">

        @include('profile.partials.update-profile-information-form')

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        @include('profile.partials.update-password-form')

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        @include('profile.partials.delete-user-form')

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
