<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [

        'requestDate',
        'travelDate',
        'travelTime',
        'patientName',
        'patientGender',
        'patientAge',
        'patientContact',
        'patientAddress',
        'destination',
        'diagnoses',
        'reqStatus',

    ];
    
}
