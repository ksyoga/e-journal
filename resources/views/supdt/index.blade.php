@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surveyors Details
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
        @foreach($surveyors as $surveyor)
          <div class="col-md-4">
         <!--  {{$surveyor->supdt->division->name}} -->
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-aqua-active">
                <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/{{$surveyor->image}}" alt="User Avatar">
                </div><!-- /.widget-user-image -->
                <h3 class="widget-user-username"> {{$surveyor->name}}</h3>
                <h5 class="widget-user-desc">Government Surveyor</h5>
                    <div class="btn-group pull-right" >
                        <button type="button" class="btn btn-default btn-xs bg-aqua-active" data-toggle="tooltip" data-placement="top" title="Surveyor Diary"><i class="glyphicon glyphicon-list-alt" ></i></button>
                        <button type="button" class="btn btn-default btn-xs bg-aqua-active" data-toggle="tooltip" data-placement="top" title="Flowing Week Programe"><i class="glyphicon glyphicon-calendar" ></i> </button>
                        <button type="button" class="btn btn-default btn-xs bg-aqua-active" data-toggle="tooltip" data-placement="top" title="Requisition"><i class="fa fa-object-group"></i></button>
                        <button type="button" class="btn btn-default btn-xs bg-aqua-active" data-toggle="tooltip" data-placement="top" title="Month Involvement"><i class="glyphicon glyphicon-indent-left"></i></button>
                  </div>
                </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Awarded Work Load <span class="pull-right badge bg-blue">31</span></a></li>
                  <li><a href="#">Completed Work Load <span class="pull-right badge bg-aqua">5</span></a></li>
                  <li><a href="#">Involved Field Work Days  <span class="pull-right badge bg-green">12</span></a></li>
                  <li><a href="#">Involved Plan Work Days  <span class="pull-right badge bg-red">842</span></a></li>
                  <li><a href="#">Today Worke : <span class="pull-right badge bg-red">842</span></a></li>

                </ul>
              </div>
            </div><!-- /.widget-user -->
          </div><!-- /.col -->
        @endforeach
                   
      </div><!-- /.row -->
 </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection