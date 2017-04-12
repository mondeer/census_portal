<!DOCTYPE html>
<html lang="en">
  <head>
    <title>EMC CENSUS SYSTEM</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url ('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ url ('css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{ url ('css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{ url ('css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{ url ('css/matrix-media.css')}}" />
    <link rel="stylesheet" href="{{ url ('css/datepicker.css')}}" />
    <link rel="stylesheet" href="{{ url ('css/uniform.css')}}" />
    <link rel="stylesheet" href="{{ url ('css/select2.css')}}" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url ('css/jquery.gritter.css')}}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  </head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">EMC Cencus</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Mengich</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>

        <li class="divider"></li>
        <li><a href="/logout"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>

    <li>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>

  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
@include('includes/sidebar')

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <!-- <ul class="quick-actions">
        <li class="bg_lb"> <a href="#"> <i class="icon-dashboard"></i> <span class="label label-important">20</span> Total Population </a> </li>
        <li class="bg_lg span3"> <a href="#"> <i class="icon-signal"></i> Deaths</a> </li>
        <li class="bg_ly"> <a href="#"> <i class="icon-inbox"></i><span class="label label-success">101</span>Births</a> </li>
        <li class="bg_lo"> <a href="#"> <i class="icon-th"></i>Adults</a> </li>
        <li class="bg_ls"> <a href="#"> <i class="icon-fullscreen"></i>Female</a> </li>
        <li class="bg_lo span3"> <a href="#"> <i class="icon-th-list"></i>Male</a> </li>
        <li class="bg_ls"> <a href="#"> <i class="icon-tint"></i> Children</a> </li>


      </ul> -->
    </div>
<!--End-Action boxes-->
@yield('content')


</div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; ELgeyo Marakwet System. Designed by <a href="http://themedesigner.in">Mengich</a> </div>
</div>

<!--end-Footer-part-->

<script src="{{ url ('js/select2.min.js')}}"></script>
<script src="{{ url ('js/excanvas.min.js')}}"></script>
<script src="{{ url ('js/jquery.min.js')}}"></script>
<script src="{{ url ('js/jquery.ui.custom.js')}}"></script>
<script src="{{ url ('js/bootstrap.min.js')}}"></script>
<script src="{{ url ('js/jquery.flot.min.js')}}"></script>
<script src="{{ url ('js/jquery.flot.resize.min.js')}}"></script>
<script src="{{ url ('js/jquery.peity.min.js')}}"></script>
<script src="{{ url ('js/fullcalendar.min.js')}}"></script>
<script src="{{ url ('js/matrix.js')}}"></script>
<script src="{{ url ('js/matrix.dashboard.js')}}"></script>
<script src="{{ url ('js/jquery.gritter.min.js')}}"></script>
<script src="{{ url ('js/matrix.interface.js')}}"></script>
<script src="{{ url ('js/matrix.chat.js')}}"></script>
<script src="{{ url ('js/jquery.validate.js')}}"></script>
<script src="{{ url ('js/matrix.form_validation.js')}}"></script>
<script src="{{ url ('js/jquery.wizard.js')}}"></script>
<script src="{{ url ('js/jquery.uniform.js')}}"></script>
<script src="{{ url ('js/select2.min.js')}}"></script>
<script src="{{ url ('js/matrix.popover.js')}}"></script>
<script src="{{ url ('js/jquery.dataTables.min.js')}}"></script>
<script src="{{ url ('js/matrix.tables.js')}}"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

        <script>
          $(".delete").on("submit", function(){
            return confirm("Do you want to delete this item");
          });

        </script>


</body>
</html>
