<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Dish;
use Braintree\Gateway;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function generate(Request $request, Gateway $gateway){
        $token = $gateway->clientToken()->generate();
        $data = [
            'success' => true,
            'token' => $token
        ];
        return response()->json($data, 200);
    }
    public function makePayment(Request $request, Gateway $gateway){
        $dishIds = $request->input('dishes');
        $totalPrice = 0;
        
        foreach($dishIds as $dishId) {
            $dish = Dish::find($dishId);
            $totalPrice += $dish->price;
        }
    
        $result = $gateway->transaction()->sale([
            'amount' => $totalPrice,
            'paymentMethodNonce' => $request->input('token'),
            'options' => [
                'submitForSettlement' => true,
            ]
        ]);
        if($result->success){
            $data = [
                'success' => true,
                'message' => 'Transazione avvenuta con successo'
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'success' => false,
                'message' => 'Transazione negata'
            ];
            return response()->json($data, 401);
        }
    }
    
    
}