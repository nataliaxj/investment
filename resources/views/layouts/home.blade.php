<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://investx-admin-template.multipurposethemes.com/New_InvestX-main-files/html/images/favicon.ico">

    <title>InvestX - @yield('title')</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('dash/src/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('dash/src/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('dash/src/css/skin_color.css')}}">
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>
	
  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">	
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-40">
			  <span class="light-logo"><img src="{{asset('dash/images/logo-letter.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{asset('dash/images/logo-letter-white.png')}}" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo"><img src="{{asset('dash/images/logo-dark-text.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{asset('dash/images/logo-light-text.png')}}" alt="logo"></span>
		  </div>
		</a>	
	</div>   
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i data-feather="menu"></i>
			    </a>
			</li>
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
						<li class="btn-group d-md-inline-flex d-none">
						  <label class="switch">
							  <span class="waves-effect skin-toggle waves-light">
									<input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
									<span class="switch-on"><i data-feather="moon"></i></span>
									<span class="switch-off"><i data-feather="sun"></i></span>
								</span>
							</label>
            </li>
			
			<li class="btn-group d-xl-inline-flex d-none">
			    <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon dropdown-toggle" data-bs-toggle="dropdown">
					<img class="rounded" src="https://investx-admin-template.multipurposethemes.com/New_InvestX-main-files/html/images/svg-icon/usa.svg" alt="">
				</a>
			    <div class="dropdown-menu">
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://investx-admin-template.multipurposethemes.com/New_InvestX-main-files/html/images/svg-icon/usa.svg" alt=""> English</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://investx-admin-template.multipurposethemes.com/New_InvestX-main-files/html/images/svg-icon/spain.svg" alt=""> Spanish</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://investx-admin-template.multipurposethemes.com/New_InvestX-main-files/html/images/svg-icon/ger.svg" alt=""> German</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://investx-admin-template.multipurposethemes.com/New_InvestX-main-files/html/images/svg-icon/jap.svg" alt=""> Japanese</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://investx-admin-template.multipurposethemes.com/New_InvestX-main-files/html/images/svg-icon/fra.svg" alt=""> French</a>
			    </div>
			</li>
			
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
					<i data-feather="maximize"></i>
			    </a>
			</li>					  
          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item d-xl-inline-flex d-none">
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon">
			  	<i data-feather="sliders"></i>
			  </a>
          </li>
			
			<!-- User Account-->
			<li class="dropdown user user-menu">
				<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
					<img src="{{asset('dash/images/avatar/avatar-13.png')}}" class="avatar rounded bg-primary-light" alt="" />
				</a>
			</li>
			
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative"> 
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 97%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
				<li>
					<a class="text-dark lead" href="#">
					  <span>AVAIL BAL: ${{ Auth::user()->userDetails->balance }}</span>
					</a>
				  </li>
			  	<li>
				  <a href="{{ route('dashboard') }}">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
					<span>Home</span>
				  </a>
				</li>				
				<li>
				  <a href="{{ route('deposit') }}">
					<i data-feather="dollar-sign"></i>
					<span>Deposit</span>
				  </a>
				</li>
				<li>
					<a href="{{ route('invest')}}">
					  <i data-feather="save"></i>
					  <span>Invest</span>
					</a>
				  </li>
				<li>
				  <a href="#">
					<i data-feather="dollar-sign"></i>
					<span>Withdraw</span>
				  </a>
				</li>
				<li>
					<a href="#">
					  <i data-feather="database"></i>
					  <span>Transactions</span>
					</a>
				  </li>
				<li>
				  <a href="{{ route('investments') }}">
					<i data-feather="list"></i>
					<span>Investments</span>
				  </a>
				</li>
				<li>
					<a href="{{ route('plans') }}">
					  <i data-feather="pie-chart"></i>
					  <span>Investment Plans</span>
					</a>
				  </li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="user"></i>
					<span>My Account</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">											
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Profile
						</a>
					</li>												
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Accounts
						</a>
					</li>										
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Security
						</a>
					</li>									
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Activity Log
						</a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Preferences
						</a>
					</li>  
				  </ul>
				</li>						 	 
			  </ul>
			  
			  <div class="sidebar-widgets">
				  <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
					<div class="text-center">
						<img src="https://investx-admin-template.multipurposethemes.com/New_InvestX-main-files/html/images/svg-icon/color-svg/custom-32.svg" class="sideimg p-5" alt="">
						<h4 class="title-bx text-primary">Best Investment Portal</h4>
					</div>
				  </div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>

  @yield('content')
	
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			{{-- <a class="nav-link" href="https://preview.themeforest.net/item/investx-investment-portfolio-admin-dashboardtemplate/full_screen_preview/35421349?_ga=2.228322970.606548471.1654681866-424681648.1636358172" target="_blank">Purchase Now</a> --}}
		  </li>
		</ul>
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Side panel -->   
  <!-- quick_user_toggle -->
  <div class="modal modal-right fade" id="quick_user_toggle" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content slim-scroll3">
		  <div class="modal-body p-30 bg-white">
			<div class="d-flex align-items-center justify-content-between pb-30">
				<h4 class="m-0">User Profile
				<small class="text-fade fs-12 ms-5">12 messages</small></h4>
				<a href="#" class="btn btn-icon btn-primary-light btn-sm no-shadow" data-bs-dismiss="modal">
					<span class="fa fa-close"></span>
				</a>
			</div>
            <div>
                <div class="d-flex flex-row">
                    <div class=""><img src="{{asset('dash/images/avatar/avatar-13.png')}}" alt="user" class="rounded bg-primary-light w-150" width="100"></div>
                    <div class="ps-20">
                        <h5 class="mb-0">{{Auth::user()->name()}}</h5>
                        <a class="text-capitalize my-3" href="#">
							{{Auth::user()->email}}
						</a>
                        
						<form method="POST" id="logoutForm" action="{{route('logout')}}">
							@csrf
							<button class="btn btn-danger btn-sm mt-5"><i class="log-out"></i> Logout</button>
						</form>
                    </div>
                </div>
			</div>
            <div class="dropdown-divider my-30"></div>
			<div>
                <div class="d-flex align-items-center mb-30">
                    <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                        <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                    <div class="d-flex flex-column fw-500">
                        <a href="extra_profile.html" class="text-dark hover-primary mb-1 fs-16">My Profile</a>
                        <span class="text-fade">View and update your profile</span>
                    </div>
				</div>
				<div class="d-flex align-items-center mb-30">
					<div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
						<span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
					</div>
					<div class="d-flex flex-column fw-500">
						<a href="mailbox.html" class="text-dark hover-primary mb-1 fs-16">Withdrawal Accounts</a>
						<span class="text-fade">Manage withdrawal accounts</span>
					</div>
				</div>
				<div class="d-flex align-items-center mb-30">
					<div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
						<span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
					</div>
					<div class="d-flex flex-column fw-500">
						<a href="setting.html" class="text-dark hover-primary mb-1 fs-16">Account Security</a>
						<span class="text-fade">Manage your account security</span>
					</div>
				</div>
				<div class="d-flex align-items-center mb-30">
					<div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
						<span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
					</div>
					<div class="d-flex flex-column fw-500">
						<a href="mailbox.html" class="text-dark hover-primary mb-1 fs-16">Activity Log</a>
						<span class="text-fade">View your account logs</span>
					</div>
				</div>
				<div class="d-flex align-items-center mb-30">
					<div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
						<span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
					</div>
					<div class="d-flex flex-column fw-500">
						<a href="setting.html" class="text-dark hover-primary mb-1 fs-16">Account Preferences</a>
						<span class="text-fade">Set your account preferences</span>
					</div>
				</div>
                </div>
              </div>
              <div>
            </div>
		  </div>
		</div>
	  </div>
  </div>
  <!-- /quick_user_toggle --> 
	
  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white" ></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" ><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="{{asset('dash/images/avatar/1.jpg')}}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="{{asset('dash/images/avatar/2.jpg')}}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="{{asset('dash/images/avatar/3.jpg')}}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="{{asset('dash/images/avatar/4.jpg')}}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="{{asset('dash/images/avatar/1.jpg')}}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="{{asset('dash/images/avatar/2.jpg')}}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="{{asset('dash/images/avatar/3.jpg')}}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="{{asset('dash/images/avatar/4.jpg')}}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div> 
  
</div>
<!-- ./wrapper -->
	
	
	<!-- Vendor JS -->
<script src="{{asset('dash/src/js/vendors.min.js')}}"></script>
<script src="{{asset('dash/src/js/pages/chat-popup.js')}}"></script>
<script src="{{asset('dash/assets/icons/feather-icons/feather.min.js')}}"></script>
		
<script src="{{asset('dash/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
	
	<!-- InvestX App -->
<script src="{{asset('dash/src/js/demo.js')}}"></script>
<script src="{{asset('dash/src/js/template.js')}}"></script>
<script src="{{asset('dash/src/js/pages/dashboard.js')}}"></script>

@yield('scripts')
	
</body>


</html>
