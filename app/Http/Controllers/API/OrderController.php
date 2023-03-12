<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Dish;
use App\Models\Order;
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

    public function store(StoreOrderRequest $request){
        

            $data = $request->validated();
            $order = Order::create($data);
            if ($request->has("dish_id")) {
                $order->dishes()->attach($data['dish_id']);
                /* foreach ($data["dishesIds"] as $dishId) {
                    $order->dishes()->attach($dishId, ['order_id' => $order->id]);
                } */
            }

            $order->save(); 
            return response()->json([
                'status' => 'success',
                'message' => 'Ordine creato con successo',
                'data' => $order
            ]);

    }
    
    
}