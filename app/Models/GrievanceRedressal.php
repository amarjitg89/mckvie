<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrievanceRedressal extends Model
{
    protected $table="grievance_redressal_master";

    protected $fillable=[
            "category",
            "grievance_name",
            "grievance_contact",
            "grievance_email",
            "gender",
            "complaint_category",
            "complaint_details"
    ];
}
