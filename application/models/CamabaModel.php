<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CamabaModel extends CI_Model {
	public function insert_camaba($data)
	{
		$this->db->set('created_on', 'NOW()', FALSE);
    $this->db->set('last_update', 'NOW()', FALSE);
		$this->db->insert('camaba', $data);
		return $this->db->insert_id();
	}
	public function get_camaba_all()
	{
		return $this->db->get('camaba')->result_array();
	}
	public function get_camaba_by_id($id_camaba)
	{
		$this->db->where('id_camaba', $id_camaba);
		return $this->db->get('camaba')->row_array();
	}
	public function update_camaba_by_id($id_camaba, $data)
  {
    $this->db->set('last_update', 'NOW()', FALSE);
		$this->db->set('verified_date', 'NOW()', FALSE);
    $this->db->where('id_camaba', $id_camaba);
    $this->db->update('camaba', $data);
    return $this->db->affected_rows();
  }
	public function delete_camaba_by_id($id_camaba)
  {
    $this->db->where('id_camaba', $id_camaba);
    $this->db->delete('camaba');
    return $this->db->affected_rows();
  }
	public function get_sum_camaba()
	{
		$this->db->select('count(id_camaba) as total');
		$data = $this->db->get('camaba')->row_array();
		return $data['total'];
	}
	public function get_sum_camaba_terima_by_referensi($referensi)
	{
		$this->db->where('referensi', $referensi);
		$this->db->where('status = 1');
		return $this->db->get('camaba')->num_rows();
	}
}
