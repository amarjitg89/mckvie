<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CorporateTieUp extends Model
{
    protected $table="corporate_tieup_master";

    protected $fillable=[
        "course_slug",
        "image_name",
        "active",
        "sequence"
    ];
}
