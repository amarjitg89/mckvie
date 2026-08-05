<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlumniRegistration extends Model
{
    protected $table="alumni_registration_master";

    protected $fillable=[
        "alumni_name",
        "alumni_contact",
        "alumni_email",
        "department_slug",
        "passing_year",
        "organisation_name",
        "location",
        "designation"
    ];
}
