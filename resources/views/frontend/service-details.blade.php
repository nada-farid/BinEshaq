@extends('layouts.frontend')

 @section('content')
<!-- Page Title Start -->
<div class="page-title about-title-bg">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <h2>  {{ $service->name ?? '' }} </h2>
                    </div>

                    <div class="col-md-6 text-right">
                        <ul>
                            <li>
                                <a href="{{route('frontend.home') }}">الرئيسية</a>
                            </li>
                            <li> الخدمة </li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Page Title End -->

<!-- Service Details Section Start -->
<div class="service-details-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-details-slider owl-carousel owl-theme">
                    <div class="slider-img">
                        @php
                        if($service->photo){
                            $image=$service->photo->getUrl('');
                          }
              
                           else {
                               $image=asset('frontend/assets/img/service/2.jpg');
                           } 
                        @endphp
                        <img src="{{$image}}" alt="service image">
                    </div>
                
                </div>

                <div class="service-details-text">
                    <h2> {{ $service->name ?? '' }} </h2>
                    <p>{{ $service->description ?? '' }} </p>
                  
                    <p>  <div class="quote-text">
                        <i class='bx bxs-quote-alt-left'></i>
                       <p>{{ $service->breif_summery ?? '' }} </p>
                    </div>


                   
                </div>
            </div>

            <div class="col-lg-4">
                <div class="service-sidebar">
                    

                    <div class="sidebar-widget">
                        <h3>خدماتنا</h3>

                        <ul>
                            @foreach ($services as $service )
                                
                        
                            <li>
                                <a href="{{route('frontend.service',$service->id) }}" class=" {{ request()->id == $service->id ?"active":""}}">
                                         {{$service->name }}
                                    <i class='bx bx-chevron-left'></i>
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="sidebar-widget">
                        <h3>تواصل معنا</h3>
                        <ul>
                            <li>
                                <a href="tel:{{$aboutUs->phone_1 ?? ''}}">
                              {{$aboutUs->phone_1 ?? ''}}
                                    <i class='bx bxs-phone' ></i>
                                </a>
                            </li>
                            <li>
                                <a href="tel:{{$aboutUs->phone_2 ?? ''}}">
                                    {{$aboutUs->phone_2 ?? ''}}
                                    <i class='bx bxs-phone' ></i>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:email@domainname.com">
                                    {{$aboutUs->email_1 ?? ''}}
                                    <i class='bx bx-mail-send' ></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Details Section End -->

<!-- Service Section Start -->
<section class="service-section pt-100 pb-100">
    <div class="container">
        <div class="service-slider owl-carousel owl-theme">
            @foreach ($services as $service )
            <div class="service-items">
                <div class="service-img">
                    @php
                    if($service->photo){
                        $image=$service->photo->getUrl('');
                      }
          
                       else {
                           $image=asset('frontend/assets/img/service/2.jpg');
                       } 
                    @endphp
                    <img src="{{$image}}" alt="service image">
                </div>
                <div class="service-text">
                    <h3>    {{ $service->name ?? '' }}</h3>
                    <p>  {{ $service->breif_summery ?? '' }}</p>

</p>
                    <a href="{{route('frontend.service',$service->id) }}" class="service-btn">المزيد</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="service-link text-center">
            <p>عرض جميع الخدمات<a href="{{route('frontend.services') }}">المزيد</a></p>
        </div>
    </div>
</section>
<!-- Service Section End -->    



 @endsection