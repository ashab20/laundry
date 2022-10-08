<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CustomerCtrl extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('CommonModel', 'cm');
        // $this->load->library('form_validation');
    }




    // *** Registration
    // 	 	name 	email 	password 	contact 	role 	adress 	created_at 	updated_at 	status 
    public function add()
    {
        $this->load->library('form_validation');
        // $this->load->view('register');

        // set form validation
        $this->form_validation->set_rules('name', 'Full name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('contact', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() === false) {
            $data['page'] = "customers/add";
            $this->load->view('app', $data);
        } else {
            $usr['name'] = $this->input->post('name');
            $usr['email'] = $this->input->post('email');
            $usr['password'] = sha1(md5($this->input->post('password')));
            $usr['contact'] = $this->input->post('contact');
            $usr['address'] = $this->input->post('address');
            $usr['role'] = $this->input->post('role');
            $usr['created_at'] = date('Y-m-d H:i:s');
            $usr['status'] = 1;

            if ($this->cm->common_insert('users', $usr)) {
                $this->session->set_flashdata('msg', '<b class="text-info">Registration successfull</b>');
                redirect('/');
            } else {
                $this->session->set_flashdata('msg', '<b class="text-danger">Please Try again</b>');
                $this->load->view('register');
            }
        }
    }

    public function step(){
        $data['page'] = "customers/step";
            $this->load->view('app', $data);
    }
}
