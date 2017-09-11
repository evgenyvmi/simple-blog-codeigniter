<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			$data = array(
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password,
			);


			return $this->db->insert('users', $data);
		}


		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				//print_r($result->row(0));die();
				return array($result->row(0)->id, $result->row(0)->is_admin);
			} else {
				return false;
			}
		}

		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
		public function get_users()
		{
			$query = $this->db->get('users');
			return $query->result_array();
		}
	}