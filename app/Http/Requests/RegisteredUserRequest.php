<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisteredUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre de usuario es requerido',
            'name.string' => 'El nombre de usuario debe ser en texto',
            'name.max' => 'El nombre de usuario puede contener hasta 255 caracteres',
            'email.required' => 'El el correo es requerido',
            'email.string' => 'El correo debe ser en texto.',
            'email.email' => 'El correo debe ser válido',
            'email.max' => 'El correo puede contener hasta 255 caracteres',
            'password.required' => 'La contraseña es requerida',
            'password.string' => 'La contraseña debe ser en texto',
            'password.max' => 'La contraseña puede contener hasta 255 caracteres',
        ];
    }
}
