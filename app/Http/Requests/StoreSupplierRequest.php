<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
           
            'name' => 'required|string|max:250',
            'contact' => 'required|string|max:250',
            'address' => 'required|string|max:250',
            'emailAddress' => 'required|string|max:250',
            'owner' => 'required|string|max:250',
            'yearEst' => 'required|string|max:250',
            'philgepsMembership' => 'required|string|max:250'
        ];
    }
}
