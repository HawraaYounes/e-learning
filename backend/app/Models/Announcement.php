<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Announcement extends Model
{
    protected $connection = 'mongodb';
    
    protected $fillable = [
        'instructor_id', 'description'
    ];
}
