<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientRequest extends FormRequest
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
            'travelTime' => 'required|string|max:250',
            'patientName' => 'required|string|max:250',
            'patientGender' => 'required|string|max:250',
            'patientAge' => 'required|string|max:250',
            'patientContact' => 'required|string|max:11',
            'patientAddress' => 'required|string|max:250',
            'destination' => 'required|string|max:250',
            'diagnoses' => 'required|string|max:250',
            'reqStatus' => 'required|string|max:250',
        ];
    }
}
