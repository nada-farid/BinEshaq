<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEmploymentRequest;
use App\Http\Requests\StoreEmploymentRequest;
use App\Http\Requests\UpdateEmploymentRequest;
use App\Models\Employment;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class EmploymentController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('employment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employments = Employment::with(['media'])->get();

        return view('admin.employments.index', compact('employments'));
    }

    public function create()
    {
        abort_if(Gate::denies('employment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employments.create');
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

        return redirect()->route('admin.employments.index');
    }

    public function edit(Employment $employment)
    {
        abort_if(Gate::denies('employment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employments.edit', compact('employment'));
    }

    public function update(UpdateEmploymentRequest $request, Employment $employment)
    {
        $employment->update($request->all());

        if ($request->input('cv', false)) {
            if (!$employment->cv || $request->input('cv') !== $employment->cv->file_name) {
                if ($employment->cv) {
                    $employment->cv->delete();
                }
                $employment->addMedia(storage_path('tmp/uploads/' . basename($request->input('cv'))))->toMediaCollection('cv');
            }
        } elseif ($employment->cv) {
            $employment->cv->delete();
        }

        return redirect()->route('admin.employments.index');
    }

    public function show(Employment $employment)
    {
        abort_if(Gate::denies('employment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employments.show', compact('employment'));
    }

    public function destroy(Employment $employment)
    {
        abort_if(Gate::denies('employment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employment->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmploymentRequest $request)
    {
        Employment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
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
