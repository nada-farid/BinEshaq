@extends('layouts.frontend')

 @section('content')
  <!-- Page Title Start -->
  <div class="page-title about-title-bg">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <h2>تحديد موعد</h2>
                    </div>

                    <div class="col-md-6 text-right">
                        <ul>
                            <li>
                             
                                <a href="{{route('frontend.home') }}">الرئيسية</a>
                            </li>
                            <li>تحديد موعد</li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Page Title End -->

<!-- Sign In Section Start -->
<div class="signin-section pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                <div class="signin-form">
                    @if($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('frontend.appointement.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label> الاسم</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="الاسم">
                        </div>
                        
                        <div class="form-group">
                            <label> الهاتف</label>
                            <input type="phone"  name="phone"  class="form-control" id="exampleInputEmail1" placeholder="الهاتف">
                        </div>
                        
                   <div class="form-group">
                            <label>الشركة</label>
                            <input type="text"  name="company" class="form-control" id="exampleInputEmail1" placeholder="الشركة">
                        </div>
                        
                        
                      
                        
                        
                        <button type="submit" class="signin-btn">تحديد موعد</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign In Section End -->

 @endsection