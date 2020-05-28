<?php

namespace App\Http\Controllers\Offers;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Illuminate\Http\Request;


class OfferController extends Controller
{
    public $module_view_folder;

    public function __construct()
    {
        $this -> module_view_folder ='front.offers';
    }

    public function index(){
        $products=Product::get();
        return view($this->module_view_folder.'/index',compact('products'));
    }

    public function show($product_id){
        $product=Product::find($product_id);
        return view($this->module_view_folder.'/details',compact('product'));
    }

}
