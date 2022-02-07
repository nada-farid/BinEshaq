@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.experience.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.experiences.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="brief_summary">{{ trans('cruds.experience.fields.brief_summary') }}</label>
                <textarea class="form-control {{ $errors->has('brief_summary') ? 'is-invalid' : '' }}" name="brief_summary" id="brief_summary" required>{{ old('brief_summary') }}</textarea>
                @if($errors->has('brief_summary'))
                    <div class="invalid-feedback">
                        {{ $errors->first('brief_summary') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.experience.fields.brief_summary_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.experience.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" required>{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.experience.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="years">{{ trans('cruds.experience.fields.years') }}</label>
                <input class="form-control {{ $errors->has('years') ? 'is-invalid' : '' }}" type="number" name="years" id="years" value="{{ old('years', '') }}" step="1" required>
                @if($errors->has('years'))
                    <div class="invalid-feedback">
                        {{ $errors->first('years') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.experience.fields.years_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="projects">{{ trans('cruds.experience.fields.projects') }}</label>
                <input class="form-control {{ $errors->has('projects') ? 'is-invalid' : '' }}" type="number" name="projects" id="projects" value="{{ old('projects', '') }}" step="1" required>
                @if($errors->has('projects'))
                    <div class="invalid-feedback">
                        {{ $errors->first('projects') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.experience.fields.projects_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="special_customer">{{ trans('cruds.experience.fields.special_customer') }}</label>
                <input class="form-control {{ $errors->has('special_customer') ? 'is-invalid' : '' }}" type="number" name="special_customer" id="special_customer" value="{{ old('special_customer', '') }}" step="1" required>
                @if($errors->has('special_customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('special_customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.experience.fields.special_customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="worker">{{ trans('cruds.experience.fields.worker') }}</label>
                <input class="form-control {{ $errors->has('worker') ? 'is-invalid' : '' }}" type="number" name="worker" id="worker" value="{{ old('worker', '') }}" step="1" required>
                @if($errors->has('worker'))
                    <div class="invalid-feedback">
                        {{ $errors->first('worker') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.experience.fields.worker_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection