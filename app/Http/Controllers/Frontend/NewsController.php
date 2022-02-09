<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\AboutUs;


class NewsController extends Controller
{
    //
    public function index(){
             
        $aboutUs =AboutUs::first();
        $news=News::with(['media'])->paginate(8);


     return view('frontend.news',compact('aboutUs','news'));
    }
    public function show($id){
             
        $aboutUs =AboutUs::first();
        $new=News::findOrfail($id);
        $news=News::with(['media'])->orderBy('updated_at','DESC')->get()->take(4);



     return view('frontend.news-details',compact('aboutUs','news'));
    }
}
