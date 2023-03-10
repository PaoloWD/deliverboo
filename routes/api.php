<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\DishController;
use App\Http\Controllers\API\RestaurantController;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/restaurants/index', [RestaurantController::class, 'index']);
Route::get('/restaurants/{restaurant}',[RestaurantController::class, 'show']);

Route::get('/dishes', [DishController::class, 'index']);
Route::get('/dishes/{dish}',[DishController::class, 'show']);
Route::get('/dishes/show/{dish}', [DishController::class, 'showSingleDish']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category}',[CategoryController::class, 'show']);

Route::get('/restaurants/search', [RestaurantController::class, 'search']);
Route::get('/restaurants', function(Request $request) {
    $categories = $request->input('category');
    $restaurants = Restaurant::with('categories')
    ->whereHas('categories', function($query) use ($categories) {
        $query->whereIn('name', $categories);
    })
    ->where(function ($query) use ($categories) {
        foreach ($categories as $category) {
            $query->whereHas('categories', function ($query) use ($category) {
                $query->where('name', $category);
            });
        }
    })
    ->get();
    
    $message = "Categoria selezionata: ";
    if ($categories) {
        $message .= implode(', ', $categories);
    } else {
        $message .= "nessuna cateegoria selezionata";
    }
    
    return response()->json([
        'message' => $message,
        'restaurants' => $restaurants,
    ]);
});