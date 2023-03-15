<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Mail\NewContact;
use App\Mail\NewContactConfirmed;
use App\Models\Dish;
use App\Models\Order;
use App\Models\User;
use Braintree\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        if($request->has('dish_id')){
            $order->dishes()->attach($data['dish_id']);
         }
        $order->save(); 
        Mail::to($order->customer_email)->send(new NewContactConfirmed($data));
        $id=$order->restaurant_id;
        $idUser=  User::where( "id", $id)->first() ;
        $mailUser= $idUser->email;
        Mail::to($mailUser)->send(new NewContact($data));
        
        return response()->json([
            'status' => 'success',
            'message' => 'Ordine creato con successo',
            'data' => $data,
        ]);
    }
    
    
}