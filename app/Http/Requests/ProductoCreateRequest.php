<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'producto' => 'required',
            'precio'   => 'required',
            'impuesto' => 'required',
            'cantidad' => 'required|numeric',
            'imagen'   => 'required|image|mimes:png|max:2048',
        ];
    }
}
