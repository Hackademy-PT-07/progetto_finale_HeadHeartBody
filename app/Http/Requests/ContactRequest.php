<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:25',
            
            'email' => 'required|email',

            'textMessage' => 'required|max: 200'
        ];
    }

    public function messages(): array
    {
        return [
            
            'required' => 'Campo obbligatorio',
            
            'email' => 'Email non valida',

            'max' => 'Limite massimo caratteri superato',
        ];
    }
}
