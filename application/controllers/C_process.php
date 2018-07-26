<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_process extends CI_Controller {
	public function __construct(){
		parent::__construct();
    $this->load->model('M_Project');
		$this->load->model('M_Process');
		$this->load->model('M_client');
		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index(){
    $data['menu']='project';
    $data['pc']="process";
		$data['process']=$this->M_Process->getAll();
    $this->load->view('pages/V_process_project', $data);
	}

 	public function addProject(){
		$this->form_validation->set_rules('Code', 'code', 'required');
		$this->form_validation->set_rules('Name', 'name', 'required');
		$this->form_validation->set_rules('Process', 'process', 'required');
		$this->form_validation->set_rules('subProcess', 'sub process', 'required');
		$this->form_validation->set_rules('subsubProcess', 'sub-sub process', 'required');
		$this->form_validation->set_rules('Note', 'note', 'required');

		if($this->form_validation->run() == FALSE){
			$data['pc']='process';
      $data['menu']=$this->M_Project->getAll();
      $data['client']=$this->M_client->getAll();
      $this->load->view('pages/V_process_project', $data);
		}else{
			$data['pc']='process';
			$this->M_Process->create();
			redirect ($this->load->view('pages/admin/V_listProject',$data));
		}
	}
	public function remove($code){
		$this->M_Project->delete();
		redirect(base_url('C_Project'));
	}
	public function detail($code){

	}
	public function edit($code){

	}
}
?>
