<?php defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{


	public function users()
	{
		$this->db->join('tbl_user_role', 'tbl_user_role.id=tbl_user.role_id', 'LEFT');

		return $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
	}

	public function EditData()
	{

		$name  = $this->input->post('name');
		$email = $this->input->post('email');
		$id_user = $this->input->post('id_user');

		$upload_image = $_FILES['image']['name'];

		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = '90048';
			$config['upload_path']   = './assets/img/profile/';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image')) {

				$new_image = $this->upload->data('file_name');
				$this->db->set('image', $new_image);
			} else {
				echo $this->upload->display_errors();
			}
		}

		$this->db->set('name', $name);
		$this->db->set('email', $email);
		$this->db->where('id_user', $id_user);
		$this->db->update('tbl_user');
	}
}
