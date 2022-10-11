<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use MongoDB\Operation\FindOneAndUpdate;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements JWTSubject
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $connection = 'mongodb';
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',
    ];
    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

  
    public function getJWTCustomClaims()
    {
        return [];
    }

}
