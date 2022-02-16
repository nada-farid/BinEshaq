<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
        <!-- Boxicon CSS -->
        <link rel="stylesheet"href="{{asset('frontend/assets/css/boxicon.min.css')}}">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{asset('frontend/assets/fonts/flaticon/flaticon.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet"href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
        <!-- Owl Carousel Theme CSS -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet"href="{{asset('frontend/assets/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
        <!-- RTL CSS -->
        <link rel="stylesheet"href="{{asset('frontend/assets/css/rtl.css')}}">
        <!-- Title -->
       <title>مؤسسة بن إسحاق -للتجارة والصناعة</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{asset('frontend/assets/img/favicon.png')}}">        
    </head>

                    @php
                       $aboutUs =\App\Models\AboutUs::first();
                    @endphp
    <body>
        <!-- Preloader Start -->
        <div class="loader-content">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="sk-folding-cube">
                        <div class="sk-cube1 sk-cube"></div>
                        <div class="sk-cube2 sk-cube"></div>
                        <div class="sk-cube4 sk-cube"></div>
                        <div class="sk-cube3 sk-cube"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->

           <!-- Header Area Start -->
        <header class="header-area header-style-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="header-left">
                            <a href="{{ $aboutUs->facebook ?? '' }}" target="_blank"><i class='bx bxl-facebook'></i></a>
                            <a href="{{ $aboutUs->twitter ?? '' }}" target="_blank"><i class='bx bxl-twitter'></i></a>
                            <a href="{{ $aboutUs->linkedin ?? '' }}"target="_blank"><i class='bx bxl-linkedin'></i></a>
                            <a href="{{ $aboutUs->youtube ?? '' }}" target="_blank"><i class='bx bxl-youtube'></i></a>
                            <a href="{{ $aboutUs->instagram ?? '' }}" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="header-right">
                            <ul>
                                <li>
                                    <i class='bx bxs-time-five'></i>
                                    {{ $aboutUs->time ?? '' }}
                                </li>
                               
                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <a href="tel:{{ $aboutUs->phone_1 }}">  {{ $aboutUs->phone_1 ?? '' }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  
        </header>
         <!-- Header Area End -->

        <!-- Navbar Area Start -->
        <div class="navbar-area navbar-style-two">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{route('frontend.home')}}" class="logo">
                    @php 
                    if($aboutUs->logo){
                      $image=$aboutUs->logo->getUrl('logo');
                    }

                     else {
                         $image=asset('frontend/assets/img/logo.png');
                     } 
                  @endphp
                    <img src="{{ $image }}" alt="logo">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{route('frontend.home')}}">
                            <img src="{{ $image }}" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{route('frontend.home') }}" class="nav-link  active">الرئيسية</a>
                                   
                                </li>
                                            <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">عن المؤسسة</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('frontend.about') }}" class="nav-link">عن المؤسسة</a>
                                             <a href="{{route('frontend.target') }}" class="nav-link">الأهداف </a>
                                             <a href="{{route('frontend.vision') }}"class="nav-link">الرؤية </a>
                                        </li>
                                        
                                        <!-- Dropdown Inner -->
                                       
                                        <!-- Dropdown Inner -->
                                       </ul>
                                </li>
                                <li class="nav-item"><a href="{{route('frontend.services') }}"class="nav-link ">الخدمات</a></li>
                                
                                <li class="nav-item">
                                    <a href="{{route('frontend.products') }}"class="nav-link "> منتجاتنا </a>
                                  
                                </li>
                                
                                
                                <li class="nav-item"> <a href="{{route('frontend.projects') }}"class="nav-link ">المشروعات</a>  </li>
                    
                                
                                <!-- Dropdown Inner -
                                 <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">عن المؤسسة</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about.html" class="nav-link">عن المؤسسة</a>
                                             <a href="target.html" class="nav-link">الأهداف </a>
                                             <a href="vision.html" class="nav-link">الرؤية </a>
                                        </li>
                                        
                                       
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">
                                                Hover
                                                <i class="flaticon-right-chevron"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Level 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Level 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link dropdown-toggle">
                                                        Level 2
                                                        <i class="flaticon-right-chevron"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">3rd Level</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">3rd Level</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                     
                                       </ul>
                                </li>
                        
                        ---->
                                <li class="nav-item">
                                    <a href="{{route('frontend.news') }}" class="nav-link ">الأخبــار</a>
                                  
                                </li>
                                 <li class="nav-item">
                                    <a href="{{route('frontend.agents') }}"  class="nav-link ">وكلاء وموزعون </a>
                                  
                                </li>
                                 
                                  <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle"> التواصل</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('frontend.appointement') }}"  class="nav-link"> تحديد موعد</a>
                                            <a href="{{route('frontend.job') }}" class="nav-link"> التوظيف</a>
                                              <a  href="{{route('frontend.contact') }}"class="nav-link">تواصل معنا</a>
                              
                                        </li>
                                        
                                        <!-- Dropdown Inner -->
                                       
                                        <!-- Dropdown Inner -->
                                       </ul>
                                </li>
                               
                            </ul>

                   
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar Area End -->
        @yield('content')

          <!-- Footer Section Start -->
          <footer class="footer-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="{{route('frontend.home')}}">
                                    <img src="{{ $image }}" alt="logo"> 
                                </a>
                            </div>
                            <p>  {{ $aboutUs->breif ?? '' }}</p>

                            <div class="newsletter-area">
                                <h3>القائمة البريدية</h3>
                                <form action="{{route('frontend.subscription.store') }}" method="POST" >
                                    @csrf
                                    <input type="email" class="form-control" placeholder="Email" name="email" required autocomplete="off">
            
                                    <button class="default-btn subscribe-btn" type="submit">
                                        اشترك الان
                                    </button>
            
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                                @if($errors->count() > 0)
                                <div class="alert alert-danger">
                                    <ul class="list-unstyled">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>

                            <div class="footer-social">
                                <a href="{{ $aboutUs->facebook ?? '' }}" target="_blank"><i class='bx bxl-facebook'></i></a>
                                <a href="{{ $aboutUs->twitter ?? '' }}" target="_blank"><i class='bx bxl-twitter'></i></a>
                                <a href="{{ $aboutUs->youtube ?? '' }}" target="_blank"><i class='bx bxl-youtube'></i></a>
                                <a href="{{ $aboutUs->instagram ?? '' }}" target="_blank"><i class='bx bxl-instagram'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget pl-35">
                            <h3>خدماتنا</h3>
                            <ul>
                                @foreach (\App\Models\Service::get() as $service )      
                         
                                <li>
                                   <a  href="{{route('frontend.service',$service->id) }}">{{ $service->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget pl-35">
                            <h3>روابط سريعة</h3>
                             <ul>
                                <li>
                                    <a href="{{route('frontend.appointement') }}">طلب خدمة</a>
                                </li>
                                <li>
                                    <a href="{{route('frontend.job') }}">طلب وظيفة</a>
                                </li>
                                <li>
                                    <a href="{{route('frontend.projects') }}">المشروعات</a>
                                </li>
                                <li>
                                    <a ref="{{route('frontend.appointement') }}">نبذة عنا</a>
                                </li>
                                <li>
                                    <a href="{{route('frontend.services') }}">خدماتنا</a>
                                </li>
                                <li>
                                    <a href="{{route('frontend.contact') }}">تواصل معنا</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <h3>التواصل السريع</h3>
                            <ul>
                                <li>
                                    <a href="tel:{{$aboutUs->phone_1}}">
                                        <i class='bx bxs-phone'></i>
                                        {{ $aboutUs->phone_1 ?? '' }}
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:{{ $aboutUs->phone_1}}">
                                        <i class='bx bxs-phone'></i>
                                        {{ $aboutUs->phone_2 ?? '' }}
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:{{$aboutUs->email_1}}">
                                        <i class='bx bxs-envelope'></i>
                                        {{ $aboutUs->email_1 ?? '' }}
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:{{$aboutUs->email_2}}">
                                        <i class='bx bxs-envelope'></i>
                                        {{ $aboutUs->email_2 ?? '' }}
                                    </a>
                                </li>
                                <li>
                                    <i class='bx bxs-location-plus'></i>
                                    {{ $aboutUs->address ?? '' }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                       

                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>جميع الحقوق محفوظة 2022 @ مؤسسة بن إسحاق <a href="https://alliance-sa.com/" target="_blank">تحالف الرؤى</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->


        <!-- Back Top Section Start -->
        <div class="top-btn">
            <i class='bx bx-up-arrow'></i>
        </div>
        <!-- Back Top Section End -->


        @include('sweetalert::alert')
        <!-- JQuery First, then Popper Js, then Bootstrap JS -->
        <script src="{{asset('frontend/assets/js/jquery-3.5.0.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
        <script  src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
        <!-- Owl Carousel JS -->
        <script  src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup Js -->
        <script  src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Mixitup JS -->
        <script  src="{{asset('frontend/assets/js/jquery.mixitup.min.js')}}"></script>
        <!-- Subscribe Form JS -->
        <script src="{{asset('frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <!-- Form Velidation JS -->
        <script  src="{{asset('frontend/assets/js/form-validator.min.js')}}"></script>
        <!-- Contact Form JS -->
        <script  src="{{asset('frontend/assets/js/contact-form-script.js')}}"></script>
        <!-- Meanmenu JS -->
        <script src="{{asset('frontend/assets/js/meanmenu.js')}}"></script>
        <!-- Custom JS -->
        <script  src="{{asset('frontend/assets/js/custom.js')}}"></script>
        @yield('scripts')
    </body>
</html>