@extends('layouts.frontend')

 @section('content')

        <!-- Page Title Start -->
        <div class="page-title about-title-bg">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-left">
                                <h2>الاخبار</h2>
                            </div>

                            <div class="col-md-6 text-right">
                                <ul>
                                    <li>
                                        <a href="{{route('frontend.home') }}">الرئيسية</a>
                                    </li>
                                    <li>{{$new->title ?? '' }}</li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Page Title End -->

        <!-- Blog Details Section Start -->
        <div class="blog-details-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                   
                            <div class="blog-widget">
                                <h3>أحدث الاخبار</h3>
                            
                                @foreach ($news as $new )
                        @php
                          if($new->photo){
                          $image=$new->photo->getUrl('thumb');
                          }
                          else {
                           $image=asset('frontend/assets/imgimg/blog/2..jpg');
                          }
                          @endphp
                                <article class="popular-post">
                                        <a href="{{route('frontend.new',$new->id) }}" class="thumb">
                                            <span class="thumb-img thumb1" role="img">
                                                <img src="{{$image }}">
                                            </span>
                                        </a>
                                        <div class="info">
                                            <time>{{$new->date }}</time>
                                            <h6>
                                                <a href="{{route('frontend.new',$new->id) }}">{{$new->short_description ?? '' }}
                                            </h6>
                                        </div>
                                </article>
                                    
                                @endforeach

                            </div>

                           
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="blog-details-img">
                            @php
                            if($new->photo){
                            $image=$new->photo->getUrl();
                            
                            }
                            else {
                             $image=asset('frontend/assets/img/blog/blog-details.jpg');
                            }
                            @endphp
                            <img src="{{  $image }}" alt="blog details">
                        </div>
                        
                        <div class="blog-details-text">
                            <h2>{{$new->title ?? '' }}</h2>

                       <p>{{$new->long_description ?? '' }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details Section End -->    
 @endsection