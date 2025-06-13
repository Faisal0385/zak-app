<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyTypeList extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'property_type_id',
    ];

    public function property()
    {
        return $this->belongsTo(Properties::class, 'property_id');
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }
}
