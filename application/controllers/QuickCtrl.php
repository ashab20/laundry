<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QuickCtrl extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('CommonModel', 'cm');
        // $this->load->library('form_validation');
    }




    // *** Add customers

    public function find_customer()
    {

        if ($con['contact'] = $this->input->get('phone')) {
            if ($customer = $this->cm->common_select("customers", "*", $con)) {
                print_r(json_encode($customer));
            }
        }
    }
    // *** Add customers

    public function customer_add()
    {

        if ($customer = $this->input->get()) {

            if ($customer_id = $this->cm->common_insert('customers', $customer)) {
                echo json_decode($customer_id);
            }
        }
    }
    // *** Add customers

    public function products_add()
    {

        $all = $this->input->get();
        $product_id = [];
        $outerList = $this->input->get('outer-list');
        $order['created_at'] = $order['in_date'] =  date('Y-m-d H:i:s');
        $order['status'] = 1;
        $order['customer_id'] = $this->input->get('customer_id');
        $this->db->trans_start();
        foreach ($outerList as $outer) {
            // Product
            $product = $outer;
            $product['created_at'] =  date('Y-m-d H:i:s');
            $product['status'] = 1;
            $product['customer_id'] = $this->input->get('customer_id');
            $this->db->insert('products', $product);
            $product_id[] .= $this->db->insert_id();
        };
        $order['total_price'] = $this->input->get('total_price');
        $order['paid'] = $this->input->get('payment');
        $order['product_id'] =  json_encode($product_id);
        $this->db->insert('customer_order', $order);
        $this->db->trans_complete();
    }




    // *** Addd customers

    public function add()
    {
        $this->load->library('form_validation');

        // customer set form validation
        $this->form_validation->set_rules('name', 'Full name', 'required');
        $this->form_validation->set_rules('contact', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address');
        // //    product
        $this->form_validation->set_rules('service_id', 'Service', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');
        $this->form_validation->set_rules('qty', 'Quantity', 'required');
        $this->form_validation->set_rules('subtotal', 'Total');
        // //    order
        // $this->form_validation->set_rules('total_price', 'Total', 'required');

        if ($this->form_validation->run() === false) {
            $data['service'] = $this->cm->common_select('service');
            $data['page'] = "quick/index";
            $this->load->view('app', $data);
        } else {
            $customer['name'] = $this->input->post('name');
            $customer['contact'] = $this->input->post('contact');
            $customer['address'] = $this->input->post('address');

            // // id 	details 	qty 	subtotal 	customer_order_id 	service_id 	created_at 	updated_at 	status 
            // // ? product
            $product['service_id'] = $this->input->post('service_id');
            $product['details'] = $this->input->post('details');
            $product['qty'] = $this->input->post('qty');
            $product['subtotal'] = $this->input->post('subtotal');


            // ? customer order
            // id 	customer_id 	product_id 	total_price 	in_date 	out_date 	status 	created_at 	updated_at 
            // $order['customer_id'] = $this->input->post('customer_id');
            // $order['product_id'] = $this->input->post('product_id');
            // $this->input->post('total_price');
            // // $order['in_date'] = $this->input->post('in_date');

            $customer['created_at'] =  $product['created_at'] =  $order['created_at'] = $order['in_date'] =  date('Y-m-d H:i:s');
            $customer['status'] = $product['in_date'] = $order['status'] = 1;

            // $customer_id = $this->cm->common_insert('customers', $customer);
            if ($customer_id = $this->cm->common_insert('customers', $customer)) {

                $product['customer_id'] = $customer_id;
                // $product_id = $this->cm->common_insert('products', $product);
                if ($$product_id = $this->cm->common_insert('products', $product)) {
                    $order['customer_id'] = $customer_id;
                    $order['product_id'] = $product_id;
                    $this->session->set_flashdata('msg', '<b class="text-info">Registration successfull</b>');
                    redirect('/');
                    // if ($this->cm->common_insert('customer_order', $order)) {
                    //     $this->session->set_flashdata('msg', '<b class="text-info">Registration successfull</b>');
                    //     redirect('/');
                    // };
                }
            } else {
                $this->session->set_flashdata('msg', '<b class="text-danger">Please Try again</b>');
                $this->load->view('customer/create');
            }
        }
    }
    // *** update customers

    public function edit()
    {

        if ($this->input->get()) {

            $customer_Id['id'] =  $this->input->get('id');
            $customer['name'] = $this->input->get('name');
            $customer['contact'] = $this->input->get('contact');
            $customer['address'] = $this->input->get('address');
            $customer['created_at'] =  date('Y-m-d H:i:s');
            $customer['status'] = 1;
            if ($customer_id = $this->cm->common_update('customers', $customer, $customer_Id)) {
                echo $customer_id;
            }
        }


        // if ($customer_id = $this->cm->common_update('customers', $customer,$customer_Id)) {

        //     return $customer_id;
        // } else {
        //     $this->session->set_flashdata('msg', '<b class="text-danger">Please Try again</b>');
        //     $this->load->view('customer/create');
        // }

    }



    public function step()
    {
        $data['service'] = $this->cm->common_select('service');
        $data['page'] = "quick/index";
        $this->load->view('app', $data);
    }
}
