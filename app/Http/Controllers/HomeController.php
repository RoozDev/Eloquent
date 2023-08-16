<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function QueryGlobalScope(){
        $products = Product::query()->comparison()->get();
        echo 'global scope : ' ;
        foreach ($products as $product){
            echo $product['store']."&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
}
