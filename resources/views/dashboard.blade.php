@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
            <div>
                <div class="card-header">{{ __('Welcome in your Dashboard') }}</div>

                <div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="text-center">
                    {{ __('Create your restaurant profile!') }}
                        <h4>Add your restaurant </h4>
                        <button class="btn btn-primary px-3"> + </button>
                    </div>
                </div>
            </div>
</div>
@endsection
