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
  		<form method="POST" action="/week/{{$week->id}}" class="form-horizontal">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="PUT">
		        	
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
		              <!-- Horizontal Form -->
		              <div class="box box-info">
		                <div class="box-header with-border">
		                  <h3 class="box-title">Edit Programme for the following week</h3>
		                </div><!-- /.box-header -->
		                <!-- form start -->
		                
		                  	<div class="box-body">

		                  		<div class="col-md-5">

		                  			
		                  			<div class="form-group">
		                  				<label for="day" class="control-label"> Date : </label>
		                  				@if(Auth::user()->rank=="survy")
										<input class="form-control" type="date" value="{{$week->day}}" name="day" id="day" placeholder=" Date:">
										@elseif(Auth::user()->rank=="supdt")
										<input class="form-control" type="date" disabled value="{{$week->day}}" name="day" id="day" placeholder=" Date:">
										@endif
									</div>
																		
									
									<div class="form-group">
										<label for="req_no" class="control-label ">Requisition No :</label>
										<!-- <input class="form-control"  name="req_no" id="req_no" placeholder="Requisition No : "> -->
										@if(Auth::user()->rank=="survy")
										<select class="form-control" name="req_no" id="req_no" placeholder="Surveyor ">
											<option></option>
											@foreach($requisitions as $requisition )
											<option value="{{$requisition->requisition_no}}" <?php  $week->req_no == $requisition->requisition_no ? print "selected" : "" ?> >{{$requisition->requisition_no}}</option>
											@endforeach
										</select>
										@elseif(Auth::user()->rank=="supdt")
											<input class="form-control"  disabled value="{{$week->req_no}}" name="req_no" id="req_no" placeholder=" Requisition:">
										@endif
									</div>
									
									<div class="form-group">
										<label for="no_sfa" class="control-label ">No of Survey Field Assistants needed for Survey: </label>
										@if(Auth::user()->rank=="survy")
											<input class="form-control"  type="number" value="{{$week->no_sfa}}" name="no_sfa" id="no_sfa" placeholder="No SFA Need: ">
										@elseif(Auth::user()->rank=="supdt")
											<input class="form-control"  type="number"  disabled value="{{$week->no_sfa}}" name="no_sfa" id="no_sfa" placeholder="No SFA Need: ">
										@endif
									</div>

									<div class="form-group">
										<label for="instrument" class="control-label ">Total station required on this day: </label>
										@if(Auth::user()->rank=="survy")
										<select class="form-control" name="instrument" id="instrument" placeholder="Surveyor ">
											<option value="No" <?php  $week->instrument == 'No' ? print "selected" : "" ?>>No</option>
											<option value="Yes" <?php  $week->instrument == 'Yes' ? print "selected" : "" ?>>Yes</option>
										</select>
										@elseif(Auth::user()->rank=="supdt")
											<input class="form-control"    disabled value="{{$week->instrument}}" name="instrument" id="instrument" placeholder="Total station required on this day">
										@endif
									</div>

									<div class="form-group">
										<label for="vehicle" class="control-label ">Dept Vehicle required on this day: </label>
										@if(Auth::user()->rank=="survy")
										<select class="form-control" name="vehicle" id="vehicle" placeholder="Surveyor ">
											<option value="No" <?php  $week->vehicle == 'No' ? print "selected" : "" ?>>No</option>
											<option value="Yes" <?php  $week->vehicle == 'Yes' ? print "selected" : "" ?>>Yes</option>
										</select>
										@elseif(Auth::user()->rank=="supdt")
											<input class="form-control"    disabled value="{{$week->vehicle}}" name="vehicle" id="vehicle" placeholder="Dept Vehicle required on this day">
										@endif
									</div>

									

		                  		</div>
		                  		<div class="col-md-1">
		                  		</div>
		                  		<div class="col-md-6">

		                  			<div class="form-group">
										<label for="pro_work" class="control-label ">Programmed work :</label>
										@if(Auth::user()->rank=="survy")
											<textarea class="textarea" name="pro_work"  id="pro_work" placeholder="Surveyor Programmed work" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$week->pro_work}}</textarea>
										@elseif(Auth::user()->rank=="supdt")
											<textarea class="textarea" name="pro_work" disabled id="pro_work" placeholder="Surveyor Programmed work" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$week->pro_work}}</textarea>
										@endif
									</div>

									<div class="form-group">
										<label for="travel" class="control-label ">No of Km estimated to travel on this day by Dept.Vehicle : </label>
										@if(Auth::user()->rank=="survy")
										<input class="form-control"  type="number" step="0.01" value="{{$week->travel}}" name="travel" id="travel" placeholder="estimated to travel ">
										@elseif(Auth::user()->rank=="supdt")
										<input class="form-control"  type="number" disabled step="0.01" value="{{$week->travel}}" name="travel" id="travel" placeholder="estimated to travel ">
										@endif
									</div>

									<div class="form-group">
										<label for="sfa_req_no" class="control-label ">Proposed duty to SFA Requisition No :  </label>
										<!-- <input class="form-control"  name="sfa_req_no" id="sfa_req_no" placeholder="Requisition No : "> -->
										@if(Auth::user()->rank=="survy")
										<select class="form-control" name="sfa_req_no" id="sfa_req_no" placeholder="Surveyor ">
											<option></option>
											@foreach($requisitions as $requisition )
											<option value="{{$requisition->requisition_no}}" <?php  $requisition->requisition_no == $week->sfa_req_no  ? print "selected" : "" ?> >{{$requisition->requisition_no}}</option>
											@endforeach
										</select>
										@elseif(Auth::user()->rank=="supdt")
											<input class="form-control"    disabled value="{{$week->sfa_req_no}}" name="sfa_req_no" id="sfa_req_no" placeholder="Proposed duty to SFA Requisition No ">
										@endif
									</div>

									<div class="form-group">
										<label for="sfa_work_asign" class="control-label ">Work to be assigned for Survay Field Assistants </label>
										@if(Auth::user()->rank=="survy")
										<textarea class="textarea" name="sfa_work_asign" id="sfa_work_asign" placeholder="SFA Work to be assigned" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$week->sfa_work_asign}}</textarea>
										@elseif(Auth::user()->rank=="supdt")
										<textarea class="textarea" name="sfa_work_asign" disabled id="sfa_work_asign" placeholder="SFA Work to be assigned" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$week->sfa_work_asign}}</textarea>
										@endif
									</div>

									@if(Auth::user()->rank=="supdt")
									<div class="form-group">
										<label for="ss_note" class="control-label ">Supdt Note :</label>
										<textarea class="textarea" name="ss_note"  id="ss_note" placeholder="Supdt Note" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$week->ss_note}}</textarea>
									</div>
									@endif
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