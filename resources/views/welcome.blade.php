@extends('layouts.app')

@section('title')
<title>SRV</title>
@endsection

@section('style')
@include('includes.style')
<head>
<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="{{ URL::asset('public/frontend/croppie/croppie.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('public/frontend/croppie/croppie.min.css') }}" rel="stylesheet" />  
</head>
@endsection

@section('header')
@include('includes.header')
@endsection



@section('body')

<!-- -- banner --  -->
@include('frontend.include.message_two')
@include('frontend.include.message')
<div class="home-banner section-padding" style="background-image: url({{url('/')}}/public/new_frontend/images/home/banner/banner.png);">
  <div class="max-theme-width">
    <div class="row">
      <div class="col-md-6 col-12">
        <h4 class="banner-heading typewriter">The <br>  <span data-text="Cards King"></span></h4>
        <!-- <h4 class="banner-heading">The <br> Cards King</h4> -->
        <p class="banner-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse repellat saepe recusandae
          ab
          sed perspiciatis velit dolores molestiae possimus ipsum? Veritatis, accusamus! Blanditiis dolor architecto
          vero
        repudiandae vel tenetur nemo!</p>
        <button class="btn banner-btn">choose your card</button>
      </div>
    </div>
  </div>
</div>









<!-- -- choose your card --  -->
<div class="choose section-padding">
  <div class="max-theme-width">
    <h4 class="heading slide-left">Choose <span>your card</span></h4>
    <p class="para mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime quas cum doloribus, omnis
      sed
      fugit cupiditate? Necessitatibus delectus aspernatur culpa exercitationem, saepe eveniet a architecto molestiae
    assumenda, hic amet. Ratione.</p>
    <!-- slick -->
    <div class="slick-car" id="slick-slider-1">
      @foreach($last_4_temp as $val)
      <div class="img-div">
        <div class="card-div">
          <img src="{{url('/')}}/storage/app/public/template_front/{{@$val->image}}" alt="" class="img-fluid" >
          <div class="card-title"onclick="openModel({{@$val->id}},'{{@$val->image}}')" >{{$val->name}}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>














<!-- -- customize your card --  -->
<div class="customize section-padding">
  <div class="max-theme-width">
    <div class="row d-flex align-items-center">
      <div class="col-md-6 col-12 my-3">
        <img src="{{asset('public/new_frontend/images/home/customize/customize.png')}}" alt="" class="img-fluid">
      </div>
      <div class="col-md-6 col-12 my-3">
        <h4 class="heading slide-left">Customize <span>your card</span></h4>
        <p class="para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis non maxime voluptatem, ea
          possimus voluptatum. Culpa amet, minima neque eligendi sed pariatur mollitia voluptate excepturi illum vel
        dolor aut facilis.</p>
        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dignissimos dolore, quasi qui
          perspiciatis nulla quis? Neque nihil tenetur aspernatur aut modi deleniti cumque laboriosam sint quasi hic
          praesentium alias magni reiciendis suscipit quisquam exercitationem dolore maiores, ratione similique
        voluptate ipsa quaerat explicabo? Eveniet, dicta maxime rem est magni vel?</p>
        <p class="para mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore distinctio tempore
          accusantium repudiandae facere saepe neque delectus, eum suscipit quis perspiciatis sed dolores dolorem
        consequatur ratione quia eligendi tempora, accusamus voluptatum rem quisquam magnam corporis!</p>
        <a href="">Lorem ipsum dolor sit amet, consectetur</a>
        <button class="btn btn-warning" onclick="customizeModel()">Customize template</button>
      </div>
    </div>
  </div>
</div>














<!-- -- why choose us --  -->
<div class="why-choose section-padding">
  <div class="max-theme-width">
    <div class="row d-flex align-items-center">
      <div class="col-md-6 col-12 my-3">
        <div class="why-choose-left">
          <h4 class="heading-3 mb-3">why choose us</h4>
          <h4 class="heading-2 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
          <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veniam soluta praesentium
            consequuntur explicabo distinctio ab deleniti! Cum, ducimus, excepturi dicta itaque, facere delectus
          </p>
        </div>
      </div>
      <div class="col-md-6 col-12 my-3">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 col-12 my-3">
            <div class="choose-box mb-4">
              <div class="left-chid"><i class="fas fa-meat"></i></div>
              <div class="right-chid">
                <h4>Feature #1</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, dolor.</p>
              </div>
            </div>
            <div class="choose-box mb-4">
              <div class="left-chid"><i class="fas fa-cog"></i></div>
              <div class="right-chid">
                <h4>Feature #2</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, dolor.</p>
              </div>
            </div>
            <div class="choose-box choose-box-lst mb-4">
              <div class="left-chid"><i class="fas fa-arrow-alt-circle-right"></i></div>
              <div class="right-chid">
                <h4>Feature #3</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, dolor.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12 my-3">
            <div class="choose-box mb-4">
              <div class="left-chid"><i class="fas fa-rocket"></i></div>
              <div class="right-chid">
                <h4>Feature #4</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, dolor.</p>
              </div>
            </div>
            <div class="choose-box">
              <div class="left-chid"><i class="fas fa-lock"></i></div>
              <div class="right-chid">
                <h4>Feature #5</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, dolor.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>









<!-- -- net divide --  -->
<div class="net-divide">
  <img src="{{asset('public/new_frontend/images/home/net.png')}}" alt="">
</div>








<!-- -- testimonial --  -->
<div class="testimonial section-padding">
  <div class="max-theme-width">
    <div class="row  d-flex align-items-center">
      <div class="col-md-6 col-12 my-3">
        <img src="{{asset('public/new_frontend/images/home/testimonial/testm.png')}}" alt="" class="img-fluid">
      </div>
      <div class="col-md-6 col-12 my-3">
        <p class="heading-3">testimonial</p>
        <p class="heading-2">What people say</p>
        <p class="para">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem repudiandae, debitis sequi
          maiores culpa tempora veniam deleniti eos dicta. Delectus dolor mollitia atque suscipit quia pariatur! Porro
        quidem inventore ab."</p>
        <p class="name">John deo</p>
        <p class="post">Designer</p>
        <div class="arrow">
          <i class="fal fa-arrow-left"></i>
          <i class="fal fa-arrow-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>














<!-- -- about --  -->
<div class="home-about section-padding" style="background-image: url({{url('/')}}/public/new_frontend/images/home/about/girls.png);">
  <div class="max-theme-width">
    <div class="row">
      <div class="col-md-8 col-12">
        <h4 class="heading-2">Lorem ipsum dolor sit amet</h4>
        <p class="para mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus fugiat, reiciendis
          a,
          aliquam illo animi assumenda incidunt nostrum eveniet quisquam suscipit. Perferendis at aliquam ab, dolores
          excepturi ipsum id? aliquam illo animi assumenda incidunt nostrum eveniet quisquam suscipit. Perferendis at
          aliquam ab, dolores
        </p>
        <button class="btn home-about-btn">More Options</button>
      </div>
    </div>
  </div>
</div>













<!-- -- esteemed client --  -->
<div class="esteemed-client section-padding">
  <div class="max-theme-width">
    <h4 class="esteemed-client-head">some of our <span>esteemed clients</span> include</h4>
    <div class="esteemed-client-imgs">
      <div class="img my-3">
        <img src="{{asset('public/new_frontend/images/home/clients/mirco.png')}}" alt="" class="img-fluid">
      </div>
      <div class="img my-3">
        <img src="{{asset('public/new_frontend/images/home/clients/cp.png')}}" alt="" class="img-fluid">
      </div>
      <div class="img my-3">
        <img src="{{asset('public/new_frontend/images/home/clients/cl2.png')}}" alt="" class="img-fluid">
      </div>
      <div class="img my-3">
        <img src="{{asset('public/new_frontend/images/home/clients/cl3.png')}}" alt="" class="img-fluid">
      </div>
      <div class="img my-3">
        <img src="{{asset('public/new_frontend/images/home/clients/cab.png')}}" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</div>



  {{-- VIEW ALL BUTTON --}}
  {{-- <div class="col-12 d-flex justify-content-center">
    <button class="btn btn-warning" @if(@auth::user()->id) data-toggle="modal" data-target="#view_all" @else data-toggle="modal" data-target="#loginModel"  @endif>view all</button>
  </div>
 --}}

 <div class="col-12 d-flex justify-content-center">
    <button class="btn btn-warning" onclick="window.location='{{route('view.all.card')}}'">view all</button>

     
  </div>
























{{--================================  ALL MODAL START ================================= --}}


{{-- ****************************   LOGIN MODEL   ************************************** --}}


{{-- @include('includes.login_reg') --}}







{{-- ****************************  REGISTRATION MODEL   ************************************** --}}














