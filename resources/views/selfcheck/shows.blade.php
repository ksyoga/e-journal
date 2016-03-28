@inject('utilities','App\Http\Utilities\Utilities')
@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Self Check by Surveyor at the end of the month 
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
    
  		<!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">{{$surveyor->name}}'s Self Check at {{$utilities::journalMonth($surveyor->month)}} {{$surveyor->year}} </h3>
                  <!-- <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div> -->
                </div><!-- /.box-header -->
                <div class="box-body">

                <form method="POST" action="/selfcheck/{{$selfchecks->id}}" class="form-horizontal">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="PUT">
                
               
                  <ul class="todo-list">
                    <li>
                      <!-- drag handle -->
                      <span>01</span>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>

                      </span>


                      <!-- checkbox -->
                      <input type="checkbox"  name="field_1"  <?php  $selfchecks->field_1 == 'on' ? print "checked" : "" ?> >
                      <!-- todo text -->
                      <span class="text">Leave applications have been sent.</span>
                      <!-- Emphasis label -->
                      <!-- <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small> -->
                      <!-- General tools such as edit or delete-->
                      
                    </li>
                    <li>
                      <span>02</span>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox"  name="field_2"  <?php  $selfchecks->field_2 == 'on' ? print "checked" : "" ?>>
                      <span class="text">All necessary Field Book entries are made in Field Book</span>
                      <!-- <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small> -->
                      
                    </li>
                    <li>
                      <span>03</span>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox"  name="field_3"  <?php  $selfchecks->field_3 == 'on' ? print "checked" : "" ?>>
                      <span class="text">LMM are balanced in Field Book</span>
                      <!-- <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small> -->
                      
                    </li>
                    <li>
                      <span>04</span>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox"  name="field_4"  <?php  $selfchecks->field_4 == 'on' ? print "checked" : "" ?>>
                      <span class="text">Master copy of the last month journal sent to Supdt.of Surveyor</span>
                      <!-- <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small> -->
                      
                    </li>
                    <li>
                      <span>05</span>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox"  name="field_5"  <?php  $selfchecks->field_5 == 'on' ? print "checked" : "" ?>>
                      <span class="text">Any unsttended correspondences</span>
                      <!-- <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small> -->
                      
                    </li>
                    <li>
                      <span>06</span>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox"  name="field_6"  <?php  $selfchecks->field_6 == 'on' ? print "checked" : "" ?>>
                      <span class="text">Any amendment trscings received for corrections</span>
                      <!-- <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small> -->
                      
                    </li>
                    <li>
                      <span>07</span>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox"  name="field_7"  <?php  $selfchecks->field_7 == 'on' ? print "checked" : "" ?>>
                      <span class="text">Completed LM deport form have been sent to Dist.S.O</span>
                      <!-- <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small> -->
                      
                    </li>
                    <li>
                      <span>08</span>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox"  name="field_8"  <?php  $selfchecks->field_8 == 'on' ? print "checked" : "" ?>>
                      <span class="text">Cancelled Vrs.for returned documents receved</span>
                      <!-- <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small> -->
                      
                    </li>
                    <li>
                      <span>09</span>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox"  name="field_9"  <?php  $selfchecks->field_9 == 'on' ? print "checked" : "" ?>>
                      <span class="text">Any clearance certificated to be receved</span>
                      <!-- <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small> -->
                      
                    </li>
                    <li>
                      <span>10</span>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox"  name="field_10"  <?php  $selfchecks->field_10 == 'on' ? print "checked" : "" ?>>
                      <span class="text">Any unnecssary or unserviceable store with you</span>
                      <!-- <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small> -->
                      
                    </li>
                    <li>
                      <span>11</span>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox"  name="field_11"  <?php  $selfchecks->field_11 == 'on' ? print "checked" : "" ?>>
                      <span class="text">If any losses or damages, it has been reported to</span>
                      <!-- <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small> -->
                      
                    </li>
                    <li>
                      <span>12</span>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox"  name="field_12"  <?php  $selfchecks->field_12 == 'on' ? print "checked" : "" ?>>
                      <span class="text">Any unsettled advances</span>
                      <!-- <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small> -->
                      
                    </li>
                  </ul>
              
                </div><!-- /.box-body -->
                <!-- <div class="box-footer clearfix no-border">
                  <button class="btn btn-success pull-right"><i class="fa fa-plus"></i> Update Check List</button>
                </div> -->
              </div><!-- /.box -->

              </form>
   

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection