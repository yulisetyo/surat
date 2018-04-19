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
					Surat Masuk
					<small>Direktorat Sistem Informasi dan Teknologi Perbendaharaan</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-book"></i> Dokumen</a></li>
					<li><a href="#">Surat Masuk</a></li>
					<!--<li class="active">Blank page</li>-->
				</ol>
			</section>
		
			<!-- Main content -->
			<section class="content">
				<!-- Default box -->
				<div class="box box-info" id="div-ruh">
					<div class="box-header with-border">
						<div class="box-title">
							Rekam Dokumen
						</div>
					</div>
					<form class="form-horizontal" id="form-ruh">
						{{ csrf_field() }}
						<div class="box-body">
							<div class="form-group">
								<label class="control-label col-sm-2">Nomor Surat</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="nosurat" name="nosurat" placeholder="nomor surat" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Tanggal Surat</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="tglsurat" name="tglsurat" placeholder="tanggal surat" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Asal Surat</label>
								<div class="col-md-8">
									<label class="radio-inline">
										<input type="radio" name="radioasal1" id="radioasal1" value="1"> Internal DJPB
									</label>
									<label class="radio-inline">
										<input type="radio" name="radioasal1" id="radioasal2" value="2"> Instansi Lain
									</label>
								</div>
							</div>
							<div class="form-group" id="div-internal">
								<label class="control-label col-sm-2">Dari</label>
								<div class="col-sm-6">
									<select class="form-control chosen-select" id="dari" name="dari">
										<option value="" style="display:none;">Pilih</option>
										<option value="1" style="">Sekretaris Direktorat Jenderal</option>
										<option value="2" style="">Direktorat Pengelolaan Kas Negara</option>
										<option value="3" style="">Direktorat Pelaksanaan Anggaran</option>
									</select>
								</div>
							</div>
							<div class="form-group" id="div-external">
								<label class="control-label col-sm-2">Nama Instansi</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="instansi" name="instansi" placeholder="nama instansi asal dokumen" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Kepada</label>
								<div class="col-sm-6">
									<select class="form-control chosen-select" id="kepada" name="kepada">
										<option value="" style="display:none;">Pilih</option>
										<option value="1" style="">Direktur Sistem Informasi dan Teknologi Perbendaharaan</option>
										<option value="2" style="">Subdirektorat Perancangan dan Pengembangan Sistem Informasi</option>
										<option value="3" style="">Subdirektorat Pengelolaan Infrastruktur</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Kualifikasi</label>
								<div class="col-sm-3">
									<select class="form-control chosen-select" id="kualifikasi" name="kualifikasi">
										<option value="" style="display:none;">Pilih</option>
										<option value="1" style="">Biasa</option>
										<option value="2" style="">Segera</option>
										<option value="3" style="">Rahasia</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Klasifikasi</label>
								<div class="col-sm-3">
									<select class="form-control chosen-select" id="klasifikasi" name="klasifikasi">
										<option value="" style="display:none;">Pilih</option>
										<option value="1" style="">Biasa</option>
										<option value="2" style="">Segera</option>
										<option value="3" style="">Rahasia</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Lampiran</label>
								<div class="col-sm-1">
									<input type="text" class="form-control text-right" id="lampiran" name="lampiran" placeholder="0" />
								</div>
								<div class="control-label col-sm-1" style="text-align:left;">lembar</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Perihal</label>
								<div class="col-sm-10">
									<textarea class="form-control" id="perihal" name="perihal" placeholder="perihal surat"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Unggah Berkas</label>
								<div class="col-md-6">
									<input type="file" id="upload" name="upload" placeholder="" />
								</div>
							</div>
						</div>
					</form>
					<div class="box-footer text-right">
						<div title="Simpan data" class="btn btn-primary" id="simpan"><i class="fa fa-save"></i>  Simpan</div>
						<div title="Batal" class="btn btn-default" id="batal"><i class="fa fa-refresh"></i>  Batal</div>
					</div>
				</div>
				
				<div class="box box-info" id="div-tabel">
					<div class="box-header with-border">
						<div title="Rekam surat masuk" class="btn btn-primary" id="tambah"><i class="fa fa-plus"></i>
							Rekam Surat
						</div>
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
									<!--<th width="8%" style="background-color:#ADD8E6;text-align:center;"</th>Tanggal</th>	
									<th width="" style="background-color:#ADD8E6;text-align:center;">Dari</th>
									<th width="" style="background-color:#ADD8E6;text-align:center;">Sifat</th>
									<th width="" style="background-color:#ADD8E6;text-align:center;">Perihal</th>
									<th width="" style="background-color:#ADD8E6;text-align:center;">Aksi</th>-->
									<th width="8%" style=""</th>Tanggal Surat</th>	
									<th width="" style="">Nomor Surat</th>
									<th width="" style="">Dari</th>
									<th width="" style="">Sifat</th>
									<th width="" style="">Perihal</th>
									<th width="" style="">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="text-align:left;">05-04-2018 14:23:46</td>
									<td>ND-78/PB.8.5/2018</td>
									<td>Subdit Pengelolaan Infrastruktur</td>
									<td>Biasa</td>
									<td>Nota Dinas permintaan penambahan memori untuk server SIKP</td>
									<td style="text-align:center;">
										<div title="Tayangkan" class="tayang btn btn-default"><i class="fa fa-file-pdf-o"></i></div>
										<div title="Disposisi" class="disposisi btn btn-success"><i class="fa fa-arrow-down"></i></div>
										<div title="Teruskan" class="teruskan btn btn-danger"><i class="fa fa-arrow-right"></i></div>
									</td>
								</tr>
								<tr>
									<td style="text-align:left;">04-04-2018 09:19:52</td>
									<td>S-45/PB.8.5/2018</td>
									<td>Direktorat Pengelolaan Kas Negara</td>
									<td>Segera</td>
									<td>User requirement aplikasi rekening</td>
									<td style="text-align:center;">
										<div title="Tayangkan" class="tayang btn btn-default"><i class="fa fa-file-pdf-o"></i></div>
										<div title="Disposisi" class="disposisi btn btn-success"><i class="fa fa-arrow-down"></i></div>
										<div title="Teruskan" class="teruskan btn btn-danger"><i class="fa fa-arrow-right"></i></div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!--<div class="box-footer">
						Footer
					</div>-->
				</div>
				
				<div class="modal" id="modal-teruskan">
					<div class="modal-dialog">
						<div class="modal-content"><!--
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title">Default Modal</h4>
							</div>-->
							<div class="modal-body">
								<p>One fine body&hellip;</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i>X</button>
								<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="modal" id="modal-disposisi">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title">Default Modal</h4>
							</div>
							<div class="modal-body">
								<p>One fine body&hellip;</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>
				
			</section>
			<!-- /.content -->

