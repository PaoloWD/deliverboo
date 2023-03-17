<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDishRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'image' => 'image|nullable',
            'description'=>'required|string|max:255',
            'ingredients'=>'required|string|max:255',
            'price' => 'required|numeric|min:0|max:9999.99',
            'visibility' => 'boolean',
            'type' => 'required'
        ];
    }
    public function messages(){
        return[
            "name.required" => "Il nome è obbligatorio",
            'name.max' => "Puoi utilizzare un massimo di :max caratteri",
            "image.image" =>"Il file che hai inserito non è un immagine",
            "description" => [
                'required' => "La descrizione è obbligatoria",
                'max' => "Puoi utilizzare un massimo di :max caratteri",
            ],
            "ingredients.required" => "Gli ingredienti sono obbligatori",
            'ingredients.max' => "Puoi utilizzare un massimo di :max caratteri",
            'price' => [
                'required' => 'Il prezzo è obbligatorio.',
                'numeric' => 'Il prezzo deve essere un numero.',
                'min' => 'Il prezzo deve essere maggiore o uguale a 0.',
                'max' => 'il prezzo è troppo alto'

            ],
        ];
    }
}