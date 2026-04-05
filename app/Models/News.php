<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'event_id', 'published_verified_at'];
    protected $casts = [
        'content' => 'array',
        'published_verified_at' => 'datetime'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
