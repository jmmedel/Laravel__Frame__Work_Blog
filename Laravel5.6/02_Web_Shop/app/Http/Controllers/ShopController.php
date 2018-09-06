<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
class ShopController extends Controller
{
    //

    public function index(){


        return view('shop.index');
    }

    public function singleProduct($id){
     
        $product = Product::findOrFail($id);
        return view('shop.singleProduct');
    }


    public function orderProduct(){


    }

}
