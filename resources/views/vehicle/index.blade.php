@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Vehicles Details
        <small> Diyatalawa Division</small>

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
                <th>Approvel</th>
              </tr>
              @foreach($vehicle->vehiclerequest()->get() as $request)
              
                <tr>
                  <td>{{$request->required_date}}</td>
                  <td>{{$request->surveyorrequest->name}}</td>
                  <td>{{$request->request_for}}</td>
                  <td class="text-center"><input type="checkbox" ></td>
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