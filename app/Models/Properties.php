<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'property_name',
        'property_id',
        'price',
        'before_price_label',
        'after_price_label',
        'price_unit',
        'price_on_call',
        'size',
        'land',
        'room',
        'bedroom',
        'bathroom',
        'garages',
        'garages_size',
        'year_built',
        'city_id',
        'province_id',
        'country_id',
        'description',
        'address',
        'google_map',
        'video_url',
        'featured_image',
        'file_attachment',
        'status',
        'for_rent',
        'for_sale',
        'hot_offer',
        'sale',
        'sold',
    ];

    // Relationships
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
