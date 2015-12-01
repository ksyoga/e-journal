@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Survey Field Assistans
        <small> Diyatalawa Division</small>

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
  	  @foreach($sfas as $sfa)
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><img src="dist/img/{{$sfa->image}}" class="img-circle" alt="User Image" style="height:80px;width:80px" ></span>
            <div class="info-box-content">
              <span class="info-box-text">{{$sfa->name}}</span>
              <span class="info-box-number">{{$sfa->code}}</span>
              <div class="progress">
                <div class="progress-bar" style="width:{{$sfa->service}}%"></div>
              </div>
              <span class="progress-description">
               {{$sfa->rank}}
              </span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
        </div><!-- /.col -->
      @endforeach
   
    </div><!-- /.row -->

    
 </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection