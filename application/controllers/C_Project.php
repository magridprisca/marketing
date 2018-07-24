<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Project extends CI_Controller {
	public function __construct(){
		parent::__construct();
    $this->load->model('M_Project');
		$this->load->model('M_Process');
		$this->load->model('M_client');
		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('pages/admin/V_listProject');
	}

	public function addProject(){
		$this->form_validation->set_rules('proCode', 'Code', 'required');
		$this->form_validation->set_rules('proName', 'Name', 'required');
		$this->form_validation->set_rules('proDate', 'pro date', 'required');
		$this->form_validation->set_rules('client', 'client id', 'required');
		$this->form_validation->set_rules('Note', 'note', 'required');

		if($this->form_validation->run() == FALSE){
			$data['menu']='project';
      $data['client']=$this->M_client->getAll();
			$this->load->view('pages/admin/V_projectForm',$data);
		}else{
			$this->load->model('M_Project');
			$this->M_Project->create();
			$this->load->view('pages/admin/V_listProject');
		}
	}

	public function getList(){
		$data['menu']="project";
		$data['project']=$this->M_Project->getAll();
		$this->load->view('pages/admin/V_listProject',$data);
	}
}
?>
