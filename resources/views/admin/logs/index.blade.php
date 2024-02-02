@extends('admin.layouts.app')
@section('title')
<title>Admin | Manage Payment Logs</title>
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
                    <h4 class="pull-left page-title">Manage Payment Logs</h4>
                    <ol class="breadcrumb pull-right">
                                <li><a href="{{route('admin.dashboard.home')}}">SRV</a></li>
                                <li class="active">Manage Payment Logs</li>
                     </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @include('admin.include.message')
                    
                    <div class="clearfix"></div>
                    <div class="panel panel-default">
                        <div class="panel-heading rm02 rm04">
                        
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table" id="example" >
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Order Id</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i=1; @endphp
                                                @foreach ($data as $value)
                                                <tr>
                                                    
                                                    @php
                                                    $order = DB::table('user_to_template')->where('id',$value->ordermaster_id)->first();
                                                    @endphp
                                                    <td>{{@$order->order_id}}</td>
                                                    <td>{{@$value->type}}</td>
                                                    <td>Rs.{{@$value->amount/100}}/-</td>
                                                    <td>{{@$value->created_at}}</td>
                                                </tr>
                                                @endforeach
                                                


                                            </tbody>
                                        </table>
                                </div>
                            
                                {!!$data->links()!!}
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
         @foreach (@$data as $value)

    $("#action{{$value->id}}").click(function(){
        $('.show-actions:not(#show-{{$value->id}})').slideUp();
        $("#show-{{$value->id}}").slideToggle();
    });
 @endforeach
</script>
@endsection