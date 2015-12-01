@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Requisition Details
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
                  <th>Requisition No</th>
                  <th>Category</th>
                  <th>Work Load</th>
                  <th>Lots</th>
                  <th>Extent</th>
                  <th>Received</th>
                  <th>Issued</th>
                  <th>Surveyor</th>
                  <th>Commance</th>
                  <th><span data-toggle="tooltip" title="Field Works">F.W</span></th>
                  <th><span data-toggle="tooltip" title="Plane Works">P.W</span></th>
                  <th>Note</th>
                </tr>
                
            	@foreach($requisitions as $requisition)
            	<tr>
		        	<td><span class="label label-warning">Pending</span></td>
		        	<td>{{$requisition->requisition_no}}</td>
		        	<td>{{$requisition->category}}</td>
		        	<td>{{$requisition->work_load}}</td>
		        	<td>{{$requisition->lots}}</td>
		        	<td>{{$requisition->extent}}</td>
		        	<td>{{$requisition->received_date}}</td>
		        	<td>{{$requisition->issued}}</td>
		        	<td>{{$requisition->surveyor->name}}</td>
		        	<td>{{$requisition->commanced}}</td>
		        	<td><span data-toggle="tooltip" title="Days">{{$requisition->fieldwork}}</span></td>
		        	<td><span data-toggle="tooltip" title="Days">{{$requisition->planwork}}</span></td>
		        	<td ><i class="fa fa-sticky-note" data-toggle="tooltip" title="{{$requisition->note}}"></i></td>
            	</tr>
            	@endforeach
                
                
                
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
   

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection