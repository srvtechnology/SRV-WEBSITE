@extends('admin.layouts.app')
@section('title')
<title>Admin | Manage Portfolio</title>
@endsection
@section('left_part')
@include('admin.include.left_part')
@endsection
@section('content')



<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Portfolio Management</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="{{route('admin.dashboard.home')}}">SRV</a></li>
            <li class="active">Portfolio Management</li>
          </ol>
        </div>
      </div>
      @include('admin.include.message')
      <div class="row">
        <div class="col-md-12">
          <div class="add-btn "><a href="{{route('admin.portfolio.add.page')}}"><i class="icofont-plus-circle"></i> Add Portfolio</a></div>
          <div class="clearfix"></div>
          <div class="panel panel-default">
            <div class="panel-heading rm02 rm04">
              
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Images</th>
                          <th>Language</th>
                          
                          <th>Status</th>
                          <th class="rm07">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($portfolios as $key=> $value)
                        <tr>
                          <td>{{ $key+ $portfolios->firstItem() }}</td>
                          
                          <td>{{$value->title}}</td>
                          <td><img src="{{url('/')}}/storage/app/public/portfolio/{{@$value->image}}" style="width: 150px;height: 150px"></td>
                          <td>{{$value->coding_language}}</td>
                          
                          <td>
                            @if($value->status=="A")
                            Active
                            @else
                            Inactive
                            @endif
                          </td>
                          {{--  <td>{{$value->meta_title}}</td>
                          <td>{{$value->meta_keyword}}</td> --}}
                          
                          
                          
                          
                          
                          <td class="rm07">
                            <a href="javascript:void(0);" class="action-dots"  id="action{{$value->id}}"><img src="{{url('/')}}/public/adminasset/assets/images/action-dots.png" alt="" onclick="fun({{$value->id}})"></a>
                            <div class="show-actions" id="show-action{{$value->id}}" style="display: none;"> <span class="angle"><img src="{{url('/')}}/public/adminasset/assets/images/angle.png" alt=""></span>
                            <ul>
                              
                              <li><a href="{{route('admin.portfolio.view',$value->id)}}">View</a></li>
                              <li><a href="{{route('admin.portfolio.edit',$value->id)}}">Edit</a></li>
                              @if($value->status=="A")
                              <li><a onclick="return confirm('Are you sure want to deactive this portfolio?')" href="{{route('admin.portfolio.inactive',$value->id)}}">Deactive</a></li>
                              @else
                              <li><a onclick="return confirm('Are you sure want to active this portfolio?')" href="{{route('admin.portfolio.active',$value->id)}}">Active</a></li>
                              @endif
                              <li><a onclick="return confirm('Are you sure want to delete this portfolio?')" href="{{route('admin.portfolio.delete',$value->id)}}">Delete</a></li>
                              
                              
                              <li><a href="#" onclick="Cancel({{$value->id}})">Cancel</a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                {{--    <ul class="pagination">
                  <li class="paginate_button previous disabled"><a href="#">Previous</a></li>
                  <li class="paginate_button active"><a href="#">1</a></li>
                  <li class="paginate_button"><a href="#">2</a></li>
                  <li class="paginate_button"><a href="#">3</a></li>
                  <li class="paginate_button"><a href="#">4</a></li>
                  <li class="paginate_button"><a href="#">5</a></li>
                  <li class="paginate_button"><a href="#">6</a></li>
                  <li class="paginate_button next"><a href="#">Next</a></li>
                </ul> --}}
                {!!$portfolios->links()!!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End row -->
  </div>
  <!-- container -->
</div>
<!-- content -->

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
@section('footer')
@include('admin.include.footer')
@endsection
@endsection
{{-- end content --}}
@section('script')
@include('admin.include.script')
<script>
var resizefunc = [];
</script>
<script>
function fun(id){
$('.show-actions').slideUp();
$("#show-action"+id).show();
}
function Cancel(id){
$("#show-action"+id).hide();
}
$(document).mouseup(function(e)
{
var container = $(".show-actions");
// if the target of the click isn't the container nor a descendant of the container
if (!container.is(e.target) && container.has(e.target).length === 0)
{
container.hide();
}
});
</script>
@endsection