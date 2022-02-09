@extends('layouts.frontend')

 @section('content')
<!-- Page Title Start -->
        <div class="page-title about-title-bg">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-left">
                                <h2>أحدث الأخبار</h2>
                            </div>

                            <div class="col-md-6 text-right">
                                <ul>
                                    <li> 
                                            <a href="{{route('frontend.home') }}">الرئيسية</a>
                                    </li>
                                    <li>أخبــار المؤسسة</li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Page Title End -->

        <!-- Blog Section Start -->
        <section class="blog-section pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>أحدث الأخبار</span>
                    <p>    {{ $aboutUs->news_text  ?? ''}}</p>
                </div>

                 <div class="row">
                     
                    @foreach ($news as $new )
                    @php
                      if($new->photo){
                      $image=$new->photo->getUrl();
                      }
                      else {
                       $image=asset('frontend/assets/imgimg/blog/2..jpg');
                      }
                      
                    @endphp
                    <div class="col-lg-4 col-sm-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="{{route('frontend.new',$new->id) }}">
                                    <img src="{{ $image }}" alt="blog image">
                                </a>
                               
                               
                            </div>
                            <div class="blog-text">
                                <h3>
                                    <a href="{{route('frontend.new',$new->id) }}">{{$new->title }}</a>
                                </h3>
                                <p>{{$new->short_description ?? '' }}</p>
                                <a href="{{route('frontend.new',$new->id) }}" class="blog-btn">
                                   قراء المزيد
                                </a>
                            </div>
                        </div>
                    </div>
            @endforeach
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{$news->links() }}
                    </ul>
                </nav>
            </div>
        </section>  
        <!-- Blog Section End -->       

       @endsection