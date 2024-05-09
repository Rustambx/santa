<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SantaRequest extends FormRequest
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
            'code' => 'required|json'
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'Поле :attribute обязательно для заполнения.',
            'code.json' => 'Поле :attribute должно быть в формате JSON.',
        ];
    }

    public function attributes()
    {
        return [
            'code' => 'Массив email адресов',
        ];
    }
}
