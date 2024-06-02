<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vehicle Management and Inventory System | PDRRMO - SC</title>
  <link rel="icon" type="image/x-icon" href="{{asset('backend/dist/img/vmislogo.png')}}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<img src="{{asset('backend/dist/img/vmislogo.png')}}" alt="VMIS Logo" class="brand-image img-circle" style="width: 150px;">
<br>

<div class="login-box text-center">
<b class="text-danger"><h2><b>Vehicle Management and Inventory System</b></h2></b>  
<br>
  <div class="card card-outline">
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form method="POST" action="{{ route('login') }}">

                        @csrf
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
            @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>


        <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        
        <div class="row">
            <div class="col-5">
                <div class="form-check text-left">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        <p>Remember Me</p>
                    </label>
                </div>
            </div>
            <div class="col-7 text-right">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
<!--
                <p class="mb-1">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                </p>-->
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
<br>

<div class="footer text-center">
        <span class="text-sm">Copyright &copy; 2024-2025</span>
        <br>
        <b>Provincial Disaster Risk Reduction and Management Office</b>
        <br>
        <span class="text-sm">All rights reserved</span>
      </div>


<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
