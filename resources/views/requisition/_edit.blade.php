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
		                  <h3 class="box-title">Edit Requisition Details</h3>
		                </div><!-- /.box-header -->
		                <!-- form start -->
		                <form method="POST" action="/requisition/{{$requisition->id}}" >
		                	{{ csrf_field() }}
		                	<input type="hidden" name="_method" value="PUT">
							<input type="hidden" name="id" value="{{ $requisition->id }}">
		                	<!-- <input type="hidden" name="supdt_id" id="supdt_id"  value="1"> -->
		                	
		                
		                  <div class="box-body">

		                  		<div class="col-md-5">

		                  			<div class="form-group">
										<label for="requisition_no" class="control-label" >Requisition No : </label>
										<input class="form-control"  <?php  Auth::user()->rank=="survy" ? print "disabled" : "" ?> value="{{$requisition->requisition_no}}" name="requisition_no" id="requisition_no" placeholder="Requisition No.">
									</div>

									<div class="form-group">
										<label for="received_date" class="control-label">Received Date : </label>
										<input class="form-control" type="date" <?php  Auth::user()->rank=="survy" ? print "disabled" : "" ?> value="{{$requisition->received_date}}" name="received_date" id="received_date" placeholder="Received Date:">
									</div>

									<div class="form-group">
										<label for="category" class="control-label ">Category : </label>
										<select class="form-control" name="category" <?php  Auth::user()->rank=="survy" ? print "disabled" : "" ?> id="category" placeholder="Category No ">
											@foreach($categorys as $category )
											<option value="{{$category->sub_id}}" <?php  $requisition->category === $category->sub_id ? print "selected" : "" ?>  >{{$category->sub_category}}</option>
											@endforeach
										</select>
										<!-- <input class="form-control" name="category" id="category" placeholder="Category No "> -->
									</div>

									<div class="form-group">
										<label for="work_load" class="control-label ">Work Load : </label>
										<input class="form-control" name="work_load" <?php  Auth::user()->rank=="survy" ? print "disabled" : "" ?> value="{{$requisition->work_load}}" id="work_load" placeholder="Work Load">
									</div>
									@if(Auth::user()->rank=="survy")
									<hr/>
									<div class="form-group">
									<label for="status" class="control-label ">Requisition Status : </label>
										<select class="form-control" name="status"  id="status" placeholder="Category No ">
											<option value="1" <?php  $requisition->status == 1 ? print "selected" : "" ?>  >Awarded</option>
											<option value="2" <?php  $requisition->status == 2 ? print "selected" : "" ?>  >Commance</option>
											<option value="3" <?php  $requisition->status == 3 ? print "selected" : "" ?>  >Completed</option>
										</select>
									</div>

									<div class="form-group">
										<label for="note" class="control-label">Surveyor Note :</label>
										<textarea  id="note" name="note" class="textarea" placeholder="Surveyor Note" style="width: 100%; height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$requisition->note}}</textarea>
									</div>
									@endif
								</div>
								<div class="col-md-1">
								&nbsp
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="lots" class="control-label ">Number of Lote :</label>
										<input class="form-control" type="number" <?php  Auth::user()->rank=="survy" ? print "disabled" : "" ?> value="{{$requisition->lots}}" name="lots" id="lots" placeholder="Number of Lote ">
									</div>

									<div class="form-group">
										<label for="extent" class="control-label">Extent :</label>
										<input class="form-control" name="extent" <?php  Auth::user()->rank=="survy" ? print "disabled" : "" ?> value="{{$requisition->extent}}" id="extent" placeholder="Extent ">
									</div>

									<div class="form-group">
										<label for="surveyor_id" class="control-label">Surveyor :</label>
										<select class="form-control" <?php  Auth::user()->rank=="survy" ? print "disabled" : "" ?> name="surveyor_id" id="surveyor_id" placeholder="Surveyor ">
											@foreach($surveyors as $surveyor )
											<option value="{{$surveyor->id}}" <?php  $requisition->surveyor_id === $surveyor->id ? print "selected" : "" ?>>{{$surveyor->name}}</option>
											@endforeach
										</select>
										<!-- <input class="form-control" name="surveyor_id" id="surveyor_id" placeholder="Surveyor "> -->
									</div>

									<div class="form-group">
										<label for="issued" class="control-label">Issued Date :</label>
										<input class="form-control" type="date" value="{{$requisition->issued}}" <?php  Auth::user()->rank=="survy" ? print "disabled" : "" ?> name="issued" id="issued" placeholder="Issued Date ">
									</div>
									@if(Auth::user()->rank=="survy")
									<hr/>
									<div class="form-group">
										<label for="commanced" class="control-label">Requisition Commance Date :</label>
										<input class="form-control" type="date" value="{{$requisition->commanced}}" name="commanced" id="commanced" placeholder="Issued Date ">
									</div>
									<div class="form-group">
										<label for="fieldwork" class="control-label">No of Days for Field :</label>
										<input class="form-control" type="number" min="0" step="0.5" value="{{$requisition->fieldwork}}" name="fieldwork" id="fieldwork" placeholder="Issued Date ">
									</div>
									<div class="form-group">
										<label for="planwork" class="control-label">No of Days for Plan :</label>
										<input class="form-control" type="number" min="0" step="0.5" value="{{$requisition->planwork}}" name="planwork" id="planwork" placeholder="Issued Date ">
									</div>

									<div class="form-group">
										<label for="complet_date" class="control-label">Requisition Completed Date :</label>
										<input class="form-control" type="date"  value="{{$requisition->complet_date}}" name="complet_date" id="complet_date" placeholder="Complet Date ">
									</div>
									@endif
									
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