<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseEnquiry extends Model
{
    protected $table="course_enquiry_master";

    protected $fillable=[
        "enquirer_name",
        "enquirer_contact",
        "enquirer_email",        
        "course_slug",
        "course_enquiry"
    ];
}
