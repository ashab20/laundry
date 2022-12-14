<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardCtrl extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('CommonModel', 'cm');
	}


	public function index()
	{
		$data['page'] = "dashboard/index";
		$data['data'] = $this->db->query("SELECT * FROM customers c JOIN customer_order co on co.customer_id=c.id")->result();
		$this->load->view('app', $data);
	}
}
