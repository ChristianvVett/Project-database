<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=>'required',
            'price'=>'required',
            'description'=>'required|min:10',
            'image'=>'required|image',            
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Il nome del prodotto è richiesto',
        'price.required' => 'Il prezzo è richiesto',
        'image.required' => 'L \'immagine è richiesta',
        'image.image' =>'L \'immgaine deve essere jpg, jpeg, png, bpm, gif, svg, or webp'
    ];
}
}
