<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgotPasswordRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255', 'confirmed'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'El el correo es requerido',
            'email.string' => 'El correo debe ser en texto.',
            'email.email' => 'El correo debe ser válido',
            'email.max' => 'El correo puede contener hasta 255 caracteres',
            'email.confirmed' => 'No podemos encontrar un usuario con esa dirección de correo electrónico.',
        ];
    }
}
