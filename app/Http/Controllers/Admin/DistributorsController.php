<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyDistributorRequest;
use App\Http\Requests\StoreDistributorRequest;
use App\Http\Requests\UpdateDistributorRequest;
use App\Models\Distributor;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class DistributorsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('distributor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $distributors = Distributor::with(['media'])->get();

        return view('admin.distributors.index', compact('distributors'));
    }

    public function create()
    {
        abort_if(Gate::denies('distributor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.distributors.create');
    }

    public function store(StoreDistributorRequest $request)
    {
        $distributor = Distributor::create($request->all());

        foreach ($request->input('photo', []) as $file) {
            $distributor->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $distributor->id]);
        }

        return redirect()->route('admin.distributors.index');
    }

    public function edit(Distributor $distributor)
    {
        abort_if(Gate::denies('distributor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.distributors.edit', compact('distributor'));
    }

    public function update(UpdateDistributorRequest $request, Distributor $distributor)
    {
        $distributor->update($request->all());

        if (count($distributor->photo) > 0) {
            foreach ($distributor->photo as $media) {
                if (!in_array($media->file_name, $request->input('photo', []))) {
                    $media->delete();
                }
            }
        }
        $media = $distributor->photo->pluck('file_name')->toArray();
        foreach ($request->input('photo', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $distributor->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('photo');
            }
        }

        return redirect()->route('admin.distributors.index');
    }

    public function show(Distributor $distributor)
    {
        abort_if(Gate::denies('distributor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.distributors.show', compact('distributor'));
    }

    public function destroy(Distributor $distributor)
    {
        abort_if(Gate::denies('distributor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $distributor->delete();

        return back();
    }

    public function massDestroy(MassDestroyDistributorRequest $request)
    {
        Distributor::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('distributor_create') && Gate::denies('distributor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Distributor();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
