@inject('utilities','App\Http\Utilities\Utilities')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> 
      @if(Auth::user()->rank=="survy")
        {{Auth::user()->name}}'s Journal of {{$utilities::journalMonth($month)}} {{$year}}
      @else
        {{$user->name}}'s Journal  of {{$utilities::journalMonth($month)}} {{$year}}
      @endif            
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="{{url('css/reset.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="container-fluid pageA3l">
            <div class="row">
              
                <h4 class="text-center">Journal of {{$utilities::journalMonth($month)}} {{$year}} <small class="pull-right text-danger">S347/N &nbsp;&nbsp;</small></h4>
              
            </div>
            <div class="row">
              <div class="col-lg-4">
                <h6>
                  @if(Auth::user()->rank=="survy")
                    Name:- {{Auth::user()->name}}</br>
                    Rank:- Apprentice Surveyor
                    
                  @else
                     Name:- {{$user->name}}</br>
                     Rank:- Apprentice Surveyor
                   
                  @endif
                  </h6>
              </div>
              <div class="col-lg-5">
                  <h6>Type of Work:- Training</h6>
              </div>
              <div class="col-lg-3">
                
                  @if(Auth::user()->rank=="survy")
                    <h6>
                    Address:- {{Auth::user()->division->address}}</br>
                    Div.S.O:- {{Auth::user()->division->name}}
                    </h6>
                  @else
                    <h6>
                    Address:- {{Auth::user()->division->address}}</br>
                    Div.S.O:- {{Auth::user()->division->name}}
                    </h6>
                  @endif
                  
              </div>
            </div>
                      
          <div class="table-responsive">
            <table id="diary" class="table table-hover table-condensed diary-seprater diary-report">
                        <tbody>
                          <tr>
                            <th scope="col"></th>
                            <th colspan="11" scope="col">Purpose of the day spent by Surveyor</th>
                            <th colspan="17" scope="col">Daily Progress of Surveyor</th>
                            <th colspan="12" scope="col">Duties of Surveyor Field</th>
                            <th colspan="5" scope="col">Job Done by SFA</th>
                            <th colspan="3" scope="col">Outher Information</th>
                            <th colspan="3" scope="col">Remark</th>
                          </tr>
                          <tr align="center">
                            <th class ="verticl"><div class = "verticalText">Date</div></th>
                            <th class ="verticl"><div class = "verticalText">Requisition No</div></th>
                            <th class ="verticl"><div class = "verticalText">Category No</div></th>
                            <th class ="verticl"><div class = "verticalText">Investigating Reqn .in Office</div></th>
                            <th class ="verticl"><div class = "verticalText">Investigating & Locating Reqn .in Field</div></th>
                            <th class ="verticl"><div class = "verticalText">Re-opening Boundary/ Setting out</div></th>
                            <th class ="verticl"><div class = "verticalText">Surveying or Leveling</div></th>
                            <th class ="verticl"><div class = "verticalText">Plan Work</div></th>
                            <th class ="verticl"><div class = "verticalText">Inspection by Senior Officer</div></th>
                            <th class ="verticl"><div class = "verticalText">Other Duties</div></th>
                            <th class ="verticl"><div class = "verticalText">Weekend & Public Holidays.</div></th>
                            <th class ="verticl"><div class = "verticalText">Leave.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of line reset or setout.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of points Setout by using Total station.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of line Surveyed.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of Shots taken by using Total station.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of km reset or setout/ km. Surveyed.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of km. Levelled/ Sketches prepared for GPS sys.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of new LMM Surveyed.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of lots staked out.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of Allotment handed over/ CAD plans prepared.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of points/ lines Traverse adjustment.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of lots Join, describe boundaries, Editing.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of lots Re-Plotting & Screen digitzing.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of lots Lotting parcels, Lot computaions.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of lots - Preparation of Tenement List.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of Tracing, amendment tracing prepared.</div></th>
                            <th class ="verticl"><div class = "verticalText">Completing FB entries, preparing Reqn. file.Put X.</div></th>
                            <th class ="verticl"><div class = "verticalText">Attending plan amendments given by SS.Put X.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of SFA assigned fron the day.</div></th>
                            <th class ="verticl"><div class = "verticalText">Requisition No.</div></th>
                            <th class ="verticl"><div class = "verticalText">Category No.</div></th>
                            <th class ="verticl"><div class = "verticalText">Clearing.</div></th>
                            <th class ="verticl"><div class = "verticalText">Picketing/ Landmarking/ GPS monumentation.</div></th>
                            <th class ="verticl"><div class = "verticalText">Assisiting for Survying or Leveling.</div></th>
                            <th class ="verticl"><div class = "verticalText">Construction of BMM.</div></th>
                            <th class ="verticl"><div class = "verticalText">Construction of LMM, CPP & etc...</div></th>
                            <th class ="verticl"><div class = "verticalText">Assisiting for fieldlecting Information in field.</div></th>
                            <th class ="verticl"><div class = "verticalText">Assisiting for Handing over allotments to GN etc.</div></th>
                            <th class ="verticl"><div class = "verticalText">Assigned SFA reported to Div.SO.</div></th>
                            <th class ="verticl"><div class = "verticalText">Other duties.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of km cleared.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of lines picketed.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of LMM buried/GPS monumentation.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of LMM constructed/CPP constructed.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of BMM constructed.</div></th>
                            <th class ="verticl"><div class = "verticalText">Weather;Fine=F;Wet or Windy=W.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of km. travelled by Foot.</div></th>
                            <th class ="verticl"><div class = "verticalText">No. of km. travelled by Vehicle.</div></th>
                            <th class ="verticl">Surveyor.</th>
                            <th class ="verticl">SFA.</th>
                            <th class ="verticl text-nowrap">Supdt.Of Surveys.</th>
                          </tr>
                          <tr align="center">
                            <th>&nbsp;</th>
                            <th>1</th><th>2</th><th>2</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th>
                            <th>11</th><th>12</th><th>12</th><th>14</th><th>15</th><th>16</th><th>17</th><th>18</th><th>19</th><th>20</th>
                            <th>21</th><th>22</th><th>22</th><th>24</th><th>25</th><th>26</th><th>27</th><th>28</th><th>29</th><th>30</th>
                            <th>31</th><th>32</th><th>32</th><th>34</th><th>35</th><th>36</th><th>37</th><th>38</th><th>39</th><th>40</th>
                            <th>41</th><th>42</th><th>42</th><th>44</th><th>45</th><th>46</th><th>47</th><th>48</th><th>49</th><th>50</th><th>51</th>

                          </tr>
                          @foreach($diarys as $diary)
                            <tr {!!$utilities::HoliDay($diary->day)!!} {!!$utilities::Leave($diary->day,$diary->field_11)!!}>
                            <!-- <th scope="row">{{$diary->day}}</th> -->
                            <th scope="row"><i>{!!date("d",strtotime($diary->day))!!}</i></th>
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
                            <td align="left" class="text-nowrap">{!!$utilities::spendday($diary->field_49)!!}</td>
                            <td align="center" class="text-nowrap">{!!$utilities::spendday($diary->field_50)!!}</td>
                            <td align="left" class="text-nowrap">{!!$utilities::spendday($diary->field_51)!!}</td>
                          </tr>
                          @endforeach
                          
                          <!-- For Total -->
                          <tr>
                            <th scope="row">Total</th>
                            <th>—</th>
                            <th>—</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_3'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_4'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_5'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_6'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_7'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_8'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_9'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_10'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_11'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_12'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_13'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_14'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_15'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_16'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_17'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_18'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_19'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_20'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_21'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_22'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_23'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_24'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_25'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_26'))!!}</th>
                            <th>—</th>
                            <th>—</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_29'))!!}</th>
                            <th>—</th>
                            <th>—</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_32'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_33'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_34'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_35'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_36'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_37'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_38'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_39'))!!}</th>
                            <th>{!!$utilities::dec2fracso($user->diary()->where('year',$year)->where('month',$month)->sum('field_40'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_41'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_42'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_43'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_44'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_45'))!!}</th>
                            <th>—</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_47'))!!}</th>
                            <th>{!!$utilities::spendday($user->diary()->where('year',$year)->where('month',$month)->sum('field_48'))!!}</th>
                            <th>—</th>
                            <th>—</th>
                            <th>—</th>
                          </tr>
                        </tbody>
                      </table>
          </div> 
          <p style="margin: -15px 0"><span class="pull-right text-danger">Data downloading and Data up loading should be done on the same day of the surveying</span></p>
          <hr class="hrtyp">
          <div class="page-break"></div>
          <!-- programe of following week -->
              <div class="row">
                <h4 class="text-center">Programme of the following week</h4>
              </div>
              <div class="row">
                <div class="col-lg-9">
                   <table id="mytable" class="table table-bordered table-hover week-seprater">
                    <tbody>
                      <tr>
                        <th colspan="3" scope="col">Surveyor</th>
                        <th colspan="4" scope="col">Requirements of Resources</th>
                        <th colspan="2" scope="col">Propose duty to Survey Field Assistants</th>
                        <th rowspan="2" scope="col">SS's note</th>
                      </tr>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Reqn. No</th>
                        <th scope="col">Programmed work</th>
                        <th scope="col"><p data-toggle="tooltip" data-placement="top" title="No of Surveyor Field Assistants needed for Survey">A</p></th>
                        <th scope="col"><p data-toggle="tooltip" data-placement="top" title="if Total station required on this day">B</p></th>
                        <th scope="col"><p data-toggle="tooltip" data-placement="top" title="if dept vehicle required on this day">C</p></th>
                        <th scope="col"><p data-toggle="tooltip" data-placement="top" title="No. of Km estimated to travel on this day by dept.vehicle">D</p></th>
                        <th scope="col">Reqn.No</th>
                        <th scope="col">Work to be asssigned</th>
                      </tr>
                      @foreach($weeks as $week)
                      <tr {!!$utilities::fDay($week->day)!!}>
                        <td>
                          {!!$utilities::sldate($week->day)!!}
                          
                        </td>
                        @if($week->requ_id != NULL || $week->requ_id != 0)
                        <td align="center">{!!$utilities::spendday($week->requ_survey->requisition_no)!!}</td>
                        @else
                        <td align="center">—</td>
                        @endif
                        <td>{!!$utilities::spendday($week->pro_work)!!}</td>
                        <td align="center">{!!$utilities::spendday($week->no_sfa)!!}</td>
                        <td align="center">{!!$utilities::spendday($week->instrument)!!}</td>
                        <td align="center">{!!$utilities::spendday($week->vehicle)!!}</td>
                        <td align="center">{!!$utilities::spendday($week->travel)!!}</td>
                        @if($week->sfa_requ_id != NULL || $week->sfa_requ_id != 0)
                        <td align="center">{!!$utilities::spendday($week->requ_sfa->requisition_no)!!}</td>
                        @else
                        <td align="center">—</td>
                        @endif
                        <td>{!!$utilities::spendday($week->sfa_work_asign)!!}</td>
                        <td align="center">
                          {!!$utilities::spendday($week->ss_note)!!}
                          
                        </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                  <p>A : Number of Survey Field Assistants need for Survey &nbsp; &nbsp; B : If Total station required on this day write "Yes" &nbsp; &nbsp; C : If deptl. vehicle required on this day write "Yes" &nbsp; &nbsp; D : No. of Km estimated to travel on this day by deptl.vehicle</p>
                </div>
                <div class="col-lg-3">
                  <!-- Days Invaove in each Requisition -->
                  <table  id="invo-table" class="table table-bordered table-hover week-seprater">
                      <tbody>
                        <tr>
                          <th colspan="7"><h6>FW &amp; PW Day involved in each Requisition attending during the month</h6></th>
                          
                        </tr>
                        <tr align="center">
                          <!-- <th width="50%" class="verticl"><div class = "verticalText">Requisition No</div></th> -->
                          <th width="50%" >Requisition No</th>
                          <th class="verticl"><div class = "verticalText">FW days - up to last month</div></th>
                          <th class="verticl"><div class = "verticalText">FW days - during the month</div></th>
                          <th class="verticl"><div class = "verticalText">Total FW days</div></th>
                          <th class="verticl"><div class = "verticalText">PW days - up to last month</div></th>
                          <th class="verticl"><div class = "verticalText">PW days - during the month</div></th>
                          <th class="verticl"><div class = "verticalText">Total PW days</div></th>
                        </tr>
                        @foreach($involveds as $involved)
                        <tr>
                          <th scope="row">{!!$utilities::requ_no($involved->field_1)!!}</th>
                          <td>{!!$utilities::last_month($user->id,$year,$month,$involved->field_1,0)!!}</td>
                          <td>{{$involved->in_office+$involved->in_field+$involved->setin_out+$involved->surveying}}</td>
                          <td>{!!$utilities::last_month($user->id,$year,$month,$involved->field_1,0)+ ($involved->in_office+$involved->in_field+$involved->setin_out+$involved->surveying)!!}</td>
                          <td>{!!$utilities::last_month($user->id,$year,$month,$involved->field_1,1)!!}</td>
                          <td>{{$involved->plan_work}}</td>
                          <td>{!!$utilities::last_month($user->id,$year,$month,$involved->field_1,1)+$involved->plan_work !!}</td>
                        </tr>
                        @endforeach
                        <tr>
                          <th scope="row">&nbsp;</th>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                  <!-- Days Invaove in each Requisition -->
                  <!-- Selfcheck -->
               
                  <h6>Self Check by Surveyor at the end of the month</h6>
                  <table id="report-check" class="table table-condensed">
                    <tbody>
                    <tr>
                      <td style="width: 5px">1.</td>
                      <td>Leave applications have been sent. </td>
                      <td style="width: 10px">{!!$utilities::selfCheck($selfchecks->field_1)!!}</td>

                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>All necessary Field Book entries are made in Field Book </td>
                      <td style="width: 10px">{!!$utilities::selfCheck($selfchecks->field_2)!!}</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>LMM are balanced in Field Book </td>
                      <td style="width: 10px">{!!$utilities::selfCheck($selfchecks->field_3)!!}</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Master copy of the last month journal sent to Supdt.of Surveyor </td>
                      <td style="width: 10px">{!!$utilities::selfCheck($selfchecks->field_4)!!}</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Any unattended correspondences</td>
                      <td style="width: 10px">{!!$utilities::selfCheck($selfchecks->field_5)!!}</td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Any amendment tracings received for corrections</td>
                      <td style="width: 10px">{!!$utilities::selfCheck($selfchecks->field_6)!!}</td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <td>Completed LM deport form have been sent to Dist.S.O</td>
                      <td style="width: 10px">{!!$utilities::selfCheck($selfchecks->field_7)!!}</td>
                    </tr>
                    <tr>
                      <td>8.</td>
                      <td>Cancelled Vrs.for returned documents received</td>
                      <td style="width: 10px">{!!$utilities::selfCheck($selfchecks->field_8)!!}</td>
                    </tr>
                    <tr>
                      <td>9.</td>
                      <td>Any clearance certificated to be received </td>
                      <td style="width: 10px">{!!$utilities::selfCheck($selfchecks->field_9)!!}</td>
                    </tr>
                    <tr>
                      <td>10.</td>
                      <td>Any unnecessary or unserviceable store with you </td>
                      <td style="width: 10px">{!!$utilities::selfCheck($selfchecks->field_10)!!}</td>
                    </tr>
                    <tr>
                      <td>11.</td>
                      <td> If any losses or damages, it has been reported to </td>
                      <td style="width: 10px">{!!$utilities::selfCheck($selfchecks->field_11)!!}</td>
                    </tr>
                    <tr>
                      <td>12.</td>
                      <td>Any unsettled advances</td>
                      <td style="width: 10px">{!!$utilities::selfCheck($selfchecks->field_12)!!}</td>
                    </tr>
                  </tbody>
                  </table>
             
                  <!-- selfcheck -->
                  <!-- amendments -->
                  
                  
                    <table id="amend-table" class="table table-bordered table-hover">
                      <tbody>
                        <tr>
                          <th colspan="3" class="text-center"><h6>Plan receved from Amendments<br><small>(Including LIS, DM &amp; PS Amendments )</small></h6></th>
                        </tr>
                        <tr>
                          <td>Req.No/Plan No. </td>
                          <td>Date Receiver</td>
                          <td>Date completed &amp; Send</td>
                        </tr>
                        @foreach($amendments as $amendment)
                        <tr>
                          <td>{{$amendment->plan_no}}</td>
                          <td>{!!$utilities::sldate($amendment->received)!!}</td>
                          <td>{!!$utilities::sldate($amendment->completion)!!}</td>
                        </tr>
                        @endforeach
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                  
                  <!-- amendments -->
                </div>

              </div>
          <!-- programe of following week -->
      </div>
    
                    
    
    
      

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    
    
  </body>
</html>
