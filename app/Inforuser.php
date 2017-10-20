<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inforuser extends Model
{
    protected $table = "inforuser";
    public function user(){
    	return $this->belongsTo('App\User','idUser','id');
    }
    
}
