<header>
      <div class=" header-menu-3 header sticky-header ">
         <div class="container">
            <div class="row">
               <!-- Logo -->
               <div class="col-lg-2 align-self-center d-flex align-items-center" style="justify-content: space-between;">
                  <div class="logo">
                     <a href="{{route('welcome')}}">
                        <img src="{{url('/')}}/public/frontend/assets/images/header/srv-logo.png" alt="logo">
                     </a>
                  </div>
                  <div class="canvas_open">
                     <a href="javascript:void(0)">
                        <span></span>
                        <span></span>
                        <span></span>
                     </a>
                  </div>
               </div>
               <!-- Menu -->
               <div class="col-lg-10 d-flex align-items-center" style="justify-content: space-between;">
                  <!-- Menu -->
                  <div class="menu">
                     <nav>
                        <ul>
                           <li><a href="{{route('welcome')}}">Home</a></li>
                           <li><a href="{{route('about')}}">About</a></li>
                           <li><a href="{{route('service')}}">Services</a></li>
                           <li><a href="{{route('blog')}}">Blog</a></li>
                           <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                           <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                     </nav>
                  </div>
                  <!-- Header Right -->
                  <div class="header-right">
                     <!-- <a class="button-2" href="contact.html">Get Started</a> -->
                     <a target="_blank" href="https://api.whatsapp.com/send?phone=7001769472"><i
                           class="fab fa-whatsapp"></i></a>
                     <a target="_blank" href="https://www.linkedin.com/company/srv01technology/"><i class="fab fa-linkedin-in"></i></a>
                     <a target="_blank" href="https://telegram.me/vikrantsingh7"><i class="fab fa-telegram"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>

      <div class="mobile-menu-area">

      <!--offcanvas menu area start-->
      <div class="off_canvars_overlay">

      </div>
      <div class="offcanvas_menu">
         <div class="offcanvas_menu_wrapper">
            <div class="canvas_close">
               <a href="javascript:void(0)"><i class="icofont-close-line"></i></a>
            </div>
            <div class="mobile-logo text-center mb-30">
               <a href="index.html">
                  <img src="{{url('/')}}/public/frontend/assets/images/header/srv-logo.png" alt="logo">
               </a>
            </div>
            <div id="menu" class="text-left ">
               <ul class="offcanvas_main_menu">
                  <li class="menu-item-has-children">
                     <a href="{{route('welcome')}}">Home </a>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{route('about')}}">About </a>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{route('service')}}">Service </a>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{route('blog')}}">Blog </a>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{route('portfolio')}}">Portfolio </a>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{route('contact')}}">Contact </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>