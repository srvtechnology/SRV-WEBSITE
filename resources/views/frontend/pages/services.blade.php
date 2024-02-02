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
		style="background-image:url({{url('/')}}/public/frontend/assets/images/services/services.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="breadcum-title">
						<h2 class="page-title">Our Services</h2>
						<ul class="page-list">
							<li><a href="index.html">Home</a> / <span>Service</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Title End -->
	<!-- Start Services Area -->
	<section class="estro-services-area section-padding">
		<div class="container">
			<div class="row">
				<!-- Single -->
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<div class="icon">
							<!-- <i class="icofont-file-text"></i> -->
							<i class="icofont-web"></i>
						</div>
						<h2><a href="services-details.html">Website Development</a></h2>
						<p>Web Designing Company and Best Web Development in Kolkata & Siliguri Providing website Design Services to
							Startup, Small Business, Industries as well as Corporate Clients. <br><br>
							This is an art form to shape your dreams into an official design or website that will serve as a bridge
							between your business objectives and target audience. It expresses your thoughts, true morals & ethical
							values that revolves around your entire business.</p>
						<!-- <a class="link" href="services-details.html">Details here</a> -->
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<div class="icon">
							<i class="fas fa-chart-line"></i>
						</div>
						<h2><a href="services-details.html">CRM Development</a></h2>
						<p>Popular CRMs we work and delivering development solutions on :-
							1. Salesforce <br>
							2. Bitrix24 <br>
							3. Hubspot <br>
							4. Quickbooks <br>
							5. Microsoft </p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<div class="icon">
							<i class="icofont-ui-touch-phone"></i>
						</div>
						<h2><a href="services-details.html">Mobile app development</a></h2>
						<p>We offer high-quality mobile app development services that include right from design to development till
							it reaches the market. Our team of mobile developers offers robust, high-quality, and scalable mobile apps
							within the scheduled timeline.</p>
						<p>We develop mobile apps on both native and hybrid platform including Flutter. This gives us advantage to
							build more compatible and competitive apps around the world.</p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<div class="icon">
							<i class="fab fa-ethereum"></i>
						</div>
						<h2><a href="services-details.html">Blockchain development</a></h2>
						<p>1. Web3 <br>
							2. Decentralised applications <br>
							3. Smart contracts <br><br>

							We build decentralised application using web3 on Ethereum network and we can develop our own smart
							contract as per the client requirements.
							We develop NFT platforms as well and have already delivered couple of successful projects to our clients.
						</p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<div class="icon">
							<i class="fab fa-wordpress"></i>
						</div>
						<h2><a href="services-details.html">CMS development</a></h2>
						<p>1. Wordpress (Theme, Plugin, Woo-commerce, backend customisation, theme customisation, plugin
							customisation) <br>
							2. Shopify store design , plugin development <br>
							3. Magento full stack development <br>
							4. Big commerce <br>
							5. Squarespace <br>
							6. Webflow </p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<div class="icon">
							<i class="fab fa-shopify"></i>
						</div>
						<h2><a href="services-details.html">Theme development</a></h2>
						<p>1. Shopify <br>
							2. Magento <br>
							3. Wordpress <br>
							4. HTML CSS themes <br>
							5. React themes <br>
							6. Squarespace </p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<div class="icon">
							<i class="fas fa-shopping-cart"></i>
						</div>
						<h2><a href="services-details.html">E-Commerce development</a></h2>
						<p>Services & Solutions we offer for ecommerce developed as follows:- <br>
							1. Custom (Laravel, Node.js, Java) <br>
							2. Woo commerce <br>
							3. Magento <br>
							4. Shopify </p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<div class="icon">
							<i class="fab fa-figma"></i>
						</div>
						<h2><a href="services-details.html">UI/UX design</a></h2>
						<p>Tools and technologies we use for UI/UX development
							For design tool <br>
							1. Figma <br>
							2. Photoshop <br>
							3. Adobe Ilustrator <br>
							For templating <br>
							HTML, CSS, Bootstrap, React , Angular </p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<div class="icon">
							<i class="fab fa-facebook"></i>
						</div>
						<h2><a href="services-details.html">Digital marketing</a></h2>
						<p>We offer SEO services and Social media marketing as follows :- <br>
							1. Facebook marketing <br>
							2. Google ads marketing <br>
							3. Leads generation <br>
							4. LinkedIn marketing <br>
							5. Instagram marketing</p>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-lg-12 text-center mt-50">
					<a class="button-2" href="#">More Services</a>
				</div>
			</div> -->
		</div>
	</section>
	<!-- End Services Area -->
	<!-- Start Get Connected Area -->
	<div class="get-connected pt-50 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2>Get connected and take <br> control of your business success.</h2>
				</div>
				<div class="col-lg-6 align-self-center text-center">
					<a class="button-2 s-white-bg" href="{{route('contact')}}">Contact Now</a>
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