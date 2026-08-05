<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuccessStories extends Model
{
    protected $table="success_stories_master";

    protected $fillable=[
        "student_name",
        "course_slug",
        "image_name",
        "designation",
        "company",
        "batch",
        "active"
    ];
}
