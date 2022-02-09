@extends('layouts.frontend')
@section('styles')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
@endsection
 @section('content')
    <!-- Page Title Start -->
        <div class="page-title about-title-bg">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-left">
                                <h2>توظيف</h2>
                            </div>

                            <div class="col-md-6 text-right">
                                <ul>
                                    <li>
                                     
                                        <a href="{{route('frontend.home') }}">الرئيسية</a>
                                    </li>
                                    <li>توظيف</li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Page Title End -->

        <!-- Sign In Section Start -->
        <div class="signin-section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                        <div class="signin-form">
                            @if($errors->count() > 0)
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
       
                            <form method="POST" action="{{route('frontend.job.store') }}">
                                @csrf
                                
                                <div class="form-group">
                                    <label> الاسم</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="الاسم">
                                </div>
                                
                                <div class="form-group">
                                    <label> الهاتف</label>
                                    <input type="phone" class="form-control" id="exampleInputEmail1"  name="phone" placeholder="الهاتف">
                                </div>
                                
                                <div class="form-group">
                                    <label>البريد الإلكتروني</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"  name="email" placeholder="Email">
                                </div>
                           <div class="form-group">
                                    <label> الوظيفة المتقدم إليها</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"   name="job" placeholder="الوظيفة">
                                </div>
                                
                                
                                 <div>
                                    <label> إرفاق ملف ال cv</label>
                                    <div class="needsclick dropzone {{ $errors->has('cv') ? 'is-invalid' : '' }}" id="cv-dropzone">
                                </div>
                                 </div>
                                
                                
                                <button type="submit" class="signin-btn">إرسال</button>
                            </form>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In Section End -->
        @endsection
        @section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script>
    Dropzone.options.cvDropzone = {
    url: '{{ route('frontend.storeMedia') }}',
    maxFilesize: 4, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 4
    },
    success: function (file, response) {
      $('form').find('input[name="cv"]').remove()
      $('form').append('<input type="hidden" name="cv" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="cv"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($jobresquest) && $jobresquest->cv)
      var file = {!! json_encode($jobresquest->cv) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="cv" value="' + file.file_name + '">')
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