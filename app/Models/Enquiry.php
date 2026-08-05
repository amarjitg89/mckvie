<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table="enquiry_master";

    protected $fillable=[
        "enquirer_name",
        "enquirer_contact",
        "enquirer_email",
        "department_slug",
        "course_slug"
    ];
}
