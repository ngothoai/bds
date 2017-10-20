<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class singleproperty extends Model
{
    protected $table = 'singleproperty';
    public $guard = [];
    public function properties(){
    	return $this->belongsTo('App\properties','idproperty','id');
    }
    public function user(){
    	return $this->belongsTo('App\User','iduser','id');
    }
}
