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
		$data['menu']="project";
		$data['project']=$this->M_Project->getAll();
		$this->load->view('pages/admin/V_listProject',$data);
	}

	public function addProject(){
			$data['menu']='project';
      $data['client']=$this->M_client->getAll();
			$this->load->view('pages/admin/V_projectForm',$data);
	}
	public function addSave(){
		$this->form_validation->set_rules('proCode', 'Code', 'required');
		$this->form_validation->set_rules('proName', 'Name', 'required');
		$this->form_validation->set_rules('proDate', 'pro date', 'required');
		$this->form_validation->set_rules('client', 'client id', 'required');
		$this->form_validation->set_rules('Note', 'note', 'required');

			$data['menu']='project';
			$this->M_Project->create();
			redirect(base_url('C_Project'));
	}
	public function remove($code){
		$this->M_Project->delete();
		redirect(base_url('C_Project'));
	}
	public function detail($code){
			$data['menu']='project';
			$data['process']=$this->M_Project->findDetail($code);
			$this->load->view('pages/admin/V_process_project',$data);
	}
	public function editproses($code){
		$this->form_validation->set_rules('code', 'a', 'required');
		$this->form_validation->set_rules('project', 'b', 'required');
		$this->form_validation->set_rules('client', 'c', 'required');
		$this->form_validation->set_rules('mardev', 'd');
		$this->form_validation->set_rules('opsreq', 'f');
		$this->form_validation->set_rules('presentasi', 'f');
		$this->form_validation->set_rules('sourceprice', 'h');
		$this->form_validation->set_rules('sff', 'j');
		$this->form_validation->set_rules('pgmL', 'l');
		$this->form_validation->set_rules('pdfL', 'n');
		$this->form_validation->set_rules('pmDP', 'p');
		$this->form_validation->set_rules('pmbDP', 'r');
		$this->form_validation->set_rules('pmbkDP', 't');
		$this->form_validation->set_rules('hasilpraK', 'v');
		$this->form_validation->set_rules('pgDL', 'x');
		$this->form_validation->set_rules('aanwizjing', 'z');
		$this->form_validation->set_rules('pmDPAT', 'bb');
		$this->form_validation->set_rules('pmbDPAT', 'dd');
		$this->form_validation->set_rules('evalAT', 'ff');
		$this->form_validation->set_rules('klarifAT', 'hh');
		$this->form_validation->set_rules('negoAT', 'jj');
		$this->form_validation->set_rules('pengumumanAT', 'll');
		$this->form_validation->set_rules('pemasukanTwr', 'nn');
		$this->form_validation->set_rules('evalHarga', 'pp');
		$this->form_validation->set_rules('negoHarga', 'rr');
		$this->form_validation->set_rules('pengumumanMenang', 'tt');
		$this->form_validation->set_rules('tep', 'vv');
		$this->form_validation->set_rules('SPMK', 'xx');
		$this->form_validation->set_rules('bahasK', 'zz');
		$this->form_validation->set_rules('ttdK', 'bbb');
		$this->form_validation->set_rules('efektifK', 'ddd');

		$this->M_Project->update($code);
		redirect(base_url('C_Project'));
	}

	public function edit($code){

				$data['menu']='project';
				$data['process']=$this->M_Project->findDetail($code);
				$this->load->view('pages/admin/V_editProject',$data);

	}
	public function view($code){
			$data['menu']='project';
			$data['process']=$this->M_Project->findDetail($code);
			$this->load->view('pages/admin/V_viewProject',$data);
	}
}
?>
