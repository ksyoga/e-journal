@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Amendment Details
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
    
  		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Diyatalawa Division</h3>
              <div class="box-tools">
                <div class="input-group" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Status</th>
                  <th>Plane No</th>
                  <th><span data-toggle="tooltip" title="Date">Received</span></th>
                  <th>Supdt Note</th>
                  <th>Surveyor</th>
                  <th><span data-toggle="tooltip" title="Date">Completeed</span></th>
                  <th>Note</th>
                </tr>
                
            	@foreach($amendments as $amendment)
            	<tr>
		        	<td><span class="label label-warning">Pending</span></td>
		        	<td>{{$amendment->plan_no}}</td>
		        	<td>{{$amendment->received}}</td>
		        	<td ><i class="fa fa-sticky-note" data-toggle="tooltip" title="{{$amendment->supdt_note}}"></i></td>
		        	<td>{{$amendment->surveyor->name}}</td>
		        	<td>{{$amendment->completion}}</td>
		        	<td ><i class="fa fa-sticky-note" data-toggle="tooltip" title="{{$amendment->surveyor_note}}"></i></td>
		        	
            	</tr>
            	@endforeach
                
                
                
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
   

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection