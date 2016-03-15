@inject('utilities','App\Http\Utilities\Utilities')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> 
      @if(Auth::user()->rank=="survy")
        {{Auth::user()->name}}'s Journal of {{$utilities::journalMonth($user->month)}} {{$user->year}}
      @else
        {{$user->name}}'s Journal  of {{$utilities::journalMonth($user->month)}} {{$user->year}}
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
  <body class="hold-transition login-page">
    <div class="pageA3">
      <section class="content">
      <div class="row">
        <section class="content-header" style= "padding:0;">
          <h4>
          @if(Auth::user()->rank=="survy")
            {{Auth::user()->name}}'s Journal <small> of {{$utilities::journalMonth($user->month)}} {{$user->year}}</small>
          @else
            {{$user->name}}'s Journal <small> of {{$utilities::journalMonth($user->month)}} {{$user->year}}</small>
          @endif
          </h4>
        </section>
      </div>
      <!-- table start here -->
      <div class="tab-pane active" id="tab_1">
                    <table id="diary" class="table table-bordered table-hover diary-seprater diary-report">
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
                          <th class ="verticl">Supdt.Of Surveys.</th>
                        </tr>
                        <tr align="center">
                          <td>&nbsp;</td>
                          <td>1</td><td>2</td><td>2</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
                          <td>11</td><td>12</td><td>12</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td>
                          <td>21</td><td>22</td><td>22</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td>
                          <td>31</td><td>32</td><td>32</td><td>34</td><td>35</td><td>36</td><td>37</td><td>38</td><td>39</td><td>40</td>
                          <td>41</td><td>42</td><td>42</td><td>44</td><td>45</td><td>46</td><td>47</td><td>48</td><td>49</td><td>50</td><td>51</td>

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
                          <td align="left">{!!$utilities::spendday($diary->field_49)!!}</td>
                          <td align="center">{!!$utilities::spendday($diary->field_50)!!}</td>
                          <td align="left">{!!$utilities::spendday($diary->field_51)!!}</td>
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

        
      <!-- table end here  -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
      
    </div>
      

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
