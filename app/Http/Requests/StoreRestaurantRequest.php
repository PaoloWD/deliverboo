<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
            'name'=>'required|min:5|max:255',
            'vat'=>'required|string',
            'address'=>'required',
            'image' => 'image|nullable',
        ];
    }
    public function messages(){
        return[
            "name.required" => "Il titolo è obbligatorio",
            "name.min" =>  "Il titolo deve avere almeno :min caratteri",
            "name.max" =>  "Il titolo deve avere massimo :max caratteri",
            'address.required' => 'inserisci un indirizzo valido',
            "vat.required" => "Inserire la P. IVA",
            "image.image" =>"Il file che hai inserito non è un immagine",
        ];
    }
}