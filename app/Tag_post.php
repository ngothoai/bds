<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag_post extends Model
{
    protected $table = 'tag_post';
    public $guard = [];
    return $this->belongsTo('App\Tags','id_tag','id');
}
