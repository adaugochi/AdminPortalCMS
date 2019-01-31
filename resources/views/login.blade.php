<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('css/backend_css/bootstrap_css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('fonts/backend_font/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/backend_css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5" style="border-radius: 0px;">
        <div class="card-header bg-info"><b style="color: white;">Login</b></div>
        <div class="card-body">
          <form method="post" action="{{ url('dashboard') }}">{{ csrf_field() }}
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" name="email" style="border-radius: 0px;">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password" style="border-radius: 0px;">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <input type="submit" class="btn btn-info btn-block" value="Login"/>
          </form>
          <div class="text-center">
            @if (Route::has('register'))
              <a class="d-block small mt-3" href="{{ route('register') }}">{{ __('Register an Account') }}</a>
            @endif
            
            @if (Route::has('password.request'))
              <a class="d-block small" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
              </a>
            @endif
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap_js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>

  </body>

</html>
