<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormEmailRequest extends FormRequest
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
            'nombreCompleto' => 'required|string|max:255',
            'nombreEmpresa' => 'required|string|max:255',
            'numeroWhatsapp' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'tipoServicio' => 'required|string|max:255',
            'motivoContacto' => 'required|string',
        ];
    }
}
