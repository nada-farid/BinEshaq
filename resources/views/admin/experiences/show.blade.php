@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.experience.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.experiences.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.experience.fields.id') }}
                        </th>
                        <td>
                            {{ $experience->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.experience.fields.brief_summary') }}
                        </th>
                        <td>
                            {{ $experience->brief_summary }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.experience.fields.description') }}
                        </th>
                        <td>
                            {{ $experience->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.experience.fields.years') }}
                        </th>
                        <td>
                            {{ $experience->years }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.experience.fields.projects') }}
                        </th>
                        <td>
                            {{ $experience->projects }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.experience.fields.special_customer') }}
                        </th>
                        <td>
                            {{ $experience->special_customer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.experience.fields.worker') }}
                        </th>
                        <td>
                            {{ $experience->worker }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.experiences.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection