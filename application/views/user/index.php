<!--  -->
<!-- Navigation -->
<div class="logo">
	<img src="<?= base_url('assets/'); ?>/user/images/munding.png" alt="" style="width: 34px; height: auto;">
</div>
<a class="menu-toggle rounded" href="#">
	<i class="fa fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<li class="sidebar-brand">
			<a class="smooth-scroll" href="#Header"></a>
		</li>
		<li class="sidebar-nav-item">
			<a class="smooth-scroll" href="#jenis">JENIS LAYANAN</a>
		</li>
		<li class="sidebar-nav-item">
			<a class="smooth-scroll" href="#riwayat">RIWAYAT PENGAJUAN</a>
		</li>
		<br><br><br>
		<li>
			<hr class="bg-light ml-3 mr-3 p-0">
		</li>
		<li class="sidebar-nav-item text-white text-center">
			<div class="row">
				<div class="col-md-3 col-lg-3 p-0">
					<img class="img-circle smooth-scroll ml-3 mr-3" src="<?= base_url('assets/'); ?>user/images/default.jpg" alt="" style="width: 40px; border-radius: 50%;">

				</div>
				<div class="col-md-9 col-lg-9 text-left p-0 mr-10">
					<strong><?= $user['nama']; ?></strong>
				</div>
			</div>
		</li>
		<li>
			<hr class="bg-light ml-3 mr-3">
		</li>
		<li class="sidebar-nav-item">
			<a class="btn-primary btn-sm ml-3 mb-1 mt-2 text-center p-1 mr-1 col-6" href="<?= base_url('user/profil'); ?>">Ubah Profil</a>
			<a class="btn-primary btn-sm ml-3 mb-1 mt-2 text-center p-1 mr-1 col-6" href="<?= base_url('user/ganti_password'); ?>">Ganti Password</a>
			<a class="btn-danger btn-sm ml-3 mb-1 mt-2 text-center p-1 col-6" href="<?= base_url('auth/logout'); ?>">Logout</a>
		</li>
</nav>

<!-- Header Starts -->
<section id="Banner" class="content-section">
	<div class="container content-wrap text-center">
		<h1>Selamat Datang</h1>
		<h3><?= $user['nama']; ?></h3>
		<h3>
			<em>di Website Pelayanan Desa Karyamukti</em>
		</h3>
		<a class="btn btn-primary btn-xl smooth-scroll" href="#tentang">JELAJAHI</a>
	</div>
	<div class="overlay"></div>
</section>
<!-- Header Ends -->

<!-- Tentang Kami -->
<section id="tentang" class="content-section">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-12">
				<div class="block-heading">
					<h2>TENTANG KAMI</h2>
				</div>
				<p class="lead">WEB Pelayanan Karyamukti berfungsi untuk mempermudah warga  dalam pengajuan keperluan administrasi, dengan mudah,cepat dan efisien.</p>
			</div>
		</div>
	</div>
</section>

<!-- Jenis Pengajuan -->
<section id="jenis" class="content-section text-center">
	<div class="container">
		<div class="block-heading">
			<h2>JENIS LAYANAN</h2>
			<p>Pilih layanan yang anda perlukan</p>
		</div>

		<div class="card-deck m-3">
		
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">Pembuatan KK Baru</h5>
					<hr>
					<a href="<?= base_url('pengajuan/pembuatanKK'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>

			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">Pembaruan KK</h5>
					<hr>
					<a href="<?= base_url('pengajuan/pembaruanKK'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>

			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">Pembuatan KTP</h5>
					<hr>
					<a href="<?= base_url('pengajuan/pembuatanKTP'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>

			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">Pembuatan Akta Lahir</h5>
					<hr>
					<a href="<?= base_url('pengajuan/pembuatanAktalahir'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>

			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">Pembuatan Perizinan</h5>
					<hr>
					<a href="<?= base_url('pengajuan/pembuatanIzin'); ?>" class="btn btn-primary">BUAT</a>
				</div>
				
			</div>

		</div>

		<div class="card-deck m-3">

			
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">Migrasi</h5>
					<hr>
					<a href="<?= base_url('pengajuan/migrasi'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>

			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SK Belum Menikah</h5>
					<hr>
					<a href="<?= base_url('user/sk_belummenikah'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>

			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SK Kelakuan Baik</h5>
					<hr>
					<a href="<?= base_url('user/sk_kelakuanbaik'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>

			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SK Usaha</h5>
					<hr>
					<a href="<?= base_url('user/sk_usaha'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>

			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SK Tidak Mampu</h5>
					<hr>
					<a href="<?= base_url('user/sk_tidakmampu'); ?>" class="btn btn-primary">BUAT</a>
				</div>
				<td></td>
			</div>
		</div>

		<div class="card-deck m-3">
		
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SK Domisili</h5>
					<hr>
					<a href="<?= base_url('user/sk_domisili'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>

			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SK Serba Guna</h5>
					<hr>
					<a href="<?= base_url('user/sk_serba'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>

			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SK Pindah</h5>
					<hr>
					<a href="<?= base_url('user/sk_pindah'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>

			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SK Kematian</h5>
					<hr>
					<a href="<?= base_url('user/sk_kematian'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
		
			<div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">SK Kelahiran</h5>
					<hr>
					<a href="<?= base_url('user/sk_kelahiran'); ?>" class="btn btn-primary">BUAT</a>
				</div>
			</div>
		</div>

		<!-- <div class="card-deck m-3">
			

			<!-- <div class="card pt-3">
				<img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
				<div class="card-body">
					<h5 class="card-title">FORM KTP?</h5>
					<hr>
					<a href="<?= base_url('pengajuan/ktp'); ?>" class="btn btn-primary">BUAT</a>
				</div>
				<td></td>
			</div> -->

		<!-- </div> -->
	
	</div>
	
		
		
	</div>
	</div>
</section>

