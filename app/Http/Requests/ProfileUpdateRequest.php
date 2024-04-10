<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }

    public function messages(): array
    {
        return [
            'email.email' => 'El correo debe ser válido',
            'email.max' => 'El nombre del correo puede contener hasta 255 caracteres',
            'name.string' => 'El nombre de usuario es requerido',
            'name.max' => 'El nombre de usuario puede contener hasta 255 caracteres',
        ];
    }
}
