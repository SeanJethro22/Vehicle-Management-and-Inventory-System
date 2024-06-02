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
        'plateNumber' => 'required|string|max:250|unique:vehicles,plateNumber,'.$this->vehicle->plateNumber,
        'make' => 'required|string|max:250',
        'series' => 'required|string|max:250',
        'model' => 'required|string|max:250',
        'bodyType' => 'required|string|max:250',
        'yearModel' => 'required|string|max:250',
        'engineNumber' => 'required|string|max:250|unique:vehicles,engineNumber,'.$this->vehicle->engineNumber,
        'chassisNumber' => 'required|string|max:250|unique:vehicles,chassisNumber,'.$this->vehicle->chassisNumber,
        'purchaseDate' => 'required|string|max:250',
        'registrationDate' => 'required|string|max:250',
        'purchaseCost' => 'required|string|max:250',
        'depreciationCost' => 'required|string|max:250',
        'propertyNumber' => 'required|string|max:250|unique:vehicles,propertyNumber,'.$this->vehicle->propertyNumber
        ];
    }
}
