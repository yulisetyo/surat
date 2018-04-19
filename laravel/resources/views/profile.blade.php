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
					Profil Pegawai
					<!--<small>it all starts here</small>-->
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-User"></i> Beranda</a></li>
					<li><a href="#">Profil</a></li>
					<!--<li class="active">Blank page</li>-->
				</ol>
			</section>
		
			<!-- Main content -->
			<section class="content">
				<!-- Default box -->
					<div class="row">
						<div class="col-md-3">
							<div class="box box-primary">
								<div class="box-body box-profile">
									<img class="profile-user-img img-responsive img-circle" src="../adminlte/dist/img/user4-128x128.jpg" alt="User profile picture">
									<h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
									<p class="text-muted text-center">{{ Auth::user()->nip }}</p><!--
									<p class="text-muted text-center">Pengatur Tingkat I (II/d)</p>
									<p class="text-muted text-center">Seksi Pengembangan Aplikasi II</p>-->
								</div>
							</div>
							
							<div class="box box-primary"><!--
								<div class="box-header with-border">
									<h3 class="box-title">Tentang Saya</h3>
								</div>-->
								<div class="box-body">
									<strong><i class="fa fa-book margin-r-5"></i> Unit Kerja</strong>
									<p class="text-muted">
										Seksi Pengembangan Aplikasi II
									</p>
									<hr>
									
									<strong><i class="fa fa-map-marker margin-r-5"></i> Pangkat dan Golongan</strong>
									<p class="text-muted">
										Pengatur Tingkat I (II/d)
									</p>
									<hr>
									
									<strong><i class="fa fa-map-marker margin-r-5"></i> Jabatan</strong>
									<p class="text-muted">
										Penyaji Data Senior Pengembangan Aplikasi II
									</p>
									<hr>
									
								</div>
							</div>
						</div>
						<!--=========================================-->
						<div class="col-md-9"> 
							<div class="nav-tabs-custom">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#kepegawaian" data-toggle="tab">Kepegawaian</a></li>
									<li><a href="#keluarga" data-toggle="tab">Keluarga</a></li>
									<li><a href="#kepangkatan" data-toggle="tab">Kepangkatan</a></li>
									<li><a href="#jabatan" data-toggle="tab">Jabatan</a></li>
									<li><a href="#pendidikan" data-toggle="tab">Pendidikan</a></li>
									<li><a href="#diklat" data-toggle="tab">Diklat</a></li>
								</ul>
								<div class="tab-content">
									<div class="active tab-pane" id="kepegawaian">
										<div class="box box-info">
											<div class="box-header with-border">
												<div class="box-title">Data Kepegawaian</div>
											</div>
											<div class="box-body">
												content here
											</div>
										</div>
									</div>
									<div class="tab-pane" id="keluarga">
										<div class="box box-info">
											<div class="box-header with-border">
												<div class="box-title">Data Keluarga</div>
											</div>
											<div class="box-body">
												content here
											</div>
										</div>
									</div>
									<div class="tab-pane" id="kepangkatan">
										<div class="box box-info">
											<div class="box-header with-border">
												<div class="box-title">Riwayat Kepangkatan</div>
											</div>
											<div class="box-body">
												content here
											</div>
										</div>
									</div>
									<div class="tab-pane" id="pendidikan">
										<div class="box box-info">
											<div class="box-header with-border">
												<div class="box-title">Riwayat Pendidikan</div>
											</div>
											<div class="box-body">
												content here
											</div>
										</div>
									</div>
									<div class="tab-pane" id="jabatan">
										<div class="box box-info">
											<div class="box-header with-border">
												<div class="box-title">Riwayat Jabatan</div>
											</div>
											<div class="box-body">
												content here
											</div>
										</div>
									</div>
									<div class="tab-pane" id="diklat">
										<div class="box box-info">
											<div class="box-header with-border">
												<div class="box-title">Riwayat Diklat</div>
											</div>
											<div class="box-body">
												content here
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
@endsection

<script src="./js/jquery-2.2.3.js"></script>
<script>
	jQuery(document).ready(function(){
		jQuery('body').off('click', '.tayang').on('click', '.tayang', function(){
			alert('tayang');
		});
	});
</script>
