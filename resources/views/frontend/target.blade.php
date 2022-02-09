@extends('layouts.frontend')

 @section('content')
<!-- Page Title Start -->
 <div class="page-title about-title-bg">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <h2>أهدافنا</h2>
                    </div>

                    <div class="col-md-6 text-right">
                        <ul>
                            <li>
                                <a href="{{route('frontend.home') }}">الرئيسية</a>
                            </li>
                            <li>أهدافنا</li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Page Title End -->

<!-- Privacy Section Start -->
<div class="privacy-section pt-100 pb-100">
    <div class="container">
        <div class="privacy-text">
            <h2>أهدافنا</h2>
            <p>   {{ $aboutUs->goals ?? '' }}</p>
        </div>
    </div>
</div>
<!-- Privacy Section End -->
@endsection