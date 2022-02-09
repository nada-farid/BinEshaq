<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAppointmentRequest;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Models\Appointment;
use Alert;


class AppointementController extends Controller
{
    public function index()
    {

        return view('frontend.appointment');
    }

    public function store(StoreAppointmentRequest $request)
    {
        $appointment = Appointment::create($request->all());

        Alert::success('تم  بنجاح', 'تم  حفظ بياتاتك بنجاح ');


        return redirect()->route('frontend.appointement');
    }
    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('employment_create') && Gate::denies('employment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Employment();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

   

