@inject('utilities','App\Http\Utilities\Utilities')
@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Journal of {{$utilities::journalMonth($user->month)}} {{$user->year}}

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
    
  		<div class="row">
  			
  			 <div class="col-md-12">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Propose of the day spendby Surveyor &amp; Daily Progress of Surveyor</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Duties of Surveyor Field Assistans on the Day, Job done by SFA, Other Information &amp; Remark</a></li>
                  
                  <!-- <li class="pull-right"><a href="diary/create" class="text-muted"><button class="btn btn-xs btn-success" data-toggle="tooltip" title="Add Diary "><i class="glyphicon glyphicon-plus"></i></button></a></li> -->
                  <!-- <li class="pull-right"><a href="diary/create"><span class="label label-success pull-right" data-toggle="tooltip" title="Add Diary"><i class="glyphicon glyphicon-plus"></i></span></a></li>
 -->                  {!!$utilities::diarylimt($user->year,$user->month,$diarys->count())!!}
                  <!-- <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li> -->
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <table id="mytable" class="table table-bordered table-hover diary-seprater">
                      <tbody>
                        <tr>
                          <th scope="col">Date</th>
                          <th colspan="11" scope="col">Purpose of the day spent by Surveyor</th>
                          <th colspan="17" scope="col">Daily Progress of Surveyor</th>
                        </tr>
                        <tr align="center">
                          <th scope="row">&nbsp;</th>
                          <th><span data-toggle="tooltip" title="Requisition No.">01</span></th>
                          <th><span data-toggle="tooltip" title="Category No.">02</span></th>
                          <th><span data-toggle="tooltip" title="Investigating Reqn .in Office.">03</span></th>
                          <th><span data-toggle="tooltip" title="Investigating & Locating Reqn .in Field.">04</span></th>
                          <th><span data-toggle="tooltip" title="Re-opening Boundary/ Setting out.">05</span></th>
                          <th><span data-toggle="tooltip" title="Surveying or Leveling.">06</span></th>
                          <th><span data-toggle="tooltip" title="Plan Work.">07</span></th>
                          <th><span data-toggle="tooltip" title="Inspection by Senior Officer.">08</span></th>
                          <th><span data-toggle="tooltip" title="Other Duties.">09</span></th>
                          <th><span data-toggle="tooltip" title="Weekend & Public Holidays.">10</span></th>
                          <th><span data-toggle="tooltip" title="Leave.">11</span></th>
                          <th><span data-toggle="tooltip" title="No. of line reset or setout.">12</span></th>
                          <th><span data-toggle="tooltip" title="No. of points Setout by using Total station.">13</span></th>
                          <th><span data-toggle="tooltip" title="No. of line Surveyed.">14</span></th>
                          <th><span data-toggle="tooltip" title="No. of Shots taken by using Total station.">15</span></th>
                          <th><span data-toggle="tooltip" title="No. of km reset or setout/ km. Surveyed.">16</span></th>
                          <th><span data-toggle="tooltip" title="No. of km. Levelled/ Sketches prepared for GPS sys.">17</span></th>
                          <th><span data-toggle="tooltip" title="No. of new LMM Surveyed.">18</span></th>
                          <th><span data-toggle="tooltip" title="No. of lots staked out.">19</span></th>
                          <th><span data-toggle="tooltip" title="No. of Allotment handed over/ CAD plans prepared.">20</span></th>
                          <th><span data-toggle="tooltip" title="No. of points/ lines Traverse adjustment.">21</span></th>
                          <th><span data-toggle="tooltip" title="No. of lots Join, describe boundaries, Editing.">22</span></th>
                          <th><span data-toggle="tooltip" title="No. of lots Re-Plotting & Screen digitzing.">23</span></th>
                          <th><span data-toggle="tooltip" title="No. of lots Lotting parcels, Lot computaions.">24</span></th>
                          <th><span data-toggle="tooltip" title="No. of lots - Preparation of Tenement List.">25</span></th>
                          <th><span data-toggle="tooltip" title="No. of Tracing, amendment tracing prepared.">26</span></th>
                          <th><span data-toggle="tooltip" title="Completing FB entries, preparing Reqn. file.Put X.">27</span></th>
                          <th><span data-toggle="tooltip" title="Attending plan amendments given by SS.Put X.">28</span></th>
                        </tr>
                        @foreach($diarys as $diary)
                        <tr @if($diary->field_10 == 1) class="holiday" @elseif($diary->field_11 == 1 ||$diary->field_11==0.5 ) class="leave" @endif>
                          <!-- <th scope="row">{{$diary->day}}</th> -->
                          <th scope="row">
                              {!!$utilities::sldate($diary->day)!!}
                              @if(Auth::user()->rank=="survy")
                                <a href="diary/{{$diary->id}}/edit" class="pull-right"><i class="fa fa-edit"></i></a>
                              @endif
                          </th>
                          @if($diary->field_1 != 0 || $diary->field_1 != NULL)
                          <td align="center">{!!$utilities::spendday($diary->requisition->requisition_no)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->requisition->category)!!}</td>
                          @else
                          <td align="center">{!!$utilities::spendday($diary->field_1)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_2)!!}</td>
                          @endif
                          <td align="center">{!!$utilities::spendday($diary->field_3)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_4)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_5)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_6)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_7)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_8)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_9)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_10)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_11)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_12)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_13)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_14)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_15)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_16)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_17)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_18)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_19)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_20)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_21)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_22)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_23)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_24)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_25)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_26)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_27)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_28)!!}</td>
                        </tr>
                        @endforeach
                        
                        <!-- For Total -->
                        <tr>
                          <th scope="row">Total</th>
                          <th>—</th>
                          <th>—</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_3'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_4'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_5'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_6'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_7'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_8'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_9'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_10'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_11'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_12'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_13'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_14'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_15'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_16'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_17'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_18'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_19'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_20'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_21'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_22'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_23'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_24'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_25'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_26'))!!}</th>
                          <th>—</th>
                          <th>—</th>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <table id="mytable" class="table table-bordered table-hover diary-seprater">
                      <tbody>
                        <tr>
                          <th scope="col">Datae</th>
                          <th colspan="12" scope="col">Duties of Surveyor Field</th>
                          <th colspan="5" scope="col">Job Done by SFA</th>
                          <th colspan="3" scope="col">Outher Information</th>
					                <th colspan="3" scope="col">Remark</th>
                        </tr>
                        <tr align="center">
                          <th scope="row">&nbsp;</th>
                          <th><span data-toggle="tooltip" title="No. of SFA assigned fron the day.">29</span></th>
                          <th><span data-toggle="tooltip" title="Requisition No.">30</span></th>
                          <th><span data-toggle="tooltip" title="Category No.">31</span></th>
                          <th><span data-toggle="tooltip" title="Clearing.">32</span></th>
                          <th><span data-toggle="tooltip" title="Picketing/ Landmarking/ GPS monumentation.">33</span></th>
                          <th><span data-toggle="tooltip" title="Assisiting for Survying or Leveling.">34</span></th>
                          <th><span data-toggle="tooltip" title="Construction of BMM.">35</span></th>
                          <th><span data-toggle="tooltip" title="Construction of LMM, CPP & etc...">36</span></th>
                          <th><span data-toggle="tooltip" title="Assisiting for fieldlecting Information in field.">37</span></th>
                          <th><span data-toggle="tooltip" title="Assisiting for Handing over allotments to GN etc.">38</span></th>
                          <th><span data-toggle="tooltip" title="Assigned SFA reported to Div.SO.">39</span></th>
                          <th><span data-toggle="tooltip" title="Other duties.">40</span></th>
                          <th><span data-toggle="tooltip" title="No. of km cleared.">41</span></th>
                          <th><span data-toggle="tooltip" title="No. of lines picketed.">42</span></th>
                          <th><span data-toggle="tooltip" title="No. of LMM buried/GPS monumentation.">43</span></th>
                          <th><span data-toggle="tooltip" title="No. of LMM constructed/CPP constructed.">44</span></th>
                          <th><span data-toggle="tooltip" title="No. of BMM constructed.">45</span></th>
                          <th><span data-toggle="tooltip" title="Weather;Fine=F;Wet or Windy=W.">46</span></th>
                          <th><span data-toggle="tooltip" title="No. of km. travelled by Foot.">47</span></th>
                          <th><span data-toggle="tooltip" title="No. of km. travelled by Vehicle.">48</span></th>
                          <th><span data-toggle="tooltip" title="Surveyor.">49</span></th>
                          <th><span data-toggle="tooltip" title="Survey Field Assistans.">50</span></th>
                          <th><span data-toggle="tooltip" title="Supdt.Of Surveys.">51</span></th>
                        </tr>
                        @foreach($diarys as $diary)
                       <tr @if($diary->field_10 == 1) class="holiday" @elseif($diary->field_11 == 1 ||$diary->field_11==0.5 ) class="leave" @endif>
                          <!-- <th scope="row">{{$diary->day}}</th> -->
                          <th scope="row">
                              {!!$utilities::sldate($diary->day)!!}
                              @if(Auth::user()->rank=="survy")
                                <a href="diary/{{$diary->id}}/edit" class="pull-right"><i class="fa fa-edit"></i></a>
                              @endif
                          </th>
                            <td align="center">{!!$utilities::spendday($diary->field_29)!!}</td>
                            @if($diary->field_30 != 0 || $diary->field_30 != NULL)
                            <td align="center">{!!$utilities::spendday($diary->requisitionsfa->requisition_no)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->requisitionsfa->category)!!}</td>
                            @else
                            <td align="center">{!!$utilities::spendday($diary->field_30)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_31)!!}</td>
                            @endif
                            <td align="center">{!!$utilities::spendday($diary->field_32)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_33)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_34)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_35)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_36)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_37)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_38)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_39)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_40)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_41)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_42)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_43)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_44)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_45)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_46)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_47)!!}</td>
                            <td align="center">{!!$utilities::spendday($diary->field_48)!!}</td>
                            <td align="center">{!!$utilities::note($diary->field_49)!!}</td>
                            <!-- <td align="center"><i class="fa fa-file-text-o" data-toggle="tooltip" title="{{$diary->field_49}}"></i></td> -->
                            <td align="center">{!!$utilities::spendday($diary->field_50)!!}</td>
                            <!-- <td align="center">{{$diary->field_51}}</td> -->
                            <td align="center">{!!$utilities::note($diary->field_51)!!}</td>
                          
                        </tr>
                        @endforeach
                        <!-- For Total -->
                        <tr>
                          <th scope="row">Total</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_29'))!!}</th>
                          <th>—</th>
                          <th>—</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_32'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_33'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_34'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_35'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_36'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_37'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_38'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_39'))!!}</th>
                          <th>{!!$utilities::dec2fracso($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_40'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_41'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_42'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_43'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_44'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_45'))!!}</th>
                          <th>—</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_47'))!!}</th>
                          <th>{!!$utilities::spendday($user->diary()->where('year',$user->year)->where('month',$user->month)->sum('field_48'))!!}</th>
                          <th>—</th>
                          <th>—</th>
                          <th>—</th>
                          
                        </tr>
                        
                      </tbody>
                    </table>
                  </div><!-- /.tab-pane -->
                  
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->

  		</div>
   

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection