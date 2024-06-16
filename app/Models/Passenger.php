<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = [

        'passengerName',
        'dob',
        'age',
        'address',
        'gender',
        'civilStatus',
        'mobileNumber',
        'employeeId',
        'position',
        'status',
        'division'
    ];
}
