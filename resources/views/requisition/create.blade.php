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

  		 
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
		              <!-- Horizontal Form -->
		              <div class="box box-info">
		                <div class="box-header with-border">
		                  <h3 class="box-title">Add New Requisition Details</h3>
		                </div><!-- /.box-header -->
		                <!-- form start -->
		                <form method="POST" action="/requisition" >
		                	{!! csrf_field() !!}
		                	<input type="hidden" name="supdt_id" id="supdt_id"  value="{{$user->id}}">
		                	
		                
		                  <div class="box-body">

		                  		<div class="col-md-5">

		                  			<div class="form-group">
										<label for="requisition_no" class="control-label" >Requisition No : </label>
										<input class="form-control" required name="requisition_no" id="requisition_no" placeholder="Requisition No.">
									</div>

									<div class="form-group">
										<label for="received_date" class="control-label">Received Date : </label>
										<input class="form-control" required type="date" name="received_date" id="received_date" placeholder="Received Date:">
									</div>

									<div class="form-group">
										<label for="category" class="control-label ">Category : </label>
										<select class="form-control" required name="category" id="category" placeholder="Category No ">
											<option></option>
											@foreach($categorys as $category )
											<option value="{{$category->sub_id}}">{{$category->sub_category}}</option>
											@endforeach
										</select>
										<!-- <input class="form-control" name="category" id="category" placeholder="Category No "> -->
									</div>

									<div class="form-group">
										<label for="work_load" class="control-label ">Work Load : </label>
										<input class="form-control" required type="number" min="0" step="0.01"name="work_load" id="work_load" placeholder="Work Load">
									</div>

								</div>
								<div class="col-md-1">
								&nbsp
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="lots" class="control-label ">Number of Lote :</label>
										<input class="form-control" type="number" min="0"  step="1" name="lots" id="lots" placeholder="Number of Lote ">
									</div>

									<div class="form-group">
										<label for="extent" class="control-label">Extent :</label>
										<input class="form-control"type="number" min="0"  step="0.00001" name="extent" id="extent" placeholder="Extent ">
									</div>

									<div class="form-group">
										<label for="surveyor_id" class="control-label">Surveyor :</label>
										<select class="form-control" required name="surveyor_id" id="surveyor_id" placeholder="Surveyor ">
											<option></option>
											@foreach($surveyors as $surveyor )
											<option value="{{$surveyor->id}}">{{$surveyor->name}}</option>
											@endforeach
										</select>
										<!-- <input class="form-control" name="surveyor_id" id="surveyor_id" placeholder="Surveyor "> -->
									</div>

									<div class="form-group">
										<label for="issued" class="control-label">Issued Date :</label>
										<input class="form-control" type="date" name="issued" id="issued" placeholder="Issued Date ">
									</div>

									
								</div>
		              
		                </div><!-- /.box-body -->
		                 <div class="box-footer">
		                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
		                </div>
		              </div> <!-- box box-info -->
		              </form>
		              
										
					</div>	<!-- col-md-6 -->
					<!-- start Surveyor Daily Progress -->

					


				</div> <!-- row -->

				<!-- start secound ror main row -->
				
		        
                  

				
   

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection