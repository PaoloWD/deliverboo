@extends('layouts.app')
@section('content')

@php
    $homeImgList = [
        "https://deliveroo-restaurants.cdn.prismic.io/deliveroo-restaurants%2F2cf9b4dd-1b99-4436-b115-e5442aea7131_rossopomodoro_logotype.svg",
        "https://deliveroo-restaurants.cdn.prismic.io/deliveroo-restaurants/b52857da-0bec-41dd-8856-caa3ee6368b0_mcdonalds.svg",
        "https://deliveroo-restaurants.cdn.prismic.io/deliveroo-restaurants%2Fae228138-c6c6-4872-accd-579c544200e3_logo+la+piadineria.svg",
        "https://deliveroo-restaurants.cdn.prismic.io/deliveroo-restaurants/2b041d22-2807-4fc5-ad86-1dcb4101386e_lielita+logo.svg",
        "https://deliveroo-restaurants.cdn.prismic.io/deliveroo-restaurants/7fcee47d-5519-47ce-8e82-10988d34eaa4_pokeria+logo.svg",
    ]
@endphp

<div class="home-jumbotron pt-5">

    <div class="container  rounded-4 p-5 presentation-banner">
        <h1 class="text-center">Welcome on Deliveroo Restaurateur's page</h1>
    </div>

    <div class="home-carousel">
        <div class="row row-cols-5">
            @foreach($homeImgList as $element)
                <div class="col">
                    <div class="card bg-light h-100 p-3">
                        <img src="{{ $element }}" alt="..." class="card-img" style="height: 128px;">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection