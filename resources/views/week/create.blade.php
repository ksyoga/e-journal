@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Programme for the following week
       <!--  <small> Including LIS, DM & PS Amendments</small> -->

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

  <!-- Your Page Content Here -->
  		<form method="POST" action="/week" class="form-horizontal">
				{{ csrf_field() }}
				<input type="hidden" name="surveyor_id" value="{{ $user->id }}">
		        	
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
		              <!-- Horizontal Form -->
		              <div class="box box-info">
		                <div class="box-header with-border">
		                  <h3 class="box-title">Add New Programme for the following week</h3>
		                </div><!-- /.box-header -->
		                <!-- form start -->
		                
		                  	<div class="box-body">

		                  		<div class="col-md-5">

		                  			<div class="form-group">
										<label for="day" class="control-label"> Date : </label>
										<input class="form-control" type="date" name="day" id="day" placeholder=" Date:">
									</div>

									<div class="form-group">
										<label for="req_no" class="control-label ">Requisition No </label>
										<!-- <input class="form-control"  name="req_no" id="req_no" placeholder="Requisition No : "> -->
										<select class="form-control" name="req_no" id="req_no" placeholder="Surveyor ">
											<option value="-">-</option>
											@foreach($requisitions as $requisition )
											<option value="{{$requisition->requisition_no}}" >{{$requisition->requisition_no}}</option>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label for="no_sfa" class="control-label ">No of Survey Field Assistants needed for Survey: </label>
										<input class="form-control"  type="number" name="no_sfa" id="no_sfa" placeholder="No SFA Need: ">
									</div>

									<div class="form-group">
										<label for="instrument" class="control-label ">Total station required on this day: </label>
										<select class="form-control" name="instrument" id="instrument" placeholder="Surveyor ">
											<option value="No">No</option>
											<option value="Yes">Yes</option>
										</select>
									</div>

									<div class="form-group">
										<label for="vehicle" class="control-label ">Dept Vehicle required on this day: </label>
										<select class="form-control" name="vehicle" id="vehicle" placeholder="Surveyor ">
											<option value="No">No</option>
											<option value="Yes">Yes</option>
										</select>
									</div>

									

		                  		</div>
		                  		<div class="col-md-1">
		                  		</div>
		                  		<div class="col-md-6">

		                  			<div class="form-group">
										<label for="pro_work" class="control-label ">Programmed work :</label>
										<textarea class="textarea" name="pro_work" id="pro_work" placeholder="Surveyor Programmed work" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
									</div>

									<div class="form-group">
										<label for="travel" class="control-label ">No of Km estimated to travel on this day by Dept.Vehicle : </label>
										<input class="form-control"  type="number" step="0.01" name="travel" id="travel" placeholder="estimated to travel ">
									</div>

									<div class="form-group">
										<label for="sfa_req_no" class="control-label ">Proposed duty to SFA Requisition No </label>
										<!-- <input class="form-control"  name="sfa_req_no" id="sfa_req_no" placeholder="Requisition No : "> -->
										<select class="form-control" name="sfa_req_no" id="sfa_req_no" placeholder="Surveyor ">
											<option value="-">-</option>
											@foreach($requisitions as $requisition )
											<option value="{{$requisition->requisition_no}}" >{{$requisition->requisition_no}}</option>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label for="sfa_work_asign" class="control-label ">Work to be assigned for Survay Field Assistants </label>
										<textarea class="textarea" name="sfa_work_asign" id="sfa_work_asign" placeholder="SFA Work to be assigned" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
									</div>

		                  		</div>
		                  	</div>

		                <div class="box-footer">
		                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
		                </div>

		               </div>
		            </div>
		        </div>
		</form>

  		 
 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection