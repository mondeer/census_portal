<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>CENSUS SYSTEM EMC</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

</head>

  <body class="login-img3-body">

    <div class="container">



      <form class="login-form" role="form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
            <p class="login-img"><i class="icon_lock_alt"></i></p>
          <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon">    Email</i></span>

                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif

          </div>

          <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <span class="input-group-addon">password</i></span>


                  <input id="password" type="password" class="form-control" name="password" required>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
          </div>

          <div class="input-group">
              <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                      </label>
                  </div>
              </div>
          </div>

          <div class="input-group">
              <div class="col-md-8 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Login
                  </button>

                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      Forgot Your Password?
                  </a>
              </div>
              <div class="col-md-8 col-md-offset-4">
                  <a class="btn btn-link" href="{{ route('register') }}">
                      Register
                  </a>
              </div>
          </div>
      </form>

    </div>


  </body>
</html>
