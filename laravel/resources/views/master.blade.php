<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="./adminlte/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="./adminlte/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="./adminlte/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="./adminlte/plugins/datepicker/datepicker3.css">
	<link rel="stylesheet" href="./adminlte/plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="./css/alertifyjs/alertify.css">
	<link rel="stylesheet" href="./css/alertifyjs/themes/default.css">
	<link rel="stylesheet" href="./css/chosen/chosen.css">
	<script src="./adminlte/plugins/jQuery/jquery-2.2.3.min.js" type="text/javascript"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<a href="./home" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>o - </b><b>X</b></span>
				<span class="logo-lg"><b>{{ config('app.name', 'Laravel') }}</b></span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->

						<!-- Notifications: style can be found in dropdown.less -->

						<!-- Tasks: style can be found in dropdown.less -->

						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="../adminlte/dist/img/user4-128x128.jpg" class="user-image" alt="User Image">
								<span class="hidden-xs"><b>{{ Auth::user()->name }}</b></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img src="../adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
									<p>
										<b>{{ Auth::user()->name }}</b><br/>Pelaksana Seksi PA II
									</p>
								</li>
								<!-- Menu Body -->
								<!--<li class="user-body">
									<div class="row">
										<div class="col-xs-4 text-center">
											<a href="#">Followers</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Sales</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Friends</a>
										</div>
									</div>
								</li>-->
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="profil" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="{{ url('/logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
											Logout
										</a>
										<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
									</div>
								</li>
							</ul>
						</li>						
					</ul>
				</div>
			</nav>
		</header>

		<!-- =============================================== -->
	
		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="../adminlte/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>{{ Auth::user()->name }}</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				
				<!--<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
							</span>
					</div>
				</form>-->
			
				<ul class="sidebar-menu">
					
					<li class="treeview">
						<a href="home">
							<i class="fa fa-dashboard"></i> <span>Beranda</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					
					@yield('sidemenu')
					
				</ul>
			</section>
		<!-- /.sidebar -->
		</aside>
		<!--======================================================-->	
		
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			@yield('content')
		</div>
		<!-- /.content-wrapper -->
		
		
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.3.6
			</div>
			<strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
		reserved.
		</footer>
		
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Create the tabs -->
			<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
				<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
				<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
			</ul>
			
			<!-- Tab panes -->
			<div class="tab-content">
			<!-- Home tab content -->
				<div class="tab-pane" id="control-sidebar-home-tab">
					<h3 class="control-sidebar-heading">Recent Activity</h3>
					<!--<ul class="control-sidebar-menu">
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-birthday-cake bg-red"></i>
								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
									<p>Will be 23 on April 24th</p>
								</div>
							</a>
						</li>
						
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-user bg-yellow"></i>
								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
									<p>New phone +1(800)555-1234</p>
								</div>
							</a>
						</li>
						
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
									<p>nora@example.com</p>
								</div>
							</a>
						</li>
					
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-file-code-o bg-green"></i>
								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
									<p>Execution time 5 seconds</p>
								</div>
							</a>
						</li>
					</ul>-->
					<!-- /.control-sidebar-menu -->

					<h3 class="control-sidebar-heading">Tasks Progress</h3>
					<ul class="control-sidebar-menu">
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Custom Template Design
									<span class="label label-danger pull-right">70%</span>
								</h4>
								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
								</div>
							</a>
						</li>
					
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Update Resume
									<span class="label label-success pull-right">95%</span>
								</h4>
								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-success" style="width: 95%"></div>
								</div>
							</a>
						</li>
					
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Laravel Integration
									<span class="label label-warning pull-right">50%</span>
								</h4>
								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
								</div>
							</a>
						</li>
						
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Back End Framework
									<span class="label label-primary pull-right">68%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-primary" style="width: 68%"></div>
								</div>
							</a>
						</li>
					</ul>
				<!-- /.control-sidebar-menu -->

				</div>
				<!-- /.tab-pane -->
				
			<!-- Stats tab content -->
			<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
			<!-- /.tab-pane -->
			<!-- Settings tab content -->
			<div class="tab-pane" id="control-sidebar-settings-tab">
			<form method="post">
				<h3 class="control-sidebar-heading">General Settings</h3>
				
				<div class="form-group">
					<label class="control-sidebar-subheading">
						Report panel usage
						<input type="checkbox" class="pull-right" checked>
					</label>
					<p>Some information about this general settings option</p>
				</div>
				<!-- /.form-group -->

				<div class="form-group">
					<label class="control-sidebar-subheading">
						Allow mail redirect
						<input type="checkbox" class="pull-right" checked>
					</label>
					<p>Other sets of options are available</p>
				</div>
				<!-- /.form-group -->

				<div class="form-group">
					<label class="control-sidebar-subheading">
						Expose author name in posts
						<input type="checkbox" class="pull-right" checked>
					</label>
					<p>Allow the user to show his name in blog posts</p>
				</div>
				<!-- /.form-group -->

				<h3 class="control-sidebar-heading">Chat Settings</h3>
				<div class="form-group">
					<label class="control-sidebar-subheading">
						Show me as online
						<input type="checkbox" class="pull-right" checked>
					</label>
				</div>
				<!-- /.form-group -->

				<div class="form-group">
					<label class="control-sidebar-subheading">
						Turn off notifications
						<input type="checkbox" class="pull-right">
					</label>
				</div>
				<!-- /.form-group -->

				<div class="form-group">
					<label class="control-sidebar-subheading">
						Delete chat history
						<a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
					</label>
				</div>
				<!-- /.form-group -->
			</form>
			</div>
			<!-- /.tab-pane -->
			</div>
		</aside>
		<!-- /.control-sidebar -->

		<div class="control-sidebar-bg"></div>
		<!-- /.control-sidebar -->
		
	</div>
	
	<script src="./adminlte/bootstrap/js/bootstrap.min.js"></script>
	<script src="./adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!--<script src="./adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<script src="./adminlte/plugins/fastclick/fastclick.js"></script>-->
	<script src="./adminlte/dist/js/app.min.js"></script>
	<script src="./adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="./adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!--<script src="./adminlte/dist/js/demo.js"></script>-->
	<script src="./js/alertifyjs/alertify.js" type="text/javascript"></script>
	<script src="./js/chosen/chosen.jquery.js" type="text/javascript"></script>

</body>
</html>
