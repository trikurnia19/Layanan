<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light ddn-bg-gradient">
	<div class="container p-1">
		<a href="<?= base_url('user'); ?>"><img src="images/logo.png" alt="" style="width: 34px; height: auto;"></a>
		<a href="<?= base_url('user'); ?>" class="btn float-right bg-primary btn-sm text-white"><strong><i class="fas fa-home mr-1"></i>Beranda</strong></a>
	</div>
</nav>
<form action="<?php echo base_url() . 'Surat/add_sk_domisili'; ?>" method="post">
	<div class="row text-left">
		<div class="col-lg-12">
			<div class="block-heading">
				<h2>FORM SURAT KETERANGAN DOMISILI</h2>
			</div>
			<!-- Isian Form 1-->
			<div class="container-fluid shadow p-3  mb-3 bg-white rounded m-3">
				<p class="text-left" style="font-size: 25px;">Form 1 Identitas Diri</p>
				<hr>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama" value="<?= $user['nama']; ?>" required>
					</div>
					<input type="text" name="no_nik" class="form-control" id="no_nik" placeholder="Masukan NIK" value="<?= $user['no_nik']; ?>" hidden required>
					<input type="text" name="no_kk" class="form-control" id="no_kk" placeholder="Masukan KK" value="<?= $user['no_kk']; ?>" hidden required>
					<div class="form-group col-md-6">
						<label>Agama</label>
						<select name="agama" id="agama" class="form-control">
							<option selected>Islam</option>
							<option>Kristen</option>
							<option>Katholik</option>
							<option>Hindu</option>
							<option>Budha</option>
							<option>Aliran Kepercayaan</option>
						</select>
					</div>
				</div>

					
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Tempat Lahir</label>
						<input type="text" name="tempat_lahir" class="form-control" id="tempat" placeholder="Masukan Tempat Lahir" value="<?= $user['tempat_lahir']; ?>" required>
					</div>
					<div class="form-group col-md-3">
						<label>Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir" class="form-control" id="tgl" value="<?= $user['tanggal_lahir']; ?>" required>
					</div>
					<div class="form-group col-md-3">
						<label>Jenis Kelamin</label>
						<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
							<option selected>Laki - Laki</option>
							<option>Perempuan</option>
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Pekerjaan</label>
						<input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan" value="<?= $user['pekerjaan']; ?>" required>
					</div>
					<div class="form-group col-md-6">
						<label>Kabupaten/Kota</label>
						<input id="kabupaten" name="kab_kota" class="form-control" value="<?= $user['kab_kota']; ?>" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Kecamatan</label>
						<input id="kecamatan" name="kecamatan" class="form-control" value="<?= $user['kecamatan']; ?>" required>
					</div>
					<div class="form-group col-md-6">
						<label>Kelurahan/Desa</label>
						<input id="kelurahan" name="kelurahan" class="form-control" value="<?= $user['desa']; ?>" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>RT</label>
						<input type="number" name="rt" class="form-control" id="rt" value="<?= $user['RT']; ?>" required>
					</div>
					<div class="form-group col-md-6">
						<label>RW</label>
						<input type="number" name="rw" class="form-control" id="rw" value="<?= $user['RW']; ?>" required>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Alamat</label>
						<textarea class="form-control" name="alamat" id="alamat" rows="2" placeholder="<?= $user['alamat']; ?>" value="<?= $user['alamat']; ?>" required></textarea>
					</div>
					<div class="form-group col-md-6">
						<label>Provinsi</label>
						<input id="provinsi" name="provinsi" class="form-control" placeholder="<?= $user['provinsi']; ?>" value="<?= $user['provinsi']; ?>" required>
					</div>	
				</div>
				
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Pendidikan</label>
						<input type="text" name="pendidikan" class="form-control" id="pendidikan" placeholder="Masukan Pendidikan Terakhir" required>
					</div>
				
					<div class="form-group col-md-6">
						<label>Nama Orang Tua</label>
						<input type="text" name="nama_ortu" class="form-control" id="nama_ortu" placeholder="Masukan Nama Orang Tua" required>
					</div>
				</div>
					<div class="form-group">
						<label>Status Perkawinan</label>
						<input type="text" name="status_perkawinan" class="form-control" id="status_perkawinan" placeholder="Masukan Status Perkawinan" required>
					</div>
				
				<div class="form-group">
					<label>Keperluan</label>
					<input type="text" class="form-control" name="keperluan" id="keperluan" placeholder="Masukan keperluan pembuatan surat" required>
				</div>
				<div class="text-center">
					<a href="<?= base_url('user') ?>" type="button" class="btn btn-danger mr-2"><i class="fas fa-times mr-2"></i>Batal</a>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPrint"><i class="fas fa-send mr-2"></i>Ajukan</button>
				</div>
			</div>
		</div>
		<div class="modal fade" id="modalPrint" tabindex="-1" role="dialog" aria-labelledby="modalPrint" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<i class="fas fa-send mb-4 mt-4" style="color: green; font-size:44px"></i>
						<h5>Apakah anda yakin data anda sudah benar ?</h5>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
						<button type="submit" class="btn btn-primary">Yakin</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</form>



<footer class="footer text-center">
	<div class="container">
		<p class="text-muted small mb-0">Copyright © Teknik Informatika UIN Bandung</p>
		<p class="text-muted small mb-0">Kelurahan Karyamukti Kecamatan Garut Kota Kabupaten Garut</p>
	</div>
</footer>
