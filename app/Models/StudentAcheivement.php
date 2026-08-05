<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAcheivement extends Model
{
    protected $table="student_acheivement_master";

    protected $fillable=[
        "course_slug",
        "student_name",
        "student_image",
        "batch",
        "description",
        "special_note",
        "active"
    ];

    
}
