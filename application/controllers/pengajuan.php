<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{public function pembuatanKK()
	{
		$data['title'] = 'Kelurahan Karyamukti | Pembuatan KK Baru';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('pengajuan/pembuatan_kk_baru', $data);
		$this->load->view('layout/userFooter');
	}

    public function pembaruanKK()
	{
		$data['title'] = 'Kelurahan Karyamukti | Pembaruann KK ';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('pengajuan/pembaruan_kk', $data);
		$this->load->view('layout/userFooter');
	}

    public function pembuatanKTP()
	{
		$data['title'] = 'Kelurahan Karyamukti | Pembuatan KTP ';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('pengajuan/pembuatan_ktp', $data);
		$this->load->view('layout/userFooter');
	}

    public function pembuatanAktalahir()
	{
		$data['title'] = 'Kelurahan Karyamukti | Pembuatan Akta Lahir ';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('pengajuan/pembuatan_Aktalahir', $data);
		$this->load->view('layout/userFooter');
	}

    public function pembuatanIzin()
	{
		$data['title'] = 'Kelurahan Karyamukti | Pembbuatan Perizinan ';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('pengajuan/pembuatan_Izin', $data);
		$this->load->view('layout/userFooter');
	}

    public function migrasi()
	{
		$data['title'] = 'Kelurahan Karyamukti | Migrasi ';
		$data['user'] = $this->db->get_where('user', ['no_nik' =>
		$this->session->userdata('no_nik')])->row_array();
		$this->load->view('layout/userHeader', $data);
		$this->load->view('pengajuan/migrasi', $data);
		$this->load->view('layout/userFooter');
	}
}
