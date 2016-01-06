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

  		 <form method="POST" action="/amendment/{{ $amendment->id }}" class="form-horizontal">
				{!! csrf_field() !!}
		        <input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="id" value="{{ $amendment->id }}">
            	
				
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
		              <!-- Horizontal Form -->
		              <div class="box box-info">
		                <div class="box-header with-border">
		                  <h3 class="box-title">Edit Amendment Details</h3>
		                </div><!-- /.box-header -->
		                <!-- form start -->
		                
		                  <div class="box-body">

		                  		<div class="col-md-5">

		                  			<div class="form-group">
										<label for="surveyor_id" class="control-label">Surveyor :</label>
										<select class="form-control"<?php  Auth::user()->rank=="survy" ? print "disabled" : "" ?> name="surveyor_id" id="surveyor_id" placeholder="Surveyor ">
											@foreach($surveyors as $surveyor )
											<option value="{{$surveyor->id}}"  <?php  $amendment->surveyor_id === $surveyor->id ? print "selected" : "" ?> >{{$surveyor->name}}</option>
											@endforeach
										</select>
										<!-- <input class="form-control" name="surveyor_id" id="surveyor_id" placeholder="Surveyor "> -->
									</div>

									<div class="form-group">
										<label for="plan_no" class="control-label ">Requisition No / Plan N0 : </label>
										<input class="form-control"  value="{{$amendment->plan_no}}" <?php  Auth::user()->rank=="survy" ? print "disabled" : "" ?> name="plan_no" id="plan_no" placeholder="Requisition No / Plan N0 : ">
									</div>

									<div class="form-group">
										<label for="received" class="control-label">Received Date : </label>
										<input class="form-control" type="date" value="{{$amendment->received}}" <?php  Auth::user()->rank=="survy" ? print "disabled" : "" ?> name="received" id="received" placeholder="Received Date:">
									</div>

									
								</div>
								<div class="col-md-1">
								&nbsp
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="supdt_note" class="control-label ">Supdt Note :</label>
										<textarea class="textarea" name="supdt_note" <?php  Auth::user()->rank=="survy" ? print "disabled" : "" ?> id="supdt_note" placeholder="Place some text here" style="width: 100%; height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$amendment->supdt_note}}</textarea>
									</div>
									@if(Auth::user()->rank=="survy")
									<hr/>

									<div class="form-group">
										<label for="completion" class="control-label">Completed Date : </label>
										<input class="form-control" type="date" value="{{$amendment->completion}}"  name="completion" id="completion" placeholder="Received Date:">
									</div>

									<div class="form-group">
										<label for="surveyor_note" class="control-label">Surveyor Note :</label>
										<textarea class="textarea" name="surveyor_note"  id="surveyor_note" placeholder="Place some text here" style="width: 100%; height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$amendment->surveyor_note}}</textarea>
									</div>

									@endif

									
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