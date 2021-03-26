<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light ddn-bg-gradient">
	<div class="container p-1">
		<a href="<?= base_url('user'); ?>"><img src="images/logo.png" alt="" style="width: 34px; height: auto;"></a>
		<a href="<?= base_url('user'); ?>" class="btn float-right bg-primary btn-sm text-white"><strong><i class="fas fa-home mr-1"></i>Beranda</strong></a>
	</div>
</nav>
<form action="<?php echo base_url() . 'Surat/add_sk_pindah'; ?>" method="post">
	<div class="row text-left">
		<div class="col-lg-12">
			<div class="block-heading">
				<h2>FORM SURAT PINDAH</h2>
			</div>
			<!-- Isian Form 1-->
			<div class="container-fluid shadow p-3  mb-3 bg-white rounded m-3">
				<p class="text-left" style="font-size: 25px;">Form 1 Data Daerah Asal</p>
				<hr>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Nama Kepala Keluarga </label>
						<input type="text" name="nama_kk" class="form-control" id="nama_kk" placeholder="Masukan Nama Kepala Keluarga"  required>
					</div>
					<div class="form-group col-md-6">
                    <label>Nomor KK</label>
                    <input type="text" name="no_kk" class="form-control" id="no_kk" placeholder="Masukan KK " value="<?= $user['no_kk']; ?>" required>
                    </div>
                     <input type="text" name="no_nik" class="form-control" id="no_nik" placeholder="Masukan NIK " value="<?= $user['no_nik']; ?>" hidden required>
                     <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan nama " value="<?= $user['nama']; ?>" hidden required>
                   
				</div>


				<div class="form-row">
				    <div class="form-group col-md-6">
					<label>Alamat</label>
					<textarea class="form-control" name="alamat" id="alamat"  placeholder="<?= $user['alamat']; ?>" value="<?= $user['alamat']; ?>" required></textarea>
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
						<label>Provinsi</label>
						<input type="text" name="provinsi" class="form-control" id="provinsi" placeholder="<?= $user['provinsi']; ?>" value="<?= $user['provinsi']; ?>" required>
					</div>
				
                    <div class="form-group col-md-6">
					<label>Kode Pos</label>
					<input type="text" class="form-control" name="pos" id="pos" placeholder="Masukan Kode Pos"required>
				</div>
				</div>
					
				
				
			</div>

            <div class="container-fluid shadow p-3  mb-3 bg-white rounded m-3">
				<p class="text-left" style="font-size: 25px;">Form 2 Data Kepindahan </p>
				<hr>

                <div class="form-row">
					<div class="form-group col-md-6">
						<label>Alasan Pindah</label>
						<select name="alasan_pindah" id="alasan_pindah"  class="form-control" required>
							<option selected>1.Pekerjaan</option>	
							<option>2.Pendidikan</option>	
							<option>3.Keamanan</option>	
							<option>4.Kesehatan</option>	
							<option>5.Perumahan</option>	
							<option>6.Keluarga</option>	
							<option>7.Lainnya</option>	
						</select>
                        </div>
					
                    <div class="form-group col-md-6">
						<label>Jenis Kepindahan</label>
						<select name="jenis_pindah" id="jenis_pindah"  class="form-control" required>
							<option selected>1.Kepala Keluarga</option>	
							<option>2.Kepala & Seluruh Anggota</option>	
							<option>3.Kepala & Sebagian Anggota</option>	
							<option>4.Anggota Keluarga</option>		
						</select>
                        </div>
				</div>
	
                <div class="form-row">
					    <div class="form-group col-md-6">
						<label>Status KK bagi yang tidak pindah</label>
						<select name="status_kk_tpindah" id="skktp"  class="form-control" required>
							<option selected>1.Tetap</option>	
							<option>2.KK Baru</option>		
						</select>
                        </div>
					
                        <div class="form-group col-md-6">
						<label>Status KK bagi yang pindah</label>
						<select name="status_kk_pindah" id="skkp"  class="form-control" required>
							<option selected>1.Numpang KK</option>	
							<option>2.Membuat KK Baru</option>	
						</select>
                        </div>
				</div>
                <div class="form-row">
				    <div class="form-group col-md-6">
					<label>Alamat</label>
					<textarea class="form-control" name="alamat_tujuan" id="alamat_tujuan"  placeholder="Masukan Alamat tujuan " required></textarea>
				    </div>
					<div class="form-group col-md-6">
						<label>Kabupaten/Kota</label>
						<input id="kab_kota_tujuan" name="kab_kota_tujuan" class="form-control" placeholder="Masukan Kab/Kota tujuan " required>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Kecamatan</label>
						<input id="kecamatan_tujuan" name="kecamatan_tujuan" class="form-control" placeholder="Masukan Kecamatan tujuan " required>
					</div>
					<div class="form-group col-md-6">
						<label>Kelurahan/Desa</label>
						<input id="kelurahan_tujuan" name="kelurahan_tujuan" class="form-control" placeholder="Masukan Kel/Desa tujuan " required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>RT</label>
						<input type="number" name="rt_tujuan" class="form-control" id="rt_tujuan" placeholder="Masukan RT tujuan " required>
					</div>
					<div class="form-group col-md-6">
						<label>RW</label>
						<input type="number" name="rw_tujuan" class="form-control" id="rw_tujuan" placeholder="Masukan RW tujuan " required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Provinsi</label>
						<input type="text" name="provinsi_tujuan" class="form-control" id="provinsi_tujuan" placeholder="Masukan Provinsi tujuan " required>
					</div>
				
                    <div class="form-group col-md-6">
					<label>Kode Pos</label>
					<input type="text" class="form-control" name="pos_tujuan" id="pos_tujuan" placeholder="Masukan Kode Pos tujuan "required>
				</div>
				</div>

                <div class="form-group">
					<label>Keluarga yang pindah</label>
					<textarea class="form-control" name="kel_pindah" id="kel_pindah"  placeholder="Nama1/Nama2/Dst" required></textarea>
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
