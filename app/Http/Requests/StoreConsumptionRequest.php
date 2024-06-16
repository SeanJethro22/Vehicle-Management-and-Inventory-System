<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsumptionRequest extends FormRequest
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
            'plateNumber' => 'required',
            'driverName' => 'required',
            'passengerName' => 'required',
            'destination' => 'required|string|max:100',
            'purpose' => 'required|string|max:100',
            'km_start' => 'required|integer|min:1|max:1000000',
            'km_end' => 'required|integer|min:1|max:1000000',
            'td1' => 'required|string|min:1|max:1000000',
            'ta1' => 'required|string|min:1|max:1000000',
            'td2' => 'required|string|min:1|max:1000000',
            'ta2' => 'required|string|min:1|max:1000000',
            'dist_trav' => 'required|string|min:1|max:1000000',
            'bal_start' => 'required|integer|min:1|max:1000000',
            'issued' => 'required|integer|min:0|max:1000000',
            'added' => 'required|integer|min:1|max:1000000',
            'total' => 'required|string|min:1|max:1000000',
            'fuel_cons' => 'required|integer|min:1|max:1000000',
            'bal_end' => 'required|string|min:1|max:1000000'
        
        ];
    }
}
