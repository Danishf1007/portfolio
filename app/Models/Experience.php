<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'company',
        'role',
        'start_date',
        'end_date',
        'bullets',
        'order',
    ];

    protected $casts = [
        'bullets' => 'array',
    ];
}
