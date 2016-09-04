@inject('sidenave','App\Http\Utilities\Sidenave')
@inject('utilities','App\Http\Utilities\Utilities')

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
    <!-- <script src="{{url('plugins/knob/jquery.knob.js') }}"></script> -->
    <!-- EASY PIE CHART -->
    <script src="{{url('plugins/easypiechart/jquery.easypiechart.min.js') }}"></script>
    <!-- charts -->
    <script src="{{url('plugins/chartjs/Chart.min.js') }}"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
     <script>

     $(".select2").select2(); 
      
    </script>
    @if(Request::is('iutilize') || Request::is('vutilize'))
    <script>
      $(function(){
        $('.utlizechart').easyPieChart({
        easing: 'easeOutBounce',
        lineWidth: '7',
        size: '70',
        barColor: '#0700CC',
        scaleColor: '#FC4619', 
        onStep: function(from, to, percent) {
          $(this.el).find('.percent').text(Math.round(percent));
        }
      });
      });
      
    </script>
    @endif
     @if(Request::is('chart'))
    <script>
      $(function() {
      $('.completed_load').easyPieChart({
        easing: 'easeOutBounce',
        lineWidth: '10',
        size: '100',
        barColor: '#75BCDD',
        scaleColor: '#FC4619',
        onStep: function(from, to, percent) {
          $(this.el).find('.percent').text(Math.round(percent));
        }
      });
      var chart = window.chart = $('.completed_load').data('easyPieChart');
      $('.js_update').on('click', function() {
        chart.update(Math.random() * 200 - 100);
      });
    });

      
    </script>
    @endif
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
      </script>
    
    @if(Request::is('chart'))
    
      <script>
      $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    //var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    //var areaChart = new Chart(areaChartCanvas);

    var Data = {
     // labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sept","Oct","Nov","Dec"],
      datasets: [
        {
          label: "Holiday",
          fillColor: "rgba(221, 75, 57, 0.9)",
          strokeColor: "rgba(221, 75, 57, 0.8)",
          pointColor: "rgba(221, 75, 57, 1)",
          pointStrokeColor: "#dd4b39",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(221, 75, 57, 1)",
          data: {{$utilities::days_spend_by_month($user->id,$user->year,$user->month,'holidays')}}
        },
        {
          label: "Leave",
          fillColor: "rgba(0, 166, 90,0.9)",
          strokeColor: "rgba(0, 166, 90,0.8)",
          pointColor: "#00a65a",
          pointStrokeColor: "rgba(0, 166, 90,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(0, 166, 90,1)",
          data: {{$utilities::days_spend_by_month($user->id,$user->year,$user->month,'p_leave')}}
        },
        {
          label: "Other Dutey",
          fillColor: "rgba(243, 156, 18, 0.9)",
          strokeColor: "rgba(243, 156, 18,0.8)",
          pointColor: "#f39c12",
          pointStrokeColor: "rgba(243, 156, 18,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(243, 156, 18,1)",
          data: {{$utilities::days_spend_by_month($user->id,$user->year,$user->month,'other_duty')}}
        },
        {
          label: "Field Work",
          fillColor: "rgba(0, 192, 239, 0.9)",
          strokeColor: "rgba(0, 192, 239,0.8)",
          pointColor: "#00c0ef",
          pointStrokeColor: "rgba(0, 192, 239,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(0, 192, 239,1)",
          data: {{$utilities::days_spend_by_month($user->id,$user->year,$user->month,'field_work')}}
        },
        {
          label: "Plan Work",
          fillColor: "rgba(0, 115, 183, 0.9)",
          strokeColor: "rgba(0, 115, 183,0.8)",
          pointColor: "#0073b7",
          pointStrokeColor: "rgba(0, 115, 183,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(0, 115, 183,1)",
          data: {{$utilities::days_spend_by_month($user->id,$user->year,$user->month,'plan_work')}}
        }
      ]
    };

    var Options = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: true,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

    //Create the line chart
    //areaChart.Line(areaChartData, areaChartOptions);

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas);
    Options.datasetFill = false;
    lineChart.Line(Data, Options);


  //-------------
  //- PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
  var pieChart = new Chart(pieChartCanvas);
  var PieData = [
    {
      value: {{$utilities::days_spend($user->id,$user->year)['holidays']}},
      color: "#f56954",
      highlight: "#f56954",
      label: "Holiday"
    },
    {
      value: {{$utilities::days_spend($user->id,$user->year)['p_leave']}},
      color: "#00a65a",
      highlight: "#00a65a",
      label: "Leave"
    },
    {
      value: {{$utilities::days_spend($user->id,$user->year)['other_duty']}},
      color: "#f39c12",
      highlight: "#f39c12",
      label: "Other Duties"
    },
    {
      value: {{$utilities::days_spend($user->id,$user->year)['in_office']+$utilities::days_spend($user->id,$user->year)['in_field']+$utilities::days_spend($user->id,$user->year)['setin_out']+$utilities::days_spend($user->id,$user->year)['surveying']}},
      color: "#00c0ef",
      highlight: "#00c0ef",
      label: "Field Work"
    },
    {
      value: {{$utilities::days_spend($user->id,$user->year)['plan_work']}},
      color: "#3c8dbc",
      highlight: "#3c8dbc",
      label: "Plan Work"
    },
    {
      value: {{$utilities::days_spend($user->id,$user->year)['inspection']}},
      color: "#d2d6de",
      highlight: "#d2d6de",
      label: "Insepection"
    }
  ];
  var pieOptions = {
    //Boolean - Whether we should show a stroke on each segment
    segmentShowStroke: true,
    //String - The colour of each segment stroke
    segmentStrokeColor: "#fff",
    //Number - The width of each segment stroke
    segmentStrokeWidth: 1,
    //Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 50, // This is 0 for Pie charts
    //Number - Amount of animation steps
    animationSteps: 100,
    //String - Animation easing effect
    animationEasing: "easeOutBounce",
    //Boolean - Whether we animate the rotation of the Doughnut
    animateRotate: true,
    //Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale: false,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: false,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
    //String - A tooltip template
    tooltipTemplate: "<%=value %> <%=label%>"
  };
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  pieChart.Doughnut(PieData, pieOptions);
  //-----------------
  //- END PIE CHART -
  //-----------------

    
  });

      

    </script>
     @endif    
  </body>
</html>
