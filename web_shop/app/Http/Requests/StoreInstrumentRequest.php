<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class StoreInstrumentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:instruments,name|max:255',
            'price' => 'required|min:0.1',
//            'photo' => 'image',
            'description' => 'required',
            'instrument_category_id' => 'required|exists:instrument_categories,id',
            'quantity' => 'required|min:1'
        ];
    }

    public function  messages(): array
    {
        return [
            'name.required' => 'Naziv instrumenta je obavezan',
            'name.unique' => 'Vec postoji kategorija sa tim imenom',
            'name.max' => 'Naziv kategorije je predug',
            'price.required' => 'Cijena je obavezna',
            'description.required' => 'Opis je obavezan',
            'quantity' => 'Dostupna kolicina je obavezna',
            'instrument_category_id.required' => 'Kategorija instrumenta je obavezna',
            'instrument_category_id.exists' => 'Kategorija instrumenta nije validna',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $message = ['message' =>  $validator->errors()];
        throw new HttpResponseException(response()->json($message, 422));
    }
}
