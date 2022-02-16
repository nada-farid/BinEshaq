<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCompanyDevelopmentRequest;
use App\Http\Requests\StoreCompanyDevelopmentRequest;
use App\Http\Requests\UpdateCompanyDevelopmentRequest;
use App\Models\CompanyDevelopment;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CompanyDevelopmentController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('company_development_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companyDevelopments = CompanyDevelopment::with(['media'])->get();

        return view('admin.companyDevelopments.index', compact('companyDevelopments'));
    }

    public function create()
    {
        abort_if(Gate::denies('company_development_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companyDevelopments.create');
    }

    public function store(StoreCompanyDevelopmentRequest $request)
    {
        $companyDevelopment = CompanyDevelopment::create($request->all());

        if ($request->input('photo', false)) {
            $companyDevelopment->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $companyDevelopment->id]);
        }

        return redirect()->route('admin.company-developments.index');
    }

    public function edit(CompanyDevelopment $companyDevelopment)
    {
        abort_if(Gate::denies('company_development_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companyDevelopments.edit', compact('companyDevelopment'));
    }

    public function update(UpdateCompanyDevelopmentRequest $request, CompanyDevelopment $companyDevelopment)
    {
        $companyDevelopment->update($request->all());

        if ($request->input('photo', false)) {
            if (!$companyDevelopment->photo || $request->input('photo') !== $companyDevelopment->photo->file_name) {
                if ($companyDevelopment->photo) {
                    $companyDevelopment->photo->delete();
                }
                $companyDevelopment->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($companyDevelopment->photo) {
            $companyDevelopment->photo->delete();
        }

        return redirect()->route('admin.company-developments.index');
    }

    public function show(CompanyDevelopment $companyDevelopment)
    {
        abort_if(Gate::denies('company_development_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companyDevelopments.show', compact('companyDevelopment'));
    }

    public function destroy(CompanyDevelopment $companyDevelopment)
    {
        abort_if(Gate::denies('company_development_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companyDevelopment->delete();

        return back();
    }

    public function massDestroy(MassDestroyCompanyDevelopmentRequest $request)
    {
        CompanyDevelopment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('company_development_create') && Gate::denies('company_development_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CompanyDevelopment();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
