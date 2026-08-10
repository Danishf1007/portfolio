<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'bio',
        'email',
        'phone',
        'location',
        'avatar_url',
        'social_links',
    ];

    protected $casts = [
        'social_links' => 'array',
    ];
}
