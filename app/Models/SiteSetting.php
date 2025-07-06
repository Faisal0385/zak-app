<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_subtitle',
        'office_address',
        'head_office',
        'other_office_address',
        'email',
        'mobile',
        'phone_number',
        'hot_number',
        'working_days',
        'working_hours',
        'powered_by',
        'google_map_iframe',
        'footer_logo',
        'header_logo',
        'banner_image',
    ];
}
