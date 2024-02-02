<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SRV Technology</title>
	<meta name="keywords" content="marketing, digital, shop, ecommerce" />
	<meta name="description" content="SRV Technology">

	<link rel="icon" href="{{url('/')}}/public/frontend/assets/images/header/srv-logo.png" type="image/gif" sizes="16x16">

	<link rel="stylesheet" href="{{url('/')}}/public/frontend/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/assets/css/icofont.min.css">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/assets/css/animate.css">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/assets/css/normalize.css">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/assets/css/all.min.css">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/style.css">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/assets/css/responsive.css">

	<!-- index-3 css -->
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/assets/css/index-3.css">

</head>

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
 @include('frontend.include.message')
	<!-- End Header Area -->
	<!-- Start Mobile Menu Area -->

	<!--offcanvas menu area end-->
	<!-- End Mobile Menu Area -->


	<!-- Page Title Start -->
	<section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
		style="background-image:url({{url('/')}}/public/frontend/assets/images/blog/blog-details.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="breadcum-title">
						<h2 class="page-title">Blog Details</h2>
						<ul class="page-list">
							<li><a href="index.html">Home</a> / <a href="single.html">Blog & news</a> / <span>blog details</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Title End -->

	<!-- Start Blog Area -->
	<section class="blog-area blog-details-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<!-- Single -->
					<div class="widgets-single mb-40">
						<h2>Post Category</h2>
						<ul>
							<li><a href="#">Email Marketing</a></li>
							<li><a href="#">Web Development</a></li>
							<li><a href="#">Virtual Marketing</a></li>
							<li><a href="#">Web Optimization</a></li>
							<li><a href="#">Pay Per Click</a></li>
						</ul>
					</div>
					<!-- Single -->
					<div class="widgets-single mb-40">
						<div class="thumbnail">
							<img src="{{url('/')}}/public/frontend/assets/images/blog/1.png" alt="img">
						</div>
					</div>
					<!-- Single -->
					<div class="widgets-single mb-40">
						<div class="thumbnail">
							<img src="{{url('/')}}/public/frontend/assets/images/blog/2.png" alt="img">
						</div>
					</div>
					<!-- Single -->
					<div class="widgets-single mb-40">
						<div class="thumbnail">
							<img src="{{url('/')}}/public/frontend/assets/images/blog/3.png" alt="img">
						</div>
					</div>
				</div>
				<!-- Blog Details -->
				<div class="col-lg-9">
					<div class="blog-details">
						<div class="blog-details-cotent">
							<div class="date">
								<span>{{-- 4:35 AM GMT+5:30•January 20, 2023/ --}}{{@$blog->updated_at}}</span>
							</div>
							<h2>{{@$blog->title}}</h2>
							<p>{{@$blog->short_desc}} —
								{{@$blog->user_name}}</p>
							<div class="thumbnail img-overly mb-40">
								<img src="{{url('/')}}/storage/app/public/blog/{{@$blog->image}} "alt="img">
							</div>
							{{-- long desc --}}
							{!!@$blog->long_desc!!}




							<div class="row mb-50">
								<div class="col-lg-6">
									<div class="blog-tags">
										<span><b>Source:</b></span>
										<span><a href="{{$blog->link}}">{{$blog->source}}</a></span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="blog-share text-right">
										<span><b>Share:</b></span>
										<span><a href="#"><i class="icofont-facebook"></i></a></span>
										<span><a href="#"><i class="icofont-twitter"></i></a></span>
										<span><a href="#"><i class="icofont-skype"></i></a></span>
										<span><a href="#"><i class="icofont-facebook-messenger"></i></a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog Area -->
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
	<!-- Start Footer Area -->
@include('frontend.include.footer')
	<!-- End Footer Area -->
	<div class="scroll-area">
		<i class="icofont-arrow-up"></i>
	</div>
	<!-- Js File -->
	<script src="{{url('/')}}/public/frontend/assets/js/modernizr.min.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/jquery-3.6.0.min.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/popper.min.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/bootstrap.min.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/owl.carousel.min.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/jquery.waypoints.min.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/jquery.counterup.min.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/countdown.min.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/typeit.min.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/vticker.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/jquery.lineProgressbar.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/isotope.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ "></script>
	<script src="{{url('/')}}/public/frontend/assets/js/ajax-form.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/mobile-menu.js"></script>
	<script src="{{url('/')}}/public/frontend/assets/js/script.js"></script>

</body>

</html>