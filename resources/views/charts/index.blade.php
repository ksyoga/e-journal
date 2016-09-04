@inject('utilities','App\Http\Utilities\Utilities')
@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Presentation of <!-- {{Auth::user()->name}} -->

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
        
        <!-- /.col (LEFT) -->
        <div class="col-md-12">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Days Spend by {{Auth::user()->name}} </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-6">
                  <div class="row">
                  <div class="col-md-8">
                    <div class="chart-responsive">
                      <canvas id="pieChart" height="150"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                      <li><i class="fa fa-circle-o text-red"></i> Holiday</li>
                      <li><i class="fa fa-circle-o text-green"></i> Leave</li>
                      <li><i class="fa fa-circle-o text-yellow"></i> Other Duties</li>
                      <li><i class="fa fa-circle-o text-aqua"></i> Field Work</li>
                      <li><i class="fa fa-circle-o text-light-blue"></i> Plane Work</li>
                      <li><i class="fa fa-circle-o text-gray"></i> Insepection</li>
                    </ul>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <div class="col-md-6">
                <div class="chart">
                  <canvas id="lineChart" height="100"></canvas>
                </div>
              </div>
              <!-- Requisition -->
              <div class="col-md-12">
                  <hr class="hrtyp">
                  <h4>Completed Work Load</h4>
                  <hr />
                  <span class="completed_load" data-percent="{{$utilities::com_work_pecentage()}}">
                          <span class="percent"></span>
                  </span>
              </div>
             <!-- Requisition -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        

        </div>
        
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
      


   </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
  @endsection