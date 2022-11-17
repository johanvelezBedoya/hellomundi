<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePublicacione extends FormRequest
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
            'imagen'=>'Required',
            'descripcion'=>'Required',
            
        ];
    }

    public function attributes()
    {
        return [
            
        ];
    }

    public function messages()
    {
        return[
            'imagen.required'=>'Debe cargar una imagen',
            'descripcion.required'=>'Debe ingresar una descripción',
            
        ];
    }
}
