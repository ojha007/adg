<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Events extends Model
{

    protected $table = 'events';
    protected $fillable = [
        'title', 'description', 'image', 'external_link', 'time',
        'longitude', 'latitude', 'slug', 'location'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($event) {
            $event->slug = Str::slug($event->title);
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }


}
