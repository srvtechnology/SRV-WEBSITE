@extends('admin.layouts.app')
@section('title')
<title>Admin | Review View</title>
@endsection
@section('left_part')
@include('admin.include.left_part')
{{-- for datepicker --}}
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		
		
		<div class="wraper container-fluid">
			
			<div class="row">
				<div class="col-sm-12">
					<h4 class="pull-left page-title">Review View Page</h4>
					<ol class="breadcrumb pull-right">
						<li><a href="{{route('admin.dashboard.home')}}">SRV</a></li>
						
						<li class="active">Review View Page</li>
					</ol>
				</div>
			</div>
			<div class="add-btn "><a href="{{route('admin.review.list')}}"><i class="icofont-minus-circle"></i> Back</a></div>
			
			<div class="row">
				<div class="col-lg-12">
					
					<div>
						
						<div class="row">
							<div class="col-md-6">
								<!-- Personal-Information -->
								<div class="panel panel-default panel-fill">
									<div class="panel-heading">
										<h3 class="panel-title">Review Information</h3>
									</div>
									<div class="panel-body">
										<div class="about-info-p">
											<strong>Star</strong>
											<br>
											<p class="text-muted">{{@$review->star}} star</p>
											{{-- for gold star --}}
														@for($i=0;$i<=($review->star-1);$i++)
														
														<a href="#url"><img src="{{asset('public/adminasset/assets/images/star.png')}}"></a>
														
														@endfor
														@for($i=0;$i<(5-$review->star);$i++)
														
														<a href="#url"><img src="{{asset('public/adminasset/assets/images/star1.png')}}"></a>
														
														@endfor
										</div>
										
										
										<div class="about-info-p">
											<strong>Client Name</strong>
											<br>
											<p class="text-muted">{{@$review->client_name}}</p>
										</div>
										<div class="about-info-p">
											<strong>Review</strong>
											<br>
											<p class="text-muted">{{@$review->review}}</p>
										</div>
										
										<div class="about-info-p">
											<strong>Create Time</strong>
											<br>
											<p class="text-muted">{{@$review->created_at}}</p>
										</div>
										<div class="about-info-p">
											<strong>Last update Time</strong>
											<br>
											<p class="text-muted">{{@$review->updated_at}}</p>
										</div>
										
										
									</div>
								</div>
								<!-- Personal-Information -->
								<!-- Languages -->
								
								<!-- Languages -->
							</div>
							
							
						</div>
						
					</div>
					
					
					
					
				</div>
			</div>
		</div>
		</div> <!-- container -->
		
		</div> <!-- content -->
		
	</div>
	<!-- ============================================================== -->
	<!-- End Right content here -->
	<!-- ============================================================== -->
	<!-- End Right content here -->
	@section('footer')
	@include('admin.include.footer')
	@endsection
	@endsection
	{{-- end content --}}
	@section('script')
	@include('admin.include.script')
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	@endsection