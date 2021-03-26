<?php
defined('BASEPATH') or exit('No direct script access allowed');

class lampiran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model("M_surat_n1_n6");
		$this->load->helper('date');
	}

    public function add_kkbaru(){
		$fcktp = $_FILES['fcktp'];
		if ($fcktp) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/kk_baru';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcktp')) {
				$fcktp = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy KTP tidak ada';
		}

		$fckk = $_FILES['fckk'];
		if ($fckk) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/kk_baru';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fckk')) {
				$fckk = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy KK tidak ada';
		}
		
		$fcbn = $_FILES['fcbn'];
		if ($fcbn) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/kk_baru';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcbn')) {
				$fcbn = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy Buku Nikah tidak ada';
		}
		
		$fcijazah = $_FILES['fcijazah'];
		if ($fcijazah) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/kk_baru';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcijazah')) {
				$fcijazah = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy Ijazah tidak ada';
		}
		
		$fcakta = $_FILES['fcakta'];
		if ($fcakta) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/kk_baru';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcakta')) {
				$fcakta = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy Akta Lahir tidak ada';
		}
		
		$pengantarrt = $_FILES['pengantarrt'];
		if ($pengantarrt) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/kk_baru';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('pengantarrt')) {
				$pengantarrt = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'Surat Pengantar tidak ada';
		}
		
		$sp = $_FILES['sp'];
		if ($sp) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/kk_baru';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('sp')) {
				$sp = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'Surat Pindah tidak ada';
		}
		
		$no_nik			= $this->input->post('no_nik');
		$nama			= $this->input->post('nama');
		$agama			= $this->input->post('agama');
		$tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$pekerjaan		= $this->input->post('pekerjaan');
		$kab_kota		= $this->input->post('kab_kota');
		$kecamatan		= $this->input->post('kecamatan');
		$desa			= $this->input->post('kelurahan');
		$RT				= $this->input->post('rt');
		$RW				= $this->input->post('rw');
		$alamat			= $this->input->post('alamat');
		$tgl_ajukan		= $this->input->post('tgl_ajukan');
		$keperluan		= $this->input->post('keperluan');
		$nama_surat		= "Pembuatan Kartu Keluarga Baru";
		$today			= mdate('%Y-%m-%d', now());
		$status_surat	= "Pending";
		
		$data = [
			'no_nik'		=> $no_nik,
			'nama'			=> $nama,
			'jenis_kelamin'	=> $jenis_kelamin,
			'tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'agama'			=> $agama,
			'pekerjaan'		=> $pekerjaan,
			'kab_kota'		=> $kab_kota,
			'kecamatan'		=> $kecamatan,
			'desa'			=> $desa,
			'rt'			=> $RT,
			'rw'			=> $RW,
			'alamat'		=> $alamat,
			'tgl_ajukan'	=> $today,
			'keperluan'		=> $keperluan,
			'fcktp'			=> $fcktp,
			'fckk'			=> $fckk,
			'fcbn'			=> $fcbn,
			'fcijazah'		=> $fcijazah,
			'fcakta'		=> $fcakta,
			'pengantarrt'	=> $pengantarrt,
			'sp'			=> $sp,
			'nama_surat'	=> $nama_surat,           
			'status_surat'	=> $status_surat           

		];

		$this->M_surat_n1_n6->save($data, 'pb_kkbaru');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	
	public function add_pembaruankk(){
		$fcktp = $_FILES['fcktp'];
		if ($fcktp) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembaruan_kk';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcktp')) {
				$fcktp = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy KTP tidak ada';
		}

		$fckk = $_FILES['fckk'];
		if ($fckk) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembaruan_kk';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fckk')) {
				$fckk = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto Kartu keluarga tidak ada';
		}
		
		$fcbn = $_FILES['fcbn'];
		if ($fcbn) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembaruan_kk';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcbn')) {
				$fcbn = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy Buku Nikah tidak ada';
		}
		
		$fcijazah = $_FILES['fcijazah'];
		if ($fcijazah) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembaruan_kk';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcijazah')) {
				$fcijazah = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy Ijazah tidak ada';
		}
		
		$fcakta = $_FILES['fcakta'];
		if ($fcakta) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembaruan_kk';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcakta')) {
				$fcakta = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy Akta Lahir tidak ada';
		}
		
		$pengantarrt = $_FILES['pengantarrt'];
		if ($pengantarrt) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembaruan_kk';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('pengantarrt')) {
				$pengantarrt = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'Surat Pengantar tidak ada';
		}
		
		
		$no_nik			= $this->input->post('no_nik');
		$nama			= $this->input->post('nama');
		$agama			= $this->input->post('agama');
		$tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$pekerjaan		= $this->input->post('pekerjaan');
		$kab_kota		= $this->input->post('kab_kota');
		$kecamatan		= $this->input->post('kecamatan');
		$desa			= $this->input->post('kelurahan');
		$RT				= $this->input->post('rt');
		$RW				= $this->input->post('rw');
		$alamat			= $this->input->post('alamat');
		$tgl_ajukan		= $this->input->post('tgl_ajukan');
		$keperluan		= $this->input->post('keperluan');
		$nama_surat		= 'Pembaruan Kartu Keluarga';
		$today			= mdate('%Y-%m-%d', now());
		$status_surat	= "Pending";
		
		$data = [
			'no_nik'		=> $no_nik,
			'nama'			=> $nama,
			'jenis_kelamin'	=> $jenis_kelamin,
			'tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'agama'			=> $agama,
			'pekerjaan'		=> $pekerjaan,
			'kab_kota'		=> $kab_kota,
			'kecamatan'		=> $kecamatan,
			'desa'			=> $desa,
			'rt'			=> $RT,
			'rw'			=> $RW,
			'alamat'		=> $alamat,
			'tgl_ajukan'	=> $today,
			'keperluan'		=> $keperluan,
			'fcktp'			=> $fcktp,
			'fckk'			=> $fckk,
			'fcbn'			=> $fcbn,
			'fcijazah'		=> $fcijazah,
			'fcakta'		=> $fcakta,
			'pengantarrt'	=> $pengantarrt,
			'nama_surat'	=> $nama_surat, 
			'status_surat'	=> $status_surat
			         

		];

		$this->M_surat_n1_n6->save($data, 'pb_kk');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	
	public function add_pembuatanktp(){
		$fckk = $_FILES['fckk'];
		if ($fckk) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembuatan_ktp';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fckk')) {
				$fckk = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto Kartu keluarga tidak ada';
		}

		$pengantarrt = $_FILES['pengantarrt'];
		if ($pengantarrt) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembuatan_ktp';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('pengantarrt')) {
				$pengantarrt = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'Surat Pengantar tidak ada';
		}

		$no_nik			= $this->input->post('no_nik');
		$nama			= $this->input->post('nama');
		$agama			= $this->input->post('agama');
		$tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$pekerjaan		= $this->input->post('pekerjaan');
		$kab_kota		= $this->input->post('kab_kota');
		$kecamatan		= $this->input->post('kecamatan');
		$desa			= $this->input->post('kelurahan');
		$RT				= $this->input->post('rt');
		$RW				= $this->input->post('rw');
		$alamat			= $this->input->post('alamat');
		$tgl_ajukan		= $this->input->post('tgl_ajukan');
		$keperluan		= $this->input->post('keperluan');
		$nama_surat		= 'Pembuatan Kartu Tanda Penduduk';
		$today			= mdate('%Y-%m-%d', now());
		$status_surat	= "Pending";
		
		$data = [
			'no_nik'		=> $no_nik,
			'nama'			=> $nama,
			'jenis_kelamin'	=> $jenis_kelamin,
			'tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'agama'			=> $agama,
			'pekerjaan'		=> $pekerjaan,
			'kab_kota'		=> $kab_kota,
			'kecamatan'		=> $kecamatan,
			'desa'			=> $desa,
			'rt'			=> $RT,
			'rw'			=> $RW,
			'alamat'		=> $alamat,
			'tgl_ajukan'	=> $today,
			'keperluan'		=> $keperluan,
			'fckk'			=> $fckk,
			'pengantarrt'	=> $pengantarrt,
			'nama_surat'	=> $nama_surat, 
			'status_surat'	=> $status_surat
			         

		];

		$this->M_surat_n1_n6->save($data, 'pb_ktp');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}

	public function add_pembuatanakta(){
		$fcktp = $_FILES['fcktp'];
		if ($fcktp) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembuatan_akta';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcktp')) {
				$fcktp = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy KTP tidak ada';
		}

		$fckk = $_FILES['fckk'];
		if ($fckk) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembuatan_akta';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fckk')) {
				$fckk = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy KK tidak ada';
		}
		
		$fcbn = $_FILES['fcbn'];
		if ($fcbn) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembuatan_akta';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcbn')) {
				$fcbn = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy Buku Nikah tidak ada';
		}
		
		$fal = $_FILES['fal'];
		if ($fal) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembuatan_akta';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fal')) {
				$fal = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy Ijazah tidak ada';
		}
		
		$pengantarrt = $_FILES['pengantarrt'];
		if ($pengantarrt) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/pembuatan_akta';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('pengantarrt')) {
				$pengantarrt = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'Surat Pengantar tidak ada';
		}
		
		
		$no_nik			= $this->input->post('no_nik');
		$nama			= $this->input->post('nama');
		$agama			= $this->input->post('agama');
		$tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$pekerjaan		= $this->input->post('pekerjaan');
		$kab_kota		= $this->input->post('kab_kota');
		$kecamatan		= $this->input->post('kecamatan');
		$desa			= $this->input->post('kelurahan');
		$RT				= $this->input->post('rt');
		$RW				= $this->input->post('rw');
		$alamat			= $this->input->post('alamat');
		$tgl_ajukan		= $this->input->post('tgl_ajukan');
		$keperluan		= $this->input->post('keperluan');
		$nama_surat		= 'Pembuatan Akta Kelahiran';
		$today			= mdate('%Y-%m-%d', now());
		$status_surat	= "Pending";
		
		$data = [
			'no_nik'		=> $no_nik,
			'nama'			=> $nama,
			'jenis_kelamin'	=> $jenis_kelamin,
			'tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'agama'			=> $agama,
			'pekerjaan'		=> $pekerjaan,
			'kab_kota'		=> $kab_kota,
			'kecamatan'		=> $kecamatan,
			'desa'			=> $desa,
			'rt'			=> $RT,
			'rw'			=> $RW,
			'alamat'		=> $alamat,
			'tgl_ajukan'	=> $today,
			'keperluan'		=> $keperluan,
			'fcktp'			=> $fcktp,
			'fckk'			=> $fckk,
			'fcbn'			=> $fcbn,
			'fal'			=> $fal,
			'pengantarrt'	=> $pengantarrt,
			'nama_surat'	=> $nama_surat, 
			'status_surat'	=> $status_surat
			        

		];

		$this->M_surat_n1_n6->save($data, 'pb_akta');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}

	public function add_perizinan(){
		$pengantarrt = $_FILES['pengantarrt'];
		if ($pengantarrt) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/perizinan';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('pengantarrt')) {
				$pengantarrt = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'Surat Pengantar tidak ada';
		}

		$fckk = $_FILES['fckk'];
		if ($fckk) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/perizinan';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fckk')) {
				$fckk = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy KK tidak ada';
		}

		$fcktp = $_FILES['fcktp'];
		if ($fcktp) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/perizinan';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcktp')) {
				$fcktp = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy KTP tidak ada';
		}

		$fcnpwp = $_FILES['fcnpwp'];
		if ($fcnpwp) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/perizinan';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcnpwp')) {
				$fcnpwp = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy Buku Nikah tidak ada';
		}
		
		$ajb = $_FILES['ajb'];
		if ($ajb) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/perizinan';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('ajb')) {
				$ajb = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy Ijazah tidak ada';
		}
		

		$no_nik			= $this->input->post('no_nik');
		$nama			= $this->input->post('nama');
		$agama			= $this->input->post('agama');
		$tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$pekerjaan		= $this->input->post('pekerjaan');
		$kab_kota		= $this->input->post('kab_kota');
		$kecamatan		= $this->input->post('kecamatan');
		$desa			= $this->input->post('kelurahan');
		$RT				= $this->input->post('rt');
		$RW				= $this->input->post('rw');
		$alamat			= $this->input->post('alamat');
		$tgl_ajukan		= $this->input->post('tgl_ajukan');
		$keperluan		= $this->input->post('keperluan');
		$nama_surat		= 'Perizinan';
		$today			= mdate('%Y-%m-%d', now());
		$status_surat	= "Pending";
		
		$data = [
			'no_nik'		=> $no_nik,
			'nama'			=> $nama,
			'jenis_kelamin'	=> $jenis_kelamin,
			'tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'agama'			=> $agama,
			'pekerjaan'		=> $pekerjaan,
			'kab_kota'		=> $kab_kota,
			'kecamatan'		=> $kecamatan,
			'desa'			=> $desa,
			'rt'			=> $RT,
			'rw'			=> $RW,
			'alamat'		=> $alamat,
			'tgl_ajukan'	=> $today,
			'keperluan'		=> $keperluan,
			'fcktp'			=> $fcktp,
			'fckk'			=> $fckk,
			'fcnpwp'		=> $fcnpwp,
			'ajb'			=> $ajb,
			'pengantarrt'	=> $pengantarrt,
			'nama_surat'	=> $nama_surat, 
			'status_surat'	=> $status_surat
			        

		];

		$this->M_surat_n1_n6->save($data, 'pb_izin');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}

	public function add_migrasi(){
		$pengantarrt = $_FILES['pengantarrt'];
		if ($pengantarrt) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/migrasi';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('pengantarrt')) {
				$pengantarrt = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'Surat Pengantar tidak ada';
		}

		$fckk = $_FILES['fckk'];
		if ($fckk) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/migrasi';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fckk')) {
				$fckk = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy KK tidak ada';
		}
		$fcktp = $_FILES['fcktp'];
		if ($fcktp) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/migrasi';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcktp')) {
				$fcktp = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy KTP tidak ada';
		}

		$sp = $_FILES['sp'];
		if ($sp) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/migrasi';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('sp')) {
				$sp = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy Buku Nikah tidak ada';
		}
		
		$fcbn = $_FILES['fcbn'];
		if ($fcbn) {
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048';
			$config['upload_path']		= './image/migrasi';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fcbn')) {
				$fcbn = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto copy Ijazah tidak ada';
		}
		
		
		
		
		$no_nik			= $this->input->post('no_nik');
		$nama			= $this->input->post('nama');
		$agama			= $this->input->post('agama');
		$tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$pekerjaan		= $this->input->post('pekerjaan');
		$kab_kota		= $this->input->post('kab_kota');
		$kecamatan		= $this->input->post('kecamatan');
		$desa			= $this->input->post('kelurahan');
		$RT				= $this->input->post('rt');
		$RW				= $this->input->post('rw');
		$alamat			= $this->input->post('alamat');
		$tgl_ajukan		= $this->input->post('tgl_ajukan');
		$keperluan		= $this->input->post('keperluan');
		$nama_surat		= 'Migrasi';
		$today			= mdate('%Y-%m-%d', now());
		$status_surat	= "Pending";
		
		$data = [
			'no_nik'		=> $no_nik,
			'nama'			=> $nama,
			'jenis_kelamin'	=> $jenis_kelamin,
			'tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'agama'			=> $agama,
			'pekerjaan'		=> $pekerjaan,
			'kab_kota'		=> $kab_kota,
			'kecamatan'		=> $kecamatan,
			'desa'			=> $desa,
			'rt'			=> $RT,
			'rw'			=> $RW,
			'alamat'		=> $alamat,
			'tgl_ajukan'	=> $today,
			'keperluan'		=> $keperluan,
			'fcktp'			=> $fcktp,
			'fckk'			=> $fckk,
			'fcbn'			=> $fcbn,
			'sp'			=> $sp,
			'pengantarrt'	=> $pengantarrt,
			'nama_surat'	=> $nama_surat, 
			'status_surat'	=> $status_surat
			        

		];

		$this->M_surat_n1_n6->save($data, 'pb_migrasi');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}

}

