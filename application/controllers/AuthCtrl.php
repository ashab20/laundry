<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthCtrl extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('commonModel', 'cm');
		// $this->load->library('form_validation');
	}


	public function Login()
	{
		$this->load->view('login');
	}
	// *** Registration
	// 	 	name 	email 	password 	contact 	role 	adress 	created_at 	updated_at 	status 
	public function registration()
	{
		$this->load->library('form_validation');
		$this->load->view('register');

		// set form validation
		$this->form_validation->set_value('name', 'Full name', 'required');
		$this->form_validation->set_value('email', 'Email', 'required|valid_email');
		$this->form_validation->set_value('password', 'Password', 'required|min_length[6]|max_length[20]');
		$this->form_validation->set_value('cpassword', 'Confirm Password', 'required|match[password]');
		$this->form_validation->set_value('contact', 'Phone', 'required');
		$this->form_validation->set_value('address', 'Address', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('register');
		} else {
			$usr['name'] = $this->input->post('name');
			$usr['email'] = $this->input->post('email');
			$usr['password'] = sha1(md5($this->input->post('password')));
			$usr['contact'] = $this->input->post('contact');
			$usr['address'] = $this->input->post('address');

			if ($this->cm->common_insert('users', $usr)) {
				$this->session->set_flashdata('msg', '<b class="text-info">Registration successfull</b>');
				redirect('login');
			} else {
				$this->session->set_flashdata('msg', '<b class="text-danger">Please Try again</b>');
				$this->load->view('register');
			}
		}
	}
}
