<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumption extends Model
{
    use HasFactory;

    protected $fillable = [

        'date',
        'destination',
        'purpose',
        'km_start',
        'km_end',
        'td1',
        'ta1',
        'td2',
        'ta2',
        'dist-trav',
        'bal_start',
        'issued',
        'added',
        'total',
        'fuel_cons',
        'bal-end'
        
    ];
    
}
