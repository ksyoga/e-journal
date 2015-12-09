@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Vehicles Details
        <small> {{Auth::user()->division->name}} Division</small>

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
            <div class="widget-user-header bg-aqua-active">
              @if(Auth::user()->rank=="survy")
                <a href="vehicle/{{$vehicle->id}}/requist" class="text-muted pull-right"><button class="btn btn-xs btn-success" data-toggle="tooltip" title="Reservation of Vehicle"><i class="glyphicon glyphicon-plus"></i></button></a>
              @endif
              <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/vehicles/{{$vehicle->image}}" alt="User Avatar">
              </div><!-- /.widget-user-image -->
              <h3 class="widget-user-username">{{$vehicle->brand}}</h3>
              <h5 class="widget-user-desc">{{$vehicle->vehicle_no}}</h5>
              </div>
            <div class="box-body no-padding">

           
            <table class="table table-condensed">
              <tr>
                <th>Date</th>
                <th>Surveyor</th>
                <th>Purpose</th>
                <th>Statuses</th>
              </tr>
              @foreach($vehicle->vehiclerequest()->orderBy('required_date', 'desc')->take(10)->get() as $request)
              
                <tr>
                  <!-- <td>{{$request->required_date}}</td> -->
                  <td>{{date_format(date_create($request->required_date),'d/m/Y')}}</td>
                  <td>{{$request->surveyorrequest->name}}</td>
                  <td>{{$request->request_for}}</td>
                  @if(Auth::user()->rank=="supdt")
                    <td>
                       @if($request->approved_by == 1)
                          <span class="label label-success" data-toggle="tooltip" title="{{$request->supdt_note}}">Approved</span>
                          <a href="vehicle/{{$request->id}}/edit" class="pull-right"><i class="fa fa-edit"></i></a>
                        @elseif($request->approved_by == 2)
                         <span class="label label-danger" data-toggle="tooltip" title="{{$request->supdt_note}}">Denied</span>
                         <a href="vehicle/{{$request->id}}/edit" class="pull-right"><i class="fa fa-edit"></i></a>
                        @else
                         <span class="label label-warning" data-toggle="tooltip" title="{{$request->supdt_note}}">Pending</span>
                          <a href="vehicle/{{$request->id}}/edit" class="pull-right"><i class="fa fa-edit"></i></a>
                        @endif
                    </td>
                  @elseif(Auth::user()->rank=="survy")
                    <td class="text-center">
                      @if($request->approved_by == 1)
                        <span class="label label-success" data-toggle="tooltip" title="{{$request->supdt_note}}">Approved</span>
                      @elseif($request->approved_by == 2)
                        <span class="label label-danger" data-toggle="tooltip" title="{{$request->supdt_note}}">Denied</span>
                      @else
                        <span class="label label-warning" data-toggle="tooltip" title="{{$request->supdt_note}}">Pending</span>
                      @endif
                    </td>
                  @endif
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