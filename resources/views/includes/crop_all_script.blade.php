 


 {{-- FOR FIRST 4 TEMPLATE onclick open model  --}}
<script>
        function openModel(id,image){
        //console.log(id,image);
        // $("#myModal"+id).modal('show');
        
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': "{{csrf_token()}}"
        }
        });
        var fd= new FormData;
        fd.append('temp_id',id);
        $.ajax({
        url:'{{route('card.image')}}',
        type:'POST',
        data: fd,
        contentType: false,
        processData: false,
        success:function(res){
        //console.log(res.htmls);
        // alert(id);
        // $("#html"+id).show();
        $("#html"+id).html(``+res.htmls+``);
        $("#html_back"+id).html(``+res.html_back+``);
        $("#myModal"+id).modal('show');
        $(".unq-background-image-front").css("background-image","url(' "+res.front_img+"' )");
        $(".unq-background-image-front").css("background-size","cover");
        $(".unq-background-image-back").css("background-image","url(' "+res.back_img+"' )");
        $(".unq-background-image-back").css("background-size","cover");
        }
        });
        }
</script>
        












{{-- FOR VIEL ALL TEMPLATE part ====> select a card onclick template load in a model --}}
<script>
        function openModeltwo(id,image){
        //alert(id);
        //console.log(id,image);
        // $("#myModal"+id).modal('show');
        
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': "{{csrf_token()}}"
        }
        });
        var fd= new FormData;
        fd.append('temp_id',id);
        
        $.ajax({
        url:'{{route('card.image')}}',
        type:'POST',
        data: fd,
        contentType: false,
        processData: false,
        
        success:function(res){
        //-------------console.log(res.data);
        // $("#html"+id).show();
        $("#html2"+id).html(``+res.htmls+``);
        $("#html2_back"+id).html(``+res.html_back+``);
        $("#child"+id).modal('show');
        $(".unq-background-image-front").css("background-image","url(' "+res.front_img+"' )");
        $(".unq-background-image-front").css("background-size","cover");
        $(".unq-background-image-back").css("background-image","url(' "+res.back_img+"' )");
        $(".unq-background-image-back").css("background-size","cover");
        }
        });
        }
</script>














{{--FOR VIEL ALL TEMPLATE part ====> Customize your own onclick modal load--}}
<script>
        function customizeModel(){
        $("#custom_temp").attr("src","");
        @php
        $html=DB::table('html')->orderBy('id','desc')->where('status','A')->first();
        @endphp
        $("#customize_html").html(`{!!$html->html!!}`);
        $("#customize_html_back").html(`{!!$html->html_back!!}`);
        
        $("#customize").modal('show');
        }
</script>















{{-- for customize template part, logo cropping in a modal **********  start--}}
        {{-- modal part--}}
        <div class="modal" tabindex="-1" role="dialog" id="croppie-modal_logo">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Crop logo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <div class="croppie-div_logo" style="width: 100%;"></div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="crop-img_logo">Save changes</button>
                <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


