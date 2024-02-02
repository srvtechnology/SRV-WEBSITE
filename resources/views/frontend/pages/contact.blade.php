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
		style="background-image:url({{url('/')}}/public/frontend/assets/images/contact/contact.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="breadcum-title">
						<h2 class="page-title">Contact Us</h2>
						<ul class="page-list">
							<li><a href="index.html">Home</a> / <span>Contact</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Title End -->

	<!-- Start Contact Area -->
	<section class="contact-area pt-100 pb-70">
		<div class="container">
			<div class="row mb-80">
				<div class="col-lg-12 col-12">
					<div class="contact-form">
						<h4>Contact us</h4>
						<div class="contact-icon">
							<span>
								<a target="_blank" href="https://api.whatsapp.com/send?phone=7001769472"><i
									class="fab fa-whatsapp"></i></a>
							</span>
							<span>
								<a target="_blank" href="https://www.linkedin.com/company/srv01technology/"><i class="fab fa-linkedin-in"></i></a>
							</span>
							<span>
								<a target="_blank" href="https://telegram.me/vikrantsingh7"><i class="fab fa-telegram"></i></a>
							</span>
						</div>
						<!-- <h2>How Can We Help You!</h2> -->
						<!-- <form class="contact-form form-contact" id="contactForm" name="contact-form" action="sendemail.php"
							method="POST">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="sr-only" for="name">Name</label>
										<input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="sr-only" for="email">Email</label>
										<input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="subject">Subject</label>
								<input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject">
							</div>
							<div class="form-group">
								<label class="sr-only" for="message">Message</label>
								<textarea name="message" class="form-control" id="message" placeholder="Your Message"></textarea>
							</div>
							<div class="submit-btn">
								<button type="submit" name="submit" class="button-2"><span>Submit Message</span></button>
							</div>
						</form> -->
					</div>
				</div>
				<div class="col-lg-12 col-12">
					<!-- <div class="contact-map" id="contact-map"></div> -->
					<div class="mapouter">
						<div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0"
								marginwidth="0"
								src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=siliguri&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
								href="https://formatjson.org/">format json</a></div>
						<style>
							.mapouter {
								position: relative;
								text-align: right;
								width: 100%;
								height: 300px;
							}

							.gmap_canvas {
								overflow: hidden;
								background: none !important;
								width: 100%;
								height: 300px;
							}

							.gmap_iframe {
								width: 100% !important;
								height: 300px !important;
							}
						</style>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single -->
				<div class="col-md-6 mb-30">
					<div class="contact-info-box">
						<h2>Working Hours</h2>
						<p>Monday - Saturday : 11AM - 8PM Sunday : Closed</p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-md-6 mb-30">
					<div class="contact-info-box">
						<h2>Office Address</h2>
						<p>Registered office: - BT ranadeep colony , Matigara , Siliguri</p>
						<p>Corporate office: - New Town, Kolkata</p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-md-6 mb-30">
					<div class="contact-info-box">
						<h2>Phones</h2>
						<p>Phone : +91 7001769472, +91 7063821662 </p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-md-6 mb-30">
					<div class="contact-info-box">
						<h2>Emails</h2>
						<p>Support: info@srvtechservices.com, vikrant@srvtechservices.com, rishav@srvtechservices.com,
							srvtechnology0@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Area -->
	<!-- Start Get Connected Area -->
	<div class="get-connected pt-50 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2>Get connected and take <br> control of your business success.</h2>
				</div>
				<div class="col-lg-6 align-self-center text-center">
					<a class="button-2 s-white-bg" href="#">Contact Now</a>
				</div>
			</div>
		</div>
	</div>
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