@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.project.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.projects.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.project.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="place">{{ trans('cruds.project.fields.place') }}</label>
                <input class="form-control {{ $errors->has('place') ? 'is-invalid' : '' }}" type="text" name="place" id="place" value="{{ old('place', '') }}" required>
                @if($errors->has('place'))
                    <div class="invalid-feedback">
                        {{ $errors->first('place') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.place_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date">{{ trans('cruds.project.fields.date') }}</label>
                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date') }}" required>
                @if($errors->has('date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="client">{{ trans('cruds.project.fields.client') }}</label>
                <input class="form-control {{ $errors->has('client') ? 'is-invalid' : '' }}" type="text" name="client" id="client" value="{{ old('client', '') }}" required>
                @if($errors->has('client'))
                    <div class="invalid-feedback">
                        {{ $errors->first('client') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.client_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="classification">{{ trans('cruds.project.fields.classification') }}</label>
                <input class="form-control {{ $errors->has('classification') ? 'is-invalid' : '' }}" type="text" name="classification" id="classification" value="{{ old('classification', '') }}" required>
                @if($errors->has('classification'))
                    <div class="invalid-feedback">
                        {{ $errors->first('classification') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.classification_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="during">{{ trans('cruds.project.fields.during') }}</label>
                <input class="form-control {{ $errors->has('during') ? 'is-invalid' : '' }}" type="text" name="during" id="during" value="{{ old('during', '') }}" required>
                @if($errors->has('during'))
                    <div class="invalid-feedback">
                        {{ $errors->first('during') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.during_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="breif">{{ trans('cruds.project.fields.breif') }}</label>
                <textarea class="form-control {{ $errors->has('breif') ? 'is-invalid' : '' }}" name="breif" id="breif" required>{{ old('breif') }}</textarea>
                @if($errors->has('breif'))
                    <div class="invalid-feedback">
                        {{ $errors->first('breif') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.breif_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.project.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="photo">{{ trans('cruds.project.fields.photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="photo-dropzone">
                </div>
                @if($errors->has('photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.photo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="project_slider">{{ trans('cruds.project.fields.project_slider') }}</label>
                <div class="needsclick dropzone {{ $errors->has('project_slider') ? 'is-invalid' : '' }}" id="project_slider-dropzone">
                </div>
                @if($errors->has('project_slider'))
                    <div class="invalid-feedback">
                        {{ $errors->first('project_slider') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.project_slider_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.projects.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($project) && $project->photo)
      var file = {!! json_encode($project->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    var uploadedProjectSliderMap = {}
Dropzone.options.projectSliderDropzone = {
    url: '{{ route('admin.projects.storeMedia') }}',
    maxFilesize: 10, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="project_slider[]" value="' + response.name + '">')
      uploadedProjectSliderMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedProjectSliderMap[file.name]
      }
      $('form').find('input[name="project_slider[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($project) && $project->project_slider)
      var files = {!! json_encode($project->project_slider) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="project_slider[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection