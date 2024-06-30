<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResponderRequest extends FormRequest
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
            
        'responderFN' => 'required|string|max:250',
        'responderMN' => 'required|string|max:250',
        'responderLN' => 'required|string|max:250',
        'suffix' => 'required|string|max:250',
        'dob' => 'required|string|max:250',
        'age' => 'required|string|max:2',
        'gender' => 'required|string|max:250',
        'civilStatus' => 'required|string|max:250',
        'mobileNumber' => 'required|string|max:250',
        'email' => 'required|string|max:250',
        'ca_street' => 'required|string|max:250',
        'ca_purok' => 'required|string|max:250',
        'ca_brgy' => 'required|string|max:250',
        'ca_cmun' => 'required|string|max:250',
        'ca_province' => 'required|string|max:250',
        'ca_zipcode' => 'required|string|max:4',
        'employeeId' => 'required|string|max:250',
        'designation' => 'required|string|max:250',
        'status' => 'required|string|max:250',
        'division' => 'required|string|max:250'
        ];
    }
}
