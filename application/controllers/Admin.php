<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
      parent::__construct();
			if($this->session->userdata('role') != '1'){
				$this->session->set_flashdata('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
				redirect('login');
			}
  }
	public function index()
	{
		$this->load->model('UserModel');
		$this->load->model('CamabaModel');
		$data['sum_click'] = $this->UserModel->get_sum_click();
		$data['sum_user'] = $this->UserModel->get_sum_user();
		$data['sum_camaba'] = $this->CamabaModel->get_sum_camaba();
		$this->load->view('admin/dashboard', $data);
	}
	// USER
	public function user()
	{
		$this->load->model('UserModel');
		$this->load->model('CamabaModel');
		$user = $this->UserModel->get_user();
		$data['user'] = [];
		foreach ($user as $row) {
			$row['get'] = $this->CamabaModel->get_sum_camaba_terima_by_referensi($row['string_id']);
			$data['user'][] = $row;
		}
		// echo json_encode($data);
		$this->load->view('admin/user', $data);
	}
	public function user_tambah()
	{
		$data['nama'] = $this->input->post('input-nama');
		$data['nim'] = $this->input->post('input-nim');
		$data['username'] = $this->input->post('input-username');
		$data['password'] = md5($this->input->post('input-password'));
		$data['role'] = '2';
		$raw_id = md5(time());
		$data['string_id'] =  substr($raw_id, 0, 5).'-'.substr($raw_id, 6, 5).'-'.substr($raw_id, 11, 5);
		$this->load->model('UserModel');
		if($this->UserModel->insert_user($data)){
			$this->session->set_flashdata('success', 'User telah dimasukkan.');
		} else {
			$this->session->set_flashdata('error', 'User tidak dapat dimasukkan.');
		}
		redirect('admin/user');
	}
	public function user_data($string_id)
	{
		$this->load->model('UserModel');
		$data = $this->UserModel->get_user_by_string_id($string_id);
		echo json_encode($data);
	}
	public function user_edit($string_id)
	{
		if($this->input->post('input-password') != ''){
			$data['password'] = md5($this->input->post('input-password'));
		}
		$data['nama'] = $this->input->post('input-nama');
		$data['nim'] = $this->input->post('input-nim');
		$data['username'] = $this->input->post('input-username');
		$this->load->model('UserModel');
		if($this->UserModel->update_user_by_string_id($string_id, $data)){
			$this->session->set_flashdata('success', 'User telah diubah.');
		} else {
			$this->session->set_flashdata('error', 'User tidak dapat diubah.');
		}
		redirect('admin/user');
	}
	public function user_hapus($string_id)
	{
		$this->load->model('UserModel');
		if($this->UserModel->delete_user_by_string_id($string_id)){
			$this->session->set_flashdata('warning', 'User telah dihapus.');
		} else {
			$this->session->set_flashdata('error', 'User tidak dapat dihapus.');
		}
		redirect('admin/user');
	}

	// CAMABA
	public function camaba()
	{
		$this->load->model('CamabaModel');
		$data['camaba'] = $this->CamabaModel->get_camaba_all();
		$this->load->view('admin/camaba', $data);
	}
	public function camaba_data($id_camaba)
	{
		$this->load->model('CamabaModel');
		$data = $this->CamabaModel->get_camaba_by_id($id_camaba);
		echo json_encode($data);
	}
	public function camaba_terima($id_camaba)
	{
		$data['status'] = true;
		$this->load->model('CamabaModel');
		if($this->CamabaModel->update_camaba_by_id($id_camaba, $data)){
			$this->session->set_flashdata('success', 'Calon mahasiswa baru telah diverifikasi.');
		} else {
			$this->session->set_flashdata('error', 'Calon mahasiswa baru tidak dapat diverifikasi.');
		}
		redirect('admin/camaba');
	}
	public function camaba_tolak($id_camaba)
	{
		$data['status'] = false;
		$this->load->model('CamabaModel');
		if($this->CamabaModel->update_camaba_by_id($id_camaba, $data)){
			$this->session->set_flashdata('success', 'Calon mahasiswa baru telah diverifikasi.');
		} else {
			$this->session->set_flashdata('error', 'Calon mahasiswa baru tidak dapat diverifikasi.');
		}
		redirect('admin/camaba');
	}
	public function camaba_hapus($id_camaba)
	{
		$data['status'] = false;
		$this->load->model('CamabaModel');
		if($this->CamabaModel->delete_camaba_by_id($id_camaba)){
			$this->session->set_flashdata('warning', 'Calon mahasiswa baru telah dihapus.');
		} else {
			$this->session->set_flashdata('error', 'Calon mahasiswa baru tidak dapat dihapus.');
		}
		redirect('admin/camaba');
	}

}
