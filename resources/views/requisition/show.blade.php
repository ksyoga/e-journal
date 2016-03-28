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
              <h3 class="box-title">{{$surveyor->name}}'s Requisitions Details </h3>
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
                  <th  colspan="2">Lots &nbsp;&nbsp;& &nbsp;&nbsp;Extent</th>
                  <th  colspan="2">Received &nbsp;&nbsp;& &nbsp;&nbsp;&nbsp;&nbsp;Issued</th>
                  <th>Surveyor</th>
                  <th  colspan="2">Commance &nbsp;&nbsp;& &nbsp;&nbsp;Completed</th>
                  <th><span data-toggle="tooltip" title="Field  & Plane Works">Work</span></th>
                  <th><span data-toggle="tooltip" title="Totalstation  & Vehicles">Utilize</span></th>
                  <th>Note</th>
                  
                </tr>
                
              @foreach($requisitions as $requisition)
              <tr>
                <td>{!!$utilities::status($requisition->status)!!}</td>
                <td>{{$requisition->requisition_no}}</td>
                <td>{{$requisition->category}}</td>
                <td>{{$requisition->work_load}}</td>
                <td align="center">{{$requisition->lots}}</td>
                <td><span class="pull-right">{{$requisition->extent}} </span></td>
                <td>{!!$utilities::sldate($requisition->received_date)!!}</td>
                <td>{!!$utilities::sldate($requisition->issued)!!}</td>
                <td>{{$requisition->surveyor->name}}</td>
                <td>{!!$utilities::sldate($requisition->commanced)!!}</td>
                <td>{!!$utilities::sldate($requisition->complet_date)!!}</td>
                <td><span data-toggle="tooltip" title="Field Work Days">{!!$utilities::dec2fracso($utilities::work_for_req($requisition->id,0))!!}</span>&nbsp;,&nbsp;&nbsp;<span data-toggle="tooltip" title="Plan Work Days">{!!$utilities::dec2fracso($utilities::work_for_req($requisition->id,1))!!}</span></td>
                <td><span data-toggle="tooltip" title="Total Station Utilize">{!!$utilities::dec2fracso($requisition->iutilize()->where('requisition_id',$requisition->id)->sum('used_days'))!!}</span>&nbsp;,&nbsp;&nbsp;<span data-toggle="tooltip" title="Vehicle Utilize" >{!!$utilities::dec2fracso($requisition->vutilize()->where('requisition_id',$requisition->id)->sum('used_days'))!!}</span></td>
               
                <td align="center"><i class="fa fa-file-text-o" data-toggle="tooltip" title="{{$requisition->note}}"></i></td>
               
              </tr>
              @endforeach
                
                
                
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
   

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection