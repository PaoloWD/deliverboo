<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexUsers(){
        $users= User::all();
        return view('admin.users', compact('users'));
    }
    public function indexCategories(){
        $categories= Category::all();
        return view('admin.categories', compact('categories'));
    }
    public function indexRestaurants(){
        $restaurants= Restaurant::all();
        return view('admin.restaurants', compact('restaurants'));
    }
}
