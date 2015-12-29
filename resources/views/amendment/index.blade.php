@inject('utilities','App\Http\Utilities\Utilities')
@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Amendment Details
        <small> 
            {{Auth::user()->division->name}} Division &nbsp;
             @if(Auth::user()->rank=="supdt")
              <a href="/amendment/create"><span class="label label-success" data-toggle="tooltip" title="Issue an Amendment"><i class="glyphicon glyphicon-plus"></i></span></a>
              <!-- <a href="/amendment/create"> <button class="btn btn-xs btn-success" data-toggle="tooltip" title="Issue an Amendment"><i class="glyphicon glyphicon-plus"></i></button></a> -->
             @endif
        </small>

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
            @foreach($amendments as $amendment)
              <div class="col-md-3">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">{{$amendment->plan_no}}</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i>Plane No/Requisition No</strong>
                  <p class="text-muted">
                    {{$amendment->plan_no}}
                  </p>

                  <hr>

                  <strong><i class="fa fa-download margin-r-5"></i> Received Date &  Supdt Note</strong>
                  <p class="text-muted">{!!$utilities::sldate($amendment->received)!!}, {{$amendment->supdt_note}}</p>

                  <hr>

                  <strong><i class="glyphicon glyphicon-user margin-r-5"></i> Surveyor</strong>
                  <p>
                   {{$amendment->surveyor->name}}
                  </p>

                  <hr>

                  <strong><i class="fa fa-upload margin-r-5"></i> Completeed Date & Notes</strong>
                  <p>{!!$utilities::sldate($amendment->completion)!!}, {{$amendment->surveyor_note}}</p>
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="amendment/{{$amendment->id}}/edit">&nbsp;<span class="pull-right text-yellow"><i class="fa fa-edit"></i></span></a></li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div>
            @endforeach
          </div>  
    
  		

   

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection