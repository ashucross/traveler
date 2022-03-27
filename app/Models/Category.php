<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public $fillable = [
        'Destination_id',
        'name'
    ];


    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }

    public function packages(): HasMany
    {
        return $this->hasMany(Package::class);
    }
}
