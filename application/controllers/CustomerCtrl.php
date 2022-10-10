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




    // *** Addd customers

    public function add()
    {
        $this->load->library('form_validation');
        // $this->load->view('register');

        // set form validation
        $this->form_validation->set_rules('name', 'Full name', 'required');
        $this->form_validation->set_rules('contact', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address');

        if ($this->form_validation->run() === false) {
            $data['service'] = $this->cm->common_select('service');
            $data['page'] = "customers/add";
            $this->load->view('app', $data);
        } else {
            $custmoter['name'] = $this->input->post('name');
            $custmoter['contact'] = $this->input->post('contact');
            $custmoter['address'] = $this->input->post('address');
            $custmoter['created_at'] = date('Y-m-d H:i:s');
            $custmoter['status'] = 1;

            if ($this->cm->common_insert('customers', $custmoter)) {
                $this->session->set_flashdata('msg', '<b class="text-info">Registration successfull</b>');
                redirect('/');
            } else {
                $this->session->set_flashdata('msg', '<b class="text-danger">Please Try again</b>');
                $this->load->view('customer/create');
            }
        }
    }



    public function step()
    {
        $data['service'] = $this->cm->common_select('service');
        $data['page'] = "customers/add";
        $this->load->view('app', $data);
    }
}
