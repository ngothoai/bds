<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag_post extends Model
{
    protected $table = 'tag_post';
    public $guard = [];
    public function post(){
    	return $this->hasMany('App\post','id_post','id');
    }
    public function tag(){
    	return $this->belongsTo('App\Tags','id_tag','id');
    }
}