<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table="faculty_master";

    protected $fillable=[
        "faculty_name",
        "course_slug",
        "designation",
        "qualification",
        "teaching_exp",
        "research_exp",
        "industry_exp",
        "date_of_joining",
        "faculty_image",
        "hod",
        "active",
        "sequence"
    ];

    public function department()
{
    // The Faculty "has one" Department "through" the Course model.
    return $this->hasOneThrough(
        Department::class, // The final model you want to reach
        Course::class,     // The intermediate model
        'course_slug',              // Foreign key on the Course table (e.g., course_id)
        'department_slug',              // Foreign key on the Department table (e.g., department_id)
        'course_slug',       // Local key on Faculty table
        'department_slug'    // Local key on Course table
    );
} 
}
