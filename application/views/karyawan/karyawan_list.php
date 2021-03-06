<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Dashboard</a></li>
		<li class="active">Karyawan</li>
	</ol>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Data Karyawan</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="box-body">
									<div class='row'>
										<div class='col-md-9'>
											<?php if ($this->fungsi->user_login()->level_id == 1) { ?>
												<div style="padding-bottom: 10px;">
													<?php echo anchor(site_url('karyawan/create'), '<i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm tambah_data"'); ?>
												</div>
											<?php } ?>

										</div>
									</div>
									<div class="box-body" style="overflow-x: scroll; ">
										<table id="data-table" class="table table-bordered table-hover table-td-valign-middle">
											<thead>
												<tr>
													<th>No</th>
													<th>Nik</th>
													<th>Nama Karyawan</th>
													<th>Jabatan</th>
													<th>Departemen</th>
													<th>Alamat</th>
													<th>Jenis Kelamin</th>
													<th>Tanggal Lahir</th>
													<th>Tanggal Masuk</th>
													<th>No Telpon</th>
													<th>Status Karyawan</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody><?php $no = 1;
													foreach ($karyawan_data as $karyawan) {
													?>
													<tr>
														<td><?= $no++ ?></td>
														<td><?php echo $karyawan->nik ?></td>
														<td><?php echo $karyawan->nama_karyawan ?></td>
														<td><?php echo $karyawan->nama_jabatan ?></td>
														<td><?php echo $karyawan->nama_departemen ?></td>
														<td><?php echo $karyawan->alamat ?></td>
														<td><?php echo $karyawan->jenis_kelamin ?></td>
														<td><?php echo $karyawan->tanggal_lahir ?></td>
														<td><?php echo $karyawan->tanggal_masuk ?></td>
														<td><?php echo $karyawan->no_telpon ?></td>
														<td><?php echo $karyawan->status_karyawan ?></td>
														<td style="text-align:center" width="200px">
															<?php
															// echo anchor(site_url('karyawan/read/' . encrypt_url($karyawan->karyawan_id)), '<i class="fa fa-eye" aria-hidden="true"></i>', 'class="btn btn-success btn-sm update_data"');
															// echo '  ';
															if ($this->fungsi->user_login()->level_id == 1) {
																echo anchor(site_url('karyawan/update/' . encrypt_url($karyawan->karyawan_id)), '<i class="fa fa-pencil" aria-hidden="true"></i>', 'class="btn btn-primary btn-sm update_data"');
																echo '  ';
																echo anchor(site_url('karyawan/delete/' . encrypt_url($karyawan->karyawan_id)), '<i class="fa fa-trash" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm delete_data" Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
															}
															?>
														</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
