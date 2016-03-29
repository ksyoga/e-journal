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
    <div class="pageA4l">
      <section class="content">
      <div class="row">
        
        <section class="content-header" style= "padding:0;">
          <h4>
            {{Auth::user()->name}}'s {{$status}}<small> {{Auth::user()->division->name}} </small>

          </h4>
        </section>
       
        @if(!empty($requisitions))
        <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Status</th>
                  <th>Requisition No</th>
                  <th>Category</th>
                  <th>Work Load</th>
                  <th  colspan="2">Lots &nbsp;&nbsp;& &nbsp;&nbsp;Extent</th>
                  <th  colspan="2">Received &nbsp;&nbsp;& &nbsp;&nbsp;&nbsp;&nbsp;Issued</th>
                  <th>Surveyor</th>
                  <th  colspan="2">Commance &nbsp;&nbsp;& &nbsp;&nbsp;Completed</th>
                  <th><span data-toggle="tooltip" title="Field  & Plane Works">Work</span></th>
                  <th><span data-toggle="tooltip" title="Totalstation  & Vehicles">Utilize</span></th>
                  <!-- <th>Note</th> -->
                  
                </tr>
              
              @foreach($requisitions as $requisition)
              <tr>
               <td>{!!$utilities::status($requisition->status)!!}</td>
                <td>{{$requisition->requisition_no}}</td>
                <td>{{$requisition->category}}</td>
                <td>{{$requisition->work_load}}</td>
                <td align="center">{{$requisition->lots}}</td>
                <td><span class="pull-right">{{$requisition->extent}} </span></td>
                <td>{!!$utilities::sldate($requisition->received_date)!!}</td>
                <td>{!!$utilities::sldate($requisition->issued)!!}</td>
                <td>{{$requisition->surveyor->name}}</td>
                <td>{!!$utilities::sldate($requisition->commanced)!!}</td>
                <td>{!!$utilities::sldate($requisition->complet_date)!!}</td>
                <td><span data-toggle="tooltip" title="Field Work Days">{!!$utilities::dec2fracso($utilities::work_for_req($requisition->id,0))!!}</span>&nbsp;,&nbsp;&nbsp;<span data-toggle="tooltip" title="Plan Work Days">{!!$utilities::dec2fracso($utilities::work_for_req($requisition->id,1))!!}</span></td>
                <td><span data-toggle="tooltip" title="Total Station Utilize">{!!$utilities::dec2fracso($requisition->iutilize()->where('requisition_id',$requisition->id)->sum('used_days'))!!}</span>&nbsp;,&nbsp;&nbsp;<span data-toggle="tooltip" title="Vehicle Utilize" >{!!$utilities::dec2fracso($requisition->vutilize()->where('requisition_id',$requisition->id)->sum('used_days'))!!}</span></td>
               
               <!--  <td >{{$requisition->note}}</td> -->
                
              </tr>
              @endforeach
                
                
                
              </table>
            </div><!-- /.box-body -->
        @endif
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
    </script>
  </body>
</html>