{{-- MODAL FOR ABOVE LAST 4 TEMPLATES  line no.60..--}}
<!-- Modal3 -->
@foreach($last_4_temp as $val)
<div
  class="modal fade"
  id="myModal{{@$val->id}}"
  tabindex="-1"
  aria-labelledby="myModalLabel3"
  aria-hidden="true"
  >
  <div class="modal-dialog">
    <div class="modal-content" style="width: 90vw;
      position: fixed;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      max-height: 97vh;
      overflow-y: auto;
      overflow-x: hidden;">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel3">SUBMIT ALL INFORMATION FOR 1 {{$val->name}}</h5>
        <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <script>
      function name_fun(id){
      var name=$("#name"+id).val();
      $(".unq-name").text(name);
      // console.log(name);
      }
      function comp_fun(id){
      var company=$("#company"+id).val();
      $(".unq-company").text(company);
      // console.log(company);
      }
      function ph_fun(id){
      var ph=$("#ph"+id).val();
      $(".unq-ph").text(ph);
      // console.log(ph);
      }
      function email_fun(id){
      var email=$("#email"+id).val();
      $(".unq-email").text(email);
      // console.log(email);
      }
      function address_fun(id){
      var address=$("#address"+id).val();
      $(".unq-address").text(address);
      // console.log(address);
      }
      function tag_fun(id){
      var tag=$("#tag"+id).val();
      $(".unq-tag").text(tag);
      // console.log(tag);
      }
      </script>
      <div class="row">
        <div class="col-md-6 col-12">
          <div id="html{{@$val->id}}"></div>
          <br>
          <div id="html_back{{@$val->id}}"></div>
        </div>
        <div class="col-md-6 col-12">
          
          
          
          <div class="modal-body form-content">
            <form role="form"  method="post" action="{{route('ins.user.form')}}" enctype="multipart/form-data" id="frm{{$val->id}}">
              @csrf
              <input type="hidden"  class="form-control"  name="template_id" required  value="{{@$val->id}}">
              @php
              $html=DB::table('html')->where('temp_id',@$val->id)->first();
              @endphp
              <input type="hidden"  class="form-control"  name="design_id" required  value="{{@$html->id}}">
              <input type="hidden" name="name_text" class="name_text" value="20">
              <input type="hidden" name="email_text" class="email_text" value="10">
              <input type="hidden" name="ph_text" class="ph_text" value="14">
              <input type="hidden" name="comp_text" class="comp_text" value="30">
              <input type="hidden" name="address_text" class="address_text" value="10">
              <input type="hidden" name="tag_text" class="tag_text" value="12">
              
              
              <div class="row">
                <div class="col-md-6 col-12 my-3">
                  <input type="text" class="form-control" placeholder="Your Name" required name="name" onkeyup="name_fun({{@$val->id}})" id="name{{@$val->id}}">
                </div>
                <div class="col-md-6 col-12 my-3">
                  <select onchange="name_text_fun(this.value)">
                    <option value="20">Select Text Size Of Name (optional)</option>
                    @for($i=10;$i<50;$i++)
                    <option value="{{$i}}">{{$i}} px</option>
                    @endfor
                  </select>
                </div>
                <div class="col-md-6 col-12 my-3">
                  <input type="text" class="form-control" placeholder="Your Company Name" name="company" required onkeyup="comp_fun({{@$val->id}})" id="company{{@$val->id}}">
                </div>
                <div class="col-md-6 col-12 my-3">
                  <select onchange="comp_text_fun(this.value)">
                    <option value="30">Select Text Size Of Company (optional)</option>
                    @for($i=10;$i<50;$i++)
                    <option value="{{$i}}">{{$i}} px</option>
                    @endfor
                  </select>
                </div>
                <div class="col-md-6 col-12 my-3">
                  <input type="tel" class="form-control" placeholder="Your Phone Number" name="ph" required minlength="10" pattern="^\d{10}$" title="Please enter 10 digit number" onkeyup="ph_fun({{@$val->id}})" id="ph{{@$val->id}}">
                </div>
                <div class="col-md-6 col-12 my-3">
                  <select onchange="ph_text_fun(this.value)">
                    <option value="14">Select Text Size Of Phone (optional)</option>
                    @for($i=10;$i<50;$i++)
                    <option value="{{$i}}">{{$i}} px</option>
                    @endfor
                  </select>
                </div>
                <div class="col-md-6 col-12 my-3">
                  <input type="email" class="form-control" placeholder="Your Email" name="email" required pattern="^([A-Za-z0-9_\-\.]+)@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,3})$" onkeyup="email_fun({{@$val->id}})" id="email{{@$val->id}}">
                </div>
                <div class="col-md-6 col-12 my-3">
                  <select onchange="email_text_fun(this.value)">
                    <option value="10">Select Text Size Of Email (optional)</option>
                    @for($i=10;$i<50;$i++)
                    <option value="{{$i}}">{{$i}} px</option>
                    @endfor
                  </select>
                </div>
                <div class="col-md-6 col-12 my-3">
                  <input type="text" class="form-control" placeholder="Your Address" name="address" required  onkeyup="address_fun({{@$val->id}})" id="address{{@$val->id}}">
                </div>
                <div class="col-md-6 col-12 my-3">
                  <select onchange="address_text_fun(this.value)">
                    <option value="10">Select Text Size Of Address (optional)</option>
                    @for($i=10;$i<50;$i++)
                    <option value="{{$i}}">{{$i}} px</option>
                    @endfor
                  </select>
                </div>
                <div class="col-md-6 col-12 my-3">
                  <input type="text" class="form-control" placeholder="Your Tagline" name="tag" required   onkeyup="tag_fun({{@$val->id}})" id="tag{{@$val->id}}">
                </div>
                <div class="col-md-6 col-12 my-3">
                  <select onchange="tag_text_fun(this.value)">
                    <option value="12">Select Text Size Of Tag (optional)</option>
                    @for($i=10;$i<50;$i++)
                    <option value="{{$i}}">{{$i}} px</option>
                    @endfor
                  </select>
                </div>
                @php
                $mat=DB::table('material_type')->where('status','A')->get();
                @endphp
                <div class="col-md-6 col-12 my-3">
                  <select required name="material_id">
                    <option selected value="">Card Material Type</option>
                    @foreach($mat as $val2)
                    <option value="{{$val2->id}}">{{$val2->name}}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="col-md-6 col-12 my-3">
                  <select required name="ordertype" id="ot{{$val->name}}" onchange="abc(this,{{$val->id}})">
                    <option value="" selected>Card Order Type</option>
                    <option value="S" >Personal</option>
                    <option value="M"  >Multiple</option>
                    
                  </select>
                </div>
                <script>
                function abc(v,id){
                var value = v.value;
                var id = id;
                if(value=="S"){
                // /alert("hh");
                $("#noofprofile"+id).hide();
                $("#total_profile_1"+id).val('');
                }else{
                $("#noofprofile"+id).show();
                }
                //console.log(value,id);
                }
                function check_no(v,id){
                // var total_pro=$("#total_profile_1"+id).val();
                // var total_card=$("#total_order"+id).val();
                // console.log(total_pro,total_card);
                // if(parseInt(total_pro)> parseInt(total_card)){
                //  alert("no of card can not be less then no of profile.");
                // }
                }
                </script>
                
                <div class="col-md-6 col-12 my-3" id="noofprofile{{$val->id}}" >
                  <input type="number" class="form-control" placeholder="No Of Profile" name="total_profile" id="total_profile_1{{$val->id}}" >
                </div>
                <div class="col-md-6 col-12 my-3" id="noofcard{{$val->id}}" >
                  <input type="number" class="form-control" placeholder="No Of Card" name="total_order" onchange="check_no(this.value,{{$val->id}})" id="total_order{{$val->id}}" >
                </div>
                {{--  <div class="col-md-8 col-12 my-3">
                  <div class="input-group mb-2 mr-sm-2">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  name="logo" accept="image/*" required
                      onchange="document.getElementById('blah{{$val->id}}').src = window.URL.createObjectURL(this.files[0]);
                      $('.unq-logo').attr('src', window.URL.createObjectURL(this.files[0]))">
                      <label class="custom-file-label" for="customFileLangHTML" data-browse="File Attach">Attach Your Logo</label>
                    </div>
                  </div>
                  
                </div>
                <img id="blah{{$val->id}}"  width="80" height="80" />
                --}}
                <div class="col-md-8 col-12 my-3">
                  <div class="input-group mb-2 mr-sm-2">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  name="tmp_img" accept="image/*" required id="icon_logo_pd{{$val->id}}">
                      <label class="custom-file-label" for="customFileLangHTML" data-browse="File Attach">Attach Your Logo</label>
                      <input type="hidden" name="profile_picture_logo_pd" id="profile_picture_logo_pd{{$val->id}}">
                    </div>
                  </div>
                </div>
                <div class="uplodimgfilimg_logo{{$val->id}}">
                  <em><img src="" alt="" id="pd_temp_logo{{$val->id}}"></em>
                </div>
                <div class="col-md-12 col-12 my-3">
                  <div class="check-box checks">
                    <input type="radio" name="brand" value="B" class="form-check-input" checked="true" /> With Brand Of SpeadKard
                    <br>
                    <input type="radio" name="brand" value="NB" class="form-check-input" /> Without Brand Of SpeadKard
                  </div>
                </div>
                
                <div class="col-md-12 col-12 my-3">
                  <div class="check-box checks">
                    <input type="checkbox" class="form-check-input" /> Select and purchase the card with SK advertisenment or without
                  </div>
                </div>
              </div>
              

               @if(auth::user())
                <button type="submit" class="btn btn-primary modal-btn" {{-- onclick="frm_submit({{$val->id}})" --}}>
              CONTINUE
              </button>
                @else
                <span>
                  Its just a preview. for continew you need to
                  <strong> <a onclick="loginClk({{@$val->id}})">Login-1</a></strong>
                  or
                  <strong><a onclick="regnClk({{@$val->id}})">Registratin</a></strong>
                </span>
                
                @endif


              <script>
              $(document).ready(function(){
              jQuery.validator.addMethod("validate_email", function(value, element) {
              if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
              return true;
              } else {
              return false;
              }
              }, "Please enter a valid email address.");
              jQuery.validator.addMethod("mobileonly", function(value, element) {
              return this.optional(element) ||  /^[+]?\d+$/.test(value.toLowerCase());
              }, "Enter valid number");
              $('#frm{{$val->id}}').validate({
              rules:{
              name:{
              required:true,
              minlength:3,
              },
              company:{
              required:true,
              minlength:3,
              // maxlength:50,
              },
              email:{
              required:true,
              //validate_email:true,
              },
              ph:{
              required:true,
              minlength:10,
              maxlength:10,
              mobileonly:true,
              },
              tag:{
              required:true,
              minlength:3,
              },
              address:{
              required:true,
              minlength:3,
              },
              material_id:{
              required:true,
              },
              ordertype:{
              required:true,
              },
              total_order:{
              required:true,
              },
              total_profile:{
              required:true,
              },
              logo:{
              required:true,
              },
              temp:{
              required:true,
              },
              },
              submitHandler: function(form){
              var total_pro=$("#total_profile_1{{$val->id}}").val();
              var total_card=$("#total_order{{$val->id}}").val();
              //console.log(total_pro,total_card);
              if(parseInt(total_pro)> parseInt(total_card)){
              alert("no of card can not be less then no of profile.");
              return false;
              }
              // else if( $("#color{{$val->id}}").val().length<1){
              //  alert("please chose a color.");
              //  return false;
              // }
              else{
              //console.log("h");
              //$("#frm{{$val->id}}").submit();
              form.submit();
              }
              },
              });
              });
              // function frm_submit(id){
              //  var total_pro=$("#total_profile_1"+id).val();
              //  var total_card=$("#total_order"+id).val();
              //  console.log(total_pro,total_card);
              //  if(parseInt(total_pro)> parseInt(total_card)){
              //    alert("no of card can not be less then no of profile.");
              //    return false;
              //  }
              //  else if( $("#color"+id).val().length<1){
              //    alert("please chose a color.");
              //    return false;
              //  }
              //  else{
              //    console.log("h");
              //    $("#frm"+id).submit();
              //    //form.submit();
              //  }
              // }
              </script>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach















{{-- *********************  VIEW ALL TEMPLATE in a modal  ************************************ --}}
<div
  class="modal fade"
  id="view_all"
  tabindex="-1"
  aria-labelledby="myModalLabel"
  aria-hidden="true"
  id="v_l"
  >
  <div class="modal-dialog">
    <div class="modal-content" style=" width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">ALL TEMPLATE</h5>
        <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row">
        @foreach($all_temp as $val3)
        <div class="col-lg-3 col-md-3" style="margin:10px 10px 10px 10px; ">
          
          <img
          src="{{url('/')}}/storage/app/public/template_front/{{@$val3->image}}"
          alt=""
          class="img-fluid"
          />
          
          <button class="btn btn-sm btn-outline-warning" onclick="openModeltwo({{@$val3->id}},'{{@$val3->image}}')"{{-- data-toggle="modal" data-target="#child{{@$val3->id}}" --}} >
          select a card
          </button>
          <button class="btn btn-sm btn-secondary" style="margin-top: 10px" @if(@auth::user()->id) {{-- data-toggle="modal" data-target="#customize" --}}  onclick="customizeModel()" @else data-toggle="modal" data-target="#loginModel"  @endif>
          customize your own card
          </button>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

















          















{{-- **************************** FORGET PASSWORD MODEL   ************************************** --}}

















{{-- ***************** Customize Card MODEL With Template ********************************* --}}
<script>

function custome_name_fun(){
var name=$("#custome_name").val();
$(".unq-name").text(name);
// console.log(name);
}
function custome_comp_fun(){
var company=$("#custome_company").val();
$(".unq-company").text(company);
// console.log(company);
}
function custome_ph_fun(){
var ph=$("#custome_ph").val();
$(".unq-ph").text(ph);
// console.log(ph);
}
function custome_email_fun(){
var email=$("#custome_email").val();
$(".unq-email").text(email);
// console.log(email);
}
function custome_address_fun(){
var address=$("#custome_address").val();
$(".unq-address").text(address);
// console.log(address);
}
function custome_tag_fun(){
var tag=$("#custome_tag").val();
$(".unq-tag").text(tag);
// console.log(tag);

}
function clr_chng(v){
$(".unq-company").css("color",v);
$(".unq-name").css("color",v);
$(".unq-tag").css("color",v);
$(".unq-email").css("color",v);
$(".unq-ph").css("color",v);

$(".unq-address").css("color",v);
}
</script>
<div
  class="modal fade"
  id="customize"
  tabindex="-1"
  aria-labelledby="myModalLabel3"
  aria-hidden="true"
  >
  <div class="modal-dialog">
    <div class="modal-content" style="width: 90vw;
      position: fixed;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      max-height: 97vh;
      overflow-y: auto;
      overflow-x: hidden;">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel3">SUBMIT ALL INFORMATION FOR {{$val->name}}</h5>
        <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="row">
        <div class="col-md-6 col-12">
          <div id="customize_html"></div>
          <br>
          <div id="customize_html_back"></div>
        </div>
        <div class="col-md-6 col-12">
          
          <div class="modal-body form-content">
            <form role="form" id="frm_two" method="post" action="{{route('customize.card.ins')}}" enctype="multipart/form-data">
              @csrf
              {{-- <input type="hidden"  class="form-control"  name="template_id" required  value="{{@$val->id}}"> --}}
              @php
              $html=DB::table('html')->orderBy('id','desc')->where('status','A')->first();
              @endphp
              <input type="hidden"  class="form-control"  name="design_id" required  value="{{@$html->id}}">
              <input type="hidden" name="name_text" class="name_text" value="20">
              <input type="hidden" name="email_text" class="email_text" value="10">
              <input type="hidden" name="ph_text" class="ph_text" value="14">
              <input type="hidden" name="comp_text" class="comp_text" value="30">
              <input type="hidden" name="address_text" class="address_text" value="10">
              <input type="hidden" name="tag_text" class="tag_text" value="12">
              <div class="row">
                <div class="col-md-6 col-12 my-3">
                  <input type="text" class="form-control" placeholder="Your Name" required name="name" onkeyup="custome_name_fun()" id="custome_name">
                </div>
                <div class="col-md-6 col-12 my-3">
                  <select onchange="name_text_fun(this.value)">
                    <option value="20">Select Text Size Of Name (optional)</option>
                    @for($i=10;$i<50;$i++)
                    <option value="{{$i}}">{{$i}} px</option>
                    @endfor
                  </select>
                </div>
                <div class="col-md-6 col-12 my-3">
                  <input type="text" class="form-control" placeholder="Your Company Name" name="company" required onkeyup="custome_comp_fun()" id="custome_company">
                </div>
                <div class="col-md-6 col-12 my-3">
                  <select onchange="comp_text_fun(this.value)">
                    <option value="30">Select Text Size Of Company (optional)</option>
                    @for($i=10;$i<50;$i++)
                    <option value="{{$i}}">{{$i}} px</option>
                    @endfor
                  </select>
                </div>
                <div class="col-md-6 col-12 my-3">
                  <input type="tel" class="form-control" placeholder="Your Phone Number" name="ph" required minlength="10" pattern="^\d{10}$" title="Please enter 10 digit number" onkeyup="custome_ph_fun()" id="custome_ph">
                </div>
                <div class="col-md-6 col-12 my-3">
                  <select onchange="ph_text_fun(this.value)">
                    <option value="14">Select Text Size Of Phone (optional)</option>
                    @for($i=10;$i<50;$i++)
                    <option value="{{$i}}">{{$i}} px</option>
                    @endfor
                  </select>
                </div>
                <div class="col-md-6 col-12 my-3">
                  <input type="email" class="form-control" placeholder="Your Email" name="email" required pattern="^([A-Za-z0-9_\-\.]+)@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,3})$" onkeyup="custome_email_fun()" id="custome_email">
                </div>
                <div class="col-md-6 col-12 my-3">
                  <select onchange="email_text_fun(this.value)">
                    <option value="10">Select Text Size Of Email (optional)</option>
                    @for($i=10;$i<50;$i++)
                    <option value="{{$i}}">{{$i}} px</option>
                    @endfor
                  </select>
                </div>
                <div class="col-md-6 col-12 my-3">
                  <input type="text" class="form-control" placeholder="Your Address" name="address" required  onkeyup="custome_address_fun()" id="custome_address">
                </div>
                <div class="col-md-6 col-12 my-3">
                  <select onchange="address_text_fun(this.value)">
                    <option value="10">Select Text Size Of Address (optional)</option>
                    @for($i=10;$i<50;$i++)
                    <option value="{{$i}}">{{$i}} px</option>
                    @endfor
                  </select>
                </div>
                <div class="col-md-6 col-12 my-3">
                  <input type="text" class="form-control" placeholder="Your Tagline" name="tag" required   onkeyup="custome_tag_fun()" id="custome_tag">
                </div>
                <div class="col-md-6 col-12 my-3">
                  <select onchange="tag_text_fun(this.value)">
                    <option value="12">Select Text Size Of Tag (optional)</option>
                    @for($i=10;$i<50;$i++)
                    <option value="{{$i}}">{{$i}} px</option>
                    @endfor
                  </select>
                </div>
                @php
                $mat=DB::table('material_type')->where('status','A')->get();
                @endphp
                <div class="col-md-6 col-12 my-3">
                  <select required name="material_id">
                    <option selected value="">Card Material Type</option>
                    @foreach($mat as $val2)
                    <option value="{{$val2->id}}">{{$val2->name}}</option>
                    @endforeach
                  </select>
                </div>
                {{-- <div class="col-md-6 col-12 my-3">
                  <select  name="color" required >
                    <option selected disabled value="">Card Text Font Color</option>
                    <option value="red">Red</option>
                    <option value="black">black</option>
                    <option value="white">white</option>
                    <option value="green">green</option>
                  </select>
                </div> --}}
                <div class="col-md-6 col-12 my-3">
                  <div class="row">
                    <div class="col-md-9">
                      <input type="text" class="form-control" placeholder="Chose color" required id="color_custom" disabled>
                      <input type="hidden" class="form-control" name="color" required id="color_custom_hidden">
                    </div>
                    <div class="col-md-2">
                      <input type="color"  onchange="clr(this.value)" onkeyup="clr(this.value)" oninput="clr(this.value)" value="#e00606 ">
                    </div>
                  </div>
                  {{-- <input type="color" class="form-control" placeholder="Color" name="color" required id="color" disabled>
                  <input type="color" id="favcolor" name="favcolor" onchange="clr(this.value)" value="#ff0000"> --}}
                </div>
                
                <script>
                function clr(v){
                //alert(v);
                $("#color_custom").val(v);
                $("#color_custom_hidden").val(v);
                $(".unq-company").css("color",v);
                $(".unq-name").css("color",v);
                $(".unq-tag").css("color",v);
                $(".unq-email").css("color",v);
                $(".unq-ph").css("color",v);
                $(".unq-address").css("color",v);
                }
                </script>
                {{--   <input type="submit"> --}}
                <div class="col-md-6 col-12 my-3">
                  <select required name="ordertype" id="ot{{$val->name}}" onchange="abcde(this)">
                    <option value="">Card Order Type</option>
                    <option value="S" >Personal</option>
                    <option value="M" selected >Corporate</option>
                    
                  </select>
                </div>
                <script>
                function abcde(v){
                var value2 = v.value;
                //var id2 = id;
                if(value2=="S"){
                // /alert("hh");
                $("#noofprofile3").hide();
                $("#total_profile").val('');
                }else{
                $("#noofprofile3").show();
                }
                //console.log(value2);
                }
                </script>
                
                <div class="col-md-6 col-12 my-3" id="noofprofile3" >
                  <input type="text" class="form-control" placeholder="No Of Profile" name="total_profile" id="total_profile" >
                </div>
                <div class="col-md-6 col-12 my-3"  >
                  <input type="text" class="form-control" placeholder="No Of Card" name="total_order" id="total_order" >
                </div>
                <div class="clearfix"></div>
                {{--  for Logo  --}}
                {{-- <div class="col-md-8 col-12 my-3">
                  <div class="input-group mb-2 mr-sm-2">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  name="logo" accept="image/*" required onchange="document.getElementById('blah2logo').src = window.URL.createObjectURL(this.files[0]);
                      $('.unq-logo').attr('src', window.URL.createObjectURL(this.files[0]))">
                      <label class="custom-file-label" for="customFileLangHTML" data-browse="File Attach">Attach Your Logo</label>
                    </div>
                  </div>
                </div>
                <img id="blah2logo"  width="100" height="100" />
                <div class="clearfix"></div> --}}
                <div class="col-md-8 col-12 my-3">
                  <div class="input-group mb-2 mr-sm-2">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  name="tmp_img" accept="image/*" required id="icon_logo">
                      <label class="custom-file-label" for="customFileLangHTML" data-browse="File Attach">Attach Your Logo</label>
                      <input type="hidden" name="profile_picture_logo" id="profile_picture_logo">
                    </div>
                  </div>
                </div>
                <div class="uplodimgfilimg_logo">
                  <em><img src="" alt="" id="custom_temp_logo"></em>
                </div>
              </div>
              {{-- custom temp part 1 --}}
              {{--  <div class="col-md-8 col-12 my-3">
                <div class="input-group mb-2 mr-sm-2">
                  <div class="custom-file">
                    <input type="file" id="icon_2" name="image"    accept="image/*">
                    
                    
                    <label class="custom-file-label" for="customFileLangHTML" data-browse="File Attach">Attach Your Template Back</label>
                    <input type="hidden" name="profile_picture_2" id="profile_picture_2">
                    
                  </div>
                </div>
              </div> --}}
              <div class="col-md-8 col-12 my-3">
                <div class="input-group mb-2 mr-sm-2">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input"  name="tmp_img" accept="image/*" required id="icon_2">
                    <label class="custom-file-label" for="customFileLangHTML" data-browse="File Attach">Attach Your Template Front</label>
                    <input type="hidden" name="profile_picture_2" id="profile_picture_2">
                  </div>
                </div>
              </div>
              
              <div class="uplodimgfilimg_2">
                <em><img src="" alt="" id="custom_temp_2"></em>
              </div>
              {{-- end --}}
              {{--  for template part 2  --}}
              <div class="col-md-8 col-12 my-3">
                <div class="input-group mb-2 mr-sm-2">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input"  name="temp" accept="image/*" required id="icon">
                    <label class="custom-file-label" for="customFileLangHTML" data-browse="File Attach">Attach Your Template Back
                    </label>
                    <input type="hidden" name="profile_picture" id="profile_picture">
                  </div>
                </div>
              </div>
              
              <div class="uplodimgfilimg">
                <em><img id="custom_temp" src="" alt="" ></em>
              </div>
              {{-- end --}}
              <div class="col-md-12 col-12 my-3">
                <div class="check-box checks">
                  <input type="radio" name="brand" value="B" class="form-check-input" checked="true" /> With Brand Of SpeadKard
                  <br>
                  <input type="radio" name="brand" value="NB" class="form-check-input" /> Without Brand Of SpeadKard
                </div>
              </div>
              
              <div class="col-md-12 col-12 my-3">
                <div class="check-box checks">
                  <input type="checkbox" class="form-check-input" /> Select and purchase the card with SK advertisenment or without
                </div>
              </div>
            </div>
           

             @if(auth::user())
                 <button type="submit" class="btn btn-primary modal-btn" {{-- onclick="frm_submit_2()" --}}>
            CONTINUE
            </button>
                @else
                <span>
                  Its just a preview. for continew you need to
                  <strong> <a onclick="loginClk({{@$val->id}})">Login</a></strong>
                  or
                  <strong><a onclick="regnClk({{@$val->id}})">Registratin</a></strong>
                </span>
                
                @endif
            <script>
            $(document).ready(function(){
            jQuery.validator.addMethod("validate_email", function(value, element) {
            if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
            return true;
            } else {
            return false;
            }
            }, "Please enter a valid email address.");
            jQuery.validator.addMethod("mobileonly", function(value, element) {
            return this.optional(element) ||  /^[+]?\d+$/.test(value.toLowerCase());
            }, "Enter valid number");
            $('#frm_two').validate({
            rules:{
            name:{
            required:true,
            minlength:3,
            },
            company:{
            required:true,
            minlength:3,
            // maxlength:50,
            },
            email:{
            required:true,
            //validate_email:true,
            },
            ph:{
            required:true,
            minlength:10,
            maxlength:10,
            mobileonly:true,
            },
            tag:{
            required:true,
            minlength:3,
            },
            address:{
            required:true,
            minlength:3,
            },
            material_id:{
            required:true,
            },
            ordertype:{
            required:true,
            },
            total_order:{
            required:true,
            },
            total_profile:{
            required:true,
            },
            logo:{
            required:true,
            },
            temp:{
            required:true,
            },
            },
            submitHandler: function(form){
            var total_pro2=$("#total_profile").val();
            var total_card2=$("#total_order").val();
            console.log(total_pro2,total_card2);
            if(parseInt(total_pro2)> parseInt(total_card2)){
            alert("no of card can not be less then no of profile.");
            return false;
            }
            else if( $("#color_custom").val().length<1){
            alert("please chose a color.");
            return false;
            }
            else{
            //console.log("h");
            //$("#frm_two").submit();
            //form.submit();
            form.submit();
            }
            },
            });
            });
            // function frm_submit_2(){
            //  var total_pro2=$("#total_profile").val();
            //  var total_card2=$("#total_order").val();
            //  console.log(total_pro2,total_card2);
            //  if(parseInt(total_pro2)> parseInt(total_card2)){
            //    alert("no of card can not be less then no of profile.");
            //    return false;
            //  }
            //  else if( $("#color_custom").val().length<1){
            //        alert("please chose a color.");
            //        return false;
            //      }
            //  else{
            //    //console.log("h");
            //    $("#frm_two").submit();
            //    //form.submit();
            //  }
            // }
            </script>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>






































@include('includes.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script language="JavaScript"
src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
<script>
function fgp(){
$('#loginModel').modal('hide');
$('#fgp').modal('show');
}
</script>
<script src="{{ URL::asset('public/frontend/croppie/croppie.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ URL::to('public/new_frontend/js/index.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>

@include('includes.crop_all_script')
<script>
      function loginClk(id){
        // alert(id)
             $("#myModal"+id).modal('hide');
              $("#customize").modal('hide');
            $('#loginModel').modal('show');
      }
      function regnClk(id){
         $("#myModal"+id).modal('hide');
          $("#customize").modal('hide');
            $('#signupModel').modal('show');
      }
    </script>
@endsection