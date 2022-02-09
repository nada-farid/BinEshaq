@extends('layouts.frontend')

 @section('content')

  <!-- Page Title Start -->
  <div class="page-title about-title-bg">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <h2>عن المؤسسة</h2>
                    </div>

                    <div class="col-md-6 text-right">
                        <ul>
                            <li>
                                <a href="{{route('frontend.home') }}">الرئيسية</a>
                            </li>
                            <li>رؤيتنا</li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Page Title End -->




<!-- About Section Start -->
<section class="about-style-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-img">
                    @php 
                    if($aboutUs->phote){
                      $image=$aboutUs->phote->getUrl('preview2');
                    }

                     else {
                         $image=asset('frontend/assets/img/about/3.jpg');
                     } 
                  @endphp
                  <img src="{{  $image  }}" alt="about image">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-text">
                    <div class="section-title">
                        <span>رؤيتنا</span>
                        <h2>أدوات سلامة - أجهزة مراقبة - مصاعد</h2>
                    </div>
                     <p> {{ $aboutUs->vision ?? '' }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->     


 @endsection