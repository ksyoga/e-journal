@inject('utilities','App\Http\Utilities\Utilities')
@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Vehicles Utilize Details
        <small> {{Auth::user()->division->name}}</small>

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
      @foreach($vehicles as $vehicle)

        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active" style="padding-bottom: 1px; padding-top: 5px; padding-left: 5px;">
             
              <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/vehicles/{{$vehicle->image}}" alt="User Avatar">
              </div><!-- /.widget-user-image -->
              <!-- <h3 class="widget-user-username">{{$vehicle->brand}}</h3>
              <h5 class="widget-user-desc">{{$vehicle->vehicle_no}} <span class="pull-right">Used Days : {{$vehicle->vutilize()->sum('used_days')}}</span></h5> -->
                <div class="info-box-content">
                  <div class="row">
                    <div class="col-md-4">
                      <span class="info-box-number">{{$vehicle->vehicle_no}}</span>
                      <span class="info-box-text">{{$vehicle->brand}}</span>
                    </div>
                    <div class="col-md-5">
                      <span class="pull-left">Total Working Days : <i>{{$utilities::getWorkingDays("2016-01-01",date('Y-m-d'))}}</i></span>
                      <span class="pull-left">Total Utilized Days &nbsp;: <i>{!!$utilities::dec2fracso($vehicle->vutilize()->sum('used_days'))!!}</i></span>
                    </div>
                    <div class="col-md-3">
                      
                      <span class="utlizechart" data-percent="{{floor((($vehicle->vutilize()->sum('used_days'))/$utilities::getWorkingDays("2016-01-01",date('Y-m-d')))*100)}}">
                          <span class="percent"></span>
                      </span>
                    </div>
                  </div>
                </div><!-- /.info-box-content -->
              </div>
            <div class="box-body no-padding">

           
            <table class="table table-condensed">
              <tr>
                <th>Date</th>
                <th>Surveyor</th>
                <th>Requisition</th>
                <th>Days</th>
              </tr>
             
              @foreach($vehicle->vutilize()->orderBy('used_date','desc')->take(10)->get() as $vutilize)
                <tr>
                  <td>{{date_format(date_create($vutilize->used_date),'d/m/Y')}}</td>
                  <td>{{$vutilize->requisition->surveyor->name}}</td>
                  <td>{{$vutilize->requisition->requisition_no}}</td>
                  <td>{!!$utilities::dec2fracso($vutilize->used_days)!!}</td>
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