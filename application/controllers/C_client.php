<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_client extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_client');
		$this->load->model('M_project');
    $this->load->helper('url_helper');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('pages/admin/V_listClient');
	}

	public function addClient(){
		$this->form_validation->set_rules('clientCode', 'client code', 'required');
		$this->form_validation->set_rules('clientName', 'client name', 'required');

		if($this->form_validation->run() == FALSE){
			$data['pelanggan']="client";
			$this->load->view('pages/admin/V_clientForm', $data);
		}else{
			$this->load->model('M_client');
			$this->M_client->create();
			$this->load->view('pages/admin/V_listClient');
		}
	}

	public function getList(){
		$data['pelanggan']="client";
		$data['client']=$this->M_client->getperProject($_SESSION['project']);
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
	}
}
?>
