<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responder extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
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
