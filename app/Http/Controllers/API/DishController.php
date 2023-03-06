<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index(){
        $dishes = Dish::paginate();

        return response()->json($dishes);
    }
    public function show(Dish $dish){
        
        return response()->json($dish);
    }
}
