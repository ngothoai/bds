<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
   protected $table = 'category';
    public $guard = [];
    public function post(){
    	 return $this->hasMany('App\post','idcat','id');
    }
  

    public function parent()
    {
        return $this->belongsTo('App\category', 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany('App\category', 'parent_id','id');
    }
}
