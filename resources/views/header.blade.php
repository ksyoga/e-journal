@inject('nave','App\Http\Utilities\Topnave')
<!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <!-- <span class="logo-mini"><b>A</b>LT</span> -->
     <span class="logo-mini"><i class="fa fa-th "></i></span>
    <!-- logo for regular state and mobile devices -->
    <!-- <span class="logo-lg"><b>Admin</b>LTE</span> -->
    <span class="logo-lg"><b>Surveyor </b><i> Journal</i></span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
          <!-- Menu toggle button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 messages</li>
            <li>
              <!-- inner menu: contains the messages -->
              <ul class="menu">
                <li><!-- start message -->
                  <a href="#">
                    <div class="pull-left">
                      <!-- User Image -->
                      <img src="{{url('dist/img')}}/user2-160x160.jpg" class="img-circle" alt="User Image">

                    </div>
                    <!-- Message title and timestamp -->
                    <h4>
                      Supdt.Of.Survey
                      <small><i class="fa fa-clock-o"></i> 5 mins</small>
                    </h4>
                    <!-- The message -->
                    <p>Why not you start TCO/TMP/2016/021 requisition?</p>
                  </a>
                </li><!-- end message -->
              </ul><!-- /.menu -->
            </li>
            <li class="footer"><a href="#">See All Messages</a></li>
          </ul>
        </li><!-- /.messages-menu -->

        <!-- Notifications Menu -->
        <li class="dropdown notifications-menu">
          <!-- Menu toggle button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-danger">{{$nave::new_requisition()}}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header text-red">You have {{$nave::new_requisition()}} unmindful requisitions</li>
            <li class="header">
              <!-- Inner Menu: contains the notifications -->
              <ul class="menu">
                <li><!-- start notification -->
                  <? $lists = $nave::new_requisition_list() ?>
                  @foreach($nave::new_requisition_list() as $list)
                    <small>{{$list->requisition_no}} — ({{$list->work_load}}) — {{$list->surveyor->name}}</small>
                    
                  @endforeach
                </li><!-- end notification -->
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul>
        </li>
        <!-- Tasks Menu -->
        <li class="dropdown tasks-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa  fa-exchange"></i>
            <span class="label  bg-purple">{{$nave::un_com_requi()}}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header text-yellow">You have {{$nave::un_com_requi()}} uncompleted Requisitions</li>
            <li>
              <!-- Inner menu: contains the tasks -->
              <ul class="menu">
                <li><!-- Task item -->
                  <a href="#">
                    <!-- Task title and progress text -->
                    <h3>
                      Completed Work Load :
                      {!!$nave::com_work_lodae()!!}
                      <!-- <small class="pull-right">3/</small> -->
                    </h3>
                    <!-- The progress bar -->
                    <div class="progress xs">
                      <!-- Change the css width attribute to simulate progress -->
                      <div class="progress-bar progress-bar-aqua" style="width: {{$nave::com_work_pecentage()}}%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">{{$nave::com_work_pecentage()}}% Complete</span>
                      </div>
                    </div>
                  </a>
                </li><!-- end task item -->
              </ul>
            </li>
            <li class="footer">
              <a href="/requisition">View all Requisitions</a>
            </li>
          </ul>
        </li>
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="{{url('dist/img')}}/{{$user->image}}" class="user-image" alt="User Image">
            
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">{!! (Auth::user()->name) !!}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              
              <img src="{{url('dist/img')}}/{{$user->image}}" class="img-circle" alt="User Image">
              
              <p>
                {!! (Auth::user()->name) !!}
                
              <br/>
                  @if(Auth::user()->rank=="supdt")
                    Supdt. of Surveys 
                    <small>Surpervising for &nbsp;{{ date("F",mktime(null, null, null,($user->month))) }}  &nbsp; {!! ($user->year) !!}</small>
                  @else(Auth::user()->rank=="survy")
                     Government Surveyor
                     <small>Journal of &nbsp;{{ date("F",mktime(null, null, null,($user->month))) }}  &nbsp; {!! ($user->year) !!}</small>
                  @endif
              </p>
            </li>
            <!-- Menu Body -->
            
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="/auth/logout" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>