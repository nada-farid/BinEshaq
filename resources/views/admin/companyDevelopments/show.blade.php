@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.companyDevelopment.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.company-developments.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.companyDevelopment.fields.id') }}
                        </th>
                        <td>
                            {{ $companyDevelopment->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.companyDevelopment.fields.year') }}
                        </th>
                        <td>
                            {{ $companyDevelopment->year }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.companyDevelopment.fields.description') }}
                        </th>
                        <td>
                            {{ $companyDevelopment->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.companyDevelopment.fields.photo') }}
                        </th>
                        <td>
                            @if($companyDevelopment->photo)
                                <a href="{{ $companyDevelopment->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $companyDevelopment->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.company-developments.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection