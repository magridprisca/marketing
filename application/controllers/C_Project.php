<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Project extends CI_Controller {
	public function __construct(){
		parent::__construct();
    $this->load->model('M_Project');
		$this->load->model('M_Process');
		$this->load->model('M_client');
	}

	public function index()
	{
		$this->load->view('pages/admin/V_listProject');
	}

	public function addProject(){
		$this->form_validation->set_rules('clientCode', 'client_code', 'required');
		$this->form_validation->set_rules('clientName', 'client_name', 'required');

		if($this->form_validation->run() == FALSE){
			$data['menu']='project';
      $data['client']=$this->M_Project->getAll();
			$this->load->view('pages/admin/V_ProjectForm',$data);
		}else{
			$data = array(
        'pro_code'	=> set_value('pro_code'),
        'pro_name'	=> set_value('pro_name'),
        'pro_date'	=> set_value('pro_date'),
        'clientID'	=> set_value('M_client'),
        'note'      => set_value('note')
			);
			$res=$this->M_project->create($data);
			redirect(base_url('C_Project'));
		}
	}

	public function getAll(){

	}
}
?>
