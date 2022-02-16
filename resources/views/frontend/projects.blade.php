@extends('layouts.frontend')

 @section('content')
  <!-- Page Title Start -->
  <div class="page-title about-title-bg">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <h2>مشروعتنا</h2>
                    </div>

                    <div class="col-md-6 text-right">
                        <ul>
                            <li>
                                <a href="{{route('frontend.home') }}">الرئيسية</a>
                            </li>
                            <li> مشروعـاتــنا</li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Page Title End -->

 <!-- Project Section Start -->
<section class="project-section pt-100 pb-100">
    <div class="container">
        <div class="section-title text-center">
            <span>مشروعـاتــنا</span>
            <p>{{$aboutUs->projects_text ?? '' }}</p>
        </div>

        <div class="project-slider owl-carousel owl-theme">
            @foreach ($projects as $project )
                @php
                  if($project->photo){
                  $image=$project->photo->getUrl();
                  }
                  else {
                   $image=asset('frontend/assets/img/project/1.jpg');
                  }
                  
                @endphp
          
            <div class="project-item">
                <img src="{{$image }}" alt="project image">

                <div class="project-link">
                    <p>{{$project->name ?? '' }}</p>
                    <a href="{{route('frontend.project',$project->id)}}">
                        <i class='bx bx-plus'></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

       
    </div>
</section>
<!-- Project Section End -->


 @endsection