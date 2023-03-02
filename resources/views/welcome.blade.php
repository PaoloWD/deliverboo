@extends('layouts.app')
@section('content')

<div class="home-jumbotron py-5 overflow-hidden">

    <div class="container  rounded-4 p-5 presentation-banner text-center">
        <h1 class="">Welcome on Deliveroo Restaurateur's page</h1>
   
    
    
        <h2 class="py-3">Join the DeliverBoo Community!</h2>
        <h3 class="py-3">
            Together we can help you reach more and more customers!
        </h3>
        <a href="{{ route('register') }}" class="btn btn-lg btn-success my-5 btn-account"><h3>Create your own account!</h3></a>
    </div>

</div>
@endsection