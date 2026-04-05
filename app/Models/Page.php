<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'published_verified_at'];
    protected $casts = [
        'content' => 'array',
        'published_verified_at' => 'datetime'
    ];
}
