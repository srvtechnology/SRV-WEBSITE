@extends('admin.layouts.app')
@section('title')
<title>Admin | Edit Blog</title>
@endsection
@section('left_part')
@include('admin.include.left_part')
<link href="{{ URL::asset('public/frontend/croppie/croppie.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('public/frontend/croppie/croppie.min.css') }}" rel="stylesheet" />
<style>
    #AboutMe{
        width: 200px !important;
        margin-left: 10px !important;
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
                    <h4 class="pull-left page-title">Blog Edit </h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{route('admin.dashboard.home')}}">SRV</a></li>
                        <li class="active"> Blog Edit </li>
                    </ol>
                </div>
            </div>
            @include('admin.include.message')
            <div class="add-btn "><a href="{{route('admin.blog.list')}}"><i class="icofont-minus-circle"></i> Back</a></div>
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <!-- Personal-Information -->
                        <div class="panel panel-default panel-fill">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Blog</h3>
                            </div>
                            <div class="row">
                                <form role="form" action="{{route('admin.update.blog')}}" id="frm" method="post" enctype="multipart/form-data">
                                    <div class="panel-body  rm04 col-md-6">
                                        
                                        @csrf
                                        <input type="hidden" name="id" value="{{$blog->id}}">
                                        <div class="form-group rm50" style="margin-left: 30px !important ">
                                            <label for="title">Blog name</label>
                                            <input type="text"  class="form-control" id="AboutMe" placeholder="Enter blog name"  name="blog_name" style="width: 230px" value="{{$blog->blog_name}}" >
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group rm50" style="margin-left: 30px !important ">
                                            <label for="title">User name</label>
                                            <input type="text"  class="form-control"  placeholder="Enter user name"  name="user_name" style="width: 220px"  value="{{$blog->user_name}}" >
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group rm50" style="margin-left: 30px !important ">
                                            <label for="title">Title</label>
                                            <input type="text"  class="form-control"  placeholder="Enter title"  name="title" style="width: 220px"  value="{{$blog->title}}" >
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                         <div class="form-group rm50" style="margin-left: 30px !important ">
                                            <label for="title">Source</label>
                                            <input type="text"  class="form-control"  placeholder="Enter source"  value="{{$blog->source}}"  name="source" style="width: 220px" >
                                        </div>

                                         <div class="clearfix"></div>
                                         <div class="form-group rm50" style="margin-left: 30px !important ">
                                            <label for="title">Link</label>
                                            <input type="text"  class="form-control"  placeholder="Enter link"  value="{{$blog->link}}"  name="link" style="width: 220px" >
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="form-group rm50" style="margin-left: 30px !important ">
                                            <label for="title">Short Desc</label>
                                            <br>
                                            <textarea name="short_desc" style="width: 452px;
                                            height: 163px;">{{$blog->short_desc}}</textarea>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group rm50" style="margin-left: 30px !important ">
                                            <label for="title">Long Desc</label>
                                            {{-- <textarea name="long_desc">{{$blog->long_desc}}</textarea> --}}
                                            <textarea id="mytextarea1" style="width: 95%;height: 300px" name="long_desc"  >{!!$blog->long_desc!!}</textarea>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group"style="margin-left: 30px !important;margin-top: 30px !important ">
                                            <label for="image">Blog Image</label>
                                            <div class="clearfix"></div>
                                            <div class="fileUpload btn btn-primary cust_file clearfix">
                                                <span class="upld_txt"><i class="fa fa-upload upld-icon" aria-hidden="true"></i>Upload Blog</span>
                                                <br>
                                                <input type="file" id="icon" name="image"  class="inputfile inputfile-1"  accept="image/*">
                                                <input type="hidden" name="profile_picture" id="profile_picture">
                                            </div>
                                            
                                        </div>
                                        <div class="uplodimgfilimg ">
                                            <em><img src="" alt="" id="img2"></em>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="clearfix"></div>
                                    <div class="form-group" style="margin-left: 30px;">
                                        <label for="Email">Previous Front Image</label>
                                        <div class="uplodimgfilimgs">
                                            <em><img src="{{url('/')}}/storage/app/public/blog/{{@$blog->image}}" alt="" style="width: 150px !important; height: 150px !important"></em>
                                        </div>
                                    </div>
                                        
                                        
                                        
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    <div class="review_img rmm_001" style="display: none;margin-left: 20px;">
                                        <em><img src="" alt=""id="img2" style="width: 300px;height: 250px;"></em>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12" style="margin-top: 10px; margin-left: 30px; margin-bottom: 10px">
                                        <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Personal-Information -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" role="dialog" id="croppie-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Crop Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="croppie-div" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="crop-img">Save changes</button>
                        <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
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
blog_name:{
    required:true,
    minlength:3,
    },
    user_name:{
    required:true,
    },
title:{
required:true,
minlength:3,
},
short_desc:{
required:true,
minlength:3,
},
long_desc:{
required:true,
minlength:3,
},
source:{
    required:true,
    minlength:3,
},
link:{
    required:true,
    minlength:3,
},
// image:{
// required:true,
// },
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
{{-- blog front --}}
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



    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js" integrity="sha512-XaygRY58e7fVVWydN6jQsLpLMyf7qb4cKZjIi93WbKjT6+kG/x4H5Q73Tff69trL9K0YDPIswzWe6hkcyuOHlw==" crossorigin="anonymous"></script>
    <script>
    initTineMce();
    function initTineMce(selector) {
    if(selector == undefined){selector = 'textarea';}
    tinymce.init({
            cleanup : false,
    verify_html : false,
    content_css : "{{asset('public/frontend/css/style.css')}},{{asset('public/frontend/css/responsive.css')}},{{asset('public/frontend/css/bootstrap.css')}}",
    content_style: "@import url('https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Roboto&display=swap'); body { font-family: 'Roboto'; }",
    selector:"#mytextarea1",
    menubar:false,
    statusbar: false,
    auto_focus : "elm1",
    height: "350px",
    plugins: "autoresize lists textcolor advlist table link media code image charmap fullpage  ",
    file_picker_types: 'file image media',
    advlist_bullet_styles: 'disc',
    image_caption: true,
    inline_boundaries: false,
    relative_urls : false,
    remove_script_host : false,
    convert_urls : true,
    font_formats:"Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago;Roboto=roboto; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",
    toolbar: 'code | insertfile undo redo | styleselect | fontselect | fontsizeselect | forecolor backcolor | bold italic underline | superscript subscript | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',
    lists_indent_on_tab: false,
    // plugins: 'table',
    // menubar: 'table',
    // setup: function (ed) {
    // ed.on('change', function(e) {
    //  //alert(',khkjh');
    // //tinyMceChange(ed);
    // $("#previewImg").html('');
    // // console.log(tinyMCE.get('mytextarea1').getContent());
    // // alert("j");
    
    // $("#xyz").html(tinyMCE.get('mytextarea1').getContent());
    //          html2canvas(document.getElementById("xyz"),{
    //           width: 1000,
 //                 height: 400,
    //          }).then(function (canvas) {
    //          var anchorTag = document.createElement("a");
    //          document.body.appendChild(anchorTag);
    //          document.getElementById("previewImg").appendChild(canvas);
    //          anchorTag.download = "filename.jpg";
    //          canvas.setAttribute('crossorigin', 'anonymous');
    //          anchorTag.href = canvas.toDataURL();
    //          console.log(canvas.toDataURL());
    //          $("#image").val(canvas.toDataURL());
                
    // });
    // });
    // },
    });
    }
    </script>
@endsection