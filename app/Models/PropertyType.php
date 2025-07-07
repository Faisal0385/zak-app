<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image'
    ];

    public function properties()
    {
        return $this->belongsToMany(Properties::class, 'property_type_lists')
            ->withTimestamps();
    }


    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}
