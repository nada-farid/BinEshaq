@extends('layouts.frontend')

 @section('content')
        <!-- Banner Section Start -->
       
        <div id="slider-wrap">
            @isset($sliders)
            <ul id="slider">
           
                @foreach ($sliders as $slider )
                  @foreach($slider->photo as $key => $media)
              <li class="slide showing" style="background: url('{{$media->getUrl('preview2')}}') no-repeat center center; background-size: cover;">
                <h1>{{$aboutUs->breif }}</h1>
              </li> 
                @endforeach
               @endforeach
            </ul>
            @endisset)
            
            <button id="next" onclick="next();">التالي</button>
            <button id="prev" onclick="prev();">السابق</button>
        
            <div id="slider-dots">
            </div>
        </div>
        
                <!-- Banner Section End -->
<!-- Banner Section End -->
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

<!-- Counter Section Start -->
<section class="counter-section counter-style-two pt-100 pb-70">
    <div class="container"> 
        <div class="section-title text-center">
            <span>خبــراتــنا</span>
            <h2>      {{ $experience->brief_summary ?? '' }}</h2>
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


        <!-- Service Section Start -->
        <section class="service-style-three pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>خدمــاتـــنا</span>
                <h2>     {{ $aboutUs->services_text }}</h2>
                </div>

                <div class="row">
                    @foreach ($services as $service )
                        
                 
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card text-center">
                            <i class="flaticon-maintenance"></i>
                            <h3>    {{ $service->name ?? '' }}</h3>
                            <p>  {{ $service->breif_summery ?? '' }}</p>

                            <a href="{{route('frontend.service',$service->id) }}" class="service-btn">
                               قراء المزيد
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Service Section End -->

          <!-- Facilities Section Start -->
          <section class="facilities-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 offset-lg-1 p-0">
                        <div class="facililties-text pt-100 pb-70">
                            <div class="section-title">
                                <span>رؤيتــنا</span>
                                    <p>    {{ $aboutUs->vision ?? '' }}</p>
                            <div class="theme-btn">
                                <a href="{{route('frontend.target') }}" class="default-btn">
                                   المزيد
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 p-0">
                        <div class="facilities-img">
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- Facilities Section End -->

        
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
                            <a href="project-details.html">
                                <i class='bx bx-plus'></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="project-btn text-center">
                    <p>عرض جميع المشاريع<a href="{{route('frontend.projects') }}"> المزيد </a></p>
                </div>
            </div>
        </section>
        <!-- Project Section End -->

            <!-- Team Section Start -->
            <section class="team-style-two pb-70 team-bg pt-100">
                <div class="container">
                    <div class="section-title text-center">
                        <span> المنتجات</span>
                        <h2>{{ $aboutUs->products_text  ?? ''}}</h2>
                    </div>
       
                    <div class="row">
                        @foreach ($products as $product )
                        @php
                          if($product->photo){
                          $image=$product->photo->getUrl();
                          }
                          else {
                           $image=asset('frontend/assets/img/products/1.jpg');
                          }
                          
                        @endphp
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-card">
                                <div class="team-img">
                                    <img src="{{$image}}" alt="team member">
                                </div>
    
                                <div class="team-text">
                                    <h3>{{$product->name_en ??'' }}</h3>
                                    <p>{{$product->name_ar ??'' }}</p>
                                </div>
                            </div>
                        </div>           
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- Team Section End -->
    
            <!-- Blog Section Start -->
            <section class="blog-section pb-100 pt-100">
                <div class="container">
                    <div class="section-title text-center">
                        <span>أخبــارنا</span>
                            <h2>تابع جميع أخبار مؤسسة بن اسحاق</h2>
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
                                        <img src="{{$image }}" alt="blog image">
                                    </a>
                                   
                                </div>
    
                                <div class="blog-text">
                                    <h3>
                                        <a href="{{route('frontend.new',$new->id) }}">{{$new->title ?? '' }}</a>
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
    
                    <div class="blog-link text-center">
                        <p>عرض جميع الأخبار <a href="{{route('frontend.news') }}">المزيد</a></p>
                    </div>
                </div>
            </section>  
            <!-- Blog Section End -->
    
            <!-- Contact Section Start -->
            <section class="contact-section pb-100">
                <div class="container">
                    <div class="section-title text-center">
                        <span>تواصل معنا</span>
                        <p>   {{ $aboutUs->contact_text }}</p>
                    </div>
    
                    <div class="row">
                        <div class="col-lg-5 p-0 offset-lg-1">
                            <div class="contact-img"></div>
                        </div>
    
                        <div class="col-lg-5 p-0">
                            @if($errors->count() > 0)
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                            <div class="contact-area">
                                <form  method="POST" action="{{route('frontend.contact.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="الاسم">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="البريد الإلكتروني">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="phone" id="number" class="form-control" required data-error="Please enter your number" placeholder="رقم الهاتف">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="title" id="subject" class="form-control" required data-error="Please enter your subject" placeholder="الموضوع">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="message-field" id="message" rows="5" required data-error="Please type your message" placeholder="كتابة الرسالة"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <button type="submit" class="default-btn contact-btn">
                                                إرسال رسالة
                                            </button>
                                            <div id="msgSubmit" class="h3 alert-text text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Section End -->
 @endsection
 @section('scripts')
 <script>// slide rotation

    var slides = document.getElementsByClassName("slide");
    var rotator = setInterval(changeSlide, 2000);
    
    function changeSlide(){												// run this every 2 seconds
    
        for(var i=0; i<slides.length; i++){								// loop through all slides
            
            if(slides[i].classList.contains("showing")){				// if it's the active slide
            
                slides[i].classList.remove("showing");					// remove the active class
                
                var nextslide = i+1;									// get the next slide
                if(nextslide>=slides.length){							// if it would go past the number of slides, send it back to the first
                    nextslide = 0;										
                }
                
                slides[nextslide].classList.add("showing");				// add active class to the next slide
                sliderDots[nextslide].classList.add("active");			// change dot to next slide
                sliderDots[i].classList.remove("active");				// remove the other dot
                
                i=slides.length;										// end the for loop after the slide is changed once
            }
        }
    }
    
    // nav dots
    var sliderDots = [];
    
    for(let j=0; j<slides.length; j++){									// for every slide there is
        
        var dot = document.createElement("span");						// create a span
        sliderDots.push(dot);											// add it to sliderDots array
        document.getElementById("slider-dots").appendChild(sliderDots[j]);	// add it to the html in the slider-dots container
        sliderDots[0].classList.add("active");							// make the first dot active
    
        sliderDots[j].onclick = function() {							// make an onclick function for each dot
            
            for(var g=0; g<slides.length; g++){							// cycle through all dots
                sliderDots[g].classList.remove("active");				// and remove active class
                slides[g].classList.remove("showing");					// remove active class from slides
            }
            this.classList.add("active");								// add active to clicked dot
            slides[j].classList.add("showing");							// add active class to slide clicked
        }
    }
    
    // prev/next button
    function prev(){
    
        for(var i=0; i<slides.length; i++){
            
            if(slides[i].classList.contains("showing")){
            
                slides[i].classList.remove("showing");
                
                var nextslide = i-1;
                if(nextslide<0){
                    nextslide = slides.length-1;
                }
                
                slides[nextslide].classList.add("showing");
                sliderDots[nextslide].classList.add("active");
                sliderDots[i].classList.remove("active");
                
                clearInterval(rotator);
                rotator = setInterval(changeSlide, 2000);
                i=slides.length;
            }
        }
    }
    
    function next(){
    
        for(var i=0; i<slides.length; i++){
            
            if(slides[i].classList.contains("showing")){
            
                slides[i].classList.remove("showing");
                
                var nextslide = i+1;
                if(nextslide>=slides.length){
                    nextslide = 0;
                }
                
                slides[nextslide].classList.add("showing");
                sliderDots[nextslide].classList.add("active");
                sliderDots[i].classList.remove("active");
                
                clearInterval(rotator);
                rotator = setInterval(changeSlide, 2000);
                i=slides.length;
            }
        }
    }
    
    // pause on hover
    document.getElementById("slider").onmouseover = function() {
        clearInterval(rotator);
    }
    
    document.getElementById("slider").onmouseout = function() {
        clearInterval(rotator);
        rotator = setInterval(next, 2000);
    
    }
    
    // arrow keys
    document.addEventListener("keydown", function(key) {
    
        switch(key.keyCode){
            case 37:
                prev();
                clearInterval(rotator);
                rotator = setInterval(next, 2000);
                break;
            
            case 39:
                next();
                clearInterval(rotator);
                rotator = setInterval(next, 2000);
                break;
        }
    
    });
    </script>
    @endsection