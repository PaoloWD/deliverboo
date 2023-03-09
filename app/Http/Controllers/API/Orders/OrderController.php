<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\OrderRequest;
use App\Models\Dish;
use Braintree\Gateway;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function generate(Request $request, Gateway $gateway) {

        // dd($gateway->clientToken());
        $token = $gateway->clientToken()->generate();

        $data = [
            'success' => true,
            'token' => $token,
        ];

        return response()->json($data,200);
    }

    public function makePayment(OrderRequest $request, Gateway $gateway) {

        // Stiamo prendendo l'Id della richiesta e ci andiamo a prendere il prodotto
        $product = Dish::find($request->product);

        $result = $gateway->transaction()->sale(
            [
                // amount (costo del prodotto): Qui dovremo passare l'Id del prodotto, andare nel Database,
                // recuperare il prodotto, recuperare il prezzo del prodotto, e poi fare il calcolo totale, tutto su BackEnd
                'amount' => $product->price,
                'paymentMethodNonce' => $request->token,
                'options' => [
                    'submitForSettlement' => true
                ]
            ]);

            if($result->success){
                $data = [
                    'success' => true,
                    'message' => 'Transazione avvenuta con successo',
                ];

                return response()->json($data,200);

            }else {
                $data = [
                    'success' => false,
                    'message' => 'Transazione fallita',
                ];

                return response()->json($data,401);

            }
        return 'makePayment';
    }
}
