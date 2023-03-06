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
