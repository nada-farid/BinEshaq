<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Project;

class ProjectController extends Controller
{
    //
    public function index(){
             
        $projects=Project::with(['media'])->get();
        $aboutUs =AboutUs::first();


     return view('frontend.projects',compact('projects','aboutUs'));
    }
    public function show($id){
             
        $project=Project::findOrfail($id);
        $projects=Project::with(['media'])->get();
     return view('frontend.project-details',compact('project','projects'));
    }
}
