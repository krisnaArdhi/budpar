<?php
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
	}
	function index(){
		$this->load->view('admin/adminwilayah');
	}

	function wilayah(){
		$data=$this->m_admin->wilayah();
		echo json_encode($data);
	}

	function save(){
		$data=$this->product_model->save_product();
		echo json_encode($data);
	}

	function update(){
		$data=$this->product_model->update_product();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->product_model->delete_product();
		echo json_encode($data);
	}

}
