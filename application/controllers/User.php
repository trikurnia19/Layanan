<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller

{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->library('form_validation');
		$this->load->model("M_surat_n1_n6");
		$this->load->model('Usermodel');
	}
	public function index()
	{
		$data = [
			'title'				=> 'WEB Desa Karya Mukti',
			'user' 				=> $this->db->get_where('user', ['no_nik' => $this->session->userdata('no_nik')])->row_array(),
			'pb_kkbaru' 		=> $this->db->get_where('pb_kkbaru', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'pb_kk'				=> $this->db->get_where('pb_kk', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'pb_izin' 			=> $this->db->get_where('pb_izin', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'pb_migrasi'		=> $this->db->get_where('pb_migrasi', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'pb_ktp'			=> $this->db->get_where('pb_ktp', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'pb_akta'			=> $this->db->get_where('pb_akta', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'sk_belummenikah'	=> $this->db->get_where('sk_belummenikah', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'sk_domisili'		=> $this->db->get_where('sk_domisili', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'sk_kelahiran'		=> $this->db->get_where('sk_kelahiran', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'sk_kelakuanbaik'	=> $this->db->get_where('sk_kelakuanbaik', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'sk_kematian'		=> $this->db->get_where('sk_kematian', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'sk_pindah'			=> $this->db->get_where('sk_pindah', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'sk_serba'			=> $this->db->get_where('sk_serba', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'sk_tidakmampu'		=> $this->db->get_where('sk_tidakmampu', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
			'sk_usaha'			=> $this->db->get_where('sk_usaha', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
		

		];
		
		$this->load->view('layout/userHeader', $data);
		$this->load->view('user/index', $data);
		$this->load->view('layout/userFooter');
	}

	public function profil()
	{
		$data['title'] = 'WEB Persuratan Kelurahan Muarasanding | Ubah Profil';
		$data['user'] = $this->db->get_where('user', ['no_nik' => $this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('user/changeprofil', $data);
		$this->load->view('layout/userFooter');
	}

	public function update($no_nik)
	{

		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$kewarganegaraan = $this->input->post('kewarganegaraan');
		$provinsi = $this->input->post('provinsi');
		$kab_kota = $this->input->post('kab_kota');
		$kecamatan = $this->input->post('kecamatan');
		$desa = $this->input->post('desa');
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$kode_pos = $this->input->post('kode_pos');
		$alamat = $this->input->post('alamat');
		$is_active = 1;

		$data = [
			'nama' => $nama,
			'agama' => $agama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'pekerjaan' => $pekerjaan,
			'kewarganegaraan' => $kewarganegaraan,
			'provinsi' => $provinsi,
			'kab_kota' => $kab_kota,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'rt' => $rt,
			'rw' => $rw,
			'kode_pos' => $kode_pos,
			'alamat' => $alamat,
			'is_active' => $is_active
		];
		$where = array(
			'no_nik' => $no_nik
		);

		$this->Usermodel->update_data($where, $data, 'user');
		redirect('user');
	}

	public function ganti_password()
	{
		$data['title'] = 'User Page | Ganti Password';
		$data['user'] = $this->db->get_where('user', ['no_nik' => $this->session->userdata('no_nik')])->row_array();
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]', [
			'required' => 'Password harus di isi',
			'min_length[8]' => 'Password kurang dari 8'
		]);

		if ($this->form_validation->run() == false) {

			$this->load->view('layout/userHeader', $data);
			$this->load->view('user/password', $data);
			$this->load->view('layout/userFooter');
		} else {
			$password = $this->input->post('password');
			// $password_hash = password_hash($password, PASSWORD_DEFAULT);

			$this->db->set('password', $password);
			$this->db->where('no_nik', $this->session->userdata('no_nik'));
			$this->db->update('user');
			redirect('user');
		}
	}

	
	public function sk_belummenikah()
	{
		$data['title'] = 'Kelurahan Karyamukti | Surat Keterangan Belum Menikah';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('surat/sk_belummenikah', $data);
		$this->load->view('layout/userFooter');
	}

	public function sk_kelakuanbaik()
	{
		$data['title'] = 'Kelurahan Karyamukti | Surat Keterangan Kelakuan Baik';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('surat/sk_kelakuanbaik', $data);
		$this->load->view('layout/userFooter');
	}

	public function sk_usaha()
	{
		$data['title'] = 'Kelurahan Karyamukti | Surat Keterangan Usaha';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('surat/sk_usaha', $data);
		$this->load->view('layout/userFooter');
	}

	public function sk_tidakmampu()
	{
		$data['title'] = 'Kelurahan Karyamukti | Surat Keterangan Tidak Mampu';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('surat/sk_tidakmampu', $data);
		$this->load->view('layout/userFooter');
	}

	public function sk_domisili()
	{
		$data['title'] = 'Kelurahan Karyamukti | Surat Keterangan Domisili';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('surat/sk_domisili', $data);
		$this->load->view('layout/userFooter');
	}

	public function sk_serba()
	{
		$data['title'] = 'Kelurahan Karyamukti | Surat Keterangan Serba Guna';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('surat/sk_serba', $data);
		$this->load->view('layout/userFooter');
	}
	
	public function sk_kelahiran()
	{
		$data['title'] = 'Kelurahan Karyamukti | Surat Kelahiran';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('surat/sk_kelahiran', $data);
		$this->load->view('layout/userFooter');
	}

	public function sk_kematian()
	{
		$data['title'] = 'Kelurahan Karyamukti | Surat Kematian';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('surat/sk_kematian', $data);
		$this->load->view('layout/userFooter');
	}
	
	public function sk_pindah()
	{
		$data['title'] = 'Kelurahan Karyamukti | Surat Pindah';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('surat/sk_pindah', $data);
		$this->load->view('layout/userFooter');
	}

	
}
