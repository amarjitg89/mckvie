<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table="course_master";

    protected $fillable=[
        "course_name",
        "course_slug",
        "department_slug",
        "active"
    ];

    public function depts()
    {
        return $this->belongsTo(Department::class,'department_slug','department_slug');
    }
}
