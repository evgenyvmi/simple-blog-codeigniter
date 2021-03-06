<?php
	/**
	* 
	*/
	class blog_model extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}
		public function get_posts($slug = FALSE)
		{
			if($slug === FALSE){
				$query = $this->db->get('posts');
				return $query->result_array();
			}
			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();
		}
		public function create_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'text' => $this->input->post('text'),
				'user_id' => $this->session->userdata('user_id'));
			return $this->db->insert('posts', $data);
		}
		public function delete_post($id){
				$this->db->where('id', $id);
				$this->db->delete('posts');
				return true;
		}

		public function update_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'text' => $this->input->post('text'),
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);
		}

	}