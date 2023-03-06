<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $restaurants = Restaurant::all();

        return response()->json($restaurants);
    }

    public function show(Restaurant $restaurant){
        
        return response()->json($restaurant);
    }
}