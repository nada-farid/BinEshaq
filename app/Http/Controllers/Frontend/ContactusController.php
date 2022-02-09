<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactuRequest;
use App\Models\Contactu;
use App\Models\AboutUs;
use Alert;
use App\Models\Subscription;

class ContactusController extends Controller
{
    //

    public function store(StoreContactuRequest $request)
    {
        $contactu = Contactu::create($request->all());

        Alert::success('تم  بنجاح', 'تم  حفظ بياتاتك بنجاح ');

        return redirect()->route('frontend.home');
    }
    public function index()
    {
        $aboutUs =AboutUs::first();
   
        return view('frontend.contact',compact('aboutUs'));
    }

    public function subscription(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            
        ]);
    
        $subscription = Subscription::where('email',$request->email)->first();

        if($subscription){
            Alert::warning('لم يتم الأشتراك','تم الأشتراك من قبل');
        }else{
            $subscription = Subscription::create($request->all());
            Alert::success('تم الأشتراك بنجاح','سنوافيك بكل الأخبار الجديدة');
        }

        return back();
    }
}


