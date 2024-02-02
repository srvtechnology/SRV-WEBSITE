@extends('layouts.app')

{{-- head --}}
@include('frontend.include.head')
@section('content')



<body class="home-3 home-dark">
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

	<!-- Start Hero Area -->
	<section>
		<div class="hero-area-3 hero-bg-3">
			<div class="container ">
				<div class="row  ">
					<div class="col-lg-6 ">
						<div class="hero-content mt-5">
							<div class="section-title">
								<h2>Where innovation <br> meets excellence</h2>
							</div>
							<p>One stop solution for IT consultation and development. Let’s connect and make your business digitally
								grow & simplified with <b>SRV Technology. </b></p>
							<div class="hero-btn">
								<a href="{{route('service')}}" class="colored-btn btn">Get Started</a>
								<!-- <a href="https://www.youtube.com/watch?v=K4TOrB7at0Y" class="video-play-btn mfp-iframe btn"><i
										class="fas fa-play"></i>play video</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Hero Area -->
	<!-- Client Section Start -->
	<section class="partner-section s-padding ">
		<div class="container">
			<div class="row ps_bg">
				<div class="col-lg-12  text-center">
					<div class="section-title">
						<h4>Trusted by 50+ organisations world wide</h4>
					</div>
				</div>
				<div class="col-lg-10 offset-lg-1">
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
			<div class="row">
			</div>
		</div>
	</section>
	<!-- Client Section End -->

	<!-- About Section Start -->
	<section class="section-about section-padding">

		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-md-6 about-left">
					<div class="about-bg dark">
						<img src="{{url('/')}}/public/frontend/assets/images/about/about.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 ">
					<div class="section-title">
						<h4>About us</h4>
					</div>
					<div class="about-content">
						<h2>SRV invites you to grow your business digitally.</h2>
						<p>We’ll help you to create innovative digital solution for your business.

							With great Efficiency, trustable Reliability and very Economic structure and methods we move with our
							clients and we always give our clients a pace & comfort to coordinate with us completely during the
							development process to achieve the best. </p>
					</div>
				</div>


			</div>
		</div>
	</section>
	<!-- About Section End -->


	<!-- -- our mission start -- -->
	<section class="service-area mt-3 mb-5">
		<div class="container">
			<div class="about-bottom-content">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="single-about-item-box">
							<i class="fas fa-bullseye"></i>
							<h3>Our Mission</h3>
							<p class="text-center">Our mission is to build a quality and comprehensive technology infrastructure.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="single-about-item-box">
							<i class="far fa-lightbulb"></i>
							<h3>Our Vision</h3>
							<p class="text-center">We want to be known as the creative, original, and imaginative.</p>
						</div>
					</div>
					<a href="{{route('about')}}" class="explore-btn btn">Explore More <i class="fas fa-angle-double-right"></i></a>
				</div>
			</div>
		</div>
	</section>
	<!-- -- our mission end -- -->

	<!-- service Area Start -->
	<section class="service-area mt-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 text-center">
					<div class="section-title section-tpaddig">
						<h4 class="sub-title">our services</h4>
						<h2 class="title">Exclusive services for our customer</h2>
						<!-- <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magnaaliquyam erat, sed diam voluptua.</p> -->
					</div>
				</div>
			</div>
			<div class="service-section">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-service-item">
							<img src="{{url('/')}}/public/frontend/assets/images/services/design.jpg" alt="">
							<!-- <div class="service-bg service-bg-1"> -->
							<div class="service-content">
								<h2>Website Development</h2>
								<p>Web Designing Company and Best Web Development in Kolkata & Siliguri Providing website Design
									Services to Startup, Small Business, Industries as well as Corporate Clients.</p>
								<!-- <i class="fas fa-angle-double-right"></i> -->
							</div>
							<!-- </div> -->
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service-item">
							<img src="{{url('/')}}/public/frontend/assets/images/services/develop.jpg" alt="">
							<div class="service-content">
								<h2>Software Development</h2>
								<p>SRV provides full customized software solution for Small, Medium and corporate businesses as well
									to support the internal process, Procurement, Sales, Analization etc.</p>
								<!-- <i class="fas fa-angle-double-right"></i> -->
							</div>

							<!-- <div class="service-bg service-bg-2">
								<div class="service-content">
									<h2>Software Development</h2>
									<p>SRV provides full customized software solution for Small, Medium and corporate businesses as well
										to support the internal process, Procurement, Sales, Analization etc.</p>
									<i class="fas fa-angle-double-right"></i>
								</div>
							</div> -->
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service-item">
							<img src="{{url('/')}}/public/frontend/assets/images/services/app.jpg" alt="">
							<!-- <div class="service-bg service-bg-3"> -->
							<div class="service-content">
								<h2>app development</h2>
								<p>we offer high-quality mobile app development services that include right from design to development
									till it reaches the market. Our team of mobile developers offers robust</p>
								<!-- <i class="fas fa-angle-double-right"></i> -->
							</div>
							<!-- </div> -->
						</div>
					</div>
					<a href="{{route('service')}}" class="explore-btn btn">Explore More <i class="fas fa-angle-double-right"></i></a>
					<!-- <div class="col-lg-4 col-md-6">
						<div class="single-service-item">
							<div class="service-bg service-bg-4">
								<div class="service-content">
									<h2>Mobile app development</h2>
									<p>Sed quia magni dolores eos quiratione voluptatem sequi.</p>
									<i class="fas fa-angle-double-right"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service-item">
							<div class="service-bg service-bg-5">
								<div class="service-content">
									<h2>Content Marketing</h2>
									<p>Sed quia magni dolores eos quiratione voluptatem sequi.</p>
									<i class="fas fa-angle-double-right"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service-item">
							<div class="service-bg service-bg-6">
								<div class="service-content">
									<h2><a href="">NetWork Analaysis</a></h2>
									<p>Sed quia magni dolores eos quiratione voluptatem sequi.</p>
									<a href=""><i class="fas fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- service Area end -->

	<!-- Why Choose Area Start -->
	<section class="section-why-choose section-padding">
		<div class="container">
			<div class="row ">
				<div class=" col-xl-6 col-lg-6 col-md-6  ">
					<div class="section-title">
						<h4 class="sub-title">Why Choose Us</h4>
					</div>
					<div class="about-content">
						<h2>Best in latest technology service provider</h2>
						<p>30+ professional developers team always ready to take challanges and committed to provide best industry
							level development solution to help your organisations transform seamlessly digitally.</p>
						<div class="about-bottom-content">
							<div class="row">
								<div class="col-md-12">
									<ul class="why-choose-item">
										<li>Website/E-commerce solutions</li>
										<li>Blockchain solutions</li>
										<li>Mobile App development</li>
										<li>ERP/CRM solutions</li>
										<li>Facebook/Google ads marketing.</li>
									</ul>
								</div>
								<a href="{{route('service')}}" class="explore-btn colored-btn btn">Explore More <i
										class="fas fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class=" col-xl-6 col-lg-6 col-md-6 position-relative">
					<div class="why-shap-area">
						<div class="about-bg">
							<img src="{{url('/')}}/public/frontend/assets/images/about/why.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 why-bg-pos">
					<div class="why-about-bg ">

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Why Choose Area End -->

	<!-- Portfoli area start -->
	<section class="portfolio-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 text-center">
					<div class="section-title section-tpaddig">
						<h4 class="sub-title">our portfolio</h4>
						<h2 class="title">Awesome & exclusive project that we worked.</h2>
						<!-- <p>Activate one page navigation on any page throughout your with the selection</p> -->
					</div>
				</div>
			</div>
			<div class="portfolio-items">
				<div class="row ">
					@foreach($portfolios as $val)
					<div class="col-lg-4 col-md-6 col-12 my-3">
						<div class="single-portfolio-box">
							<div class="img-overly">
								<img src="{{url('/')}}/storage/app/public/portfolio/{{@$val->image}}" alt="">
							</div>
							<div class="portfolio-box-content">
								<h6><a href="">{{@$val->title}}</a><span>{{@$val->coding_language}}</span></h6>
								<!-- <a href="#"><i class="fas fa-link"></i></a> -->
							</div>
						</div>
					</div>
					@endforeach
			{{-- 		<div class="col-lg-4 col-md-6 col-12 my-3">
						<div class="single-portfolio-box">
							<div class="img-overly">
								<img src="{{url('/')}}/public/frontend/assets/images/portfolio/image_large.png" alt="">
							</div>
							<div class="portfolio-box-content">
								<h6><a href="#">Almazra</a><span>Wp Woo-commerce development</span></h6>
								<!-- <a href="#"><i class="fas fa-link"></i></a> -->
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
								<!-- <a href="#"><i class="fas fa-link"></i></a> -->
							</div>
						</div>
					</div> --}}
					<a href="{{route('portfolio')}}" class="explore-btn btn">Explore More <i class="fas fa-angle-double-right"></i></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfoli area End -->

	<!-- -- Work technologies Start -- -->
	<section class="work-technologies section-padding">
		<div class="container">
			<h2 class="title text-center mb-5">Technologies we work on</h2>

			<div class="col-lg-10 offset-lg-1">
				<div class="client-area owl-carousel">
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/python.png" alt="">
						</div>
						<h2>Python</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/dj.png" alt="">
						</div>
						<h2>Django</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/php.png" alt="">
						</div>
						<h2>php</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/laravel.png" alt="">
						</div>
						<h2>Laravel</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/node.png" alt="">
						</div>
						<h2>Node js</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/angular.png" alt="">
						</div>
						<h2>angular</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/react.png" alt="">
						</div>
						<h2>react</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/react.png" alt="">
						</div>
						<h2>react native</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/flutter.png" alt="">
						</div>
						<h2>flutter</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/java.png" alt="">
						</div>
						<h2>java</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/Kotlin_Icon.png" alt="">
						</div>
						<h2>kotlin</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/swift.png" alt="">
						</div>
						<h2>swift</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/magento.png" alt="">
						</div>
						<h2>Magento</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/salesforce-logo.png" alt="">
						</div>
						<h2>Salesforce</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/microsoft.png" alt="">
						</div>
						<h2>Microsoft Sharepoint</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/aws.png" alt="">
						</div>
						<h2>aws</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/wordpress.png" alt="">
						</div>
						<h2>wordpress</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/Squarespace.png" alt="">
						</div>
						<h2>Squarespace</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/Shopify.png" alt="">
						</div>
						<h2>shopify</h2>
					</div>
					<div class="work-tech">
						<div>
							<img src="{{url('/')}}/public/frontend/assets/images/work-tech/blockchain.png" alt="">
						</div>
						<h2>Blockchain</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- -- Work technologies Start -- -->

	<!-- client project Start -->
	<section class="clinet-project client-project-bg mb-5">
		<div class="container">
			<div class="row">
				<!-- <div class="col-lg-12 ">
					<div class="video-play-img img-overly">
						<img src="{{url('/')}}/public/frontend/assets/images/youtube/our-team.jpg" alt="">
						<a href="" class="video-play-btn3 mfp-iframe"><i class="fas fa-play"></i></a>
					</div>
				</div> -->
			</div>
			<div class="project-counter">
				<div class="row">
					<div class="col-lg-3 col-md-3">
						<div class="single-counter-box">
							<h4 class="counter-text"><span class="counter3">50</span>CLIENT TRUST</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3">
						<div class="single-counter-box">
							<h4 class="counter-text"><span class="counter3">30</span>EXPERTS</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3">
						<div class="single-counter-box">
							<h4 class="counter-text"><span class="counter3">8</span>EXPERIENCE</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3">
						<div class="single-counter-box">
							<h4 class="counter-text"><span class="counter3">70</span>PROJECTS</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- client project End -->

	<!-- pricing area Start -->
	<!-- <section class="pricing-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center">
					<div class="section-title section-tpaddig">
						<h4 class="sub-title">pricing plan</h4>
						<h2 class="title">Get Started With Awesome Price & Planning Table.</h2>
						<p>Activate one page navigation on any page throughout your with the selection</p>
					</div>
				</div>
			</div>
			<div class="pricing-box-items">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="single-pricing-box">
							<h4>Starter plan</h4>
							<h2>$49.99 <span>/mo</span></h2>
							<ul>
								<li>10GB Bandwidth Internet</li>
								<li>Business & Finance Analysing</li>
								<li>25 Social Media Reviews</li>
								<li>Customer Managemet</li>
								<li>Support 24/7</li>
							</ul>
							<a href=""><i class="fas fa-plus"></i></a>
							<p><span>Note: </span>No Hidden Charge</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="single-pricing-box active">
							<h4>advanced plan </h4>
							<h2>$49.99 <span>/mo</span></h2>
							<ul>
								<li>10GB Bandwidth Internet</li>
								<li>Business & Finance Analysing</li>
								<li>25 Social Media Reviews</li>
								<li>Customer Managemet</li>
								<li>Support 24/7</li>
							</ul>
							<a href=""><i class="fas fa-plus"></i></a>
							<p><span>Note: </span>No Hidden Charge</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="single-pricing-box">
							<h4>premium plan</h4>
							<h2>$49.99 <span>/mo</span></h2>
							<ul>
								<li>10GB Bandwidth Internet</li>
								<li>Business & Finance Analysing</li>
								<li>25 Social Media Reviews</li>
								<li>Customer Managemet</li>
								<li>Support 24/7</li>
							</ul>
							<a href=""><i class="fas fa-plus"></i></a>
							<p><span>Note: </span>No Hidden Charge</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- pricing area End -->

	<!-- Tesimonial Area Start -->
	<section class="testimonial-area seo-agency mt-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 ">
					<div class="testimonail-content">
						<h4 class="sub-title">Testimonail</h4>
						<h2 class="title">See What Our Lovely Clients Say About Us</h2>
						<p>Activate one page navigation on any pagethroughout your with the selection onesimple option in the admin
							area. Doing this you can create anything homepages.</p>
						<a href="{{route('portfolio')}}" class="explore-btn colored-btn btn">Explore More <i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
				<div class="col-lg-8 col-md-6">
					<div class="testimonail-carousel owl-carousel">
						@foreach($reviews as $val)
						<div class="single-testimonail-item">
							<i class="fas fa-quote-left"></i>
							<span class="testi-icon">
								@for($i=0;$i<=($val->star-1);$i++)
                            
                            <a href="#url"><i class="fas fa-star"></i></a>
                            
                            @endfor
                            @for($i=0;$i<(5-$val->star);$i++)
                            
                            <a href="#url"><i class="fa fa-star-o"></i></a>
                            
                            @endfor
							</span>
							<p>{{@$val->review}}</p>
							<div class="testimonail-author-box">
								<i class="fas fa-user"></i>
								<h2>{{@$val->client_name}} <span>Client</span></h2>
							</div>
						</div>
						@endforeach
					{{-- 	<div class="single-testimonail-item">
							<i class="fas fa-quote-left"></i>
							<span class="testi-icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
							<p>Great team and excellent communication. Will definitely work with them in the future. For View.js with
								Canvas and Node.js in backend, AWS as server
							</p>
							<div class="testimonail-author-box">
								<i class="fas fa-user"></i>
								<h2>Rohan M. <span>Client</span></h2>
							</div>
						</div>
						<div class="single-testimonail-item">
							<i class="fas fa-quote-left"></i>
							<span class="testi-icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
							<p>SRV’s approach toward our project was well structured. The way they found out solution to our issue is
								commendable. The problem was multilevel and at each they prove their proficiency. This makes it clear
								that they has expertise and their claim of full stack development team is justified. Moreover what I was
								expecting from any development team is transparency and SRV did not let me down!”
							</p>
							<div class="testimonail-author-box">
								<!-- <img src="{{url('/')}}/public/frontend/assets/images/clients/client3.jpg" alt=""> -->
								<i class="fas fa-user"></i>
								<h2>Shop Next solutions Pvt. Ltd. <span>Client</span></h2>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Tesimonial Area End -->

	<!-- Blog Area Start -->
	<!-- <section class="blog-area s-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2 text-center">
					<div class="section-title section-tpaddig">
						<h4 class="sub-title">Blog Post</h4>
						<h2 class="title">Check Our Latest News We Are Here!</h2>
						<p>Activate one page navigation on any page throughout your with the selection</p>
					</div>
				</div>
			</div>
			<div class="blog-items">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-item">
							<div class="img-overly">
								<img src="{{url('/')}}/public/frontend/assets/images/blog/blog3.jpg" alt="">
							</div>
							<p>
								<span><i class="fas fa-tag"></i>Development</span>
								<span><i class="far fa-comment-dots"></i>Comments(03)</span>
							</p>
							<a href="blog.html">Sed diam nonumy Eirmod tempor invidunt ut labore</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-item">
							<div class="img-overly">
								<img src="{{url('/')}}/public/frontend/assets/images/blog/blog4.jpg" alt="">
							</div>
							<p>
								<span><i class="fas fa-tag"></i>Development</span>
								<span><i class="far fa-comment-dots"></i>Comments(03)</span>
							</p>
							<a href="blog.html">Sed diam nonumy Eirmod tempor invidunt ut labore</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-item">
							<div class="img-overly">
								<img src="{{url('/')}}/public/frontend/assets/images/blog/blog5.jpg" alt="">
							</div>
							<p>
								<span><i class="fas fa-tag"></i>Development</span>
								<span><i class="far fa-comment-dots"></i>Comments(03)</span>
							</p>
							<a href="blog.html">Sed diam nonumy Eirmod tempor invidunt ut labore</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Blog Area End -->

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
	