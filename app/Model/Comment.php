<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';
    protected $fillable=['comment','user_id','post_id'];
    protected $hidden=['created_at','updated_at'];

    #############Relation Methods###############
        public function user(){
            return $this->belongsTo('App\User');
        }

        public function post(){
            return $this->belongsTo('App\Model\Post');
        }
    #############Relation Methods###############
}
