<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $fillable=['title','body','user_id'];
    protected $hidden=['created_at','updated_at'];

    ###########Relation Methods###########
        public function comments(){
            return $this->hasMany('App\Model\Comment');
        }

        public function user(){
            return $this->belongsTo('App\User');
        }
    ###########Relation Methods###########

}
