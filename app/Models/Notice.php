<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table="notice_master";

    protected $fillable=[
        "notice",
        "department_slug",
        "active"
    ];
}
