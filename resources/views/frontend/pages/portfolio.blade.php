@extends('layouts.app')
@section('title')
  <title>SRV Technology</title>
@endsection
{{-- head --}}
@include('frontend.include.head')
@section('content')








<body class="home-3">
  <!-- Preeloader -->
  <div id="loading">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <div class="object" id="object_one"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_four"></div>
        <div class="object" id="object_five"></div>
      </div>
    </div>
  </div>
  <!-- Preeloader -->
  <!-- Start Header Area -->
	@include('frontend.include.nav')
  <!-- End Header Area -->
  <!-- Start Mobile Menu Area -->
 
  <!--offcanvas menu area end-->
  <!-- End Mobile Menu Area -->


  <!-- Page Title Start -->
  <section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
    style="background-image:url({{url('/')}}/public/frontend/assets/images/portfolio/portfolio.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="breadcum-title">
            <h2 class="page-title">Portfolio</h2>
            <ul class="page-list">
              <li><a href="index.html">Home</a> / <span>Portfolio</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Title End -->

  <!-- Start portfolio Area -->
  <section class="portfolio-area my-5">
		<div class="container my-5">
			<div class="portfolio-items pb-5">
				<div class="row ">
					@foreach($portfolios as $val)
					<div class="col-lg-4 col-md-6 col-12 my-3">
						<div class="single-portfolio-box">
							<div class="img-overly">
								<img src="{{url('/')}}/storage/app/public/portfolio/{{@$val->image}}" alt="">
							</div>
							<div class="portfolio-box-content">
								<h6><a href="">{{@$val->title}}</a><span>{{@$val->coding_language}}</span></h6>
							</div>
						</div>
					</div>
					@endforeach
				{{-- 	<div class="col-lg-4 col-md-6 col-12 my-3">
						<div class="single-portfolio-box">
							<div class="img-overly">
								<img src="{{url('/')}}/public/frontend/assets/images/portfolio/image_large.png" alt="">
							</div>
							<div class="portfolio-box-content">
								<h6><a href="#">Almazra</a><span>Wp Woo-commerce development</span></h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12 my-3">
						<div class="single-portfolio-box">
							<div class="img-overly">
								<img src="{{url('/')}}/public/frontend/assets/images/portfolio/image_large(3).png" alt="">
							</div>
							<div class="portfolio-box-content">
								<h6><a href="">Fazaa Behaviors</a><span>Php/Laravel development</span></h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12 my-3">
						<div class="single-portfolio-box">
							<div class="img-overly">
								<img src="{{url('/')}}/public/frontend/assets/images/portfolio/image_large(4).png" alt="">
							</div>
							<div class="portfolio-box-content">
								<h6><a href="">Pigg Buys</a><span>Php/Laravel development</span></h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12 my-3">
						<div class="single-portfolio-box">
							<div class="img-overly">
								<img src="{{url('/')}}/public/frontend/assets/images/portfolio/image_large(8).png" alt="">
							</div>
							<div class="portfolio-box-content">
								<h6><a href="">Road Trip USA</a><span>Php/Laravel development</span></h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12 my-3">
						<div class="single-portfolio-box">
							<div class="img-overly">
								<img src="{{url('/')}}/public/frontend/assets/images/portfolio/image_large(9).png" alt="">
							</div>
							<div class="portfolio-box-content">
								<h6><a href="">Zoom Line</a><span>Php/Laravel development</span></h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12 my-3">
						<div class="single-portfolio-box">
							<div class="img-overly">
								<img src="{{url('/')}}/public/frontend/assets/images/portfolio/image_large(10).png" alt="">
							</div>
							<div class="portfolio-box-content">
								<h6><a href="">Meet Het</a><span>Php/Laravel development</span></h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12 my-3">
						<div class="single-portfolio-box">
							<div class="img-overly">
								<img src="{{url('/')}}/public/frontend/assets/images/portfolio/image_large(11).png" alt="">
							</div>
							<div class="portfolio-box-content">
								<h6><a href="">Dufther</a><span>React & Node development</span></h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12 my-3">
						<div class="single-portfolio-box">
							<div class="img-overly">
								<img src="{{url('/')}}/public/frontend/assets/images/portfolio/image_large(1).png" alt="">
							</div>
							<div class="portfolio-box-content">
								<h6><a href="">Neobi</a><span>React & Node development</span></h6>
							</div>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
	</section>
  <!-- End portfolio Area -->

  <!-- End Get Connected Area -->
  <!-- Start Footer Area -->
 @include('frontend.include.footer')
  <!-- End Footer Area -->
  <div class="scroll-area">
    <i class="icofont-arrow-up"></i>
  </div>
  <!-- Js File -->
{{-- @include('frontend.include.footer') --}}

@endsection
{{-- end content --}}
@section('script')
@include('frontend.include.script')
@endsection