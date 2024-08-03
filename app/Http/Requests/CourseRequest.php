<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required|numeric|max:8',
        ];
    }

    public function messages(): array{
        return[
            'name.required' => "Campo Nome obrigatório!",
            'price.required' => "Campo Preço obrigatório!",
            'price.max' => "Campo Preço no máximo 8 caracteres!",
            'price.numeric' => "Campo Preço só pode ter números!",
        ];
    }
}
