@extends('master')

@section('sidemenu')
					<li class="treeview">
						<a href="#">
							<i class="fa fa-files-o"></i>
							<span>Dokumen</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
	
						<ul class="treeview-menu">
							<li><a href="./inbox"><i class="fa fa-circle-o"></i> Surat Masuk</a></li>
							<li><a href="./outbox"><i class="fa fa-circle-o"></i> Surat Keluar</a></li>
							<!--
							<li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
							<li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
							<li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>-->
						</ul>
					</li>
					
					<li>
						<a href="archive">
							<i class="fa fa-list"></i> 
							<span>Archive</span><!--
							<span class="pull-right-container">
								<small class="label pull-right bg-red">3</small>
								<small class="label pull-right bg-blue">17</small>
							</span>-->
						</a>
					</li>
					
					<!--<li>
						<a href="./inbox">
							<i class="fa fa-th"></i> <span>Inbox</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green">Hot</small>
							</span>
						</a>
					</li>-->
					<!--
					<li class="treeview">
						<a href="#">
							<i class="fa fa-pie-chart"></i>
							<span>Charts</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
							<li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
							<li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
							<li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
						</ul>
					</li>
					
					<li class="treeview">
						<a href="#">
							<i class="fa fa-laptop"></i>
							<span>UI Elements</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
							<li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
							<li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
							<li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
							<li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
							<li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
						</ul>
					</li>
					
					<li class="treeview">
						<a href="#">
							<i class="fa fa-edit"></i> 
							<span>Forms</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
							<li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
							<li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
						</ul>
					</li>
					
					<li class="treeview">
						<a href="#">
							<i class="fa fa-table"></i> 
							<span>Tables</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
							<li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
						</ul>
					</li>
					
					<li>
						<a href="../calendar.html">
							<i class="fa fa-calendar"></i> 
							<span>Calendar</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-red">3</small>
								<small class="label pull-right bg-blue">17</small>
							</span>
						</a>
					</li>
					
					<li>
						<a href="../mailbox/mailbox.html">
							<i class="fa fa-envelope"></i> 
							<span>Mailbox</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-yellow">12</small>
								<small class="label pull-right bg-green">16</small>
								<small class="label pull-right bg-red">5</small>
							</span>
						</a>
					</li>
					
					<li class="treeview">
						<a href="#">
							<i class="fa fa-share"></i> 
							<span>Multilevel</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> Level One
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
									<li>
										<a href="#"><i class="fa fa-circle-o"></i> Level Two
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
											<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
						</ul>
					</li>
					-->
					<!--<li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
					<li class="header">LABELS</li>
					<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
					<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
					<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
@endsection

@section('content')
			<section class="content-header">
				<h1>
					Dashboard
					<small>Control panel</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</section>
			
			<section class="content">
				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3>150</h3>
								<p>New Orders</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				
				
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-green">
							<div class="inner">
							<h3>53<sup style="font-size: 20px">%</sup></h3>
								<p>Bounce Rate</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3>44</h3>
								<p>User Registrations</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-red">
							<div class="inner">
								<h3>65</h3>
								<p>Unique Visitors</p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				
				<div class="row"><!--
					<section class="col-lg-12 connectedSortable">
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs pull-right">
								<li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
								<li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
								<li class="pull-left header"><i class="fa fa-inbox"></i> Dokumen</li>
							</ul>
							<div class="tab-content no-padding">
								<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
								<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
							</div>
						</div>
					</section>-->
					<div class="col-lg-12">
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#surat-masuk" data-toggle="tab">Surat Masuk</a></li>
								<li><a href="#surat-keluar" data-toggle="tab">Surat Keluar</a></li>
								<li><a href="#settings" data-toggle="tab">Settings</a></li>
							</ul>
							<div class="tab-content">
								<div class="active tab-pane" id="surat-masuk">
									<div class="box box-primary" id="div-surat-masuk"><!--
										<div class="box-header">
											<div class="box-title">
												do something here
											</div>
										</div>-->
										<form class="form-horizontal" id="form-ruh">
											<div class="box-body">
												<p>sajglsrdg</p>
												<p>sajglsrdg</p>
												<p>sajglsrdg</p>
												<p>sajglsrdg</p>
												<p>sajglsrdg</p>
												<p>sajglsrdg</p>
											</div>
										</form>
									</div>
								</div>
								<div class="tab-pane" id="surat-keluar">
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
@endsection
