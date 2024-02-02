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
		style="background-image:url({{url('/')}}/public/frontend/assets/images/about/about.png);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="breadcum-title">
						<h2 class="page-title" style="color:#041b52">Aboust us</h2>
						<ul class="page-list">
							<li><a href="index.html">Home</a> / <span style="color:#041b52">abous us</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Title End -->

	<!-- Start About Area -->
	<section class="estro-about-area section-padding">
		<div class="container">
			<!-- About Top  -->
			<div class="row d-flex align-items-center">
				<div class="col-lg-6">
					<div class="fram-image ">
						<img src="{{url('/')}}/public/frontend/assets/images/about/key.jpg" alt="">
						<!-- <div class="about-vedio-btn">
							<a href="https://www.youtube.com/watch?v=Nd1eFR4dZRA&list=RDMMNd1eFR4dZRA&start_radio=1"><i
									class="icofont-ui-play"></i></a>
						</div> -->
					</div>
				</div>
				<div class="col-lg-6 text-left">
					<div class="about-top pb-50">
						<h2>Our Key Point to Success</h2>
						<div class="col-md-12">
							<ul class="why-choose-item">
								<li>Consistency</li>
								<li>Written procedures</li>
								<li>established procedures</li>
								<li>Teamwork</li>
								<li>Measurement and analysis of your operations</li>
								<li>Measurement and analysis of your processes</li>
								<li>Training and education</li>
								<li>Perform competently each day</li>
								<li>Contributors to the improvement process</li>
								<li>Stability of the processes</li>
								<li>Achieving customer satisfaction Etc.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row d-flex align-items-center">
				<div class="col-lg-4 col-12 mt-30">
					<div class="about-imgs">
						<i class="fas fa-bullseye"></i>
					</div>
				</div>
				<div class="col-lg-8 col-12 mt-30">
					<div class="about-content">
						<h4>Our Mission</h4>
						<h2>We provide the solutions to grow your business.</h2>
						<p>our mission is to build a quality and comprehensive technology infrastructure, establish and maintain an
							effective operational environment, and deliver quality, prompt, cost effective and reliable technology
							services.</p>
					</div>
				</div>
				<div class="col-lg-8 col-12 mt-30">
					<div class="about-content">
						<h4>Our Vision</h4>
						<h2>We provide the solutions to grow your business.</h2>
						<p>AWe want to be known as the creative, original, and imaginative outside the boundary, trustable and user
							friendly software, Web development, Mobile app development service provider across the world. We always
							put
							our best efforts to meet client’s expectations by going beyond software or application to provide best Web
							and mobile solutions that transform our client’s expectation into reality, we always try to build the
							online
							solution for our client’s which enables them to solve their problems, that helps them to simplified their
							business online, attract more business, increase brand value etc.
						</p>
						<p>We at SRV Technology always try & help to enhance business growth of our customers with user friendly
							UI/UX, creative design, development and to deliver market defining high quality solutions that create
							value
							for the company and reliable competitive advantage to customers around the globe.</p>
					</div>
				</div>
				<div class="col-lg-4 col-12 mt-30">
					<div class="about-imgs">
						<i class="far fa-lightbulb"></i>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
	</section>
	<!-- End About Area -->
	<!-- Start Client Logo -->
	<div class="client-logo section-bg pt-40 pb-40">
		<div class="container">
			<div class="row">
				<div class="section-title text-center">
					<h4>Clientele</h4>
				</div>
				<div class="col-lg-12">
					<div class="client-area owl-carousel">
						<div class="single-client-area">
							<img class="normal-img" src="{{url('/')}}/public/frontend/assets/images/trust/bhutan.png" alt="">
							<img class="hover-img" src="{{url('/')}}/public/frontend/assets/images/trust/bhutan.png" alt="">
						</div>
						<div class="single-client-area">
							<img class="normal-img" src="{{url('/')}}/public/frontend/assets/images/trust/am2x-logo.png" alt="">
							<img class="hover-img" src="{{url('/')}}/public/frontend/assets/images/trust/am2x-logo.png" alt="">
						</div>
						<div class="single-client-area">
							<img class="normal-img" src="{{url('/')}}/public/frontend/assets/images/trust/almara.png" alt="">
							<img class="hover-img" src="{{url('/')}}/public/frontend/assets/images/trust/almara.png" alt="">
						</div>
						<div class="single-client-area">
							<img class="normal-img" src="{{url('/')}}/public/frontend/assets/images/trust/logo.png" alt="">
							<img class="hover-img" src="{{url('/')}}/public/frontend/assets/images/trust/logo.png" alt="">
						</div>
						<div class="single-client-area">
							<img class="normal-img" src="{{url('/')}}/public/frontend/assets/images/trust/reward.png" alt="">
							<img class="hover-img" src="{{url('/')}}/public/frontend/assets/images/trust/reward.png" alt="">
						</div>
						<div class="single-client-area">
							<img class="normal-img" src="{{url('/')}}/public/frontend/assets/images/trust/success.png" alt="">
							<img class="hover-img" src="{{url('/')}}/public/frontend/assets/images/trust/success.png" alt="">
						</div>
						<div class="single-client-area">
							<img class="normal-img" src="{{url('/')}}/public/frontend/assets/images/trust/tgcs.png" alt="">
							<img class="hover-img" src="{{url('/')}}/public/frontend/assets/images/trust/tgcs.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Client Logo -->
	<!-- Start Team Area -->
	<section class="team-area pt-110 pb-60">
		<div class="container">
			<!-- Section Headding -->
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center mb-70">
					<div class="section-headding">
						<h4 class="sub-title">Director Gallery</h4>
						<!-- <h2>Started with awesome and <br>talented members.</h2> -->
						<!-- <p>Activate one page navigation on any page throughout your with the selection</p> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-12 my-3">
					<div class="team-item">
						<!-- <div class="thumbnail">
							<img src="{{url('/')}}/public/frontend/assets/images/about/about.png" alt="team">
							<div class="team-plus-icon">
								<a href="team-details.html"><i class="icofont-plus"></i></a>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-skype"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#"><i class="fas fa-envelope"></i></a></li>
									<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
								</ul>
							</div>
						</div> -->
						<div class="content">
							<h4>Vikrant Singh</h4>
							<p>CEO, Founder SRV Technology </p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12 my-3">
					<div class="team-item">
						<!-- <div class="thumbnail">
							<img src="{{url('/')}}/public/frontend/assets/images/about/about.png" alt="team">
							<div class="team-plus-icon">
								<a href="team-details.html"><i class="icofont-plus"></i></a>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-skype"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#"><i class="fas fa-envelope"></i></a></li>
									<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
								</ul>
							</div>
						</div> -->
						<div class="content">
							<h4>Rishav Kumar</h4>
							<p>CTO, Founder SRV Technology</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Team Area -->

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