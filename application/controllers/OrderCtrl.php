<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrderCtrl extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('CommonModel', 'cm');
	}


	public function laundry()
	{
		$data['page'] = "order/index";
		$data['data'] = $this->db->query("SELECT * FROM customers c JOIN customer_order co on co.customer_id=c.id")->result();
		$this->load->view('app', $data);
	}
}
