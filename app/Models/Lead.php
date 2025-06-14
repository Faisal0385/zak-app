<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'property_type_id',
        'budget'
    ];

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }
}
