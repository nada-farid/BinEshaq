<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutController extends Controller
{
    //
   public function target(){ 

     $aboutUs =AboutUs::first();

 return view('frontend.target',compact('aboutUs'));
    }

    public function vision(){ 

        $aboutUs =AboutUs::first();
   
    return view('frontend.vision',compact('aboutUs'));
    }
  }

