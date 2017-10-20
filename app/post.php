<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class post extends Model
{
    protected $table = 'posts';
    public $guard = [];
    public function user(){
    	return $this->belongsTo('App\User','idUser','id');
    }
     public function category(){
    	return $this->belongsTo('App\category','idcat','id');
    }
    public function images(){
    	return $this->belongsTo('App\Images','id_post','id');
    }
}
