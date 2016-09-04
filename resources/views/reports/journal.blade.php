@inject('utilities','App\Http\Utilities\Utilities')
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> 
      @if(Auth::user()->rank=="survy")
        {{Auth::user()->name}}'s Journal of {{$utilities::journalMonth($month)}} {{$year}}
      @else
        {{$user->name}}'s Journal  of {{$utilities::journalMonth($month)}} {{$year}}
      @endif            
    </title>
    
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="{{url('css/reset.css') }}">

   
  </head>
  <body>
    
    <div class="container-fluid pageA3l">
                
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
                          
                          
                          <!-- For Total -->
                          
                        </tbody>
                      </table>
          </div> 
          
          
         
      </div>
    
                    
    
    
      

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    
    
  </body>
</html>
