<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ServiceCtrl extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('CommonModel', 'cm');
	}

	public function index()
	{
		$where["role"] = $this->input->get("service");
		$service  = $this->cm->common_select('service', '*',$where);
		if ($service) {
			print_r(json_encode($service));
		}
	}

	// * get service data
	public function laundry()
	{
		$data['page'] = "services/laundry";
		$data['data'] = $this->cm->common_select('service', '*');
		$this->load->view('app', $data);
	}
	// * get service data
	public function tailor()
	{
		$data['page'] = "services/tailor";
		$data['data'] = $this->cm->common_select('service', '*');
		$this->load->view('app', $data);
	}

	// * add service data
	public function create()
	{
		$url = $_SERVER['REQUEST_URI'];
		$this->load->library('form_validation');

		// customer set form validation
		$this->form_validation->set_rules('name', 'Full name', 'required');
		$this->form_validation->set_rules('price', 'Rate', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');

		if ($this->form_validation->run() === false) {
			$data['page'] = "services/add";
			$this->load->view('app', $data);
		} else {
			$service['name'] = $this->input->post('name');
			$service['price'] = $this->input->post('price');
			$service['role'] = $role = $this->input->post('role');
			$service['created_at'] =    date('Y-m-d H:i:s');
			$service['status'] =  1;
			$role = strtolower($role);
			if ($this->cm->common_insert('service', $service)) {
				$this->session->set_flashdata('msg', '<b class="text-info">Registration successfull</b>');
				redirect("service/$role");
			} else {
				redirect('/service/create');
			}
		}
	}
	//         print_r(explode("/",$url));
	// get single service
	public function show($id)
	{
		$where['id'] = $id;
		if ($data['data'] = $this->cm->common_select('service', '*', $where)) {
			$data['page'] = 'services/edit';
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
		$this->form_validation->set_rules('name', 'Full name', 'required');
		$this->form_validation->set_rules('price', 'Rate', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');


		if ($this->form_validation->run() === false) {
			$data['data'] = $this->cm->common_select('service', '*', $where);
			$data['page'] = 'services/edit';
			$this->load->view('app', $data);
		} else {
			$service['name'] = $this->input->post('name');
			$service['price'] = $this->input->post('price');
			$service['role'] = $this->input->post('role');
			$service['updated_at'] =    date('Y-m-d H:i:s');
			$service['status'] =  1;

			if ($this->cm->common_update('service', $service, $where)) {
				$this->session->set_flashdata('msg', '<b class="text-info">update successfull</b>');
				redirect('service/list');
			} else {
				redirect("service/update/$id");
			}
		}
	}

	public function delete($id)
	{
		$where['id'] = $id;
		$this->cm->common_delete('service', $where);
		echo "<script>history.back()</script>";
	}
}
