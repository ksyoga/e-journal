@inject('utilities','App\Http\Utilities\Utilities')
@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Instruments Utilize Details
        <small> {{Auth::user()->division->name}} </small>

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

  <!-- Your Page Content Here -->
    

    <div class="row">


      @foreach($instruments as $instrument)

        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active" style="padding-bottom: 1px; padding-top: 5px; padding-left: 5px;">
              
              <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/edm/{{$instrument->image}}" alt="User Avatar">
              </div><!-- /.widget-user-image -->
              <!-- <h3 class="widget-user-username">{{$instrument->brand}}</h3>
              <h5 class="widget-user-desc">{{$instrument->model}} <span class="pull-right">Used Days : {{$instrument->iutilize()->sum('used_days')}}</span> </h5>
              --> 
              <div class="info-box-content">
                <span class="info-box-text">{{$instrument->model}}<span class="pull-right">Total Utilized Days : {!!$utilities::dec2fracso($instrument->iutilize()->sum('used_days'))!!}</span> </span>
                <span class="info-box-text"><span class="pull-right">Total Working Days : <i>{{$utilities::getWorkingDays("2016-01-01",date('Y-m-d'))}}</i></span> </span>
                <span class="info-box-number">{{$instrument->brand}}</span>
                <div class="progress progress-striped active" style="height:7px">
                  <div class="progress-bar progress-bar-yellow" style="width:{{(($instrument->iutilize()->sum('used_days'))/($utilities::getWorkingDays("2016-01-01",date('Y-m-d'))))*100}}%"></div>
                </div>
              </div><!-- /.info-box-content -->

              </div>
            <div class="box-body no-padding">

            <?php 
             // $requests = $instrument->instrumentrequest()->get();
              //$requests = App\InstrumentRequest::where('total_station_id',$instrument->id)->get(); 
          
            ?>
            <table class="table table-condensed">
              <tr>
                <th>Date</th>
                <th>Surveyor</th>
                <th>Requisition</th>
                <th>Days</th>
              </tr>
              
              @foreach($instrument->iutilize()->orderBy('used_date','desc')->take(10)->get() as $iutilize)
                 <tr>
                  <td>{{date_format(date_create($iutilize->used_date),'d/m/Y')}}</td>
                  <td>{{$iutilize->requisition->surveyor->name}}</td>
                  <td>{{$iutilize->requisition->requisition_no}}</td>
                  <td>{!!$utilities::dec2fracso($iutilize->used_days)!!}</td>
                </tr>
              @endforeach
              
            </table>
          </div><!-- /.box-body -->
          </div><!-- /.widget-user -->
        </div><!-- /.col -->
      @endforeach

     
    </div><!-- /.row -->
 </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection
