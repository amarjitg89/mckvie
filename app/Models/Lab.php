<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $table="lab_master";

    protected $fillable=[
        "title",
        "course_slug",
        "lab_image",        
        "active"
    ];
}
