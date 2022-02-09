<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

  public function index(){
             
        $products=Product::with(['media'])->paginate(8);
        $aboutUs =AboutUs::first();


     return view('frontend.products',compact('products','aboutUs'));
    }
    public function show($id){
             
        $product=Product::findOrfail($id);
        $aboutUs =AboutUs::first();
     return view('frontend.product-details',compact('product','aboutUs'));
    }
}