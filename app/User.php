<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // EACH USER MAY HAVE MANY DISSCUSSION BUT EACH DISCUSSION IS BELONGS TO ONE USER
    public function discussions()
    {
        return $this->hasMany('App\Discussion');
    }

    // USER MAY HAVE MANY LIKES AND ONE LIKE ONLY BELONG TO ONE USER
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}