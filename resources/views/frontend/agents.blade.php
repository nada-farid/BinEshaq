@extends('layouts.frontend')

 @section('content')
<!-- Page Title End -->

        <!-- Contact Section Start -->
        <section class="contact-section pb-100 pt-100">
            <div class="container">
                <div class="section-title text-center">
                    <span>الوكلاء والموزعون</span>
                    
                   <p> {{ $aboutUs->contact_text }}</p>
                </div>

               <!-- Company Section Start -->
        <div class="company-section ">
            <div class="container">
                <div class="row">
                    @foreach ($distributors as $distributor)
                    @php
                    if($distributor->photo){
                    $image=$distributor->photo->getUrl();
                    }
                    else {
                     $image=asset('frontend/assets/imgimg/company/2..jpg');
                    }
                    
                  @endphp
               
                    <div class="col-md-2 col-6 company-logo pb-10">
                        <a href="#"><img src="{{$image }}" alt="logo"></a>
                    </div>
                    @endforeach
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{$distributors->links() }}
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Company Section End -->        

            </div>
        </section>
        <!-- Contact Section End -->

 @endsection