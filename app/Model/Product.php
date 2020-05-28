<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable=['title','description','price','created_at','updated_at'];
    protected $hidden =['created_at','updated_at'];
    public $timestamps = true;



    //owner
    public function user(){
        return $this ->  belongsTo('App\User','user_id','id');
    }
}
