@extends('layouts.frontend')

 @section('content')
  <!-- Page Title Start -->
  <div class="page-title about-title-bg">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <h2>منتجاتنا</h2>
                    </div>

                    <div class="col-md-6 text-right">
                        <ul>
                            <li>
                                <a href="{{route('frontend.home') }}">الرئيسية</a>
                            </li>
                            <li>منتجاتنا</li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Page Title End -->
<!-- Team Section Start -->
<section class="team-style-two pb-70 pt-100">
    <div class="container">
      
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
        
         <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $products->links() }}
            </ul>
        </nav>
    </div>
</section>
<!-- Team Section End -->



 @endsection