<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable =[
        'destination_id',
        'image_id',
        'packagename',
        'duration',
        'itenary',
        'rates'
    ];
}
