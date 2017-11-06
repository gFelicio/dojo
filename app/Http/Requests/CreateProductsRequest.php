<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Product;

class CreateProductsRequest extends FormRequest
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
            'title' => 'string|min:3|max:255|required',
            'description' => 'string|min:6|max:255|required',
            'price' => 'numeric|required',
            'bid' => 'numeric|required',
            'date_end' => 'required',
            'image' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'max' => 'O campo deve conter no máximo 255 caracteres',
            'required' => 'O campo é obrigatório',
            'string' => 'O campo deve conter apenas letras',
            'numeric' => 'O campo deve conter apenas números',
            'title.min' => 'O campo deve conter no mínimo 3 caracteres',
            'description.min' => 'O campo deve conter no mínimo 6 caracteres'
        ];
    }
}
