<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getCompany()
    {
        return $this->hasOne('App\Company', 'id');
    }

    public function profile()
    {
        return $this->hasOne('App\UserProfile', 'user_id');
    }

    public function groups()
    {
        return $this->hasMany('App\UserGroupRelation', 'user_id');
    }
}
