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
            
            'name' => 'required|string|max:50',
            'dob' => 'required|string|max:20',
            'age' => 'required|integer|min:1|max:100',
            'address' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'civilStatus' => 'required|string|max:20',
            'mobileNumber' => 'required|string|min:1|max:11|unique:responders,mobileNumber',
            'employeeId' => 'required|string|min:1|max:10000000000|unique:responders,employeeId',
            'position' => 'required|string|max:50',
            'status' => 'required|string|max:50',
            'division' => 'required|string|max:50'
        ];
    }
}
