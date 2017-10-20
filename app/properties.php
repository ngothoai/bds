<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class properties extends Model
{
    protected $table = 'properties';
    public $guard = [];
     public function singleproperty(){
    	return $this->hasMany('App\singleproperty','id_Role','id');
    }
}
