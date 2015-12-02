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
                  <h3 class="box-title">November 2015</h3>
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
					    <tr>
					      <td>{{$week->day}}</td>
					      <td>{{$week->req_no}}</td>
					      <td>{{$week->pro_work}}</td>
					      <td align="center">{{$week->no_sfa}}</td>
					      <td align="center">{{$week->instrument}}</td>
					      <td align="center">{{$week->vehicle}}</td>
					      <td align="center">{{$week->travel}}</td>
					      <td>{{$week->sfa_req_no}}</td>
					      <td>{{$week->sfa_work_asign}}</td>
					      <td align="center">{{$week->ss_note}}</td>
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