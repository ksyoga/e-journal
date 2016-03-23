@inject('utilities','App\Http\Utilities\Utilities')
@extends('admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Field Work and Plan Work Days involved in each Requisition.
        <small> attended during the month</small>

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
                  <h3 class="box-title">
                 
                  {{$user->name}}'s Month involved at {{$utilities::journalMonth($user->month)}} {{$user->year}}
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                	
                <div class="col-lg-6">
					<!-- Days Invaove in each Requisition -->
                  <table  id="monthinvo" class="table table-bordered table-hover">
                      <tbody>
                       
                        <tr align="center">
                          <!-- <th width="50%" class="verticl"><div class = "verticalText">Requisition No</div></th> -->
                          <th width="50%" >Requisition No</th>
                          <th class="verticl"><div class = "verticalText">FW days - up to last month</div></th>
                          <th class="verticl"><div class = "verticalText">FW days - during the month</div></th>
                          <th class="verticl"><div class = "verticalText">Total FW days</div></th>
                          <th class="verticl"><div class = "verticalText">PW days - up to last month</div></th>
                          <th class="verticl"><div class = "verticalText">PW days - during the month</div></th>
                          <th class="verticl"><div class = "verticalText">Total PW days</div></th>
                        </tr>
                        @foreach($involveds as $involved)
                        <tr>
                          <th scope="row">{!!$utilities::requ_no($involved->field_1)!!}</th>
                          <td>{!!$utilities::last_month($user->id,$year,$month,$involved->field_1,0)!!}</td>
                          <td>{{$involved->in_office+$involved->in_field+$involved->setin_out+$involved->surveying}}</td>
                          <td>{!!$utilities::last_month($user->id,$year,$month,$involved->field_1,0)+ ($involved->in_office+$involved->in_field+$involved->setin_out+$involved->surveying)!!}</td>
                          <td>{!!$utilities::last_month($user->id,$year,$month,$involved->field_1,1)!!}</td>
                          <td>{{$involved->plan_work}}</td>
                          <td>{!!$utilities::last_month($user->id,$year,$month,$involved->field_1,1)+$involved->plan_work !!}</td>
                        </tr>
                        @endforeach
                        <tr>
                          <th scope="row">&nbsp;</th>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      </tbody>
                   </table>
                  <!-- Days Invaove in each Requisition -->
                </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
            
            </div><!-- /.col -->

          </div><!-- /.row -->
   

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection