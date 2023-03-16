<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
});

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [RestaurantController::class, 'index'])->name('dashboard');
    Route::resource('restaurants', RestaurantController::class);
    Route::resource('dishes', DishController::class)->only(['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']);
    Route::get('/restaurantsOrders/{restaurant}', [RestaurantController::class, 'showOrders'])->name("restaurants.showOrders");
    Route::put('/restaurantsOrders/{restaurant}', [OrderController::class, 'update'])->name("restaurants.showOrders");
    Route::patch('/restaurantsOrders/{restaurant}', [OrderController::class, 'unupdate'])->name("restaurants.showOrders");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/chart', [OrderController::class, 'chartDataByMonth'])->name('chart');
});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::resource('categories', CategoryController::class);
    Route::get('/statistics', [OrderController::class, 'sumPricebyRestaurants'])->name('statistics');
    Route::get('/search/categories', [OrderController::class, 'searchCategories'])->name('categories.search'); 

});


Route::get('/search', [RestaurantController::class, 'search'])->name('dishes.search'); 

/* Route::get('/chart', function(){
    return view('testingChart.chart');
}); */

require __DIR__.'/auth.php';