<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartRequest extends FormRequest
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
            
            'code' => 'required|string|max:10000|unique:parts,code',
            'name' => 'required|string|max:250',
            'category' => 'required|string|max:250',
            'quantity' => 'required|string|max:250',
            'dop' => 'required|string|max:250',
            'description' => 'nullable|string'
        ];
    }
}
