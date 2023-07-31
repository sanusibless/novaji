<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApiProductRequest extends FormRequest
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
        if($this->method() == "PUT") {
            return [
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|decimal:2',
            'image' => 'required|image'
            ];
        } else {
            return [
            'name' => 'sometimes|required|string',
            'description' => 'sometimes|required|string',
            'price' => 'sometimes|required|decimal:2',
            'image' => 'sometimes|required|image'
        ];
        }
        
    }
}
