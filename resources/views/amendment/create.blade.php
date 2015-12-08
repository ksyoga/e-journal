@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Plan received from Amendments
        <small> Including LIS, DM & PS Amendments</small>

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

  <!-- Your Page Content Here -->

  		 <form method="POST" action="/amendment" class="form-horizontal">
				{{ csrf_field() }}
		        <input type="hidden" name="supdt_id" id="supdt_id"  value="{{$user->id}}">
				
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
		              <!-- Horizontal Form -->
		              <div class="box box-info">
		                <div class="box-header with-border">
		                  <h3 class="box-title">Add New Amendment Details</h3>
		                </div><!-- /.box-header -->
		                <!-- form start -->
		                
		                  <div class="box-body">

		                  		<div class="col-md-5">

		                  			<div class="form-group">
										<label for="surveyor_id" class="control-label">Surveyor :</label>
										<select class="form-control" name="surveyor_id" id="surveyor_id" placeholder="Surveyor ">
											<option></option>
											@foreach($surveyors as $surveyor )
											<option value="{{$surveyor->id}}">{{$surveyor->name}}</option>
											@endforeach
										</select>
										<!-- <input class="form-control" name="surveyor_id" id="surveyor_id" placeholder="Surveyor "> -->
									</div>

									<div class="form-group">
										<label for="plan_no" class="control-label ">Requisition No / Plan N0 : </label>
										<input class="form-control"  name="plan_no" id="plan_no" placeholder="Requisition No / Plan N0 : ">
									</div>

									<div class="form-group">
										<label for="received" class="control-label">Received Date : </label>
										<input class="form-control" type="date" name="received" id="received" placeholder="Received Date:">
									</div>

									
								</div>
								<div class="col-md-1">
								&nbsp
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="supdt_note" class="control-label ">Supdt Note :</label>
										<textarea class="textarea" name="supdt_note" id="supdt_note" placeholder="Supdt Note" style="width: 100%; height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
									</div>

									<!-- <div class="form-group">
										<label for="extent" class="control-label">Extent :</label>
										<input class="form-control" name="extent" id="extent" placeholder="Extent ">
									</div>

									<div class="form-group">
										<label for="surveyor_id" class="control-label">Surveyor :</label>
										<input class="form-control" name="surveyor_id" id="surveyor_id" placeholder="Surveyor ">
									</div>

									<div class="form-group">
										<label for="issued" class="control-label">Issued Date :</label>
										<input class="form-control" name="issued" id="issued" placeholder="Issued Date ">
									</div> -->

									
								</div>
									
		    
		                </div><!-- /.box-body -->
		                 <div class="box-footer">
		                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
		                </div>
		              </div> <!-- box box-info -->
										
					</div>	<!-- col-md-6 -->
					<!-- start Surveyor Daily Progress -->

					


				</div> <!-- row -->

				<!-- start secound ror main row -->
				
		        
                  

				</form>
   

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection