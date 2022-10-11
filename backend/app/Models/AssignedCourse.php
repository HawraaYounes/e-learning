<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class AssignedCourse extends Eloquent
{
    protected $connection = 'mongodb';
    
    protected $fillable = [
        'instructor_id', 'course_id'
    ];
}
