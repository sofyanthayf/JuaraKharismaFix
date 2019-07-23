<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
	public function insert_user($data)
  {
    $this->db->set('created_on', 'NOW()', FALSE);
    $this->db->set('last_update', 'NOW()', FALSE);
    $this->db->insert('user', $data);
    return $this->db->insert_id();
  }
  public function get_user()
  {
    $this->db->select('id_user, string_id, user.nama, nim, username, click, role');
    $this->db->where('role', '2');
    return $this->db->get('user')->result_array();
  }
	public function get_user_by_username($username)
  {
		$this->db->select('id_user, string_id, user.nama, nim, username, click, role');
    $this->db->where('username', $username);
    return $this->db->get('user')->row_array();
  }
  public function get_user_by_string_id($string_id)
  {
		$this->db->select('id_user, string_id, user.nama, nim, username, click, role, count(camaba.id_camaba) as get');
		$this->db->join('camaba', 'camaba.referensi = user.string_id', 'left');
		$this->db->group_by('camaba.referensi');
    $this->db->where('role', '2');
    $this->db->where('string_id', $string_id);
    return $this->db->get('user')->row_array();
  }
  public function update_user_by_string_id($string_id, $data)
  {
    $this->db->set('last_update', 'NOW()', FALSE);
    $this->db->where('string_id', $string_id);
    $this->db->update('user', $data);
    return $this->db->affected_rows();
  }
  public function delete_user_by_string_id($string_id)
  {
    $this->db->where('string_id', $string_id);
    $this->db->delete('user');
    return $this->db->affected_rows();
  }
	public function check_user_auth($username, $password)
	{
		$this->db->select('id_user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		if($this->db->get('user')->num_rows()){
			return true;
		} else {
			return false;
		}
	}
	public function get_sum_click()
	{
		$this->db->select('sum(click) as total');
		$data = $this->db->get('user')->row_array();
		return $data['total'];
	}
	public function get_sum_user()
	{
		$this->db->select('count(id_user) as total');
		$this->db->where('role', '2');
		$data = $this->db->get('user')->row_array();
		return $data['total'];
	}
}
