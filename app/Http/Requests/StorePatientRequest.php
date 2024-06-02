<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
            
            'requestDate' => 'required|string|max:250',
            'travelDate' => 'required|string|max:250',
            'timeDate' => 'required|string|max:250',
            'patientName' => 'required|string|max:250',
            'patientGender' => 'required|string|max:250',
            'patientContact' => 'required|string|max:11',
            'patientAddress' => 'required|string|max:250',
            'destination' => 'required|string|max:250',
            'condition' => 'required|string|max:250',
            'reqStatus' => 'required|string|max:250'
        ];
    }
}
