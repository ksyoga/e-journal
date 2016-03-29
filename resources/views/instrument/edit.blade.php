@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Instrument Reservation
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
  		<form method="POST" action="/instrument/{{$requist->id}}" class="form-horizontal">
				{!! csrf_field() !!}
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="id" value="{{ $requist->id }}">
				
		        	
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
		              <!-- Horizontal Form -->
		              <div class="box box-info">
		                <div class="box-header with-border">
		                  <h3 class="box-title">Reservation for the following week</h3>
		                </div><!-- /.box-header -->
		                <!-- form start -->
		                
		                  	<div class="box-body">

		                  		<div class="col-md-5">

		                  			

		                  			<div class="form-group">
										<label for="required_date" class="control-label"> Date : </label>
										<input class="form-control" value="{{$requist->required_date}}" type="date" name="required_date" id="required_date" placeholder=" Date:" disabled="disabled">
									</div>

									<div class="form-group">
										<label for="request_for" class="control-label ">Purpose of Instrument :</label>
										<textarea class="textarea" name="request_for" id="request_for" placeholder="Purpose of Instrument" style="width: 100%; height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled="disabled">{{$requist->request_for}}</textarea>
									</div>

									

		                  		</div> <!-- End fist col -->
		                  		<div class="col-md-1">
		                  		</div>
		                  		<div class="col-md-6">

		                  			<div class="form-group">
										<label for="approved_by" class="control-label ">Total station required Statuses: </label>
										<select class="form-control" name="approved_by" id="approved_by" placeholder="Surveyor >
											<option value="0" <?php  $requist->approved_by == 0 ? print "selected" : "" ?>>Pending</option>
											<option value="1" <?php  $requist->approved_by == 1 ? print "selected" : "" ?>>Approved</option>
											<option value="2" <?php  $requist->approved_by == 2 ? print "selected" : "" ?>>Denied</option>
										</select>
									</div>

		                  			<div class="form-group">
										<label for="supdt_note" class="control-label ">Supdt Note :</label>
										<textarea class="textarea" name="supdt_note" id="supdt_note" placeholder="Supdt Note" style="width: 100%; height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$requist->supdt_note}}</textarea>
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