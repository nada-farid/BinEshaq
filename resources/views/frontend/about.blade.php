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
                                    <li>عن المؤسسة</li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Page Title End -->

       
        
        
  <!-- Vertical Timeline -->
  <section id="conference-timeline">
    <div class="timeline-start">البداية</div>
    <div class="conference-center-line"></div>
    <div class="conference-timeline-content">
      <!-- Article -->
       @php
          $i=1;
        @endphp
      @foreach ($developments as $development )
        @php
          $i++;
        @endphp
      <div class="timeline-article">
   
            @if($i%2!=0)
                    <div class="content-right-container">
          <div class="content-right">
            @else
     <div class="content-left-container">
          <div class="content-left">
              @endif
            @php 
            if($development->phote){
              $image=$development->phote->getUrl('');
            }

             else {
                 $image=asset('frontend/assets/img/counter/1.jpg');
             } 
          @endphp
              <img src="{{$image}}" width="100px;">
         <p>{{$development->description}}</p>
          </div>
        </div>
        
        <div class="meta-date">
          <span class="date">{{ $development->year }}</span>
        </div>
      </div>
      <!-- // Article -->      
    @endforeach
    </div>
    
  </section>
  <!-- // Vertical Timeline -->
      <!-- Counter Section Start -->
<section class="counter-section counter-style-two pt-100 pb-70">
    <div class="container"> 
        <div class="section-title text-center">
            <span>خبــراتــنا</span>
             <h3>   {{ $experience->brief_summary ?? '' }}</h3>
            <p>     {{ $experience->description ?? '' }}</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="counter-text">
                    <i class='flaticon-team'></i>
                    <h3><span>   {{ $experience->years ?? '' }}</span>+</h3>
                    <p>عـاما من الخبــرة</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="counter-text">
                    <i class='flaticon-project'></i>
                    <h3><span>   {{ $experience->projects ?? '' }}</span>+</h3>
                    <p>مشــروع</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="counter-text">
                    <i class='flaticon-customer-review'></i>
                    <h3><span>    {{ $experience->special_customer ?? '' }}</span>+</h3>
                    <p>عمــيل ممــيز</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="counter-text">
                    <i class='flaticon-Construction-and-tools'></i>
                    <h3><span>  {{ $experience->worker ?? '' }}</span>+</h3>
                    <p>عـــامــل</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->
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
                           $image=asset('frontend/assets/img/about/2.jpg');
                       } 
                    @endphp
                    <img src="{{  $image  }}" alt="about image">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-text">
                    <div class="section-title">
                        <span>مؤسسة بن إسحاق </span>
                        <h2>أدوات سلامة - أجهزة مراقبة - مصاعد</h2>
                    </div>
                         <p>     {{ $aboutUs->description ?? '' }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->        
@endsection