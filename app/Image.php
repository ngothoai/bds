<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";
    public function post(){
    	return $this->belongsTo('App\post', 'id_post','id');
    }
}
