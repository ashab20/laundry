<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthCtrl extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	
	public function Login()
	{
		$this->load->view('login');
	}
	// *** Registration
	// 	 	name 	email 	password 	contact 	role 	adress 	created_at 	updated_at 	status 
	public function registration()
	{
		$this->load->view('register');

		// set form validation
		$this->form_validation->set_value('name','Full name','required');
		$this->form_validation->set_value('email','Email','required|valid_email');
		$this->form_validation->set_value('password','Password','required|min_length=8|max_length=20');
		$this->form_validation->set_value('cpassword','Confirm Password','required|match_password');
	}
}
