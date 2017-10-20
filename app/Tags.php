<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
     protected $table = 'tags';
    public $guard = [];
     public function Tag_post(){
    	return $this->hasMany('App\Tag_post','id_tag','id');
    }
}
