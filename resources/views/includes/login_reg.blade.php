<div
  class="modal fade"
  id="loginModel"
  tabindex="-1"
  aria-labelledby="myModalLabel"
  aria-hidden="true"
  >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Login</h5>
        <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="far fa-envelope"></i>
              </div>
            </div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="inlineFormInputGroup"  placeholder="Input your user ID or Email">
            @error('email')
            {{-- <script>
            alert("Login credential is wrong.!");
            </script> --}}
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-key"></i>
              </div>
            </div>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
            id="inlineFormInputGroup" placeholder="Input your password">
            @error('password')
            {{-- <script>
            alert("Login credential is wrong.!");
            </script>
            --}}                      <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-check">
            <div class="check-box">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </div>
            <div class="forgot">
              <a href="#" onclick="fgp()">Forgot Password?</a>
            </div>
          </div>
          <button type="submit" class="btn btn-primary modal-btn">
          Login
          </button>
        </form>
      </div>
    </div>
  </div>
</div>













<div
  class="modal fade"
  id="signupModel"
  tabindex="-1"
  aria-labelledby="myModalLabel2"
  aria-hidden="true"
  >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel2">Signup</h5>
        <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-user"></i>
              </div>
            </div>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Input your Full Name">
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fal fa-phone-volume"></i>
              </div>
            </div>
            <input id="ph" type="tel" class="form-control @error('ph') is-invalid @enderror" name="ph" value="{{ old('ph') }}" pattern="^\d{10}$" title="Please enter 10 digit number" required autocomplete="ph" placeholder="Input your Phone Number">
            @error('ph')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="far fa-envelope"></i>
              </div>
            </div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  pattern="^([A-Za-z0-9_\-\.]+)@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,3})$" placeholder="Input your Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-key"></i>
              </div>
            </div>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" minlength="8"  placeholder="Input your Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-key"></i>
              </div>
            </div>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength="8" required autocomplete="new-password" placeholder="Confirm Password">
          </div>
          <div class="form-check2">
            <div class="check-box">
              <input type="checkbox" class="form-check-input" /> By signing up, you agree to our
            </div>
            <div class="forgot">
              <a href="">Terms & Condition.</a>
            </div>
          </div>
          <button type="submit" class="btn btn-primary modal-btn">
          SIGN UP
          </button>
        </form>
      </div>
    </div>
  </div>
</div>










<div
  class="modal fade"
  id="fgp"
  tabindex="-1"
  aria-labelledby="myModalLabel"
  aria-hidden="true"
  >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Forget Password</h5>
        <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{route('fgp.enter.email')}}" >
          @csrf
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="far fa-envelope"></i>
              </div>
            </div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="inlineFormInputGroup"  placeholder="Entert Your Email">
            @error('email')
            {{--  <script>
            alert("Login credential is wrong.!");
            </script> --}}
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          
          <button type="submit" class="btn btn-primary modal-btn">
          Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
