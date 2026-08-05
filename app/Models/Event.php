<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table="event_master";

    protected $fillable=[
        "event_title",
        "event_slug",
        "course_slug",        
        "event_image",
        "event_description",
        "event_date",
        "event_location",
        "sequence",
        "active"
    ];
}
