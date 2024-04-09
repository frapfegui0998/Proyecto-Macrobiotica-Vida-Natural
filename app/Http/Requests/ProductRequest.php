<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            //
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'price' => 'required|numeric|min:0',
            'stock_quantity' => 'required|numeric|min:0',
            'image_url' => 'required|string|max:255',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del producto es requerido.',
            'name.max' => 'El nombre del producto no puede tener más de 255 caracteres.',
            'name.string' => 'El nombre del producto debe ser en texto.',
            'description.required' => 'La descripción es requerida.',
            'description.max' => 'La descripción no puede tener más de 255 caracteres.',
            'description.string' => 'El nombre de la descripción debe ser en texto.',
            'price.required' => 'El precio de compra es requerido.',
            'price.numeric' => 'El precio de compra debe ser numérico.',
            'stock_quantity.required' => 'La cantidad en stock es requerida.',
            'stock_quantity.numeric' => 'La cantidad en stock debe ser numérica.',
            'image_url.required' => 'La imagen del producto es requerida.',
            'image_url.max' => 'La imagen del producto no puede tener más de 255 caracteres.',

        ];
    }
}
