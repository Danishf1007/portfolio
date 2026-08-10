<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'github_url',
        'live_url',
        'technologies',
        'order',
        'featured',
    ];

    protected $casts = [
        'technologies' => 'array',
    ];
}
