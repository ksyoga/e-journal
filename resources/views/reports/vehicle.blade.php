@inject('utilities','App\Http\Utilities\Utilities')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Surveyor Journal | Report Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="{{url('css/reset.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="pageA4p">
      <section class="content">
      <div class="row">
        
        <section class="content-header" style= "padding:0;">
          <h4>
            @if(Auth::user()->rank == 'supdt')
              {{$vehicle->brand}} {{$vehicle->vehicle_no}} Vehicle Utilization<small> {{Auth::user()->division->name}} Division</small>
              <small class="pull-right text-yellow">
              Working Days : <i>{{$utilities::getWorkingDays("2016-01-01",date('Y-m-d'))}}</i> 
              but Utilized :{!!$utilities::dec2fracso($vehicle->vutilize()->sum('used_days'))!!} days
              </small>
            @else
              {{$vehicle->brand}} {{$vehicle->vehicle_no}} Vehicle Utilization<small> by {{Auth::user()->name}} </small>
            @endif
          </h4>
        </section>

        <table class="table table-condensed">
            <tr @if($vehicle->vutilize()->first() != null)class="user{{$surveyor_id}}"@endif>
              <th>Date</th>
              <th>Surveyor</th>
              <th>Requisition</th>
              <th>Days</th>
            </tr>
           
            @foreach($vehicle->vutilize()->orderBy('used_date','desc')->take(10)->get() as $vutilize)
              <tr class="user{{$vutilize->requisition->surveyor->id}}">
                <td>{{date_format(date_create($vutilize->used_date),'d/m/Y')}}</td>
                <td>{{$vutilize->requisition->surveyor->name}}</td>
                <td>{{$vutilize->requisition->requisition_no}}</td>
                <td>{!!$utilities::dec2fracso($vutilize->used_days)!!}</td>
              </tr>
            @endforeach
            
          </table>
        </div><!-- /.box-body -->
       
        
      </div>
        
       
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
      
    </div>
      

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });

      @if(Auth::user()->rank != 'supdt')
        $(".table-condensed  tr").hide();
        $(".table-condensed  tr.user{{$surveyor_id}}").show();
      @endif
      @if($vehicle->vutilize()->first() == null)
        $(".table-condensed  tr").hide();
      @endif
    </script>
  </body>
</html>
