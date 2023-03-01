@extends('layouts.app')
@section('content')

<div class="home-jumbotron py-5">

    <div class="container  rounded-4 p-5 presentation-banner">
        <h1 class="text-center">Welcome on Deliveroo Restaurateur's page</h1>
    </div>
    
    <div class="mt-5 pt-5 container  rounded-4 presentation-banner text-center">
        <h2 class="py-5">Join the DeliverBoo Community!</h2>
        <h3 class="py-5">
            Together we can help you reach more and more customers!
        </h3>
        <a href="{{ route('login') }}" class="btn btn-lg btn-success my-5 btn-account"><h3>Create your own account!</h3></a>
    </div>

</div>
@endsection