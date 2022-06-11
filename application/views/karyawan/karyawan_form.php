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
					<h4 class="panel-title">Data KARYAWAN</h4>
				</div>
				<div class="panel-body">

					<form action="<?php echo $action; ?>" method="post">
						<thead>
							<table id="data-table-default" class="table  table-bordered table-hover table-td-valign-middle">
								<tr>
									<td>Nik <?php echo form_error('nik') ?></td>
									<td><input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" /></td>
								</tr>
								<tr>
									<td>Nama Karyawan <?php echo form_error('nama_karyawan') ?></td>
									<td><input type="text" class="form-control" name="nama_karyawan" id="nama_karyawan" placeholder="Nama Karyawan" value="<?php echo $nama_karyawan; ?>" /></td>
								</tr>
								<tr>
									<td>Jabatan <?php echo form_error('jabatan_id') ?></td>
									<td><input type="text" class="form-control" name="jabatan_id" id="jabatan_id" placeholder="Jabatan Id" value="<?php echo $jabatan_id; ?>" /></td>
								</tr>
								<tr>
									<td>Departemen <?php echo form_error('departemen_id') ?></td>
									<td><input type="text" class="form-control" name="departemen_id" id="departemen_id" placeholder="Departemen Id" value="<?php echo $departemen_id; ?>" /></td>
								</tr>

								<tr>
									<td>Alamat <?php echo form_error('alamat') ?></td>
									<td> <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea></td>
								</tr>
								<tr>
									<td>Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></td>
									<td><input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" /></td>
								</tr>
								<tr>
									<td>Tanggal Lahir <?php echo form_error('tanggal_lahir') ?></td>
									<td><input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" /></td>
								</tr>
								<tr>
									<td>Tanggal Masuk <?php echo form_error('tanggal_masuk') ?></td>
									<td><input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk" value="<?php echo $tanggal_masuk; ?>" /></td>
								</tr>
								<tr>
									<td>No Telpon <?php echo form_error('no_telpon') ?></td>
									<td><input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="No Telpon" value="<?php echo $no_telpon; ?>" /></td>
								</tr>
								<tr>
									<td>Status Karyawan <?php echo form_error('status_karyawan') ?></td>
									<td><input type="text" class="form-control" name="status_karyawan" id="status_karyawan" placeholder="Status Karyawan" value="<?php echo $status_karyawan; ?>" /></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="hidden" name="karyawan_id" value="<?php echo $karyawan_id; ?>" />
										<button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> <?php echo $button ?></button>
										<a href="<?php echo site_url('karyawan') ?>" class="btn btn-info"><i class="fa fa-undo"></i> Kembali</a>
									</td>
								</tr>
						</thead>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>