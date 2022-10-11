<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Course extends Eloquent
{
    protected $connection = 'mongodb';
    
    protected $fillable = [
        'code', 'name'
    ];
}

