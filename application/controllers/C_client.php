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

	public function index(){
		$data['menu']='client';
		$data['client']=$this->M_client->getAll();
		$this->load->view('pages/admin/V_listClient',$data);
	}

	public function addClient(){
		$this->form_validation->set_rules('clientName', 'client name', 'required');
			$data['menu']='client';
			$this->M_client->create();
			redirect(base_url('C_client'));
	}

	public function addClient1(){
			$this->M_client->create();
			redirect(base_url('C_Project/addProject'));
	}

	public function getList(){
		$data['menu']='client';
		$data['client']=$this->M_client->getAll();
		$this->load->view('pages/admin/V_listClient',$data);
	}

	public function editClient($id){
		$this->form_validation->set_rules('clientCode', 'client code', 'required');
		$this->form_validation->set_rules('clientName', 'client name', 'required');

		if($this->form_validation->run() == FALSE){
			$data['menu']='client';
			$data['client']=$this->M_client->findDetail($id);
			$this->load->view('pages/admin/V_editClient', $data);
		}else{
			$this->M_client->update($id);
			redirect(base_url('C_client'));
		}
	}

	public function remove($id){
		$this->M_client->delete($id);
		redirect(base_url('C_client'));
	}
}
