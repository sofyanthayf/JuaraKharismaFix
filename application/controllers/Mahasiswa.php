<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	function __construct() {
      parent::__construct();
			if(!$this->session->userdata('role') == '2'){
				$this->session->set_flashdata('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
				redirect('login');
			}
  }

	public function index()
	{
		$this->load->model('UserModel');
		$this->load->model('CamabaModel');
		$data['mahasiswa'] = $this->UserModel->get_user_by_string_id($this->session->userdata('string_id'));
		$data['mahasiswa']['get'] = $this->CamabaModel->get_sum_camaba_terima_by_referensi($this->session->userdata('string_id'));
		$this->load->view('mahasiswa', $data);
	}
}
