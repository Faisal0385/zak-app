<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_title',
        'banner_image',
        'our_story',
        'mission',
        'vision',
        'video_link',
    ];
}
