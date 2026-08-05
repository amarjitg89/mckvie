<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    protected $table="recruiters_master";

    protected $fillable=[
        "course_slug",
        "image_name",
        "active",
        "sequence"
    ];
}
