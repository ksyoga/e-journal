@inject('sidenave','App\Http\Utilities\Sidenave')
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{!! (Auth::user()->name) !!}'s Journal</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('bootstrap/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('bootstrap/css/ionicons.min.css') }}">
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <!--Ionicons-->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">  -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('dist/css/AdminLTE.min.css') }}">
    
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="{{ url('dist/css/skins/skin-blue.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/iCheck/square/blue.css') }}">

    <link rel="stylesheet" href="{{url('css/reset.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header Start -->
      @include('header')
      <!-- Main Header End-->

      <!-- Left side column. contains the logo and sidebar Start-->
       @include('sidebar')
      <!-- Left side column. contains the logo and sidebar End-->

     

          <!-- Your Page Content Here -->
           @yield('content')

       

      <!-- Main Footer Start -->
       @include('footer')
      <!-- Main Footer End-->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-print"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Report & Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                  <i class="menu-icon  fa fa-object-group bg-purple"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Requisition Detailes</h4>
                    <a href="report/0/requi" target="_blank"><span class="label label-danger ">Unmindful</span></a> 
                    <a href="report/1/requi" target="_blank"><span class="label label-warning ">Accepted</span></a> 
                    <a href="report/2/requi" target="_blank"><span class="label label-info ">Commance</span></a> 
                    <a href="report/3/requi" target="_blank"><span class="label label-success ">Completed</span></a>
                  </div>
              </li>
               @if(Auth::user()->rank=="survy")
              <hr>
              <li>
                  <i class="menu-icon  fa fa fa-inbox bg-orange"></i>
                  <div class="menu-info">
                    {!!$sidenave::diaryMonth()!!}
                  </div>
              </li>
              @endif
              <hr>

              <li>
                  <i class="menu-icon  glyphicon glyphicon-screenshot bg-olive"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Total Station Utilization </h4>
                    @foreach($sidenave::instrument() as $instrument)
                      <a href="report/{{$instrument->id}}/instrument" target="_blank"><span class="label label-info">{{$instrument->brand}} {{$instrument->model}}</span></a>
                    @endforeach
                    <!-- <span class="label label-info">Trimble C4-12X74</span> </a>
                    <span class="label label-primary">Sokia C4-MX3D4</span> 
                    <span class="label label-primary">Lica C4-3X6-VX</span>  -->
                  </div>
              </li>
              <hr>
              <li>
                  <i class="menu-icon  fa fa-truck bg-maroon"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Vehicle Utilization</h4>
                    @foreach($sidenave::vehicle() as $vehicle)
                      <a href="report/{{$vehicle->id}}/vehicle" target="_blank"><span class="label label-warning">{{$vehicle->brand}} {{$vehicle->vehicle_no}}</span></a>
                    @endforeach
                    <!-- <span class="label label-info">TOYOTA HB-1274</span> 
                    <span class="label label-primary">ISUZU WB-8278</span> 
                    <span class="label label-primary">NISSAN AX-3268</span> 
                    <span class="label label-primary">MITSUBISHI SX-8280</span>  -->
                  </div>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ url('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('dist/js/app.min.js') }}"></script>
    <script src="{{ url('plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{url('plugins/iCheck/icheck.min.js') }}"></script>
    <!-- jQuery Knob -->
    <script src="{{url('plugins/knob/jquery.knob.js') }}"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
     <script>

     $(".select2").select2();
      
    </script>
    
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });

        $(".utlize").knob({
            'change' : function (v) { console.log(v); }
        });
      });


    </script>
         
  </body>
</html>
