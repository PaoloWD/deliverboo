<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'token' => 'required',
            // amount: Dovremo passargli l'Id del prodotto e poi il BackEnd deve andare a recuperarsi dal Database il Prodotto
            // si prende l'Id, si prende l'amount (quanto costa) si fa i calcoli magari con il prezzo di spedizione ecc.. e poi si fa tutto il conto
            // Così invece adesso stiamo passando direttamente il prezzo sul FrontEnd
            'amount' => 'required',
        ];
    }
}
