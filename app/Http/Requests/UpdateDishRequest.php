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
            'name'=>'required|string',
            'image' => 'image|nullable',
            'description'=>'required|string',
            'ingredients'=>'required|string',
            'price' => 'required|numeric|min:0',
            'visibility' => 'boolean',
        ];
    }
    public function messages(){
        return[
            "name.required" => "Il nome è obbligatorio",
            "image.image" =>"Il file che hai inserito non è un immagine",
            "description.required" => "La descrizione è obbligatorio",
            "ingredients.required" => "Gli ingredienti sono obbligatori",
            'price' => [
                'required' => 'Il prezzo è obbligatorio.',
                'numeric' => 'Il prezzo deve essere un numero.',
                'min' => 'Il prezzo deve essere maggiore o uguale a 0.'
            ],
        ];
    }
}