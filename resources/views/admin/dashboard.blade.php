<!DOCTYPE html>
<html lang="en">
  <head>
    <title>EMC CENSUS SYSTEM</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset ('css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{ asset ('css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{ asset ('css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{ asset ('css/matrix-media.css')}}" />
    <link rel="stylesheet" href="{{ asset ('css/datepicker.css')}}" />
    <link rel="stylesheet" href="{{ asset ('css/uniform.css')}}" />
    <link rel="stylesheet" href="{{ asset ('css/select2.css')}}" />
    <link href="{{ asset ('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset ('css/jquery.gritter.css')}}" />
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
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome {{Sentinel::getUser()->first_name}}</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>

        <li class="divider"></li>
      </ul>
    </li>

    <li>
        <a href="/logout"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="/logout" method="POST" style="display: none;">
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
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="submenu"> <a href="#"><i class="icon icon-folder-open"></i> <span>New Registration</span> <span class="label label-important"><i class="icon icon-chevron-down"></i></span></a>
      <ul>
        <li><a href="/child/register">Child Registration</a></li>
        <li><a href="/adult/register">Adult Registration</a></li>
      </ul>
    </li>
    <li><a href="/births/view"><i class="icon icon-eye-open"></i> View Registered Members</a></li>
    <li><a href="/births/deregister"><i class="icon icon-info-sign"></i>Delete Record</a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-bar-chart"></i> <span>Filter Population</span> <span class="label "><i class="icon icon-chevron-down"></i></span></a>
      <ul>
        <li><a href="/birth/register">By Constituency</a></li>
        <li><a href="#">By Location</a></li>
        <li><a href="/death/register">By Ward</a></li>
      </ul>
    </li>

  </ul>
</div>
<!--sidebar-menu-->


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

<script src="{{ asset ('js/select2.min.js')}}"></script>
<script src="{{ asset ('js/excanvas.min.js')}}"></script>
<script src="{{ asset ('js/jquery.min.js')}}"></script>
<script src="{{ asset ('js/jquery.ui.custom.js')}}"></script>
<script src="{{ asset ('js/bootstrap.min.js')}}"></script>
<script src="{{ asset ('js/jquery.flot.min.js')}}"></script>
<script src="{{ asset ('js/jquery.flot.resize.min.js')}}"></script>
<script src="{{ asset ('js/jquery.peity.min.js')}}"></script>
<script src="{{ asset ('js/fullcalendar.min.js')}}"></script>
<script src="{{ asset ('js/matrix.js')}}"></script>
<script src="{{ asset ('js/matrix.dashboard.js')}}"></script>
<script src="{{ asset ('js/jquery.gritter.min.js')}}"></script>
<script src="{{ asset ('js/matrix.interface.js')}}"></script>
<script src="{{ asset ('js/matrix.chat.js')}}"></script>
<script src="{{ asset ('js/jquery.validate.js')}}"></script>
<script src="{{ asset ('js/matrix.form_validation.js')}}"></script>
<script src="{{ asset ('js/jquery.wizard.js')}}"></script>
<script src="{{ asset ('js/jquery.uniform.js')}}"></script>
<script src="{{ asset ('js/select2.min.js')}}"></script>
<script src="{{ asset ('js/matrix.popover.js')}}"></script>
<script src="{{ asset ('js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset ('js/matrix.tables.js')}}"></script>

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

        <script type="text/javascript">
          function showDiv(select){
             if(select.value=="Keiyo North"){
              document.getElementById('keiyo_north').style.display = "block";
            } if(select.value=="Keiyo South"){
              document.getElementById('keiyo_south').style.display = "block";
             }
           if(select.value=="Marakwet East"){
             document.getElementById('mara_east').style.display = "block";
            }
            if(select.value=="Marakwet West"){
              document.getElementById('mara_west').style.display = "block";
             }
          }

        </script>


</body>
</html>
