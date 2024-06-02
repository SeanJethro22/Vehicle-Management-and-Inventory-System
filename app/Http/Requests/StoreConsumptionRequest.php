<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsumptionsRequest extends FormRequest
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
            
            'date' => 'required|string|max:10',
            'passenger' => 'required|string|max:250',
            'destination' => 'required|string|max:100',
            'purpose' => 'required|string|max:100',
            'km_start' => 'required|integer|min:1|max:100',
            'km_end' => 'required|integer|min:1|max:100',
            'dist_trav' => 'required|integer|min:1|max:100',
            'bal_start' => 'required|integer|min:1|max:100',
            'bal_end' => 'required|integer|min:1|max:100',
            'fuel_cons' => 'required|integer|min:1|max:100'
        ];
    }
}
