<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_name',
        'slug',
        'developer_name',
        'address',
        'image',
        'status',
        'is_featured',
    ];
}
