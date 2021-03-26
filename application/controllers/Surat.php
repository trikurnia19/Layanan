<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model("M_surat_n1_n6");
		$this->load->helper('date');
	}
	public function add()
	{
		$nama = $this->input->post('nama');
		$no_nik = $this->input->post('no_nik');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$agama = $this->input->post('agama');
		$pekerjaan = $this->input->post('pekerjaan');
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$kelurahan = $this->input->post('kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$kab_kota = $this->input->post('kab_kota');
		$alamat = $this->input->post('alamat');
		$nama_surat = "Surat Keterangan Usaha";
		$status_surat = "Pending";
		$today = mdate('%Y-%m-%d', now());


		$data = array(
			'nama' => $nama,
			'no_nik' => $no_nik,
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'rt' => $rt,
			'rw' => $rw,
			'kelurahan' => $kelurahan,
			'kecamatan' => $kecamatan,
			'kab_kota' => $kab_kota,
			'alamat' => $alamat,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		);

		$this->M_surat_n1_n6->save($data, 'sku');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	function hapus($id_surat_n1)
	{
		$where = array('id_surat_n1' => $id_surat_n1);
		$this->M_surat_n1_n6->hapus_data($where, 'surat_n1');
		redirect('user/index');
	}

	function edit_form($id_surat_n1)
	{
		$where = array('id_surat_n1' => $id_surat_n1);
		$data['surat_n1'] = $this->surat_model->edit_data($where, 'surat_n1')->result();
		$this->load->view('admin/edit_form_suratKP', $data);
	}

	public function add_sk_belummenikah()
	{
		$no_nik				= $this->input->post('no_nik');
		$nama				= $this->input->post('nama');
		$no_kk				= $this->input->post('no_kk');
		$pendidikan			= $this->input->post('pendidikan');
		$status_perkawinan	= $this->input->post('status_perkawinan');
		$nama_ortu			= $this->input->post('nama_ortu');
		$agama				= $this->input->post('agama');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$pekerjaan			= $this->input->post('pekerjaan');
		$kab_kota			= $this->input->post('kab_kota');
		$kecamatan			= $this->input->post('kecamatan');
		$desa				= $this->input->post('kelurahan');
		$RT					= $this->input->post('rt');
		$RW					= $this->input->post('rw');
		$alamat				= $this->input->post('alamat');
		$provinsi			= $this->input->post('provinsi');
		$keperluan			= $this->input->post('keperluan');
		$nama_surat			= 'Surat Keterangan Belum Menikah';
		$today				= mdate('%Y-%m-%d', now());
		$status_surat		= 'Pending';
		$data = [
			'no_nik'			=> $no_nik,
			'nama'				=> $nama,
			'no_kk'				=> $no_kk,
			'pendidikan'		=> $pendidikan,
			'tempat_lahir'		=> $tempat_lahir,
			'status_perkawinan'	=> $status_perkawinan,
			'nama_ortu'			=> $nama_ortu,
			'tanggal_lahir'		=> $tanggal_lahir,
			'jenis_kelamin'		=> $jenis_kelamin,
			'agama'				=> $agama,
			'pekerjaan'			=> $pekerjaan,
			'kab_kota'			=> $kab_kota,
			'kecamatan'			=> $kecamatan,
			'desa'				=> $desa,
			'rt'				=> $RT,
			'rw'				=> $RW,
			'alamat'			=> $alamat,
			'provinsi'			=> $provinsi,
			'keperluan'			=> $keperluan,
			'jenis_surat'		=> $nama_surat,
			'tgl_ajukan_surat'	=> $today,
			'status_surat'		=> $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_belummenikah');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	
	public function add_sk_kelakuanbaik()
	{
		$no_nik				= $this->input->post('no_nik');
		$nama				= $this->input->post('nama');
		$no_kk				= $this->input->post('no_kk');
		$pendidikan			= $this->input->post('pendidikan');
		$status_perkawinan	= $this->input->post('status_perkawinan');
		$nama_ortu			= $this->input->post('nama_ortu');
		$agama				= $this->input->post('agama');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$pekerjaan			= $this->input->post('pekerjaan');
		$kab_kota			= $this->input->post('kab_kota');
		$kecamatan			= $this->input->post('kecamatan');
		$desa				= $this->input->post('kelurahan');
		$RT					= $this->input->post('rt');
		$RW					= $this->input->post('rw');
		$alamat				= $this->input->post('alamat');
		$provinsi			= $this->input->post('provinsi');
		$keperluan			= $this->input->post('keperluan');
		$nama_surat			= 'Surat Keterangan Kelakuan Baik';
		$today				= mdate('%Y-%m-%d', now());
		$status_surat		= 'Pending';
		$data = [
			'no_nik'			=> $no_nik,
			'nama'				=> $nama,
			'no_kk'				=> $no_kk,
			'pendidikan'		=> $pendidikan,
			'tempat_lahir'		=> $tempat_lahir,
			'status_perkawinan'	=> $status_perkawinan,
			'nama_ortu'			=> $nama_ortu,
			'tanggal_lahir'		=> $tanggal_lahir,
			'jenis_kelamin'		=> $jenis_kelamin,
			'agama'				=> $agama,
			'pekerjaan'			=> $pekerjaan,
			'kab_kota'			=> $kab_kota,
			'kecamatan'			=> $kecamatan,
			'desa'				=> $desa,
			'rt'				=> $RT,
			'rw'				=> $RW,
			'alamat'			=> $alamat,
			'provinsi'			=> $provinsi,
			'keperluan'			=> $keperluan,
			'jenis_surat'		=> $nama_surat,
			'tgl_ajukan_surat'	=> $today,
			'status_surat'		=> $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_kelakuanbaik');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}

	public function add_sk_usaha()
	{
		$no_nik				= $this->input->post('no_nik');
		$nama				= $this->input->post('nama');
		$no_kk				= $this->input->post('no_kk');
		$pendidikan			= $this->input->post('pendidikan');
		$status_perkawinan	= $this->input->post('status_perkawinan');
		$nama_ortu			= $this->input->post('nama_ortu');
		$agama				= $this->input->post('agama');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$pekerjaan			= $this->input->post('pekerjaan');
		$kab_kota			= $this->input->post('kab_kota');
		$kecamatan			= $this->input->post('kecamatan');
		$desa				= $this->input->post('kelurahan');
		$RT					= $this->input->post('rt');
		$RW					= $this->input->post('rw');
		$alamat				= $this->input->post('alamat');
		$provinsi			= $this->input->post('provinsi');
		$nama_usaha			= $this->input->post('nama_usaha');
		$alamat_usaha		= $this->input->post('alamat_usaha');
		$penghasilan		= $this->input->post('penghasilan');
		$keperluan			= $this->input->post('keperluan');
		$nama_surat			= 'Surat Keterangan Usaha';
		$today				= mdate('%Y-%m-%d', now());
		$status_surat		= 'Pending';
		$data = [
			'no_nik'			=> $no_nik,
			'nama'				=> $nama,
			'no_kk'				=> $no_kk,
			'pendidikan'		=> $pendidikan,
			'tempat_lahir'		=> $tempat_lahir,
			'status_perkawinan'	=> $status_perkawinan,
			'nama_ortu'			=> $nama_ortu,
			'tanggal_lahir'		=> $tanggal_lahir,
			'jenis_kelamin'		=> $jenis_kelamin,
			'agama'				=> $agama,
			'pekerjaan'			=> $pekerjaan,
			'kab_kota'			=> $kab_kota,
			'kecamatan'			=> $kecamatan,
			'desa'				=> $desa,
			'rt'				=> $RT,
			'rw'				=> $RW,
			'alamat'			=> $alamat,
			'provinsi'			=> $provinsi,
			'nama_usaha'		=> $nama_usaha,
			'alamat_usaha'		=> $alamat_usaha,
			'penghasilan'		=> $penghasilan,
			'keperluan'			=> $keperluan,
			'jenis_surat'		=> $nama_surat,
			'tgl_ajukan_surat'	=> $today,
			'status_surat'		=> $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_usaha');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}

	public function add_sk_tidakmampu()
	{
		$no_nik				= $this->input->post('no_nik');
		$nama				= $this->input->post('nama');
		$no_kk				= $this->input->post('no_kk');
		$pendidikan			= $this->input->post('pendidikan');
		$status_perkawinan	= $this->input->post('status_perkawinan');
		$nama_ortu			= $this->input->post('nama_ortu');
		$agama				= $this->input->post('agama');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$pekerjaan			= $this->input->post('pekerjaan');
		$kab_kota			= $this->input->post('kab_kota');
		$kecamatan			= $this->input->post('kecamatan');
		$desa				= $this->input->post('kelurahan');
		$RT					= $this->input->post('rt');
		$RW					= $this->input->post('rw');
		$alamat				= $this->input->post('alamat');
		$provinsi			= $this->input->post('provinsi');
		$keperluan			= $this->input->post('keperluan');
		$nama_surat			= 'Surat Keterangan Tidak Mampu';
		$today				= mdate('%Y-%m-%d', now());
		$status_surat		= 'Pending';
		$data = [
			'no_nik'			=> $no_nik,
			'nama'				=> $nama,
			'no_kk'				=> $no_kk,
			'pendidikan'		=> $pendidikan,
			'tempat_lahir'		=> $tempat_lahir,
			'status_perkawinan'	=> $status_perkawinan,
			'nama_ortu'			=> $nama_ortu,
			'tanggal_lahir'		=> $tanggal_lahir,
			'jenis_kelamin'		=> $jenis_kelamin,
			'agama'				=> $agama,
			'pekerjaan'			=> $pekerjaan,
			'kab_kota'			=> $kab_kota,
			'kecamatan'			=> $kecamatan,
			'desa'				=> $desa,
			'rt'				=> $RT,
			'rw'				=> $RW,
			'alamat'			=> $alamat,
			'provinsi'			=> $provinsi,
			'keperluan'			=> $keperluan,
			'jenis_surat'		=> $nama_surat,
			'tgl_ajukan_surat'	=> $today,
			'status_surat'		=> $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_tidakmampu');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}

	public function add_sk_domisili()
	{
		$no_nik				= $this->input->post('no_nik');
		$nama				= $this->input->post('nama');
		$no_kk				= $this->input->post('no_kk');
		$pendidikan			= $this->input->post('pendidikan');
		$status_perkawinan	= $this->input->post('status_perkawinan');
		$nama_ortu			= $this->input->post('nama_ortu');
		$agama				= $this->input->post('agama');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$pekerjaan			= $this->input->post('pekerjaan');
		$kab_kota			= $this->input->post('kab_kota');
		$kecamatan			= $this->input->post('kecamatan');
		$desa				= $this->input->post('kelurahan');
		$RT					= $this->input->post('rt');
		$RW					= $this->input->post('rw');
		$alamat				= $this->input->post('alamat');
		$provinsi			= $this->input->post('provinsi');
		$keperluan			= $this->input->post('keperluan');
		$nama_surat			= 'Surat Keterangan Domisili';
		$today				= mdate('%Y-%m-%d', now());
		$status_surat		= 'Pending';
		$data = [
			'no_nik'			=> $no_nik,
			'nama'				=> $nama,
			'no_kk'				=> $no_kk,
			'pendidikan'		=> $pendidikan,
			'tempat_lahir'		=> $tempat_lahir,
			'status_perkawinan'	=> $status_perkawinan,
			'nama_ortu'			=> $nama_ortu,
			'tanggal_lahir'		=> $tanggal_lahir,
			'jenis_kelamin'		=> $jenis_kelamin,
			'agama'				=> $agama,
			'pekerjaan'			=> $pekerjaan,
			'kab_kota'			=> $kab_kota,
			'kecamatan'			=> $kecamatan,
			'desa'				=> $desa,
			'rt'				=> $RT,
			'rw'				=> $RW,
			'alamat'			=> $alamat,
			'provinsi'			=> $provinsi,
			'keperluan'			=> $keperluan,
			'jenis_surat'		=> $nama_surat,
			'tgl_ajukan_surat'	=> $today,
			'status_surat'		=> $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_domisili');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	
	public function add_sk_serba()
	{
		$no_nik				= $this->input->post('no_nik');
		$nama				= $this->input->post('nama');
		$no_kk				= $this->input->post('no_kk');
		$pendidikan			= $this->input->post('pendidikan');
		$status_perkawinan	= $this->input->post('status_perkawinan');
		$nama_ortu			= $this->input->post('nama_ortu');
		$agama				= $this->input->post('agama');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$pekerjaan			= $this->input->post('pekerjaan');
		$kab_kota			= $this->input->post('kab_kota');
		$kecamatan			= $this->input->post('kecamatan');
		$desa				= $this->input->post('kelurahan');
		$RT					= $this->input->post('rt');
		$RW					= $this->input->post('rw');
		$alamat				= $this->input->post('alamat');
		$keperluan			= $this->input->post('keperluan');
		$nama_surat			= 'Surat Keterangan Serba Guna';
		$today				= mdate('%Y-%m-%d', now());
		$status_surat		= 'Pending';
		$data = [
			'no_nik'			=> $no_nik,
			'nama'				=> $nama,
			'no_kk'				=> $no_kk,
			'pendidikan'		=> $pendidikan,
			'tempat_lahir'		=> $tempat_lahir,
			'status_perkawinan'	=> $status_perkawinan,
			'nama_ortu'			=> $nama_ortu,
			'tanggal_lahir'		=> $tanggal_lahir,
			'jenis_kelamin'		=> $jenis_kelamin,
			'agama'				=> $agama,
			'pekerjaan'			=> $pekerjaan,
			'kab_kota'			=> $kab_kota,
			'kecamatan'			=> $kecamatan,
			'desa'				=> $desa,
			'rt'				=> $RT,
			'rw'				=> $RW,
			'alamat'			=> $alamat,
			'keperluan'			=> $keperluan,
			'jenis_surat'		=> $nama_surat,
			'tgl_ajukan_surat'	=> $today,
			'status_surat'		=> $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_serba');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}

	public function add_sk_kelahiran()
	{
		// $sklahir = $_FILES['sklahir'];
		// if ($sklahir) {
		// 	$config['allowed_types']	= 'jpg|png|jpeg';
		// 	$config['max_size'] 		= '2048';
		// 	$config['upload_path']		= './image/sk_lahir';


		// 	$this->load->library('upload', $config);
		// 	if ($this->upload->do_upload('sklahir')) {
		// 		$fcktp = $this->upload->data('file_name');
		// 	} else {
		// 		// Jika gagal :
		// 		echo $this->upload->display_errors();
		// 	}
		// } else {
		// 	echo 'Surat Keterangan Lahir Bidan / Dokter Tidak Ada';
		// }

		$no_nik				= $this->input->post('no_nik');
		$nama				= $this->input->post('nama');
		$no_kk				= $this->input->post('no_kk');
		$pendidikan			= $this->input->post('pendidikan');
		$status_perkawinan	= $this->input->post('status_perkawinan');
		$agama				= $this->input->post('agama');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$pekerjaan			= $this->input->post('pekerjaan');
		$kab_kota			= $this->input->post('kab_kota');
		$kecamatan			= $this->input->post('kecamatan');
		$desa				= $this->input->post('kelurahan');
		$RT					= $this->input->post('rt');
		$RW					= $this->input->post('rw');
		$alamat				= $this->input->post('alamat');
		$keperluan			= $this->input->post('keperluan');
		$hari_lahir			= $this->input->post('hari_lahir');
		$waktu_lahir		= $this->input->post('waktu_lahir');
		$tempat_lahir_anak	= $this->input->post('tempat_lahir_anak');
		$tanggal_lahir_anak	= $this->input->post('tanggal_lahir_anak');
		$jenis_kelamin_anak	= $this->input->post('jenis_kelamin_anak');
		$nama_anak			= $this->input->post('nama_anak'); 
		$berat_anak			= $this->input->post('berat_anak'); 
		$panjang_anak		= $this->input->post('panjang_anak'); 
		$anak_ke			= $this->input->post('anak_ke'); 
		$nama_ibu			= $this->input->post('nama_ibu'); 
		$umur_ibu			= $this->input->post('umur_ibu'); 
		$nama_ayah			= $this->input->post('nama_ayah'); 
		$umur_ayah			= $this->input->post('umur_ayah'); 
		$nama_surat			= 'Surat Kelahiran';
		$today				= mdate('%Y-%m-%d', now());
		$status_surat		= 'Pending';
		$data = [
			'no_nik'			=> $no_nik,
			'nama'				=> $nama,
			'no_kk'				=> $no_kk,
			'pendidikan'		=> $pendidikan,
			'tempat_lahir'		=> $tempat_lahir,
			'tanggal_lahir'		=> $tanggal_lahir,
			'jenis_kelamin'		=> $jenis_kelamin,
			'agama'				=> $agama,
			'pekerjaan'			=> $pekerjaan,
			'kab_kota'			=> $kab_kota,
			'kecamatan'			=> $kecamatan,
			'desa'				=> $desa,
			'rt'				=> $RT,
			'rw'				=> $RW,
			'alamat'			=> $alamat,
			'keperluan'			=> $keperluan,
			'hari_lahir'		=> $hari_lahir,
			'waktu_lahir'		=> $waktu_lahir,
			'tempat_lahir_anak'	=> $tempat_lahir_anak,
			'tanggal_lahir_anak'=> $tanggal_lahir_anak,
			'jenis_kelamin_anak'=> $jenis_kelamin_anak,
			'nama_anak'			=> $nama_anak,
			'berat_anak' 		=> $berat_anak,
			'panjang_anak' 		=> $panjang_anak,
			'anak_ke'			=> $anak_ke,
			'nama_ibu'			=> $nama_ibu,
			'umur_ibu'			=> $umur_ibu,
			'nama_ayah' 		=> $nama_ayah,
			'umur_ayah'			=> $umur_ayah,
			// 'sklahir'			=> $sklahir,
			'jenis_surat'		=> $nama_surat,
			'tgl_ajukan_surat'	=> $today,
			'status_surat'		=> $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_kelahiran');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}

	public function add_sk_kematian()
	{

		$no_nik				= $this->input->post('no_nik');
		$nama				= $this->input->post('nama');
		$no_kk				= $this->input->post('no_kk');
		$pendidikan			= $this->input->post('pendidikan');
		$status_perkawinan	= $this->input->post('status_perkawinan');
		$agama				= $this->input->post('agama');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$pekerjaan			= $this->input->post('pekerjaan');
		$kab_kota			= $this->input->post('kab_kota');
		$kecamatan			= $this->input->post('kecamatan');
		$desa				= $this->input->post('kelurahan');
		$RT					= $this->input->post('rt');
		$RW					= $this->input->post('rw');
		$alamat				= $this->input->post('alamat');
		$keperluan			= $this->input->post('keperluan');
		$hari_wafat			= $this->input->post('hari_wafat');
		$waktu_wafat		= $this->input->post('waktu_wafat');
		$tempat_wafat		= $this->input->post('tempat_wafat');
		$tanggal_wafat		= $this->input->post('tanggal_wafat');
		$no_nik_wafat		= $this->input->post('no_nik_wafat');
		$no_kk_wafat		= $this->input->post('no_kk_wafat');
		$jenis_kelamin_wafat= $this->input->post('jenis_kelamin_wafat');
		$tgl_lahir_wafat	= $this->input->post('tgl_lahir_wafat');
		$agama_wafat		= $this->input->post('agama_wafat');
		$alamat_wafat		= $this->input->post('alamat_wafat');
		$provinsi_wafat		= $this->input->post('provinsi_wafat');
		$kecamatan_wafat	= $this->input->post('kecamatan_wafat');
		$desa_wafat			= $this->input->post('desa_wafat');
		$kab_kota_wafat		= $this->input->post('kab_kota_wafat');
		$rt_wafat			= $this->input->post('rt_wafat');
		$rw_wafat			= $this->input->post('rw_wafat');
		$nama_wafat			= $this->input->post('nama_wafat'); 
		$nama_surat			= 'Surat kematian';
		$today				= mdate('%Y-%m-%d', now());
		$status_surat		= 'Pending';
		$data = [
			'no_nik'			=> $no_nik,
			'nama'				=> $nama,
			'no_kk'				=> $no_kk,
			'pendidikan'		=> $pendidikan,
			'tempat_lahir'		=> $tempat_lahir,
			'tanggal_lahir'		=> $tanggal_lahir,
			'jenis_kelamin'		=> $jenis_kelamin,
			'agama'				=> $agama,
			'pekerjaan'			=> $pekerjaan,
			'kab_kota'			=> $kab_kota,
			'kecamatan'			=> $kecamatan,
			'desa'				=> $desa,
			'rt'				=> $RT,
			'rw'				=> $RW,
			'alamat'			=> $alamat,
			'keperluan'			=> $keperluan,
			'hari_wafat'		=> $hari_wafat,
			'waktu_wafat'		=> $waktu_wafat,
			'tempat_wafat'		=> $tempat_wafat,
			'tanggal_wafat'		=> $tanggal_wafat,
			'no_nik_wafat'		=> $no_nik_wafat,
			'no_kk_wafat'		=> $no_kk_wafat,
			'jenis_kelamin_wafat'=> $jenis_kelamin_wafat,
			'tgl_lahir_wafat'	=> $tgl_lahir_wafat,
			'agama_wafat'		=> $agama_wafat,
			'alamat_wafat'		=> $alamat_wafat,
			'provinsi_wafat'	=> $provinsi_wafat,
			'kecamatan_wafat'	=> $kecamatan_wafat,
			'desa_wafat'		=> $desa_wafat,
			'kab_kota_wafat'	=> $kab_kota_wafat,
			'rt_wafat'			=> $rt_wafat,
			'rw_wafat'			=> $rw_wafat,
			'nama_wafat' 		=> $nama_wafat,
			'jenis_surat'		=> $nama_surat,
			'tgl_ajukan_surat'	=> $today,
			'status_surat'		=> $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_kematian');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}

	public function add_sk_pindah()
	{

		$no_nik				= $this->input->post('no_nik');
		$nama_kk			= $this->input->post('nama_kk');
		$nama				= $this->input->post('nama');
		$no_kk				= $this->input->post('no_kk');
		$kab_kota			= $this->input->post('kab_kota');
		$kecamatan			= $this->input->post('kecamatan');
		$desa				= $this->input->post('kelurahan');
		$RT					= $this->input->post('rt');
		$RW					= $this->input->post('rw');
		$alamat				= $this->input->post('alamat');
		$provinsi			= $this->input->post('provinsi');
		$pos				= $this->input->post('pos');
		$alasan_pindah		= $this->input->post('alasan_pindah');
		$jenis_pindah		= $this->input->post('jenis_pindah');
		$status_kk_tpindah	= $this->input->post('status_kk_tpindah');
		$status_kk_pindah	= $this->input->post('status_kk_pindah');
		$kel_pindah			= $this->input->post('kel_pindah');
		$provinsi_tujuan	= $this->input->post('provinsi_tujuan');
		$kecamatan_tujuan	= $this->input->post('kecamatan_tujuan');
		$desa_tujuan		= $this->input->post('kelurahan_tujuan');
		$kab_kota_tujuan	= $this->input->post('kab_kota_tujuan');
		$alamat_tujuan		= $this->input->post('alamat_tujuan');
		$rt_tujuan			= $this->input->post('rt_tujuan');
		$rw_tujuan			= $this->input->post('rw_tujuan');
		$pos_tujuan			= $this->input->post('pos_tujuan');
		$nama_surat			= 'Surat Pindah';
		$today				= mdate('%Y-%m-%d', now());
		$status_surat		= 'Pending';
		$data = [
			'no_nik'			=> $no_nik,
			'nama_kk'			=> $nama_kk,
			'nama'				=> $nama,
			'no_kk'				=> $no_kk,
			'kab_kota'			=> $kab_kota,
			'kecamatan'			=> $kecamatan,
			'desa'				=> $desa,
			'rt'				=> $RT,
			'rw'				=> $RW,
			'alamat'			=> $alamat,
			'provinsi'			=> $provinsi,
			'pos'				=> $pos,
			'alasan_pindah'		=> $alasan_pindah,
			'jenis_pindah'		=> $jenis_pindah,
			'status_kk_tpindah'	=> $status_kk_tpindah,
			'status_kk_pindah'	=> $status_kk_pindah,
			'kel_pindah'		=> $kel_pindah,
			'alamat_tujuan'		=> $alamat_tujuan,
			'provinsi_tujuan'	=> $provinsi_tujuan,
			'kecamatan_tujuan'	=> $kecamatan_tujuan,
			'desa_tujuan'		=> $desa_tujuan,
			'kab_kota_tujuan'	=> $kab_kota_tujuan,
			'rt_tujuan'			=> $rt_tujuan,
			'rw_tujuan'			=> $rw_tujuan,
			'pos_tujuan' 		=> $pos_tujuan,
			'jenis_surat'		=> $nama_surat,
			'tgl_ajukan_surat'	=> $today,
			'status_surat'		=> $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_pindah');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	
}
