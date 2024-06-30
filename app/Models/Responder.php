<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responder extends Model
{
    use HasFactory;

    protected $fillable = [

        'responderFN',
        'responderMN',
        'responderLN',
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
