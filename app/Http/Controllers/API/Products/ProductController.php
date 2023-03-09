<?php

namespace App\Http\Controllers\Api\Products;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Dish;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){

        $products = Dish::all();

        return ProductResource::collection($products);
    }
}
