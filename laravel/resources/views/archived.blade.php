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
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Arsip
					<!--<small>it all starts here</small>-->
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dokumen</a></li>
					<li><a href="#">Arsip</a></li>
					<!--<li class="active">Blank page</li>-->
				</ol>
			</section>
		
			<!-- Main content -->
			<section class="content">
				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<!--<h3 class="box-title">Inbox</h3>-->
						<!--<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
						</div>-->
					</div>
					<div class="box-body">
						<!--Start creating your amazing application!<br>-->
						<table class="table table-responsive table-hover table-condensed">
							<thead>
								<tr>
									<th width="8%" style="background-color:#ADD8E6;text-align:center;">Tanggal</th>	
									<th width="" style="background-color:#ADD8E6;text-align:center;">Dari</th>
									<th width="" style="background-color:#ADD8E6;text-align:center;">Sifat</th>
									<th width="" style="background-color:#ADD8E6;text-align:center;">Perihal</th>
									<th width="" style="background-color:#ADD8E6;text-align:center;">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="text-align:left;">05-04-2018 14:23:46</td>
									<td>Subdit Pengelolaan Infrastruktur</td>
									<td>Biasa</td>
									<td>Nota Dinas permintaan penambahan memori untuk server SIKP</td>
									<td style="text-align:center;">
										<a href="" title="Tayangkan" class="btn btn-xs btn-primary"><i class="fa fa-file-pdf-o"></i></a>
										<a href="" title="Disposisi" class="btn btn-xs btn-success"><i class="fa fa-arrow-down"></i></a>
										<a href="" title="Teruskan" class="btn btn-xs btn-danger"><i class="fa fa-arrow-right"></i></a>
									</td>
								</tr>
								<tr>
									<td style="text-align:left;">04-04-2018 09:19:52</td>
									<td>Direktorat Pengelolaan Kas Negara</td>
									<td>Segera</td>
									<td>User requirement aplikasi rekening</td>
									<td style="text-align:center;">
										<a id="tayang" href="" title="Tayangkan" class="btn btn-xs btn-primary"><i class="fa fa-file-pdf-o"></i></a>
										<a id="disposisi" href="" title="Disposisi" class="btn btn-xs btn-success"><i class="fa fa-arrow-down"></i></a>
										<a id="teruskan" href="" title="Teruskan" class="btn btn-xs btn-danger"><i class="fa fa-arrow-right"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
					<!--<div class="box-footer">
						Footer
					</div>-->
					<!-- /.box-footer-->
				</div>
				<!-- /.box -->
			</section>
			<!-- /.content -->
@endsection
