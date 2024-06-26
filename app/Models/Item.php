<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [

        'code',
        'image',
        'name',
        'category',
        'quantity',
        'unit',
        'dop',
        'description'
    ];
}
