<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumption extends Model
{
    use HasFactory;

    protected $fillable = [

        'date',
        'passenger',
        'destination',
        'purpose',
        'km_start',
        'km_end',
        'dist-trav',
        'bal_start',
        'bal-end',
        'fuel_cons'
    ];
}
