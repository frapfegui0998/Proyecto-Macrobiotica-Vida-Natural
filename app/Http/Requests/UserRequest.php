<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del usuario es requerido.',
            'name.max' => 'El nombre del usuario no puede tener más de 255 caracteres.',
            'name.string' => 'El nombre del usuario debe ser en texto.',
            'email.required' => 'El correo es requerido.',
            'email.max' => 'El correo no puede tener más de 255 caracteres.',
            'email.email' => 'El correo debe ser válido.',
            'email.unique' => 'Ya hay un correo registrado con este nombre.',
            'password.required' => 'La contraseña es requerida.',
            'password.min' => 'La contraseña debe tener mínimo 8 caracteres.',
            'password.confirmed' => 'La contraseña debe ser confirmada.',
        ];
    }
}
