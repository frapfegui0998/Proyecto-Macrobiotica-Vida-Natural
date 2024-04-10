<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionsRequest extends FormRequest
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
            'name' => 'required|max:255|string|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del permiso es requerido.',
            'name.max' => 'El nombre del permiso no puede tener más de 255 caracteres.',
            'name.string' => 'El nombre del permiso debe ser en texto.',
            'name.min' => 'El nombre del permiso debe tener como mínimo 3 caracteres.',
        ];
    }
}
