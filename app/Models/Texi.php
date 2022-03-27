<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Texi extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'drivername',
        'texinumber',
        'drivernumber',
        'rates',
        'image',
    ];
}
