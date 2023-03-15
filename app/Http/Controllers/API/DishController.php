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
    public function show($restaurant_id) {
        $dishes = Dish::where('restaurant_id', $restaurant_id)
        ->orderBy('name', 'asc')
        ->get();
        return response()->json($dishes);
      }
      public function showSingleDish($dish_id){
        $dish = Dish::where('id', $dish_id)->get();
        return response()->json($dish);
      }
}