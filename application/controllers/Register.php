<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct() {
      parent::__construct();
			if(!$this->input->post('nama')){
				$this->session->set_flashdata('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
				redirect('login');
			}
  }

	public function index()
	{
		$this->load->model('UserModel');
		// Cek Jika Ada Orang Lain Sudah Login Admin / Mahasiswa
		if($this->session->userdata('role')){
			$this->session->set_flashdata('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
			redirect('mahasiswa');
		} else {
			// Check Untuk Mengetahui Data Sudah Ada atau Tidak (Kalau tidak ada berarti jangan insert)
			if(!$this->session->userdata('nama')){
				$data['referensi'] = $this->input->post('referensi');
				$data2 = $this->UserModel->get_user_by_string_id($data['referensi']);
				// Check Jika Referensi ada Atau Tidak
				if (!$data2) {
					$this->session->set_flashdata('error', 'Referensi anda belum terdaftar. Mohon periksa link anda atau hubungi admin.');
					redirect('login');
				} else {
					$data['nama'] = $this->input->post('nama');
					$data['alamat'] = $this->input->post('alamat');
					$data['no_hp'] = $this->input->post('no-hp');
					$data['asal_sekolah'] = $this->input->post('asal-sekolah');
					$this->load->model('CamabaModel');
					if($this->CamabaModel->insert_camaba($data)){
						$this->session->set_flashdata('success', 'Anda telah terdaftar menggunakan referensi <strong>'.$data['referensi'].'</strong>');
						$this->session->set_userdata($data);
						$this->load->view('camaba/camaba_home');
					} else {
						$this->session->set_flashdata('error', 'Maaf, terdapat kesalahan. Hubungi admin.');
						redirect('login');
					}
				}
			} else {
				$this->load->view('camaba/camaba_home');
			}
		}
	}

	public function daftar()
	{
		$this->load->view('camaba/camaba_home');
	}
}
