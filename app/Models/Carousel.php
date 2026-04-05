<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable = ['title', 'description', 'slug', 'is_active'];

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
