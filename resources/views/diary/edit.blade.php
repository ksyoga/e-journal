@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Journal of November 2015
        <!-- <small> Diyatalawa Division</small> -->

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

  <!-- Your Page Content Here -->

  		<form method="POST" action="/diary/{{$diary->id}}" >
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
		

	  	<div class="row">
						<!-- left column -->
			<div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Purpose of the the day spend by Surveyor &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Edit Daily Progress of Surveyur</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
              
                  <div class="box-body">

                  		<div class="col-md-5">

                  			<div class="form-group">
								<label for="day" class="control-label">Date:</label>
								<input type="date" class="form-control input-sm" value="{{$diary->day}}" required name="day" id="day" placeholder="Date .">
							</div>

							<div class="form-group">
								<label for="field_1" class="control-label">Requisition No:</label>
								<!-- <input class="form-control input-sm" name="field_1" id="field_1" placeholder="Requisition No."> -->
								<select class="form-control input-sm" name="field_1" id="field_1" >
									<option value="" <?php $diary->field_1 === '' ? print "selected" : "" ?>>-</option>
								 @foreach($requisitions as $requisition)
			                      	<option value="{{$requisition->id}}" <?php  $requisition->id === $diary->field_1 ? print "selected" : "" ?>>{{$requisition->requisition_no}}</option>
			                      @endforeach
			                    </select>
							</div>

							<div class="form-group">
								<label for="field_2" class="control-label">Category No:</label>
								<!-- <input class="form-control input-sm" name="field_2" id="field_2" placeholder="Category No."> -->
								<select class="form-control input-sm" name="field_2" id="field_2" >
									<option value=" " <?php $diary->field_2 == '' ? print "selected" : "" ?>>-</option>
								 @foreach($categorys as $category)
			                      	<option value="{{$category->sub_id}}" <?php  $category->sub_id === $diary->field_2 ? print "selected" : "" ?>>{{$category->sub_category}}</option>
			                      @endforeach
			                    </select>
							</div>

							<div class="form-group">
								<label for="field_3" class="control-label">Investigating Reqn .in Office:</label>
								<input  class="form-control input-sm" value="{{$diary->field_3}}" type="number" min="0" max="1" step="0.5" name="field_3" id="field_3" placeholder="Investigating Reqn .in Office">
							</div>

							<div class="form-group">
								<label for="field_4" class="control-label">Investigating & Locating Reqn .in Field.</label>
								<input class="form-control input-sm" value="{{$diary->field_4}}"  type="number" min="0" max="1" step="0.5" name="field_4" id="field_4" placeholder="Investigating & Locating Reqn .in Field.">
							</div>

							<div class="form-group">
								<label for="field_5" class="control-label">Re-opening Boundary/ Setting out.</label>
								<input class="form-control input-sm" value="{{$diary->field_5}}"  type="number" min="0" max="1" step="0.5" name="field_5" id="field_5" placeholder="Re-opening Boundary/ Setting out.">
							</div>

							<div class="form-group">
								<label for="field_6" class="control-label">Surveying or Leveling</label>
								<input class="form-control input-sm" value="{{$diary->field_6}}"  type="number" min="0" max="1" step="0.5" name="field_6" id="field_6" placeholder="Surveying or Leveling">
							</div>

							<div class="form-group">
								<label for="field_7" class="control-label">Plan Work.</label>
								<input class="form-control input-sm" value="{{$diary->field_7}}"  type="number" min="0" max="1" step="0.5" name="field_7" id="field_7" placeholder="Plan Work.">
							</div>

							<div class="form-group">
								<label for="field_8" class="control-label">Inspection by Senior Officer.</label>
								<input class="form-control input-sm" value="{{$diary->field_8}}"  type="number" min="0" max="1" step="0.5" name="field_8" id="field_8" placeholder="Inspection by Senior Officer.">
							</div>

							<div class="form-group">
								<label for="field_9" class="control-label">Other Duties.</label>
								<input class="form-control input-sm" value="{{$diary->field_9}}"  type="number" min="0" max="1" step="0.5" name="field_9" id="field_9" placeholder="Other Duties.">
							</div>

							<div class="form-group">
								<label for="field_10" class="control-label">Weekend & Public Holidays.</label>
								<input class="form-control input-sm" value="{{$diary->field_10}}"  type="number" min="0" max="1" step="0.5" name="field_10" id="field_10" placeholder="Weekend & Public Holidays.">
							</div>

							<div class="form-group">
								<label for="field_11" class="control-label">Leave.</label>
								<input class="form-control input-sm" value="{{$diary->field_11}}" type="number" min="0" max="1" step="0.5" name="field_11" id="field_11" placeholder="Leave.">
							</div>

                  		</div>
                  		<div class="col-md-1">
                  		</div>
                  		<div class="col-md-6">
                  			<div class="form-group">
								<label for="field_12" class="control-label">No. of line reset or setout.</label>
								<input class="form-control input-sm" value="{{$diary->field_12}}"  type="number" min="0"  step="1" name="field_12" id="field_12" placeholder="No. of line reset or setout.">
							</div>

							<div class="form-group">
								<label for="field_13" class="control-label">No. of points Setout by using Total station.</label>
								<input class="form-control input-sm" value="{{$diary->field_13}}"  type="number" min="0"  step="1" name="field_13" id="field_13" placeholder="No. of points Setout by using Total station">
							</div>

							<div class="form-group">
								<label for="field_14" class="control-label">No. of line Surveyed.</label>
									<input class="form-control input-sm" value="{{$diary->field_14}}"  type="number" min="0"  step="1"  name="field_14" id="field_14" placeholder="No. of line Surveyed.">
								</div>

							<div class="form-group">
								<label for="field_15" class="control-label">No. of Shots taken by using Total station.</label>
									<input class="form-control input-sm" value="{{$diary->field_15}}"  type="number" min="0"  step="1" id="field_15" name="field_15" placeholder="No. of Shots taken by using Total station.">
								</div>

							<div class="form-group">
								<label for="field_16" class="control-label">No. of km reset or setout/ km. Surveyed.</label>
									<input class="form-control input-sm" value="{{$diary->field_16}}"  type="number" min="0"  step="0.01" id="field_16" name="field_16" placeholder="No. of km reset or setout/ km. Surveyed.">
								</div>

							<div class="form-group">
								<label for="field_17" class="control-label">No. of km. Levelled/ Sketches prepared for GPS sys.</label>
									<input class="form-control input-sm" value="{{$diary->field_17}}"  id="field_17" type="number" min="0"  step="0.01" name="field_17" placeholder="No. of km. Levelled/ Sketches prepared for GPS sys.">
								</div>

							<div class="form-group">
								<label for="field_18" class="control-label">No. of new LMM Surveyed.</label>
									<input class="form-control input-sm" value="{{$diary->field_18}}"  id="field_18" type="number" min="0"  step="1" name="field_18" placeholder="No. of new LMM Surveyed.">
								</div>

							<div class="form-group">
								<label for="field_19" class="control-label">No. of lots staked out.</label>
									<input class="form-control input-sm" value="{{$diary->field_19}}"   type="number" min="0"  step="1" id="field_19" name="field_19" placeholder="No. of lots staked out.">
								</div>

							<div class="form-group">
								<label for="field_20" class="control-label">No. of Allotment handed over/ CAD plans prepared. </label>
									<input class="form-control input-sm" value="{{$diary->field_20}}"   type="number" min="0"  step="1" id="field_20" name="field_20" placeholder="No. of Allotment handed over/ CAD plans prepared.">
								</div>

							<div class="form-group">
								<label for="field_21" class="control-label">No. of points/ lines Traverse adjustment.</label>
									<input class="form-control input-sm" value="{{$diary->field_21}}"  type="number" min="0"  step="1" id="field_21" name="field_21" placeholder="No. of points/ lines Traverse adjustment.">
								</div>

							<div class="form-group">
								<label for="field_22" class="control-label">No. of lots Join, describe boundaries, Editing.</label>
									<input class="form-control input-sm" value="{{$diary->field_22}}"   type="number" min="0"  step="1" id="field_22" name="field_22" placeholder="No. of lots Join, describe boundaries, Editing.">
								</div>

							<div class="form-group">
								<label for="field_23" class="control-label">No. of lots Re-Plotting & Screen digitzing.</label>
									<input class="form-control input-sm" value="{{$diary->field_23}}"   type="number" min="0"  step="1" id="field_23" name="field_23" placeholder="No. of lots Re-Plotting & Screen digitzing.">
								</div>

							<div class="form-group">
								<label for="field_24" class="control-label">No. of lots Lotting parcels, Lot computaions.</label>
									<input class="form-control input-sm" value="{{$diary->field_24}}"   type="number" min="0"  step="1" id="field_24" name="field_24" placeholder="No. of lots Lotting parcels, Lot computaions.">
								</div>

							<div class="form-group">
								<label for="field_25" class="control-label">No. of lots - Preparation of Tenement List.</label>
									<input class="form-control input-sm" value="{{$diary->field_25}}"   type="number" min="0"  step="1" id="field_25" name="field_25" placeholder="No. of lots - Preparation of Tenement List.">
								</div>

							<div class="form-group">
								<label for="field_26" class="control-label">No. of Tracing, amendment tracing prepared.</label>
									<input class="form-control input-sm"  value="{{$diary->field_26}}"   type="number" min="0"  step="1" id="field_26" name="field_26" placeholder="No. of Tracing, amendment tracing prepared.">
								</div>

							<div class="form-group">
								<label for="field_27" class="control-label">Completing FB entries, preparing Reqn. file.Put X.</label>
								<!-- <input class="form-control input-sm" id="field_27" name="field_27" placeholder="Completing FB entries, preparing Reqn. file.Put X."> -->
								<select class="form-control input-sm" name="field_27" id="field_27" >
									<option value="-"<?php $diary->field_27 === '-' ? print "selected" : "" ?>>No</option>
									<option value="X" <?php $diary->field_27 === 'X' ? print "selected" : "" ?>>Yes</option>
								</select>
							</div>

							<div class="form-group">
								<label for="field_28" class="control-label">Attending plan amendments given by SS.Put X.</label>
								<!-- <input class="form-control input-sm" id="field_28" name="field_28" placeholder="Attending plan amendments given by SS.Put X."> -->
								<select class="form-control input-sm" name="field_28" id="field_28" >
									<option value="-"<?php $diary->field_28 === '-' ? print "selected" : "" ?>>No</option>
									<option value="X"<?php $diary->field_28 === 'X' ? print "selected" : "" ?>>Yes</option>
								</select>
							</div>

                  		</div>
                  </div>

            </div> <!-- end Surveyor Model -->




        </div>

        <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Duties of Survey Field Assistans on the day &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Edit Job doneby Survey Field Assistans</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
              
                  <div class="box-body">

                  		<div class="col-md-5">

                  			<div class="form-group">
									<label for="field_29" class="control-label">No. of SFA assigned fron the day</label>
										<input class="form-control input-sm" value="{{$diary->field_29}}"  type="number" min="0"  step="1" id="field_29" name="field_29" placeholder="No. of SFA assigned fron the day">
									</div>

								<div class="form-group">
									<label for="field_30" class="control-label">Requsition No.</label>
									<!-- <input class="form-control input-sm" id="field_30" name="field_30" placeholder="Requsition No."> -->
									<select class="form-control input-sm" name="field_30" id="field_30" >
										<option value="" <?php $diary->field_30 === 'null' ? print "selected" : "" ?>>-</option>
									 @foreach($requisitions as $requisition)
				                      	<option value="{{$requisition->id}}" <?php  $requisition->id === $diary->field_30 ? print "selected" : "" ?>>{{$requisition->requisition_no}}</option>
				                      @endforeach
				                    </select>
								</div>

								<div class="form-group">
									<label for="field_31" class="control-label">Category No.</label>
									<!-- <input class="form-control input-sm" id="field_31" name="field_31" placeholder="Category No."> -->
									<select class="form-control input-sm" name="field_31" id="field_31" >
									<option value=" " <?php $diary->field_31 == ' ' ? print "selected" : "" ?>>-</option>
								 @foreach($categorys as $category)
			                      	<option value="{{$category->sub_id}}" <?php  $category->sub_id === $diary->field_31 ? print "selected" : "" ?>>{{$category->sub_category}}</option>
			                      @endforeach
			                    </select>
								</div>

								<div class="form-group">
									<label for="field_32" class="control-label">Clearing.</label>
										<input class="form-control input-sm" value="{{$diary->field_32}}"  type="number" min="0" max="1" step="0.5" id="field_32" name="field_32" placeholder="Clearing.">
									</div>

								<div class="form-group">
									<label for="field_33" class="control-label">Picketing/ Landmarking/ GPS monumentation.</label>
										<input class="form-control input-sm" value="{{$diary->field_33}}"  type="number" min="0" max="1" step="0.5" id="field_33" name="field_33" placeholder="Picketing/ Landmarking/ GPS monumentation.">
									</div>

								<div class="form-group">
									<label for="field_34" class="control-label">Assisiting for Survying or Leveling.</label>
										<input class="form-control input-sm" value="{{$diary->field_34}}"  type="number" min="0" max="1" step="0.5" id="field_34" name="field_34" placeholder="Assisiting for Survying or Leveling.">
									</div>

								<div class="form-group">
									<label for="field_35" class="control-label">Construction of BMM.</label>
										<input class="form-control input-sm" value="{{$diary->field_35}}"  type="number" min="0" max="1" step="0.5" id="field_35" name="field_35" placeholder="Construction of BMM.">
									</div>

								<div class="form-group">
									<label for="field_36" class="control-label">Construction of LMM, CPP & etc..</label>
										<input class="form-control input-sm" value="{{$diary->field_36}}"  type="number" min="0" max="1" step="0.5" id="field_36" name="field_36" placeholder="Construction of LMM, CPP & etc..">
									</div>

								<div class="form-group">
									<label for="field_37" class="control-label">Assisiting for Collecting Information in field.</label>
										<input class="form-control input-sm" value="{{$diary->field_37}}"  type="number" min="0" max="1" step="0.5" id="field_37" name="field_37" placeholder="Assisiting for Collecting Information in field.">
									</div>

								<div class="form-group">
									<label for="field_38" class="control-label">Assisiting for Handing over allotments to GN etc.</label>
										<input class="form-control input-sm" value="{{$diary->field_38}}"  type="number" min="0" max="1" step="0.5" id="field_38" name="field_38" placeholder="Assisiting for Handing over allotments to GN etc.">
									</div>

								<div class="form-group">
									<label for="field_39" class="control-label">Assigned SFA's reported to Div.SO.</label>
										<input class="form-control input-sm" value="{{$diary->field_39}}"  type="number" min="0" max="1" step="0.5" id="field_39" name="field_39" placeholder="Assigned SFA's reported to Div.SO.">
									</div>

								<div class="form-group">
									<label for="field_40" class="control-label">Other duties.</label>
										<input class="form-control input-sm" value="{{$diary->field_40}}"  type="number" min="0" max="1" step="0.5" id="field_40" name="field_40" placeholder="Other duties..">
									</div>

                  		</div>
                  		<div class="col-md-1">
                  		</div>
                  		<div class="col-md-6">
                  			<div class="form-group">
									<label for="field_41"  class="control-label">No. of km cleared.</label>
										<input class="form-control input-sm" value="{{$diary->field_41}}"  type="number" min="0" step="0.01" id="field_41" name="field_41" placeholder="No. of km cleared.">
									</div>

								<div class="form-group">
									<label for="field_42" class="control-label">No. of lines picketed.</label>
										<input class="form-control input-sm" value="{{$diary->field_42}}"  type="number" min="0" step="1" id="field_42" name="field_42" placeholder="No. of lines picketed.">
									</div>

								<div class="form-group">
									<label for="field_43" class="control-label">No. of LMM buried/GPS monumentation.</label>
										<input class="form-control input-sm" value="{{$diary->field_43}}" type="number" min="0" step="1" id="field_43" name="field_43" placeholder="No. of LMM buried/GPS monumentation.">
									</div>

								<div class="form-group">
									<label for="field_44" class="control-label">No. of LMM constructed/CPP constructed</label>
										<input class="form-control input-sm" value="{{$diary->field_44}}" type="number" min="0" step="1" id="field_44" name="field_44" placeholder="No. of LMM constructed/CPP constructed">
									</div>

								<div class="form-group">
									<label for="field_45" class="control-label">No. of BMM constructed.</label>
										<input class="form-control input-sm" value="{{$diary->field_45}}" type="number" min="0" step="1" id="field_45" name="field_45" placeholder="No. of BMM constructed.">
									</div>
									<hr/>
									<div class="form-group">
										<label for="field_46" class="control-label">Weather.</label>
										<!-- <input class="form-control input-sm" id="field_46" name="field_46" placeholder="Weather; Fine/ Wet/ Windy"> -->
										<select class="form-control input-sm" value="{{$diary->field_46}}" name="field_46" id="field_46" >
											<option value="F"<?php $diary->field_46 === 'F' ? print "selected" : "" ?>>Fine</option>
											<option value="W"<?php $diary->field_46 === 'W' ? print "selected" : "" ?>>Wet/ Windy</option>
										</select>
									</div>

								<div class="form-group">
									<label for="field_47" class="control-label">No. of km. travelled by Foot.</label>
										<input class="form-control input-sm" value="{{$diary->field_47}}" type="number" min="0" step="0.01" id="field_47" name="field_47" placeholder="No. of km. travelled by Foot.">
									</div>

								<div class="form-group">
									<label for="field_48" class="control-label">No. of km. travelled by Vehicle.</label>
										<input class="form-control input-sm" value="{{$diary->field_48}}" type="number" min="0" step="0.01" id="field_48" name="field_48" placeholder="No. of km. travelled by Vehicle.">
									</div>
									<hr/>
									<div class="form-group">
										<label for="field_49" class="control-label">Surveyor note.</label>
										<textarea id="field_49" name="field_49" class="textarea" placeholder="Surveyor note." style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$diary->field_49}}</textarea>
									</div>

								<div class="form-group">
									<label for="field_50" class="control-label">Assigned SFA for the Day</label>
									<select class="form-control input-sm select2" multiple="multiple" id="field_50" name="field_50[]" data-placeholder="Select Survey Field Assistans" style="width: 100%;">
				                      @foreach($sfas as $sfa)
				                      	<option value="{{$sfa->code}}" <?php in_array($sfa->code, $selected_sfas) ? print "selected" : "" ?>>{{$sfa->name}}</option>
				                      @endforeach
				                    </select>
								</div>
								

                  		</div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>

            </div> 




        </div>

        </form>


    		 		
  		
   

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection