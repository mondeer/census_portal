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

  <body class="login-img2-body">
    <br><br><br><br><br>
    <div class="container">
      <div class="row">
          <div class="span8 imond">
                  <h1 class="text-center imondwhite">LOGIN</h1>


              <form class="form-horizontal" role="form" method="POST" action="/login">
                  {{ csrf_field() }}

                  <div class="control-group">
                    <label class="imondwhite control-label" style="font-size: 22px; font-weight:900">E-Mail</label>
                      <div class="span2">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                      </div>
                  </div>

                  <div class="control-group">
                      <label for="password" class="imondwhite control-label" style="font-size: 22px; font-weight:900">Password</label>

                      <div class="span2">
                          <input id="password" type="password" class="form-control" name="password" required>
                      </div>
                  </div>

                  <div class="control-group">
                      <div class="text-center imondwhite">
                          <button type="submit" class="btn btn-primary">
                              Login
                          </button>
                      </div>
                  </div>
              </form>

              <div class="">
                <h1 class="text-right"><a class="btn btn-primary btn-large imondwhite text-right" href="/register">Register</a></h1>
              </div>
          </div>
      </div>
    </div>

  </body>
</html>
