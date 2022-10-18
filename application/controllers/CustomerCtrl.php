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

    // *** Add customers
    public function index()
    {

        if ($customer = $this->cm->common_select("customers", "*")) {
            $data['page'] = "customers/list";
            $data['data'] = $customer;
            $this->load->view('app', $data);
        }
    }
    // *** Add customers

    public function create()
    {
        $this->load->library('form_validation');

        // customer set form validation
        $this->form_validation->set_rules('name', 'Full name', 'required');
        $this->form_validation->set_rules('contact', 'Phone', 'required|is_unique[customers.contact]');
        $this->form_validation->set_rules('address', 'Address');


        if ($this->form_validation->run() === false) {
            $data['page'] = "customers/add";
            $this->load->view('app', $data);
        } else {
            $customer['name'] = $this->input->post('name');
            $customer['contact'] = $this->input->post('contact');
            $customer['address'] = $this->input->post('address');
            $customer['created_at'] =    date('Y-m-d H:i:s');
            $customer['status'] =  1;

            if ($this->cm->common_insert('customers', $customer)) {
                $this->session->set_flashdata('msg', '<b class="text-info">Registration successfull</b>');
                redirect('customer/list');
            } else {
            }
        }
    }


    public function show($id)
    {
        $where['id'] = $id;
        if ($data['data'] = $this->cm->common_select('customers', '*', $where)) {
            $data['page'] = 'customers/edit';
            $this->load->view('app', $data);
        } else {
            redirect('/');
        }
    }


    // *** Add customers
    public function update($id)
    {
        $where['id'] = $id;
        $this->load->library('form_validation');

        // customer set form validation
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('contact', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address');


        if ($this->form_validation->run() === false) {
            $data['data'] = $this->cm->common_select('customers', '*', $where);
            $data['page'] = 'customers/edit';
            $this->load->view('app', $data);
        } else {
            $customer['name'] = $this->input->post('name');
            $customer['address'] = $this->input->post('address');
            $customer['updated_at'] =    date('Y-m-d H:i:s');
            $customer['status'] =  1;

            if ($this->cm->common_update('customers', $customer, $where)) {
                $this->session->set_flashdata('msg', '<b class="text-info">update successfull</b>');
                redirect('customer/list');
            } else {
                redirect("customer/update/$id");
            }
        }
    }

    public function delete($id)
    {
        $where['id'] = $id;
        $this->cm->common_delete('customers', $where);
        redirect('customer/list');
    }
    public function step()
    {
        $data['service'] = $this->cm->common_select('service');
        $data['page'] = "customers/add";
        $this->load->view('app', $data);
    }
}
