<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAmenitiesList extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'property_amenity_id',
    ];

    public function property()
    {
        return $this->belongsTo(Properties::class);
    }

    public function amenity()
    {
        return $this->belongsTo(PropertyAmenities::class, 'property_amenity_id');
    }
}
