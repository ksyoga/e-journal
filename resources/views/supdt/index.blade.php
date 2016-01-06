@inject('utilities','App\Http\Utilities\Utilities')
@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surveyors Details
        <small> {{Auth::user()->division->name}} Division</small>

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
        @foreach($surveyors as $surveyor)
          <div class="col-md-4">
         <!--  {{$surveyor->supdt->division->name}} -->
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-aqua-active" style="padding-right:0px;">
                
                <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/{{$surveyor->image}}" alt="User Avatar">

                  @if(Auth::user()->rank=="supdt")
                      <a href="#"><span class="label label-success pull-right" data-toggle="modal" data-target="#myModal{{$surveyor->id}}" data-toggle="tooltip" title="Active Next Month Journal"><i class="glyphicon glyphicon-plus"></i></span></a>
                  @endif
                </div><!-- /.widget-user-image -->
                <h3 class="widget-user-username"> {{$surveyor->name}}</h3>
                <h5 class="widget-user-desc">Government Surveyor</h5>
                    @if(Auth::user()->rank=="supdt")
                    <div class="btn-group pull-right" >
                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Surveyor Diary"><a href="diary/{{$surveyor->id}}" ><i class="glyphicon glyphicon-list-alt" ></i></a></button>
                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Flowing Week Programe"><a href="week/{{$surveyor->id}}" ><i class="glyphicon glyphicon-calendar" ></i></a> </button>
                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Requisition"><a href="requisition/{{$surveyor->id}}" ><i class="fa fa-object-group"></i></a></button>
                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Month Involvement"><a href="monthinvolved/{{$surveyor->id}}" ><i class="glyphicon glyphicon-indent-left"></i></a></button>
                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Self Cheeck"><a href="selfcheck/{{$surveyor->id}}" ><i class="fa fa-calendar-check-o"></i></a></button>
                    </div>
                    @endif
                </div>
              

              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Awarded Work Load <span class="pull-right badge bg-blue">{{$surveyor->requisition()->sum('work_load')}}</span></a></li>
                  <li><a href="#">Completed Work Load <span class="pull-right badge bg-aqua">{{$surveyor->requisition()->where('status',3)->sum('work_load')}}</span></a></li>
                  <li><a href="#">Involved Field Work Days  <span class="pull-right badge bg-green">{!!$utilities::dec2fracso($surveyor->requisition()->where('status',3)->sum('fieldwork'))!!}</span></a></li>
                  <li><a href="#">Involved Plan Work Days  <span class="pull-right badge bg-yellow">{!!$utilities::dec2fracso($surveyor->requisition()->where('status',3)->sum('planwork'))!!}</span></a></li>
                  <li><a href="#">Total Station Utilized Days <span class="pull-right badge">
                      <?php 
                        $iut=0; 
                        foreach($surveyor->requisition()->get() as $requisition){
                          $iut += $requisition->iutilize()->sum('used_days');
                        }
                      ?>{!!$utilities::dec2fracso($iut)!!}
                    </span></a></li>
                  <li><a href="#">Vehicle Utilized Days<span class="pull-right badge ">
                    <?php 
                        $vut=0; 
                        foreach($surveyor->requisition()->get() as $requisition){
                          $vut += $requisition->vutilize()->sum('used_days');
                        }
                      ?>{!!$utilities::dec2fracso($vut)!!}
                  </span></a></li>

                </ul>
              </div>
            </div><!-- /.widget-user -->
          </div><!-- /.col -->
        @endforeach

         <!-- Model Start -->
        
        @foreach($surveyors as $surveyor)
          <!-- Modal -->
            <div class="modal fade" id="myModal{{$surveyor->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{{$surveyor->name}}'s journal Status</h4>
                  </div>
                  
                    <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      @foreach($surveyor->diary->where('year',$surveyor->year)->sortBy('month')->lists('year','month') as $month=>$year)
                        <tr>
                          <td>{{date("F",mktime(0,0,0,$month))}} {{$year}} journal </td>
                          <td>{!!$utilities::journalapprove($surveyor->month,$month)!!}</td>
                          <td><i class="fa fa-fw fa-print"></i></td>
                        </tr>
                       <?php $lmonth = $month; ?>
                      @endforeach
                      
                        
                      </table>
                    </div><!-- /.box-body -->
                  
                  <div class="modal-footer">
                   
                    <form method="POST" action="/supdt/{{$surveyor->id}}" >
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" value="{{$surveyor->month}}" required name="month" id="month">
                    <input type="hidden" value="{{$surveyor->year}}" required name="year" id="year">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    @if($surveyor->diary->count() == cal_days_in_month(CAL_GREGORIAN, $surveyor->month, $surveyor->year) && $lmonth==$surveyor->month)
                    <button type="submit" class="btn btn-primary">Approve {{date("F",mktime(0,0,0,$surveyor->month))}} Journal</button>
                    @endif
                    </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          @endforeach


      </div><!-- /.row -->


 </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection