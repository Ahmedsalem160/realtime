<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = "offers";
    protected $fillable=['order_no','total_amount','user_id','offer_id','bank_transaction_id','created_at','updated_at'];
    protected $hidden =['created_at','updated_at'];
    public $timestamps = true;
}