<!--
	<script src="./adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
-->
	<script>
		jQuery(document).ready(function(){
			
			jQuery.fn.datepicker.dates['en'] = {
				days: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
				daysShort: ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],
				daysMin: ["Mi", "Se", "Sa", "Ra", "Ka", "Ju", "Sa"],
				months: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "December"],
				monthsShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
				today: "Hari ini",
				clear: "Clear",
				format: "mm/dd/yyyy",
				titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
				weekStart: 0,
			}; 
			
			jQuery('#tglsurat').datepicker({
				autoclose: true,
				format: 'yyyy-mm-dd',
				todayBtn: true,
				todayHighlight: true,
			});

			jQuery('.chosen-select').chosen();
			jQuery('.chosen-select').trigger('chosen:updated');
			
			function form_default() {
				jQuery('#div-tabel').show();
				jQuery('#div-ruh,#div-external').hide();
				jQuery('input').val('');
				jQuery('#dari,#kepada,#perihal').val('').trigger('chosen:updated');
				jQuery('#radioasal1,#radioasal2').prop('checked', false);
			}
			
			form_default();
			
			jQuery('#radioasal1').click(function(){
				jQuery('#radioasal2').prop('checked', false);
				jQuery('#div-internal').show();
				jQuery('#div-external').hide();
				
			});
			
			jQuery('#radioasal2').click(function(){
				jQuery('#radioasal1').prop('checked', false);
				jQuery('#div-internal').hide();
				jQuery('#div-external').show();
				jQuery('#dari').val('').trigger('chosen:updated');
			});
			
			jQuery('#tambah').click(function(){
				jQuery('#div-tabel').hide();
				jQuery('#div-ruh').show();
			});
			
			jQuery('#simpan').click(function(){
				var closable = alertify.alert().setting('closable');
				var dataform = jQuery('#form-ruh').serialize();
				alert(dataform);
				form_default();
			});
			
			jQuery('#batal').click(function(){
				form_default();
			});
			
			jQuery('body').off('click', '.tayang').on('click', '.tayang', function(){
				//~ alertify.message('tayang');
				jQuery('#modal-teruskan').modal({keyboard: false});
			});
			
			jQuery('body').off('click', '.disposisi').on('click', '.disposisi', function(){
				//~ alertify.success('Surat didisposisikan ke ...');
				jQuery('#modal-disposisi').modal({keyboard: false});
			});
			
			jQuery('body').off('click', '.teruskan').on('click', '.teruskan', function(){
				var closable = alertify.alert().setting('closable');
				
				alertify.confirm('Konfirmasi','Apakah surat ini akan diteruskan?', 
				function(){
					alertify.success('Surat sudah diteruskan');
				}, 
				function(){
					alertify.error('Surat tidak akan diteruskan')
				});
			});
		});
	</script>
	
@endsection
