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
                  <h3 class="box-title">{{$utilities::journalMonth($user->month)}} {{$user->year}}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                	
					<table  id="mytable" class="table table-bordered table-hover week-seprater">
					  <tbody>
					    <tr>
					      <th scope="col">&nbsp;</th>
					      <th colspan="3" scope="col">Field Work days</th>
					      <th colspan="3" scope="col">Plane Work days</th>
					    </tr>
					    <tr>
					      <th scope="row">Requisition No</th>
					      <th>up to last month</th>
					      <th>during the month</th>
					      <th>Total</th>
					      <th>up to last month</th>
					      <th>during the month</th>
					      <th>Total</th>
					    </tr>
					    <tr>
					      <th scope="row">&nbsp;</th>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					    </tr>
					    <tr>
					      <th scope="row">&nbsp;</th>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					    </tr>
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
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
            
            </div><!-- /.col -->

          </div><!-- /.row -->
   

 	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection