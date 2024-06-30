<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = [

        'passengerFN',
        'passengerMN',
        'passengerLN',
        'suffix',
        'dob',
        'age',
        'gender',
        'civilStatus',
        'mobileNumber',
        'email',
        'ca_street',
        'ca_purok',
        'ca_brgy',
        'ca_cmun',
        'ca_province',
        'ca_zipcode',
        'employeeId',
        'designation',
        'status',
        'division'
    ];
}
