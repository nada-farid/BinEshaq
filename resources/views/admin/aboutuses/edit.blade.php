@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.aboutUs.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.aboutuses.update", [$aboutUs->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
            <div class="form-group col-md-6">
                <label class="required" for="breif">{{ trans('cruds.aboutUs.fields.breif') }}</label>
                <textarea class="form-control {{ $errors->has('breif') ? 'is-invalid' : '' }}" name="breif" id="breif" required>{{ old('breif', $aboutUs->breif) }}</textarea>
                @if($errors->has('breif'))
                    <div class="invalid-feedback">
                        {{ $errors->first('breif') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.breif_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="description">{{ trans('cruds.aboutUs.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" required>{{ old('description', $aboutUs->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.description_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="email_1">{{ trans('cruds.aboutUs.fields.email_1') }}</label>
                <input class="form-control {{ $errors->has('email_1') ? 'is-invalid' : '' }}" type="email" name="email_1" id="email_1" value="{{ old('email_1', $aboutUs->email_1) }}" required>
                @if($errors->has('email_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.email_1_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="email_2">{{ trans('cruds.aboutUs.fields.email_2') }}</label>
                <input class="form-control {{ $errors->has('email_2') ? 'is-invalid' : '' }}" type="text" name="email_2" id="email_2" value="{{ old('email_2', $aboutUs->email_2) }}" required>
                @if($errors->has('email_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.email_2_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="vision">{{ trans('cruds.aboutUs.fields.vision') }}</label>
                <textarea class="form-control {{ $errors->has('vision') ? 'is-invalid' : '' }}" name="vision" id="vision" required>{{ old('vision', $aboutUs->vision) }}</textarea>
                @if($errors->has('vision'))
                    <div class="invalid-feedback">
                        {{ $errors->first('vision') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.vision_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="goals">{{ trans('cruds.aboutUs.fields.goals') }}</label>
                <textarea class="form-control {{ $errors->has('goals') ? 'is-invalid' : '' }}" name="goals" id="goals" required>{{ old('goals', $aboutUs->goals) }}</textarea>
                @if($errors->has('goals'))
                    <div class="invalid-feedback">
                        {{ $errors->first('goals') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.goals_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="phone_1">{{ trans('cruds.aboutUs.fields.phone_1') }}</label>
                <input class="form-control {{ $errors->has('phone_1') ? 'is-invalid' : '' }}" type="text" name="phone_1" id="phone_1" value="{{ old('phone_1', $aboutUs->phone_1) }}" required>
                @if($errors->has('phone_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.phone_1_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="phone_2">{{ trans('cruds.aboutUs.fields.phone_2') }}</label>
                <input class="form-control {{ $errors->has('phone_2') ? 'is-invalid' : '' }}" type="text" name="phone_2" id="phone_2" value="{{ old('phone_2', $aboutUs->phone_2) }}" required>
                @if($errors->has('phone_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.phone_2_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="address">{{ trans('cruds.aboutUs.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $aboutUs->address) }}" required>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.address_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="time">{{ trans('cruds.aboutUs.fields.time') }}</label>
                <input class="form-control {{ $errors->has('time') ? 'is-invalid' : '' }}" type="text" name="time" id="time" value="{{ old('time', $aboutUs->time) }}" required>
                @if($errors->has('time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.time_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label for="phote">{{ trans('cruds.aboutUs.fields.phote') }}</label>
                <div class="needsclick dropzone {{ $errors->has('phote') ? 'is-invalid' : '' }}" id="phote-dropzone">
                </div>
                @if($errors->has('phote'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phote') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.phote_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="facebook">{{ trans('cruds.aboutUs.fields.facebook') }}</label>
                <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="text" name="facebook" id="facebook" value="{{ old('facebook', $aboutUs->facebook) }}" required>
                @if($errors->has('facebook'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facebook') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.facebook_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="twitter">{{ trans('cruds.aboutUs.fields.twitter') }}</label>
                <input class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="text" name="twitter" id="twitter" value="{{ old('twitter', $aboutUs->twitter) }}" required>
                @if($errors->has('twitter'))
                    <div class="invalid-feedback">
                        {{ $errors->first('twitter') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.twitter_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="instegram">{{ trans('cruds.aboutUs.fields.instegram') }}</label>
                <input class="form-control {{ $errors->has('instegram') ? 'is-invalid' : '' }}" type="text" name="instegram" id="instegram" value="{{ old('instegram', $aboutUs->instegram) }}" required>
                @if($errors->has('instegram'))
                    <div class="invalid-feedback">
                        {{ $errors->first('instegram') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.instegram_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="youtube">{{ trans('cruds.aboutUs.fields.youtube') }}</label>
                <input class="form-control {{ $errors->has('youtube') ? 'is-invalid' : '' }}" type="text" name="youtube" id="youtube" value="{{ old('youtube', $aboutUs->youtube) }}" required>
                @if($errors->has('youtube'))
                    <div class="invalid-feedback">
                        {{ $errors->first('youtube') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.youtube_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="linkedin">{{ trans('cruds.aboutUs.fields.linkedin') }}</label>
                <input class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', $aboutUs->linkedin) }}" required>
                @if($errors->has('linkedin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('linkedin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.linkedin_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="services_text">{{ trans('cruds.aboutUs.fields.services_text') }}</label>
                <textarea class="form-control {{ $errors->has('services_text') ? 'is-invalid' : '' }}" name="services_text" id="services_text" required>{{ old('services_text', $aboutUs->services_text) }}</textarea>
                @if($errors->has('services_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('services_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.services_text_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="projects_text">{{ trans('cruds.aboutUs.fields.projects_text') }}</label>
                <textarea class="form-control {{ $errors->has('projects_text') ? 'is-invalid' : '' }}" name="projects_text" id="projects_text" required>{{ old('projects_text', $aboutUs->projects_text) }}</textarea>
                @if($errors->has('projects_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('projects_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.projects_text_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="products_text">{{ trans('cruds.aboutUs.fields.products_text') }}</label>
                <textarea class="form-control {{ $errors->has('products_text') ? 'is-invalid' : '' }}" name="products_text" id="products_text" required>{{ old('products_text', $aboutUs->products_text) }}</textarea>
                @if($errors->has('products_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('products_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.products_text_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="news_text">{{ trans('cruds.aboutUs.fields.news_text') }}</label>
                <textarea class="form-control {{ $errors->has('news_text') ? 'is-invalid' : '' }}" name="news_text" id="news_text" required>{{ old('news_text', $aboutUs->news_text) }}</textarea>
                @if($errors->has('news_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('news_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.news_text_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label for="contact_text">{{ trans('cruds.aboutUs.fields.contact_text') }}</label>
                <textarea class="form-control {{ $errors->has('contact_text') ? 'is-invalid' : '' }}" name="contact_text" id="contact_text">{{ old('contact_text', $aboutUs->contact_text) }}</textarea>
                @if($errors->has('contact_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.contact_text_helper') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label class="required" for="logo">{{ trans('cruds.aboutUs.fields.logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.photeDropzone = {
    url: '{{ route('admin.aboutuses.storeMedia') }}',
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
      $('form').find('input[name="phote"]').remove()
      $('form').append('<input type="hidden" name="phote" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="phote"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUs) && $aboutUs->phote)
      var file = {!! json_encode($aboutUs->phote) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="phote" value="' + file.file_name + '">')
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
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.aboutuses.storeMedia') }}',
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
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUs) && $aboutUs->logo)
      var file = {!! json_encode($aboutUs->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
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
@endsection