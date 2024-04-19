<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'message' => 'required|string',
            'subject' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'El nombre es requerido',
            'first_name.string' => 'El nombre debe ser en texto',
            'first_name.max' => 'El nombre puede contener un máximo de 255 caracteres',
            'last_name.required' => 'El apellido es requerido',
            'last_name.string' => 'El apellido debe ser en texto',
            'last_name.max' => 'El apellido puede contener un máximo de 255 caracteres',
            'message.required' => 'El mensaje o solicitud de productos es requerida',
            'message.string' => 'El mensaje o solicitud de productos debe ser en texto.',
            'subject.required' => 'El motivo es requerido',
            'subject.string' => 'El motivo debe ser en texto',
            'subject.max' => 'El motivo puede contener un máximo de 255 caracteres',
        ];
    }
}
