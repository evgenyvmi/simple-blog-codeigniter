<?php
	class Blog extends CI_Controller{
		public function index()
		{

			$data['title'] = 'Posts';
			$data['users'] = $this->user_model->get_users();
			$data['posts'] = $this->blog_model->get_posts();
			$this->load->view('templates/header');
			$this->load->view('blog/index', $data);
			$this->load->view('templates/footer');
		}
		public function show($slug= NULL)
		{
			$data['post'] = $this->blog_model->get_posts($slug);

			$data['title'] = $data['post']['title'];

			$this->load->view('templates/header');
			$this->load->view('blog/show', $data);
			$this->load->view('templates/footer');
		}
		public function create() {
			// Check login
			//if(!$this->session->userdata('logged_in')){
			//	redirect('users/login');
			//}
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('text', 'Text', 'required');

			$data['title'] = 'Create Post';

			if($this->form_validation->run() === FAlSE){
				$this->load->view('templates/header');
				$this->load->view('blog/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->blog_model->create_post();
				$this->load->view('templates/header');
				$this->load->view('blog/success');
				$this->load->view('templates/footer');

			}
		}
		public function delete($id){
			$this->blog_model->delete_post($id);
			redirect('blog');
		}
		public function edit($slug){
			$data['post'] = $this->blog_model->get_posts($slug);

			$data['title'] = 'Edit';

			$this->load->view('templates/header');
			$this->load->view('blog/edit', $data);
			$this->load->view('templates/footer');
			#$this->blog_model->edit_post($id);
			#redirect('blog');
		}

		public function update(){
			$this->blog_model->update_post();
			redirect('blog');
		}
	}
