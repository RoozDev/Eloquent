<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function QueryLocalScope(){
     $products = Product::query()->comparison()->get();
        echo 'local scope : ' ;
     foreach ($products as $product){
         echo $product['store']."&nbsp;&nbsp;&nbsp;&nbsp;";
     }
    }
}
