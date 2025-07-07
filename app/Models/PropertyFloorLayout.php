<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFloorLayout extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'floor_name',
        'floor_price',
        'price_postfix',
        'floor_size',
        'bedroom',
        'bathroom',
        'description',
        'floor_layout_image',
    ];

    public function property()
    {
        return $this->belongsTo(Properties::class);
    }
}
