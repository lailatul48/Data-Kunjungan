<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Kunjungan Perpustakaan - @yield('title')</title>

    <!-- Bootstrap -->
    <link href={{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}} rel="stylesheet">
    <!-- Font Awesome -->
    <link href={{asset('vendors/font-awesome/css/font-awesome.min.css')}} rel="stylesheet">
    <!-- NProgress -->
    <link href={{asset('vendors/nprogress/nprogress.css')}} rel="stylesheet">
    <!-- iCheck -->
    <link href={{asset('vendors/iCheck/skins/flat/green.css')}} rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href={{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}} rel="stylesheet">
    <!-- JQVMap -->
    <link href={{asset('vendors/jqvmap/dist/jqvmap.min.css')}} rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href={{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}} rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href={{asset('build/css/custom.min.css')}} rel="stylesheet">
    <link href={{asset('vendors/pnotify/dist/pnotify.css')}} rel="stylesheet">
    <link href={{asset('vendors/pnotify/dist/pnotify.buttons.css')}} rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{asset('css/sweetalert.css')}}>
    @yield('styles')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Data Kunjungan</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
           @include('partials.sidebar')
            
            <!-- /menu profile quick info -->

            <br />

            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('api.logout')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          @include('partials.navbar')
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
         @yield('content')
                </div>
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('partials.footer')
        <!-- /footer content -->
      </div>
    </div>

  </body>
  <!-- jQuery -->
  <script src={{asset('vendors/jquery/dist/jquery.min.js')}}></script>
  <!-- Bootstrap -->
  <script src={{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}></script>
  <!-- FastClick -->
  <script src={{asset('vendors/fastclick/lib/fastclick.js')}}></script>
  <!-- NProgress -->
  <script src={{asset('vendors/nprogress/nprogress.js')}}></script>
  <!-- bootstrap-progressbar -->
  <script src={{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}></script>
  <!-- iCheck -->
  <script src={{asset('vendors/iCheck/icheck.min.js')}}></script>
  <!-- bootstrap-daterangepicker -->
  <script src={{asset('vendors/moment/min/moment.min.js')}}></script>
  <script src={{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}></script>
  <!-- bootstrap-wysiwyg -->
  <script src={{asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}></script>
  <script src={{asset('vendors/jquery.hotkeys/jquery.hotkeys.js')}}></script>
  <script src={{asset('vendors/google-code-prettify/src/prettify.js')}}></script>
  <!-- jQuery Tags Input -->
  <script src={{asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}></script>
  <!-- Switchery -->
  <script src={{asset('vendors/switchery/dist/switchery.min.js')}}></script>
  <!-- Select2 -->
  <script src={{asset('vendors/select2/dist/js/select2.full.min.js')}}></script>
  <!-- Parsley -->
  <script src={{asset('vendors/parsleyjs/dist/parsley.min.js')}}></script>
  <!-- Autosize -->
  <script src={{asset('vendors/autosize/dist/autosize.min.js')}}></script>
  <!-- jQuery autocomplete -->
  <script src={{asset('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}></script>
  <!-- starrr -->
  <script src={{asset('vendors/starrr/dist/starrr.js')}}></script>
  <!-- Custom Theme Scripts -->
  <script src={{asset('build/js/custom.js')}}></script>
  <script src={{asset('vendors/pnotify/dist/pnotify.js')}}></script>
  <script src={{asset('vendors/pnotify/dist/pnotify.buttons.js')}}></script>
   <script src={{asset('js/sweetalert.min.js')}}></script> 
  

    <script>
    $(document).ready(function(){
        var pathname = window.location.pathname;
        console.log('url path =>',pathname);
        switch (pathname) {
            case '/':
                $('#nav-list-users').removeClass('active');
                $('#nav-list-visitors').removeClass('active');
                $('#nav-list-logs').removeClass('active');
                $('#nav-dashboard').addClass('active');
                break; 
            case '/users':
            case '/users/create':
                $('#nav-dashboard').removeClass('active');
                $('#nav-list-visitors').removeClass('active');
                $('#nav-list-logs').removeClass('active');
                $('#nav-list-users').addClass('active');
                break; 
            case '/visitors':
            case '/visitors/create':
                $('#nav-dashboard').removeClass('active');
                $('#nav-list-logs').removeClass('active');
                $('#nav-list-users').removeClass('active');
                $('#nav-list-visitors').addClass('active');
                break;  
            case '/logs':
            case '/logs/create':
                $('#nav-dashboard').removeClass('active');
                $('#nav-list-users').removeClass('active');
                $('#nav-list-visitors').removeClass('active');
                 $('#nav-list-logs').addClass('active');
                break;  
            default: 
                text = "Looking forward to the Weekend";
        }
    });
</script>

	@yield('scripts')
</html>
