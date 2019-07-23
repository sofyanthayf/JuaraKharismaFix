<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
      parent::__construct();
			if($this->session->userdata('referensi')){
				$this->session->sess_destroy();
			}
  }

	public function index()
	{
		if(!$this->session->userdata('role')){
			if($this->input->get('ref')){
				$ref = $this->input->get('ref');
				$this->load->model('UserModel');
				$data = $this->UserModel->get_user_by_string_id($ref);
				$data2['click'] = $data['click'] + 1;
				$this->UserModel->update_user_by_string_id($ref, $data2);
			}
		}
		$this->load->view('login');
	}
	public function masuk()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->load->model('UserModel');
		if($this->UserModel->check_user_auth($username, $password)){
			$data = $this->UserModel->get_user_by_username($username);
			$this->session->set_userdata($data);
			if($data['role'] == '1'){
				$this->session->set_flashdata('success', 'Selamat Datang Admin!');
				redirect('admin');
			} else if($data['role'] == '2'){
				$this->session->set_flashdata('success', 'Selamat Datang <strong>'.$data['nama'].'</strong>!');
				redirect('mahasiswa');
			}
		} else {
			$this->session->set_flashdata('error', 'Password salah atau username tidak terdaftar!');
			redirect('login');
		}
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
