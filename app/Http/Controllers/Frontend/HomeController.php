<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Project;
use App\Models\Product;
use App\Models\News;

class HomeController extends Controller
{
    //
    public function index(){
             
        $aboutUs =AboutUs::first();
        $experience =Experience::first();
        $services = Service::with(['media'])->get()->take(6);
        $projects=Project::with(['media'])->get()->take(3);
        $products=Product::with(['media'])->get()->take(4);
        $news=News::with(['media'])->get()->take(3);


     return view('frontend.home',compact('aboutUs','experience','services','projects','products','news'));
    }
}