<!-- Riwayat Pengajuan -->
<section id="riwayat" class="content-section">
	<div class="container">
		<div class="block-heading">
			<h2>RIWAYAT PENGAJUAN</h2>
			<p>Layanan yang telah anda ajukan</p>
		</div>
	</div>
	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Layanan yang di ajukan</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Status</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				
				<?php
				$i = 1;
				foreach ($pb_kkbaru as $pb_kkbaru) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $pb_kkbaru['nama_surat'] ?></td>
						<td><?= $pb_kkbaru['tgl_ajukan'] ?></td>
						<td><span class="badge badge-<?= ($pb_kkbaru['status_surat'] == 'Diterima') ? 'success' : (($pb_kkbaru['status_surat'] == 'Ditolak' || $pb_kkbaru['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $pb_kkbaru['status_surat'] ?></span></td>
						<?php if ($pb_kkbaru['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_kkbaru_batal/' . $pb_kkbaru['id_kkbaru']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				
				<?php
				$i = 2;
				foreach ($pb_kk as $pb_kk) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $pb_kk['nama_surat'] ?></td>
						<td><?= $pb_kk['tgl_ajukan'] ?></td>
						<td><span class="badge badge-<?= ($pb_kk['status_surat'] == 'Diterima') ? 'success' : (($pb_kk['status_surat'] == 'Ditolak' || $pb_kk['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $pb_kk['status_surat'] ?></span></td>
						<?php if ($pb_kk['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_pbkk_batal/' . $pb_kk['id_pbkk']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				
				<?php
				$i = 3;
				foreach ($pb_ktp as $pb_ktp) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $pb_ktp['nama_surat'] ?></td>
						<td><?= $pb_ktp['tgl_ajukan'] ?></td>
						<td><span class="badge badge-<?= ($pb_ktp['status_surat'] == 'Diterima') ? 'success' : (($pb_ktp['status_surat'] == 'Ditolak' || $pb_ktp['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $pb_ktp['status_surat'] ?></span></td>
						<?php if ($pb_ktp['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_pbktp_batal/' . $pb_ktp['id_pbktp']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>

				<?php
				$i = 4;
				foreach ($pb_akta as $pb_akta) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $pb_akta['nama_surat'] ?></td>
						<td><?= $pb_akta['tgl_ajukan'] ?></td>
						<td><span class="badge badge-<?= ($pb_akta['status_surat'] == 'Diterima') ? 'success' : (($pb_akta['status_surat'] == 'Ditolak' || $pb_akta['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $pb_akta['status_surat'] ?></span></td>
						<?php if ($pb_akta['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_pbakta_batal/' . $pb_akta['id_pbakta']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>

				<?php
				$i = 5;
				foreach ($pb_izin as $pb_izin) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $pb_izin['nama_surat'] ?></td>
						<td><?= $pb_izin['tgl_ajukan'] ?></td>
						<td><span class="badge badge-<?= ($pb_izin['status_surat'] == 'Diterima') ? 'success' : (($pb_izin['status_surat'] == 'Ditolak' || $pb_izin['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $pb_izin['status_surat'] ?></span></td>
						<?php if ($pb_izin['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_pbizin_batal/' . $pb_izin['id_pbizin']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				
				<?php
				$i = 6;
				foreach ($pb_migrasi as $pb_migrasi) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $pb_migrasi['nama_surat'] ?></td>
						<td><?= $pb_migrasi['tgl_ajukan'] ?></td>
						<td><span class="badge badge-<?= ($pb_migrasi['status_surat'] == 'Diterima') ? 'success' : (($pb_migrasi['status_surat'] == 'Ditolak' || $pb_migrasi['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $pb_migrasi['status_surat'] ?></span></td>
						<?php if ($pb_migrasi['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_pbmigrasi_batal/' . $pb_migrasi['id_pbmigrasi']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				
				<?php
				$i = 7;
				foreach ($sk_belummenikah as $sk_belummenikah) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $sk_belummenikah['jenis_surat'] ?></td>
						<td><?= $sk_belummenikah['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($sk_belummenikah['status_surat'] == 'Diterima') ? 'success' : (($sk_belummenikah['status_surat'] == 'Ditolak' || $sk_belummenikah['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $sk_belummenikah['status_surat'] ?></span></td>
						<?php if ($sk_belummenikah['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_sk_belummenikah_batal/' . $sk_belummenikah['id_surat_belummenikah']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>

				<?php
				$i = 8;
				foreach ($sk_kelakuanbaik as $sk_kelakuanbaik) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $sk_kelakuanbaik['jenis_surat'] ?></td>
						<td><?= $sk_kelakuanbaik['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($sk_kelakuanbaik['status_surat'] == 'Diterima') ? 'success' : (($sk_kelakuanbaik['status_surat'] == 'Ditolak' || $sk_kelakuanbaik['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $sk_kelakuanbaik['status_surat'] ?></span></td>
						<?php if ($sk_kelakuanbaik['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_sk_kelakuanbaik_batal/' . $sk_kelakuanbaik['id_surat_kelakuanbaik']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>

				<?php
				$i = 9;
				foreach ($sk_usaha as $sk_usaha) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $sk_usaha['jenis_surat'] ?></td>
						<td><?= $sk_usaha['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($sk_usaha['status_surat'] == 'Diterima') ? 'success' : (($sk_usaha['status_surat'] == 'Ditolak' || $sk_usaha['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $sk_usaha['status_surat'] ?></span></td>
						<?php if ($sk_usaha['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_sk_usaha_batal/' . $sk_usaha['id_surat_usaha']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				
				<?php
				$i = 10;
				foreach ($sk_tidakmampu as $sk_tidakmampu) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $sk_tidakmampu['jenis_surat'] ?></td>
						<td><?= $sk_tidakmampu['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($sk_tidakmampu['status_surat'] == 'Diterima') ? 'success' : (($sk_tidakmampu['status_surat'] == 'Ditolak' || $sk_tidakmampu['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $sk_tidakmampu['status_surat'] ?></span></td>
						<?php if ($sk_tidakmampu['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_sk_tidakmampu_batal/' . $sk_tidakmampu['id_surat_tidakmampu']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				
				<?php
				$i = 11;
				foreach ($sk_domisili as $sk_domisili) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $sk_domisili['jenis_surat'] ?></td>
						<td><?= $sk_domisili['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($sk_domisili['status_surat'] == 'Diterima') ? 'success' : (($sk_domisili['status_surat'] == 'Ditolak' || $sk_domisili['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $sk_domisili['status_surat'] ?></span></td>
						<?php if ($sk_domisili['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_sk_domisili_batal/' . $sk_domisili['id_surat_domisili']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				
				<?php
				$i = 12;
				foreach ($sk_serba as $sk_serba) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $sk_serba['jenis_surat'] ?></td>
						<td><?= $sk_serba['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($sk_serba['status_surat'] == 'Diterima') ? 'success' : (($sk_serba['status_surat'] == 'Ditolak' || $sk_serba['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $sk_serba['status_surat'] ?></span></td>
						<?php if ($sk_serba['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_sk_serba_batal/' . $sk_serba['id_surat_serba']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
			
				<?php
				$i = 13;
				foreach ($sk_pindah as $sk_pindah) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $sk_pindah['jenis_surat'] ?></td>
						<td><?= $sk_pindah['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($sk_pindah['status_surat'] == 'Diterima') ? 'success' : (($sk_pindah['status_surat'] == 'Ditolak' || $sk_pindah['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $sk_pindah['status_surat'] ?></span></td>
						<?php if ($sk_pindah['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_sk_pindah_batal/' . $sk_pindah['id_surat_pindah']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				
				<?php
				$i = 14;
				foreach ($sk_kematian as $sk_kematian) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $sk_kematian['jenis_surat'] ?></td>
						<td><?= $sk_kematian['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($sk_kematian['status_surat'] == 'Diterima') ? 'success' : (($sk_kematian['status_surat'] == 'Ditolak' || $sk_kematian['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $sk_kematian['status_surat'] ?></span></td>
						<?php if ($sk_kematian['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_sk_kematian_batal/' . $sk_kematian['id_surat_kematian']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				
				<?php
				$i = 15;
				foreach ($sk_kelahiran as $sk_kelahiran) : ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $sk_kelahiran['jenis_surat'] ?></td>
						<td><?= $sk_kelahiran['tgl_ajukan_surat'] ?></td>
						<td><span class="badge badge-<?= ($sk_kelahiran['status_surat'] == 'Diterima') ? 'success' : (($sk_kelahiran['status_surat'] == 'Ditolak' || $sk_kelahiran['status_surat'] == 'Dibatalkan') ? 'danger' : 'warning'); ?>"><?= $sk_kelahiran['status_surat'] ?></span></td>
						<?php if ($sk_kelahiran['status_surat'] == 'Pending') : ?>
							<td>
								<button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
								<a href="<?= base_url('Tambah_warga/update_sk_kelahiran_batal/' . $sk_kelahiran['id_surat_kelahiran']); ?>" class="btn btn-sm bg-danger text-white"><i class="fas fa-window-close"></i> Batalkan</a>
							</td>
						<?php else : ?>
							<td>
								<button type="button" class="btn btn-sm bg-primary mr-2 text-white" data-toggle="modal" data-target="#modalDetail"><i class="fas fa-search-plus"></i> Detail</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				
				
				
				
			</tbody>

			<!-- Modal -->
			<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetail" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalDetailTitle">Informasi</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Untuk melakukan pencetakan, silahkan datang ke bagian Tata Usaha Kantor Desa Cinunuk dengan menyebutkan Nama Lengkap Anda. <br><br>

							Berkas-berkas yang harus dibawa pada saat pengambilan Surat Pengantar Nikah (N1) adalah: <br>
							• Surat Persetujuan Dua Calon Pengantin <a href="<?= base_url('user/p_n4'); ?>">buat N4</a> <br>
							• Surat pengatar dari RT/RW <br>
							• Fotokopi KTP <br>
							• Fotokopi akta kelahiran atau ijazah terakhir <br>
							• Fotokopi kartu keluarga <br>
							• Pasfoto 2x3 = 3 lembar berlatar belakang biru <br>
							• pasfoto 3x4 = 4 lembar berlatar belakang biru <br>
							• Surat pernyataan belum pernah menikah (Bagi Anda yang belum pernah menikah ) <br>
							• Surat Izin Orang tua (Bagi anda yang masih dibawah umur, Laki-laki < 25th | Perempuan < 21th) <a href="<?= base_url('user/p_n5'); ?>">buat N5</a> <br>
								• Fotokopi Akta Cerai (Bagi Anda yang berstatus pernikahan Cerai Hidup ) <br>
								• Fotokopi Akta Kematian (Bagi Anda yang berstatus pernikahan Cerai Mati ) <br><br>

								Terima Kasih atas perhatiannya, silahkan datang kembali.
						</div>
					</div>
				</div>
			</div>

		</table>
	</div>
</section>

<footer class="footer text-center">
	<div class="container">
		<p class="text-muted small mb-0">Copyright © 2021</p>
		<p class="text-muted small mb-0">-----</p>
	</div>
</footer>
