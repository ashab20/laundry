<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardCtrl extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}

	
	public function index()
	{
		$data['page'] = "dashboard/index";
		$this->load->view('app',$data);
	}
}
