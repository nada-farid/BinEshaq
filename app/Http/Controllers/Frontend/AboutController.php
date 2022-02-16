<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Experience;
use App\Models\CompanyDevelopment;


class AboutController extends Controller
{
    //
    public function about(){ 

      $aboutUs =AboutUs::first();
      $experience =Experience::first();
      $developments = CompanyDevelopment::with(['media'])->get(); 

  return view('frontend.about',compact('aboutUs','experience','developments'));
    }
   public function target(){ 

     $aboutUs =AboutUs::first();

 return view('frontend.target',compact('aboutUs'));
    }

    public function vision(){ 

        $aboutUs =AboutUs::first();
   
    return view('frontend.vision',compact('aboutUs'));
    }
  }

