@extends('admin.layouts.app')
@section('title')
<title>Admin | Add Review</title>
@endsection
@section('left_part')
@include('admin.include.left_part')
<link href="{{ URL::asset('public/frontend/croppie/croppie.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('public/frontend/croppie/croppie.min.css') }}" rel="stylesheet" />
<style>
    #AboutMe{
        width: 200px !important;
        /*margin-left: 10px !important;*/
        margin-right: 10px !important;
    }
</style>
{{-- for datepicker --}}
{{-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
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
                    <h4 class="pull-left page-title">Review Add </h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{route('admin.dashboard.home')}}">SRV</a></li>
                        <li class="active"> Review Add </li>
                    </ol>
                </div>
            </div>
            @include('admin.include.message')
            <div class="add-btn "><a href="{{route('admin.review.list')}}"><i class="icofont-minus-circle"></i> Back</a></div>
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <!-- Personal-Information -->
                        <div class="panel panel-default panel-fill">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add Review</h3>
                            </div>
                            <div class="row">
                                <form role="form" action="{{route('admin.insert.review')}}" id="frm" method="post" enctype="multipart/form-data">
                                    <div class="panel-body  rm04 col-md-6">
                                        
                                        @csrf
                                        <div class="form-group rm50" style="margin-left: 30px !important ">
                                            <label for="title">Star</label>
                                            <input type="number"  class="form-control" id="AboutMe" placeholder="Enter star"  name="star" style="width: 230px" >
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group rm50" style="margin-left: 30px !important ">
                                            <label for="title">Client name</label>
                                            <input type="text"  class="form-control"  placeholder="Enter client name"  name="client_name" style="width: 220px" >
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="form-group rm50" style="margin-left: 30px !important ">
                                            <label for="title">Review</label>
                                            <br>
                                           {{--  <input type="text"  class="form-control"  placeholder="Enter user name"  name="review" style="width: 220px" > --}}
                                           <textarea name="review"  style="width: 452px;
                                            height: 163px;"></textarea>
                                        </div>
                                      
                                       
                                        
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    <div class="review_img rmm_001" style="display: none;margin-left: 20px;">
                                        <em><img src="" alt=""id="img2" style="width: 300px;height: 250px;"></em>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12" style="margin-top: 10px; margin-left: 30px; margin-bottom: 10px">
                                        <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Personal-Information -->
                    </div>
                </div>
            </div>
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
{{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}} {{-- for datepicker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    jQuery.validator.addMethod("emailonly", function(value, element) {
return this.optional(element) || /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/.test(value.toLowerCase());
}, "Enter valid email");
jQuery.validator.addMethod("mobileonly", function(value, element) {
return this.optional(element) ||  /^[+]?\d+$/.test(value.toLowerCase());
}, "Enter valid number");
$('#frm').validate({
rules:{
star:{
    required:true,
    min:1,
    max:5,
    },
    client_name:{
    required:true,
    minlength:3,
    },
review:{
required:true,
minlength:3,
},


},
messages:{
//  link:{
//     required:" social link is mandatory",
//     min:"Enter valid links"
// }
}
});
});
</script>
<script>
function fun(){
var i=document.getElementById('img').files[0];
//console.log(i);
var b=URL.createObjectURL(i);
$(".review_img").show();
$("#img2").attr("src",b);
}
</script>
<script src="{{ URL::asset('public/frontend/croppie/croppie.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
{{-- review front --}}
<script>
function dataURLtoFile(dataurl, filename) {
var arr = dataurl.split(','),
mime = arr[0].match(/:(.*?);/)[1],
bstr = atob(arr[1]),
n = bstr.length,
u8arr = new Uint8Array(n);
while(n--){
u8arr[n] = bstr.charCodeAt(n);
}
return new File([u8arr], filename, {type:mime});
}
var uploadCrop;
$(document).ready(function(){
$(".js-example-basic-multiple").select2();
if($('.type').val()=='C'){
$(".s_h_hids").slideDown(0);
} else{
$(".s_h_hids").slideUp(0);
}
$(".ccllk02").click(function(){
$(".s_h_hids").slideDown();
});
$(".ccllk01").click(function(){
$(".s_h_hids").slideUp();
$('.cmpy').val('');
});
$(".type-radio").change(function(){
var t= $("input[name=type]:checked").val();
if(t=="I"){
$(".comany_name").css('display','none');
}else{
$(".comany_name").css('display','block');
}
});
$('#croppie-modal').on('hidden.bs.modal', function() {
uploadCrop.croppie('destroy');
});
$('#croppie-modal .close, #croppie-modal .close_btn').on('click', function() {
$('#icon').val('');
});
$('#crop-img').click(function() {
uploadCrop.croppie('result', {
type: 'base64',
format: 'png'
}).then(function(base64Str) {
$("#croppie-modal").modal("hide");
//  $('.lds-spinner').show();
let file = dataURLtoFile('data:text/plain;'+base64Str+',aGVsbG8gd29ybGQ=','hello.png');
console.log(file.mozFullPath);
console.log(base64Str);
// $('#file').val(base64Str);
$('#profile_picture').val(base64Str);
// $.each(file, function(i, f) {
var reader = new FileReader();
reader.onload = function(e){
$('.uplodimgfilimg').append('<em><img  src="' + e.target.result + '"><em>');
};
reader.readAsDataURL(file);
//  });
$('.uplodimgfilimg').show();
});
});
});
$("#icon").change(function () {
$('.uplodimgfilimg').html('');
let files = this.files;
console.log(files);
let img  = new Image();
if (files.length > 0) {
let exts = ['image/jpeg', 'image/png', 'image/gif'];
let valid = true;
$.each(files, function(i, f) {
if (exts.indexOf(f.type) <= -1) {
valid = false;
return false;
}
});
if (! valid) {
alert('Please choose valid image files (jpeg, png, gif) only.');
$("#icon").val('');
return false;
}
// img.src = window.URL.createObjectURL(event.target.files[0])
// img.onload = function () {
//     if(this.width > 250 || this.height >160) {
//         flag=0;
//         alert('Please upload proper image size less then : 250px x 160px');
//         $("#file").val('');
//         $('.uploadImg').hide();
//         return false;
//     }
// };
$("#croppie-modal").modal("show");
uploadCrop = $('.croppie-div').croppie({
viewport: { width: 530, height: 320, type: 'square' },
boundary: { width: $(".croppie-div").width(), height: 400 }
});
var reader = new FileReader();
reader.onload = function (e) {
$('.upload-demo').addClass('ready');
// console.log(e.target.result)
uploadCrop.croppie('bind', {
url: e.target.result
}).then(function(){
console.log('jQuery bind complete');
});
}
reader.readAsDataURL(this.files[0]);
//  $('.uploadImg').append('<img width="100"  src="' + reader.readAsDataURL(this.files[0]) + '">');
//  $.each(files, function(i, f) {
//      var reader = new FileReader();
//      reader.onload = function(e){
//          $('.uploadImg').append('<img width="100"  src="' + e.target.result + '">');
//      };
//      reader.readAsDataURL(f);
//  });
//  $('.uploadImg').show();
}
});
</script>
@endsection