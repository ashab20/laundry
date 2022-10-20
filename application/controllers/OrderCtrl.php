<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrderCtrl extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('CommonModel', 'cm');
	}


	public function index()
	{
		$data['page'] = "search";
		$this->load->view('app', $data);
	}
	public function search()
	{
		$where = $this->input->get("search");
		$data =  $this->db->query("SELECT * FROM customers c JOIN customer_order co on co.customer_id=c.id where co.id=$where")->row();
		print_r(json_encode($data));
	}
	public function laundry()
	{
		$data['page'] = "order/laundry";
		$data['data'] = $this->db->query("SELECT co.id ,c.name, c.contact,c.address,c.created_at,c.status,co.customer_id,co.product_id,co.total_price,co.paid,co.in_date,co.out_date,co.status, s.name as service_name FROM customers c JOIN customer_order co on co.customer_id=c.id JOIN service s on s.role='LAUNDRY' ORDER BY co.id DESC")->result();
		$this->load->view('app', $data);
	}

	public function tailor()
	{
		$data['page'] = "order/tailor";
		$data['data'] = $this->db->query("SELECT c.name, c.contact,c.address,c.created_at,c.status,co.customer_id,co.product_id,co.total_price,co.paid,co.in_date,co.out_date,co.status, s.name as service_name FROM customers c JOIN customer_order co on co.customer_id=c.id JOIN service s on s.role='TAILOR' ORDER BY co.id DESC")->result();
		$this->load->view('app', $data);
	}
	public function delete($id)
	{
		$where['id'] = $id;
		$this->cm->common_delete('customer_order', $where);
		echo "<script>history.back();</script>";
	}
}
