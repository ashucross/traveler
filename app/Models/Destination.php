<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destination extends Model
{
    use HasFactory;
    public $fillable = [
        'name'
    ];

    public function category(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function package(): HasMany
    {
        return $this->hasMany(Package::class);
    }
}
