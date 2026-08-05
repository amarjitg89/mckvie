<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    protected $table="event_image_master";

    protected $fillable=[
    "event_slug",
    "event_image",
    "sequence",
    "active"
    ];

    public function event()
    {
        return $this->belongsTo(Event::class,"event_slug","event_slug");
    }
}
