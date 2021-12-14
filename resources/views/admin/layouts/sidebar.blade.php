@php


$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp


<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('backend/images/logo-dark.png')}}" alt="">
						  <h3><b>Police</b> Clearance</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree"> 
         
		  
		<li>
          <a href="index.html">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview {{ ($prefix == '/users') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>         
            </span>
          </a>
          <ul class="treeview-menu">
            <li  class="{{ ($route == 'user.view') ? 'active' : '' }}"><a href="{{ route('user.view') }}"><i class="ti-more"></i>User View</a></li>
            <li class="{{ ($route == 'user.add') ? 'active' : '' }}"><a  href="{{ route('user.add') }}"><i class="ti-more"></i>Add User</a></li>
            <li class="{{ ($route == 'user.pass.change') ? 'active' : '' }}"><a href="{{ route('user.pass.change') }}"><i class="ti-more"></i>Change Password</a></li>
          </ul>
        </li> 
 
        <li class="treeview  {{ ($prefix == '/police/station/name') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="list"></i>
            <span>Police Station Name</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li  class="{{ ($route == 'station.name.view') ? 'active' : '' }}"><a href="{{ route('station.name.view') }}"><i class="ti-more"></i>Police Station View</a></li>
            <li  class="{{ ($route == 'add.ps.name') ? 'active' : '' }}"><a href="{{ route('add.ps.name') }}"><i class="ti-more"></i>Add PS Name</a></li>
          </ul>
        </li> 

        <li class="treeview  {{ ($prefix == '/assign/officer/name') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="list"></i>
            <span>Assign Officers Name</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li  class="{{ ($route == 'officer.name.view') ? 'active' : '' }}"><a href="{{ route('officer.name.view') }}"><i class="ti-more"></i>Assign Officers View</a></li>
            <li  class="{{ ($route == 'add.officer.name') ? 'active' : '' }}"><a href="{{ route('add.officer.name') }}"><i class="ti-more"></i>Add Assign Officers</a></li>
          </ul>
        </li> 

        <li class="treeview {{ ($prefix == '/clearance/data') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="list"></i>
            <span>Clearance Data Docs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li  class="{{ ($route == 'clearance.data.view') ? 'active' : '' }}"><a href="{{ route('clearance.data.view') }}"><i class="ti-more"></i>Clearance Data View</a></li>
            <li  class="{{ ($route == 'clearance.data.add') ? 'active' : '' }}"><a href="{{ route('clearance.data.add') }}"><i class="ti-more"></i>Add Clearance Data</a></li>
          </ul>
        </li> 

        <li class="treeview {{ ($prefix == '/clearance/status') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="list"></i>
            <span>Clearance Status</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'clearance.pending.view') ? 'active' : '' }}"><a href="{{ route('clearance.pending.view') }}"><i class="ti-more"></i>Pending Clearance View</a></li>
            <li class="{{ ($route == 'clearance.docs.received.io') ? 'active' : '' }}"><a href="{{ route('clearance.docs.received.io') }}"><i class="ti-more"></i>I/O Received Docs</a></li>
            <li class="{{ ($route == 'io.docs.submit.ps') ? 'active' : '' }}"><a href="{{ route('io.docs.submit.ps') }}"><i class="ti-more"></i>PS Received Docs I/O</a></li>
            <li class="{{ ($route == 'ps.send.dsb') ? 'active' : '' }}"><a href="{{ route('ps.send.dsb') }}"><i class="ti-more"></i> PS Send DSB</a></li>
            <li class="{{ ($route == 'dsb.rece.docs') ? 'active' : '' }}"><a href="{{ route('dsb.rece.docs') }}"><i class="ti-more"></i> DSB Received PS</a></li>
            <li class="{{ ($route == 'sp.sign.ok') ? 'active' : '' }}"><a href="{{ route('sp.sign.ok') }}"><i class="ti-more"></i>  SP Signed</a></li>
            <li class="{{ ($route == 'send.mofa') ? 'active' : '' }}"><a href="{{ route('send.mofa') }}"><i class="ti-more"></i>  send To MOFA</a></li>
            <li class="{{ ($route == 'received.from.mofa') ? 'active' : '' }}"><a href="{{ route('received.from.mofa') }}"><i class="ti-more"></i>  Received From MOFA</a></li>
            <li class="{{ ($route == 'docs.delivered') ? 'active' : '' }}"><a href="{{ route('docs.delivered') }}"><i class="ti-more"></i> Document Delivered</a></li>
          </ul>
        </li> 
		  
        
		
    		  
		 
        <!-- <li class="header nav-small-cap">User Interface</li>
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
            <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
            
          </ul>
        </li> -->
		
		 
		  

        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>