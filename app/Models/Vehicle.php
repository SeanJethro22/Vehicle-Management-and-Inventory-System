<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [

        'vehicleName',
        'plateNumber',
        'make',
        'series',
        'model',
        'bodyType',
        'yearModel',
        'engineNumber',
        'chassisNumber',
        'purchaseDate',
        'registrationDate',
        'purchaseCost',
        'depreciationCost',
        'propertyNumber',
    ];                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
}
