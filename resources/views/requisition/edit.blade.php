@inject('utilities','App\Http\Utilities\Utilities')
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
		                	{!! csrf_field() !!}
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
								
									<hr>
									<div class="form-group">
									<label for="status" class="control-label ">Requisition Status : </label>
										<select class="form-control" name="status"  id="status" placeholder="Category No ">
											<option value="0" <?php  $requisition->status == 0 ? print "selected" : "" ?>  >Unmindful</option>
											<option value="1" <?php  $requisition->status == 1 ? print "selected" : "" ?>  >Accepted</option>
											<option value="2" <?php  $requisition->status == 2 ? print "selected" : "" ?>  >Commance</option>
											<option value="3" <?php  $requisition->status == 3 ? print "selected" : "" ?>  >Completed</option>
										</select>
									</div>

									<div class="form-group">
										<label for="note" class="control-label">Surveyor Note :</label>
										<textarea  id="note" name="note" class="textarea" placeholder="Surveyor Note" style="width: 100%; height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$requisition->note}}</textarea>
									</div>

									<hr>
										<label>Tatal Ststion Utilize <span class="pull-right"><a href="" data-toggle="modal" data-target="#iModal{{$requisition->id}}"><i class="fa fa-plus  text-green"></i></a></span></label>
										<table style="width:100%">
											<tr>
												<th>Date</th>
												<th>Total Station</th>
												<th>Days</th>
											</tr>
					                        @foreach($requisition->iutilize()->orderBy('used_date')->get() as $instrument)
					                          <tr>
					                            <td class = "bottom-line">{!!$utilities::sldate($instrument->used_date)!!}</td>
					                            <td class = "bottom-line">{{$instrument->instrument->brand}} - {{$instrument->instrument->model}}</td>
					                            <td class = "bottom-line">{!!$utilities::spendday($instrument->used_days)!!}</td>
					                          </tr>
					                        @endforeach
					                      </table>
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

									<hr>

										<label>Vehicle Utilize <span class="pull-right"><a href="" data-toggle="modal" data-target="#vModal{{$requisition->id}}"><i class="fa fa-plus  text-green"></i></a></span></label>
										<table style="width:100%">
											<tr>
												<th>Date</th>
												<th>Vehile</th>
												<th>Days</th>
											</tr>
											 @foreach($requisition->vutilize()->orderBy('used_date')->get() as $vehicle)
				                            <tr>
				                                <td class = "bottom-line">{!!$utilities::sldate($vehicle->used_date)!!}</td>
				                                <td class = "bottom-line">{{$vehicle->vehicle->brand}} - {{$vehicle->vehicle->vehicle_no}}</td>
				                                <td class = "bottom-line">{!!$utilities::spendday($vehicle->used_days)!!}</td> 
				                            			                                
				                            </tr>
				                            @endforeach
				                          
				                        </table>
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

				<!-- Instrument utilize Stare -->
				
		          <!-- Model Start -->
		          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button> -->
		          <div class="modal fade" id="iModal{{$requisition->id}}" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel">
		            <div class="modal-dialog" role="document">
		              <div class="modal-content">
		                <div class="modal-header">
		                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                  <h4 class="modal-title" id="exampleModalLabel">Add Vehicle Utilize Detail</h4>
		                </div>
		                <div class="modal-body">
		                  <form method="POST" action="/iutilize" >
		                  {!! csrf_field() !!}
		                  <input type="hidden" name="requisition_id" value="{{$requisition->id}}">
		                  

		                    <div class="form-group">
		                      <label for="instrument_id" class="control-label">Total Station:</label>
		                        <select required class="form-control" name="instrument_id" id="instrument_id" >
		                          <option value="">-</option>
		                          @foreach($instuments as $instument)
		                            <option value="{{$instument->id}}">{{$instument->brand}} - {{$instument->model}}</option>
		                          @endforeach
		                        </select>
		                      
		                    </div>
		                    <div class="form-group">
		                      <label for="used_date" class="control-label">Date:</label>
		                      <input type="date" required class="form-control" name="used_date" id="used_date">
		                    </div>
		                    <div class="form-group">
		                      <label for="used_days" class="control-label">Utilize Day:</label>
		                      <input type="number" min="0" max="1" step="0.5" required class="form-control" id="used_days" name="used_days">
		                    </div>

		                  
		                </div>
		                <div class="modal-footer">
		                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                  <button type="submit" class="btn btn-primary">Add Utilize</button>
		                </div>
		                </form>
		              </div>
		            </div>
		          </div>
		          <!-- /.example-modal -->
		          
				<!-- Instrument utilize end -->
				<!-- Vehicle Utilize start -->
				<div class="modal fade" id="vModal{{$requisition->id}}" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel">
		            <div class="modal-dialog" role="document">
		              <div class="modal-content">
		                <div class="modal-header">
		                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                  <h4 class="modal-title" id="exampleModalLabel">Add Vehicle Utilize Detail</h4>
		                </div>
		                <div class="modal-body">
		                  <form method="POST" action="/vutilize" >
		                  {!! csrf_field() !!}
		                  <input type="hidden" name="requisition_id" value="{{$requisition->id}}">
		                  

		                    <div class="form-group">
		                      <label for="vehicle_id" class="control-label">Vehicle No:</label>
		                        <select required class="form-control" name="vehicle_id" id="vehicle_id" >
		                          <option value="">-</option>
		                          @foreach($vehicles as $vehicle)
		                            <option value="{{$vehicle->id}}">{{$vehicle->brand}} - {{$vehicle->vehicle_no}}</option>
		                          @endforeach
		                        </select>
		                      
		                    </div>
		                    <div class="form-group">
		                      <label for="used_date" class="control-label">Date:</label>
		                      <input type="date" required class="form-control" name="used_date" id="used_date">
		                    </div>
		                    <div class="form-group">
		                      <label for="used_days" class="control-label">Utilize Day:</label>
		                      <input type="number" required min="0" max="1" step="0.5" class="form-control" id="used_days" name="used_days">
		                    </div>

		                  
		                </div>
		                <div class="modal-footer">
		                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                  <button type="submit" class="btn btn-primary">Add Utilize</button>
		                </div>
		                </form>
		              </div>
		            </div>
		          </div>
		        
                  <!-- vehicle utilize end -->

				
   

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection