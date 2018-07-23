<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_client extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_client');
	}

	public function index()
	{
		$this->load->view('pages/admin/V_listClient');
	}

	public function addClient(){
		$this->form_validation->set_rules('clientCode', 'client_code', 'required');
		$this->form_validation->set_rules('clientName', 'client_name', 'required');

		if($this->form_validation->run() == FALSE){
			$data['pelanggan']='client';
			$this->load->view('pages/admin/V_clientForm');
		}else{
			$data = array(
				'clientCode'		=> set_value('client_code'),
				'clientName'		=> set_value('client_name')
			);
			$res=$this->M_client->create($data);
			redirect(base_url('pages/admin/V_clientForm'));
		}
	}

	public function getAll(){

	}
}
?>
