<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_client extends CI_Controller {
	public function __construct(){
		parent::__construct();

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
			$data['err_message']="Data client kosong!";
			$this->load->view('pages/admin/V_clientForm');

		}
	}
}
?>
