@extends('layouts.frontend')

 @section('content')
          <!-- Page Title Start -->
          <div class="page-title about-title-bg">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-left">
                                <h2>{{$project->name }}</h2>
                            </div>

                            <div class="col-md-6 text-right">
                                <ul>
                                    <li>
                                        <a href="{{route('frontend.home') }}">الرئيسية</a>
                                    </li>
                                    <li>مشروعاتنا </li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Page Title End -->

        <!-- Project Details Section Start -->
        <section class="project-details-area pt-100 pb-100">
            <div class="container">
                <div class="project-img-slider owl-carousel owl-theme">
                    @foreach($project->project_slider as $key => $media)
                 
                    <div class="project-item">
                        <img src="{{ $media->getUrl() }}"  alt="project image">
                    </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="project-description">
                            <h2>وصف المشروع</h2>
                     <p>{{$project->description }}</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="project-sidebar">
                            <div class="project-info">
                                <h6>المكان:</h6>
                                <span>{{$project->place }}</span>
                            </div>
                            <div class="project-info">
                                <h6>التاريخ:</h6>
                                <span>{{$project->date }}</span>
                            </div>
                            <div class="project-info">
                                <h6>العميل:</h6>
                                <span>{{$project->client }}</span>
                            </div>
                            <div class="project-info">
                                <h6>التصنيف:</h6>
                                <span>{{$project->classification }}</span>
                            </div>
                            <div class="project-info">
                                <h6>مدة التنفيذ:</h6>
                                <span>{{$project->during }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Details Section End -->

        <!-- Project Section Start -->
        <section class="project-section project-style-four pb-100">
            <div class="container">
                <div class="section-title text-center">
                    <h2>مشروعات اخرى </h2>
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