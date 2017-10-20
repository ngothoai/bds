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

     public function singleproperty(){
        return $this->hasMany('App\singleproperty','iduser','id');
    }
     public function post(){
        return $this->hasMany('App\post','idUser','id');
    }
     public function role(){
        return $this->belongsTo('App\Role','id_Role','id');
    }
    public function inforuser(){
        return $this->hasOne('App\Inforuser','idUser','id');
    }
    public function isAdmin(){
        if($this->id_Role == 1) return true;
        return false;
    }
    public function isSeller(){
        if($this->id_Role == 3) return true;
        return false;
    }
}
