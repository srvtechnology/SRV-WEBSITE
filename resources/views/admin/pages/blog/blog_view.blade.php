@extends('admin.layouts.app')
@section('title')
<title>Admin | Blog View</title>
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
					<h4 class="pull-left page-title">Blog View Page</h4>
					<ol class="breadcrumb pull-right">
						<li><a href="{{route('admin.dashboard.home')}}">SRV</a></li>
						
						<li class="active">Blog View Page</li>
					</ol>
				</div>
			</div>
			<div class="add-btn "><a href="{{route('admin.blog.list')}}"><i class="icofont-minus-circle"></i> Back</a></div>
			
			<div class="row">
				<div class="col-lg-12">
					
					<div>
						
						<div class="row">
							<div class="col-md-6">
								<!-- Personal-Information -->
								<div class="panel panel-default panel-fill">
									<div class="panel-heading">
										<h3 class="panel-title">Blog Information</h3>
									</div>
									<div class="panel-body">
										<div class="about-info-p">
											<strong>Blog name</strong>
											<br>
											<p class="text-muted">{{@$blog->blog_name}}</p>
										</div>
										 	<div class="about-info-p">
											<strong>User Name </strong>
											<br>
											<p class="text-muted">{{@$blog->user_name}}</p>
										</div>

											 	<div class="about-info-p">
											<strong>Title </strong>
											<br>
											<p class="text-muted">{{@$blog->title}}</p>
										</div>

											<div class="about-info-p">
											<strong>Source </strong>
											<br>
											<p class="text-muted">{{@$blog->source}}</p>
										</div>

											<div class="about-info-p">
											<strong>Link </strong>
											<br>
											<p class="text-muted">{{@$blog->link}}</p>
										</div>
										

											 	<div class="about-info-p">
											<strong>Short Desc</strong>
											<br>
											<p class="text-muted">{{@$blog->short_desc}}</p>
										</div>

											<div class="about-info-p">
											<strong>Long Desc</strong>
											<br>
											<p class="text-muted">{!!@$blog->long_desc!!}</p>
										</div>
										
										
										<div class="about-info-p">
											<strong>Create Time</strong>
											<br>
											<p class="text-muted">{{@$blog->created_at}}</p>
										</div>
										<div class="about-info-p">
											<strong>Last update Time</strong>
											<br>
											<p class="text-muted">{{@$blog->updated_at}}</p>
										</div>
										
										
									</div>
								</div>
								<!-- Personal-Information -->
								<!-- Languages -->
								
								<!-- Languages -->
							</div>
							<div class="col-md-6">
								<!-- Personal-Information -->
								<div class="panel panel-default panel-fill">
									<div class="panel-heading">
										<h3 class="panel-title">Blog Information</h3>
									</div>
									<div class="panel-body">
										<div class="about-info-p">
											<strong>Image </strong>
											<br>
											<img src="{{url('/')}}/storage/app/public/blog/{{@$blog->image}}" style="width: 100%;">
										</div>
										
									</div>
								</div>
								
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