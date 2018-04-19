@extends('master')

@section('content')
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					My Task
					<!--<small>it all starts here</small>-->
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dokumen</a></li>
					<li><a href="#">Surat Keluar</a></li>
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
