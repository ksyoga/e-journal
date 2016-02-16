@inject('utilities','App\Http\Utilities\Utilities')
@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Requisition Details
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
    
  		 <div class="box">
            <div class="box-header">
              @if(Auth::user()->rank=="supdt")
              <a href="/requisition/create"><span class="label label-success" data-toggle="tooltip" title="Add new Requisitino"><i class="glyphicon glyphicon-plus"></i></span></a>
              <!-- <a href="/requisition/create"> <button class="btn btn-xs btn-success" data-toggle="tooltip" title="Add new Requisitino"><i class="glyphicon glyphicon-plus"></i></button></a> -->
              @else
                &nbsp
              @endif
              <div class="box-tools">
                <div class="input-group" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Status</th>
                  <th>Requisition No</th>
                  <th>Category</th>
                  <th>Work Load</th>
                  <th  colspan="2">Lots & Extent</th>
                  <th  colspan="2">Received & Issued</th>
                  <th>Surveyor</th>
                  <th  colspan="2">Commance & Completed</th>
                  <th colspan="2"><span data-toggle="tooltip" title="Field  & Plane Works">Work</span></th>
                  <th colspan="2">Utilize</th>
                  <th>Note</th>
                  <th width="50px;"></th>
                </tr>
                
            	@foreach($requisitions as $requisition)
            	<tr>
  		        	<td>{!!$utilities::status($requisition->status)!!}</td>
  		        	<td>{!!$utilities::spendday($requisition->requisition_no)!!}</td>
  		        	<td>{{$requisition->category}}</td>
  		        	<td>{{$requisition->work_load}}</td>
  		        	<td align="center">{{$requisition->lots}}</td>
                <td><span class="pull-right">{{$requisition->extent}} </span></td>
  		        	<td>{!!$utilities::sldate($requisition->received_date)!!}</td>
                <td>{!!$utilities::sldate($requisition->issued)!!}</td>
  		        	<td>{!!$utilities::spendday($requisition->surveyor->name)!!}</td>
  		        	<td>{!!$utilities::sldate($requisition->commanced)!!}</td>
                <td>{!!$utilities::sldate($requisition->complet_date)!!}</td>
  		        	<td><span data-toggle="tooltip" title="Field Work Days">{!!$utilities::dec2fracso($requisition->fieldwork)!!}</span> </td>
  		        	<td><span data-toggle="tooltip" title="Plan Work Days" class="pull-right">{!!$utilities::dec2fracso($requisition->planwork)!!}</span></td>
                <td><span data-toggle="tooltip" title="Total Station Utilize">{!!$utilities::dec2fracso($requisition->iutilize()->where('requisition_id',$requisition->id)->sum('used_days'))!!}</span></td> 
                <td><span data-toggle="tooltip" title="Vehicle Utilize" class="pull-right">{!!$utilities::dec2fracso($requisition->vutilize()->where('requisition_id',$requisition->id)->sum('used_days'))!!}</span></td>
               
                <td align="center"><i class="fa fa-file-text-o" data-toggle="tooltip" title="{{$requisition->note}}"></i></td>
                <td align="right" width="50px;">
                   
                      @if(Auth::user()->rank=="supdt")
                        <i class=" pull-right text-red fa fa-trash-o"></i>
                        <a href="requisition/{{$requisition->id}}/edit"><i class="pull-right text-yellow fa fa-edit"></i></a>
                        
                      @else
                        <a href="requisition/{{$requisition->id}}/edit"><i class="pull-right text-yellow fa fa-edit"></i></a>
                      @endif
                     
                </td>
            	</tr>
            	@endforeach
                
                
                
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
       

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection