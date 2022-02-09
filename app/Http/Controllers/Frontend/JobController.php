<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreEmploymentRequest;
use App\Models\Employment;
use Alert;

use Symfony\Component\HttpFoundation\Response;

class JobController extends Controller
{
    //

    use MediaUploadingTrait;

    public function index()
    {

        return view('frontend.job');
    }

    public function store(StoreEmploymentRequest $request)
    {
        $employment = Employment::create($request->all());

        if ($request->input('cv', false)) {
            $employment->addMedia(storage_path('tmp/uploads/' . basename($request->input('cv'))))->toMediaCollection('cv');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $employment->id]);
        }

        Alert::success('تم  بنجاح', 'تم  حفظ بياتاتك بنجاح ');


        return redirect()->route('frontend.job');
    }
}
