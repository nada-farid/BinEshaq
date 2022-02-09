@extends('layouts.frontend')

 @section('content')
<!-- Page Title Start -->
<div class="page-title about-title-bg">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <h2>تواصل معنا</h2>
                    </div>

                    <div class="col-md-6 text-right">
                        <ul>
                            <li>
                         
                                <a href="{{route('frontend.home') }}">الرئيسية</a>
                            </li>
                            <li>تواصل معنا</li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Page Title End -->

<!-- Contact Section Start -->
<section class="contact-section pb-100 pt-100">
    <div class="container">
        <div class="section-title text-center">
            <span>تواصل معنا</span>
            <p>   {{ $aboutUs->contact_text }}</p>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-12 col-sm-6">
                        <div class="contact-card">
                            <i class='bx bxs-phone-call'></i>
                            <ul>
                                <li>
                                    <a href="tel:{{ $aboutUs->phone_1 }}">
                                        {{ $aboutUs->phone_1 ?? '' }}
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:{{ $aboutUs->phone_2  }}">
                                        {{ $aboutUs->phone_2 ?? '' }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-6">
                        <div class="contact-card">
                            <i class='bx bxs-envelope'></i>
                            <ul>
                                <li>
                                    <a href="mailto:{{ $aboutUs->email_1}}">
                                        {{ $aboutUs->email_1 ?? '' }}
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:{{ $aboutUs->email_2}}">
                                        {{ $aboutUs->email_2 ?? '' }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-6 offset-lg-0 offset-sm-3">
                        <div class="contact-card">
                            <i class='bx bxs-location-plus'></i>
                            <ul>
                                <li>
                                    {{ $aboutUs->address ?? '' }}
                                </li>
                                <li>
                                 جده 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="col-lg-9">
                <div class="contact-area">
                    <h3>للتواصل </h3>
                    @if($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form  method="POST" action="{{route('frontend.contact.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="من فضلك ادخل الاسم" placeholder="الاسم">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="من فضلك ادخل البريد الألكتروني" placeholder="البريد الالكتروني">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="number" name="phone" id="number" class="form-control" required data-error="من فضلك ادخل التليفون" placeholder="الهاتف">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="title" id="subject" class="form-control" required data-error="من فضلط ادخل الموضوع" placeholder="الموضوع">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" class="message-field" id="message" rows="5" required data-error="من فضلك ادخل الرسالة" placeholder="الرسالة"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        
                            <div class="col-sm-12">
                                <button type="submit" class="default-btn contact-btn">
                                    إرســال
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

<!-- Map Area Section Start -->
<div class="map-area">
    <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14934515.016851924!2d54.10013745847398!3d23.95613168080171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2z2KfZhNiz2LnZiNiv2YrYqQ!5e0!3m2!1sar!2seg!4v1644416589452!5m2!1sar!2seg" ></iframe>
    </div>
</div>
<!-- Map Area Section End-->
@endsection

