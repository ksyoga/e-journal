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
  		<form method="POST" action="/instrument" class="form-horizontal">
				{{ csrf_field() }}
				<input type="hidden" name="surveyor_id" value="{{ $user->id }}">
				<input type="hidden" name="instrument_id" value="{{$instrumentsid}}">
		        	
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
										<input class="form-control" type="date" name="required_date" id="required_date" placeholder=" Date:">
									</div>

									

		                  		</div> <!-- End fist col -->
		                  		<div class="col-md-1">
		                  		</div>
		                  		<div class="col-md-6">

		                  			<div class="form-group">
										<label for="request_for" class="control-label ">Purpose of Instrument :</label>
										<textarea class="textarea" name="request_for" id="request_for" placeholder="Purpose of Instrument" style="width: 100%; height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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