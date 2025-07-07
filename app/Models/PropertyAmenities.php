<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAmenities extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'icon_class'
    ];

    public function properties()
    {
        return $this->belongsToMany(Properties::class, 'property_amenities_lists')
            ->withTimestamps();
    }
}
