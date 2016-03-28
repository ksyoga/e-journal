@inject('utilities','App\Http\Utilities\Utilities')
@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Programme for the following week
       <!--  <small> Diyatalawa Division</small> -->

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
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">{{$surveyor->name}}'s following week Programme for {{$utilities::journalMonth($surveyor->month)}} {{$surveyor->year}}</h3>
                  <!-- <a href="week/create" class="text-muted pull-right"><button class="btn btn-xs btn-success" data-toggle="tooltip" title="Add Week Programe "><i class="glyphicon glyphicon-plus"></i></button></a> -->
                </div><!-- /.box-header -->
                <div class="box-body">

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
					      	<!-- {{$week->day}}-->
					      	@if(Auth::user()->rank=="survy")
					      		<a href="week/{{$week->id}}/edit" class="pull-right"><i class="fa fa-edit"></i></a>
					      	@endif
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
					      	@if(Auth::user()->rank=="supdt")
					      		<a href="{{action('WeekController@edit', ['id' => $week->id])}}" class="pull-right"><i class="fa fa-edit"></i></a>
					      	@endif
					      </td>
					    </tr>
					    @endforeach

					  </tbody>
					</table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->


            </div><!-- /.col -->
          </div><!-- /.row -->


 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection
