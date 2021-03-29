<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah_warga extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
        $this->load->model("M_surat_n1_n6");
		$this->load->model("Usermodel");
		$this->load->helper('date');
	}

	public function update_kkbaru_batal($id_kkbaru)
	{
		$this->load->model("M_surat_n1_n6");
		$where = array(
			'id_kkbaru' => $id_kkbaru
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('pb_kkbaru', $data);
		redirect('user');
	}

	public function update_pbkk_batal($id_pbkk)
	{
		$where = array(
			'id_pbkk' => $id_pbkk
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('pb_kk', $data);
		redirect('user');
	}

	public function update_pbktp_batal($id_pbktp)
	{
		$where = array(
			'id_pbktp' => $id_pbktp
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('pb_ktp', $data);
		redirect('user');
	}

	public function update_pbakta_batal($id_pbakta)
	{
		$where = array(
			'id_pbakta' => $id_pbakta
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('pb_akta', $data);
		redirect('user');
	}

	public function update_pbizin_batal($id_pbizin)
	{
		$where = array(
			'id_pbizin' => $id_pbizin
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('pb_izin', $data);
		redirect('user');
	}

	public function update_pbmigrasi_batal($id_pbmigrasi)
	{
		$where = array(
			'id_pbmigrasi' => $id_pbmigrasi
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('pb_migrasi', $data);
		redirect('user');
	}

	public function update_sk_belummenikah_batal($id_surat_belummenikah)
	{
		$where = array(
			'id_surat_belummenikah' => $id_surat_belummenikah
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('sk_belummenikah', $data);
		redirect('user');
	}

	public function update_sk_kelakuanbaik_batal($id_surat_kelakuanbaik)
	{
		$where = array(
			'id_surat_kelakuanbaik' => $id_surat_kelakuanbaik
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('sk_kelakuanbaik', $data);
		redirect('user');
	}

	public function update_sk_tidakmampu_batal($id_surat_tidakmampu)
	{
		$where = array(
			'id_surat_tidakmampu' => $id_surat_tidakmampu
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('sk_tidakmampu', $data);
		redirect('user');
	}
	
	public function update_sk_domisili_batal($id_surat_domisili)
	{
		$where = array(
			'id_surat_domisili' => $id_surat_domisili
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('sk_domisili', $data);
		redirect('user');
	}

	public function update_sk_serba_batal($id_surat_serba)
	{
		$where = array(
			'id_surat_serba' => $id_surat_serba
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('sk_serba', $data);
		redirect('user');
	}
	
	public function update_sk_kelahiran_batal($id_surat_kelahiran)
	{
		$where = array(
			'id_surat_kelahiran' => $id_surat_kelahiran
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('sk_kelahiran', $data);
		redirect('user');
	}

	public function update_sk_kematian_batal($id_surat_kematian)
	{
		$where = array(
			'id_surat_kematian' => $id_surat_kematian
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('sk_kematian', $data);
		redirect('user');
	}

	public function update_sk_pindah_batal($id_surat_pindah)
	{
		$where = array(
			'id_surat_pindah' => $id_surat_pindah
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->db->where($where);
        $this->db->update('sk_pindah', $data);
		redirect('user');
	}
	
}
