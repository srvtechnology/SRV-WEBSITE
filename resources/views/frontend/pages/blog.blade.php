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

	<style>
		.blog-detail-btn {
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
			margin-top: 10px;
			color: #0047f2;
			font-weight: 500;
			line-height: 1.75;
			position: relative;
			display: inline-block;
			padding: 2px 0px;
			font-size: 16px;
		}

		.blog-detail-btn:hover {
			color: #082f8b;
		}
	</style>

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
	<!-- End Header Area -->
	<!-- Start Mobile Menu Area -->

	<!--offcanvas menu area end-->
	<!-- End Mobile Menu Area -->

	<!-- Page Title Start -->
	<section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
		style="background-image:url({{url('/')}}/public/frontend/assets/images/blog/blog2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="breadcum-title">
						<h2 class="page-title">Blog & News</h2>
						<ul class="page-list">
							<li><a href="index.html">Home</a> / <span>Blogs</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Title End -->

	<!-- Start Blog Area -->
	<section class="blog-area blog-page section-padding">
		<div class="container">
			<div class="row">
				<!-- Single -->
				@foreach($blogs as $key=> $val)
				<div class="col-lg-4 col-md-6 mb-25">
					<div class="blog-item-single">
						<div class="thumbanil">
							<div class="img-overly">
								<img src="{{url('/')}}/storage/app/public/blog/{{@$val->image}}" alt="blog">
							</div>
							<div class="category">
								<a href="#">{{@$val->blog_name}}</a>
							</div>
						</div>
						<div class="content">
							<div class="meta">
								<span><a href="#"><i class="icofont-user-alt-3"></i> by: {{@$val->user_name}}</a></span>
								<!-- <span><i class="icofont-comment"></i> 02 Comments</span> -->
							</div>
							<h3><a href="{{route('blog.details',$val->id)}}">{{@$val->title}}</a>
								<p>{{@$val->short_desc}}.....</p>
							<a class="blog-detail-btn" href="{{route('blog.details',$val->id)}}">More Details...</a>
						</div>
					</div>
				</div>
				@endforeach
				<!-- Single -->
				
				

			</div>
			<!-- <div class="row">
				<div class="col-12 mb-30 text-center">
					<div class="blog-pagination">
						<ul>
							<li><a href="#">01</a></li>
							<li><span>02</span></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
						</ul>
					</div>
				</div>
			</div> -->
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