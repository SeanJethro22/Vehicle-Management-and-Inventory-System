<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [

        'vehicleName',
        'mvfileNo',
        'plateNumber', 
        'engineNumber', 
        'chassisNumber',
        'demonition',
        'pistonDisplacement',
        'cylinders',
        'fuel',
        'make', 
        'series', 
        'bodyType', 
        'yearModel', 
        'color',
        'grossWt',
        'netWt',
        'shippingWt',
        'netCap',        
        'purchasedDate', 
        'registrationDate', 
        'orNo',
        'purchasedCost',
        'depreciationCost', 
        'propertyNumber'
    ];
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
}
