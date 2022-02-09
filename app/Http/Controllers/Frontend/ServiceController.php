<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Service;

class ServiceController extends Controller
{
    //
    public function index(){
             
        $aboutUs =AboutUs::first();
        $services = Service::with(['media'])->get()->take(6);

     return view('frontend.services',compact('aboutUs','services'));
    }
    public function show($id){
             
        $aboutUs =AboutUs::first();
        $service=Service::findOrfail($id);
        $services = Service::with(['media'])->get();

     return view('frontend.service-details',compact('aboutUs','service','services'));
    }
}

