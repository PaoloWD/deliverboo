<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ContactController extends Controller
{
    //class ContactController extends Controller
    public function store(Request $request){
        //dati del cliente:
        $data= $request;
        //email del cliente
        $customerMail= $data['customer_email'];


        //  $order= Order::create($data);
    //  $email= $request->input("customer_email");
    //    $orderData = Order::where('customer_email', $email)->get();
        
        //  $users= User::all();
        // $users= Auth::user();
        // $user_id= auth()->user()->id;

        
        if (auth()->check()) {
             $email = auth()->user()?->email;
        }
        
        // $prova= Auth::user()->email;
        // return $customerMail;
    //    $restaurateur = $user->id;
    //    $restaurateurEmail= $restaurateur->pluck('email');

    //    send() si aspetta di ricevere un istanza di una class Mailable
        Mail::to('luiggina@gmail.com')->send(new NewContact($data));
        return response()->json($data);

    // ------


   }
}
