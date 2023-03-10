<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant::orderBy('name')->paginate();

        return response()->json($restaurants);
    }
    public function show(Restaurant $restaurant){
        
        return response()->json($restaurant);
    }

    public function search(Request $request)
    {
        // Ricevi le categorie selezionate dal frontend tramite una richiesta axios
        $selectedCategories = $request->input('categories');
    
        // Recupera tutti i ristoranti che hanno una o più categorie selezionate
        $restaurants = Restaurant::whereHas('categories', function($query) use ($selectedCategories) {
            $query->whereIn('category_id', $selectedCategories);
        })->get();
        return response()->json($restaurants);
    }

}