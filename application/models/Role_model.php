<?php defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{

	public function users()
	{
		return $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
	}

	public function getAll()
	{
		return $query = $this->db->get('tbl_user_role')->result_array();
	}

	public function AddData()
	{

		$data = [
			"role"         => $this->input->post('role', true),
		];

		$this->db->insert('tbl_user_role', $data);
	}


	public function EditData()
	{
		$data = [
			"role"         => $this->input->post('role', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_user_role', $data);
	}

	public function getById($id) // memanggil semua data didatabase untuk ditampilkan 
	{

		return $this->db->get_where('tbl_user_role', ['id' => $id])->row_array();
	}

	public function getRoleAccess($role_id) // memanggil semua data didatabase untuk ditampilkan 
	{

		return $this->db->get_where('tbl_user_role', ['id' => $role_id])->row_array();
	}


	public function DeleteData($id)
	{
		$this->db->delete('tbl_user_role', ['id' => $id]);
	}
}
