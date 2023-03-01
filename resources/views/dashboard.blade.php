@extends('layouts.app')
@section('content')
<div class="bg-dashboard">
    <div class="container">
        <h2 class="fs-4 pt-4 text-white">
            {{ __('Welcome in your Dashboard') }}
        </h2>
            <div>
                <div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card dashboard text-center ">
                        <h3>{{ __('Create your restaurant profile!') }} </h3>
                    <div class="mt-3">
                        <h3>Add your restaurant </h3>
                        <a href="{{ route('restaurants.create') }}"> 
                            <button class="btn btn-success">
                                <i class="fa-solid fa-plus"></i> 
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
