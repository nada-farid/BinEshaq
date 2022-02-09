@extends('layouts.frontend')

 @section('content')
   
  <!-- Page Title Start -->
  <div class="page-title about-title-bg">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <h2>خدماتنا</h2>
                    </div>

                    <div class="col-md-6 text-right">
                        <ul>
                            <li>
                                <a href="{{route('frontend.home') }}">الرئيسية</a>
                            </li>
                            <li>خدماتنا</li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Page Title End -->

<!-- Service Section Start -->
<section class="service-section service-style-four pt-100 pb-100">
    <div class="container">
        <div class="section-title text-center">
            <span>خدمات المؤسسة</span>
        <p>{{ $aboutUs->services_text }}</p>
        </div>

        <div class="service-slider owl-carousel owl-theme">
            @foreach ($services as $service )
            @php 
            if($service->phote){
              $image=$service->phote->getUrl('');
            }

             else {
                 $image=asset('frontend/assets/img/service/2.jpg');
             } 
          @endphp
            <div class="service-items">
                <div class="service-img">
                    <img src="{{$image }}" alt="service image">
                </div>
                <div class="service-text">
                    <h3>  {{ $service->name ?? '' }}</h3>
               <p>  {{ $service->breif_summery ?? '' }}</p>

</p>
                    <a href="{{route('frontend.service',$service->id) }}" class="service-btn">المزيد</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Service Section End -->

 @endsection