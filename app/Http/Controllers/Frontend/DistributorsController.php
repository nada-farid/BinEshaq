<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Distributor;
use App\Models\AboutUs;

class DistributorsController extends Controller
{

    public function index()
    {
        $aboutUs =AboutUs::first();
        $distributors = Distributor::with(['media'])->paginate(24);

        return view('frontend.agents', compact('distributors','aboutUs'));
    }

   
}