{{--script part--}}
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
        $('#croppie-modal_logo').on('hidden.bs.modal', function() {
        uploadCrop.croppie('destroy');
        });
        $('#croppie-modal_logo .close, #croppie-modal_logo .close_btn').on('click', function() {
        $('#icon_logo').val('');
        });
        $('#crop-img_logo').click(function() {
        uploadCrop.croppie('result', {
        type: 'base64',
        format: 'png'
        }).then(function(base64Str) {
        $("#croppie-modal_logo").modal("hide");
        //  $('.lds-spinner').show();
        let file = dataURLtoFile('data:text/plain;'+base64Str+',aGVsbG8gd29ybGQ=','hello.png');
        console.log(file.mozFullPath);
        console.log(base64Str);
        // $('#file').val(base64Str);
        $('#profile_picture_logo').val(base64Str);
        // $.each(file, function(i, f) {
        var reader = new FileReader();
        reader.onload = function(e){
        $('.uplodimgfilimg_logo').append('<em><img id="custom_temp_logo" src="' + e.target.result + '"  style="width: 100px ; height: 100px;margin-top:5px"><em>');
        //$(".unq-logo").css("background-image","url(' "+e.target.result+"' )");
        $('.unq-logo').attr('src', e.target.result);
        };
        reader.readAsDataURL(file);
        //  });
        $('.uplodimgfilimg_logo').show();
        });
        });
        });
        $("#icon_logo").change(function () {
        $('.uplodimgfilimg_logo').html('');
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
        $("#icon_logo").val('');
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
        $("#croppie-modal_logo").modal("show");
        uploadCrop = $('.croppie-div_logo').croppie({
        viewport: { width: 450, height: 300, type: 'square' },
        boundary: { width: $(".croppie-div_logo").width(), height: 400 }
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
{{-- for customize part, logo cropping in a modal ************   end--}}


























 {{-- for predefined template part, logo cropping in a modal **********  start--}}

 {{-- model part --}}
@foreach($last_4_temp as $value)
        <div class="modal" tabindex="-1" role="dialog" id="croppie-modal_logo{{$value->id}}">
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
                    <div class="croppie-div_logo{{$value->id}}" style="width: 100%;"></div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="crop-img_logo{{$value->id}}">Save changes</button>
                <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>



{{--Script part--}}
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
        $('#croppie-modal_logo{{$value->id}}').on('hidden.bs.modal', function() {
        uploadCrop.croppie('destroy');
        });
        $('#croppie-modal_logo{{$value->id}} .close, #croppie-modal_logo{{$value->id}} .close_btn').on('click', function() {
        $('#icon_logo_pd{{$value->id}}').val('');
        });
        $('#crop-img_logo{{$value->id}}').click(function() {
        uploadCrop.croppie('result', {
        type: 'base64',
        format: 'png'
        }).then(function(base64Str) {
        $("#croppie-modal_logo{{$value->id}}").modal("hide");
        //  $('.lds-spinner').show();
        let file = dataURLtoFile('data:text/plain;'+base64Str+',aGVsbG8gd29ybGQ=','hello.png');
        console.log(file.mozFullPath);
        console.log(base64Str);
        // $('#file').val(base64Str);
        $('#profile_picture_logo_pd{{$value->id}}').val(base64Str);
        // $.each(file, function(i, f) {
        var reader = new FileReader();
        reader.onload = function(e){
        $('.uplodimgfilimg_logo{{$value->id}}').append('<em><img id="pd_temp_logo{{$value->id}}" src="' + e.target.result + '"  style="width: 100px ; height: 100px;margin-top:5px"><em>');
        $('.unq-logo').attr('src', e.target.result);
        };
        reader.readAsDataURL(file);
        //  });
        $('.uplodimgfilimg_logo{{$value->id}}').show();
        });
        });
        });
        $("#icon_logo_pd{{$value->id}}").change(function () {
        $('.uplodimgfilimg_logo{{$value->id}}').html('');
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
        $("#icon_logo_pd{{$value->id}}").val('');
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
        $("#croppie-modal_logo{{$value->id}}").modal("show");
        uploadCrop = $('.croppie-div_logo{{$value->id}}').croppie({
        viewport: { width: 450, height: 300, type: 'square' },
        boundary: { width: $(".croppie-div_logo{{$value->id}}").width(), height: 400 }
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
@endforeach
 {{-- for predefined template part, logo cropping in a modal **********  end--}}



























 {{-- for Customize template part, Back image cropping in a modal **********  start--}}

 {{-- Model part --}}
<div class="modal" tabindex="-1" role="dialog" id="croppie-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crop Image for back </h5>
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


{{-- Script part --}}
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
        $('.uplodimgfilimg').append('<em><img id="custom_temp" src="' + e.target.result + '"  style="width: 100px ; height: 100px;margin-top:5px"><em>');
        $(".unq-background-image-front").css("background-image","url(' "+e.target.result+"' )");
        $(".unq-background-image-front").css("background-size","cover");
        $(".unq-background-image-front").css("background-position-x","inherit");
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
        viewport: { width: 450, height: 300, type: 'square' },
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
 {{-- for Customize template part, BACK image cropping in a modal **********  end--}}




























{{-- for Customize template part, Front image cropping in a modal **********  Start--}}

{{-- model part --}}
<div class="modal" tabindex="-1" role="dialog" id="croppie-modal_2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crop Image for front</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <div class="croppie-div_2" style="width: 100%;"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="crop-img_2">Save changes</button>
        <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


{{-- script part--}}
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
        $('#croppie-modal_2').on('hidden.bs.modal', function() {
        uploadCrop.croppie('destroy');
        });
        $('#croppie-modal_2 .close, #croppie-modal_2 .close_btn').on('click', function() {
        $('#icon_2').val('');
        });
        $('#crop-img_2').click(function() {
        uploadCrop.croppie('result', {
        type: 'base64',
        format: 'png'
        }).then(function(base64Str) {
        $("#croppie-modal_2").modal("hide");
        //  $('.lds-spinner').show();
        let file = dataURLtoFile('data:text/plain;'+base64Str+',aGVsbG8gd29ybGQ=','hello.png');
        console.log(file.mozFullPath);
        console.log(base64Str);
        // $('#file').val(base64Str);
        $('#profile_picture_2').val(base64Str);
        // $.each(file, function(i, f) {
        var reader = new FileReader();
        reader.onload = function(e){
        $('.uplodimgfilimg_2').append('<em><img id="custom_temp_2" src="' + e.target.result + '"  style="width: 100px ; height: 100px;margin-top:5px"><em>');
        $(".unq-background-image-back").css("background-image","url(' "+e.target.result+"' )");
        $(".unq-background-image-back").css("background-size","cover");
        $(".unq-background-image-back").css("background-position-x","inherit");
        };
        reader.readAsDataURL(file);
        //  });
        $('.uplodimgfilimg_2').show();
        });
        });
        });
        $("#icon_2").change(function () {
        $('.uplodimgfilimg_2').html('');
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
        $("#icon_2").val('');
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
        $("#croppie-modal_2").modal("show");
        uploadCrop = $('.croppie-div_2').croppie({
        viewport: { width: 450, height: 300, type: 'square' },
        boundary: { width: $(".croppie-div_2").width(), height: 400 }
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
 {{-- for Customize template part, Front image cropping in a modal **********  END--}}       









     















 {{-- for view all predefiend template part, Logo cropping in a modal **********  Start--}} 

 {{-- modal part --}}
@foreach($all_temp as $value)
        <div class="modal" tabindex="-1" role="dialog" id="croppie-modal_logo_new{{$value->id}}">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Crop logo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <div class="croppie-div_logo_new{{$value->id}}" style="width: 100%;"></div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="crop-img_logo_new{{$value->id}}">Save changes</button>
                <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>




{{--Script part--}}
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
        $('#croppie-modal_logo_new{{$value->id}}').on('hidden.bs.modal', function() {
        uploadCrop.croppie('destroy');
        });
        $('#croppie-modal_logo_new{{$value->id}} .close, #croppie-modal_logo_new{{$value->id}} .close_btn').on('click', function() {
        $('#icon_logo_pd_all{{$value->id}}').val('');
        });
        $('#crop-img_logo_new{{$value->id}}').click(function() {
        uploadCrop.croppie('result', {
        type: 'base64',
        format: 'png'
        }).then(function(base64Str) {
        $("#croppie-modal_logo_new{{$value->id}}").modal("hide");
        //  $('.lds-spinner').show();
        let file = dataURLtoFile('data:text/plain;'+base64Str+',aGVsbG8gd29ybGQ=','hello.png');
        console.log(file.mozFullPath);
        console.log(base64Str);
        // $('#file').val(base64Str);
        $('#profile_picture_logo_pd_all{{$value->id}}').val(base64Str);
        // $.each(file, function(i, f) {
        var reader = new FileReader();
        reader.onload = function(e){
        $('.uplodimgfilimg_logo_all{{$value->id}}').append('<em><img id="pd_temp_logo_new{{$value->id}}" src="' + e.target.result + '"  style="width: 100px ; height: 100px;margin-top:5px"><em>');
        $('.unq-logo').attr('src', e.target.result);
        };
        reader.readAsDataURL(file);
        //  });
        $('.uplodimgfilimg_logo_all{{$value->id}}').show();
        });
        });
        });
        $("#icon_logo_pd_all{{$value->id}}").change(function () {
        $('.uplodimgfilimg_logo_all{{$value->id}}').html('');
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
        $("#icon_logo_pd_all{{$value->id}}").val('');
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
        $("#croppie-modal_logo_new{{$value->id}}").modal("show");
        uploadCrop = $('.croppie-div_logo_new{{$value->id}}').croppie({
        viewport: { width: 450, height: 300, type: 'square' },
        boundary: { width: $(".croppie-div_logo_new{{$value->id}}").width(), height: 400 }
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
@endforeach

 {{-- for view all predefiend template part, Logo cropping in a modal **********  End--}} 



















{{-- To change all fields texts font sizes --}}
<script>
        function name_text_fun(v){
        // alert(v);
        $(".unq-name").css("font-size",v+"px");
        $(".name_text").val(v);
        }
        function comp_text_fun(v){
        // alert(v);
        $(".unq-company").css("font-size",v+"px");
        $(".comp_text").val(v);
        }
        function ph_text_fun(v){
        // alert(v);
        $(".unq-ph").css("font-size",v+"px");
        $(".ph_text").val(v);
        }
        function email_text_fun(v){
        // alert(v);
        $(".unq-email").css("font-size",v+"px");
        $(".email_text").val(v);
        }
        function address_text_fun(v){
        // alert(v);
        $(".unq-address").css("font-size",v+"px");
        $(".address_text").val(v);
        }
        function tag_text_fun(v){
        // alert(v);
        $(".unq-tag").css("font-size",v+"px");
        $(".tag_text").val(v);
        }
</script>











