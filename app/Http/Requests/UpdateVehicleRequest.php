<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehicleRequest extends FormRequest
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
            
            'vehicleName' => 'required|string|max:250',
            'mvfileNo' => 'required|string|max:250',
            'plateNumber' => 'required|string|max:250',
            'engineNumber' => 'required|string|max:250',
            'chassisNumber' => 'required|string|max:250',
            'demonition' =>'required|string|max:250',
            'pistonDisplacement' => 'required|string|max:250',
            'cylinders' => 'required|string|max:250',
            'fuel' => 'required|string|max:250',
            'make' => 'required|string|max:250',
            'series' => 'required|string|max:250',
            'bodyType' => 'required|string|max:250',
            'yearModel' => 'required|string|max:250',
            'color' => 'required|string|max:250',
            'grossWt' => 'required|string|max:250',
            'netWt' => 'required|string|max:250',
            'shippingWt' => 'required|string|max:250',
            'netCap' => 'required|string|max:250', 
            'purchasedDate' => 'required|string|max:250',
            'registrationDate' => 'required|string|max:250',
            'orNo' => 'required|string|max:250',
            'purchasedCost' => 'required|string|max:250',
            'depreciationCost' => 'required|string|max:250',
            'propertyNumber' => 'required|string|max:250'
        ];
    }
}
