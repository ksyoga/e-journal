<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('dist/img')}}/{{$user->image}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{!! (Auth::user()->name) !!}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">

      <!--  <li class="header">HEADER</li> -->
      <!-- Optionally, you can add icons to the links -->
      @if(Auth::user()->rank=="survy")
        <!-- Optionally, you can add icons to the links -->
        <li class="{{Request::is('diary')?'active':''}}"><a href="/diary"><i class="glyphicon glyphicon-list-alt"></i> <span>Surveyor Diary</span></a></li>
        <li class="{{Request::is('week')?'active':''}}"><a href="/week"><i class="glyphicon glyphicon-calendar"></i> <span>Following Week Programme</span></a></li>
        <li class="{{Request::is('monthinvolved')?'active':''}}"><a href="/monthinvolved"><i class="glyphicon glyphicon-indent-left"></i> <span>Month Involved</span></a></li>
        <li class="{{Request::is('selfcheck')?'active':''}}"><a href="/selfcheck"><i class="fa fa-calendar-check-o"></i> <span>Self Check</span></a></li>
        <li class="{{Request::is('requisition')?'active':''}}"><a href="/requisition"><i class="fa fa-object-group"></i> <span>Requisition</span></a></li>
        <li class="{{Request::is('amendment')?'active':''}}"><a href="/amendment"><i class="glyphicon glyphicon-retweet"></i> <span>Amendments</span></a></li>
        <li class="{{Request::is('sfa')?'active':''}}"><a href="/sfa"><i class="fa fa-users"></i> <span>Survey Field Assistant</span></a></li>
        <li class="{{Request::is('instrument')?'active':''}}"><a href="/instrument"><i class="glyphicon glyphicon-screenshot"></i> <span>Total Station</span></a></li>
        <li class="{{Request::is('vehicle')?'active':''}}"><a href="/vehicle"><i class="fa fa-truck"></i> <span>Vehicles</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </li>
      @endif

      @if(Auth::user()->rank=="supdt")
          <li class="{{Request::is('supdt')?'active':''}}"><a href="/supdt"><i class="glyphicon  glyphicon-user"></i> <span>Surveyor</span></a></li>
          <li class="{{Request::is('sfa')?'active':''}}"><a href="/sfa"><i class="fa fa-users"></i> <span>Survey Field Assistant</span></a></li>
          <li class="{{Request::is('requisition')?'active':''}}"><a href="/requisition"><i class="fa fa-object-group"></i> <span>Requisition</span></a></li>
          <li class="{{Request::is('amendment')?'active':''}}"><a href="/amendment"><i class="glyphicon glyphicon-retweet"></i> <span>Amendments</span></a></li>
          <li class="{{Request::is('instrument')?'active':''}}"><a href="/instrument"><i class="glyphicon glyphicon-screenshot"></i> <span>Total Station</span></a></li>
          <li class="{{Request::is('vehicle')?'active':''}}"><a href="/vehicle"><i class="fa fa-truck"></i> <span>Vehicles</span></a></li>
      @endif
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>