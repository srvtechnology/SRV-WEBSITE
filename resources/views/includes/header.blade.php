<!-- -- header --  -->
<style>
  .login-reg-drop li {
    cursor: pointer;
    box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
    margin-bottom: 10px;
    padding: 5px 10px;
    transition: 0.3s ease;
  }
  .login-reg-drop li:hover {
    background: #c3ffbf;
   transform: scale(1.05);
  }
</style>
<div class="header">
  <header class="max-theme-width">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="{{route('welcome')}}">
        <img src="{{asset('public/new_frontend/images/header-footer/logo.png')}}" alt="" width="100" />
      </a>
      <a href="index.html" class="home-nav">
        <div class="home-item"><i class="fal fa-home-lg-alt"></i></div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fad fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav" style="margin-left:auto">
          <li class="nav-item"><a class="nav-link" href="checkout.html">ORDER YOUR CARD</a>
        @if(Auth::user()) hi {{auth::user()->name}} @else @endif</li>
        <li class="nav-item"><a class="nav-link">|</a></li>
        <li class="nav-item"><a class="nav-link" ><i class="fas fa-cart-plus"></i></a></li>
        <li class="nav-item" >
          {{--   @if(Auth::user())
          <a href="{{ route('user.logout') }}" ><i class="fas fa-power-off"></i> Logout</a>
          @else
          <a class="nav-link" data-toggle="modal" data-target="#loginModel"> --}}
            <div class="user">
              <i class="fas fa-user" data-toggle="dropdown"></i>
              <ul class="dropdown-menu login-reg-drop px-2">
                @if(Auth::user())
                <li><a href="{{ route('user.logout') }}">Logout</a></li>
                @else
                <li><a data-toggle="modal" data-target="#loginModel">Login</a></li>
                <li><a data-toggle="modal" data-target="#signupModel">Registratin</a></li>
                @endif
                
              </ul>
            </div>
          {{--  </a>
          @endif --}}
        </li>
      </ul>
    </div>
  </nav>
</header>
@include('includes.login_reg')
</div>