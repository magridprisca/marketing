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
			$data['menu']='project';
			$this->M_Project->create();
			redirect(base_url('C_Project'));
		}
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
		$this->form_validation->set_rules('tgl_mardev', 'e', 'required');
		$this->form_validation->set_rules('opsreq', 'f');
		$this->form_validation->set_rules('tgl_opsreq', 'e', 'required');
		$this->form_validation->set_rules('presentasi', 'f');
		$this->form_validation->set_rules('tgl_presentasi', 'g', 'required');
		$this->form_validation->set_rules('sourceprice', 'h');
		$this->form_validation->set_rules('tgl_sourceprice', 'i', 'required');
		$this->form_validation->set_rules('sff', 'j');
		$this->form_validation->set_rules('tgl_sff', 'k', 'required');
		$this->form_validation->set_rules('pgmL', 'l');
		$this->form_validation->set_rules('tgl_pgmL', 'm', 'required');
		$this->form_validation->set_rules('pdfL', 'n');
		$this->form_validation->set_rules('tgl_pdfL', 'o', 'required');
		$this->form_validation->set_rules('pmDP', 'p');
		$this->form_validation->set_rules('tgl_pmDP', 'q', 'required');
		$this->form_validation->set_rules('pmbDP', 'r');
		$this->form_validation->set_rules('tgl_pmbDP', 's', 'required');
		$this->form_validation->set_rules('pmbkDP', 't');
		$this->form_validation->set_rules('tgl_pmbkDP', 'u', 'required');
		$this->form_validation->set_rules('hasilpraK', 'v');
		$this->form_validation->set_rules('tgl_hasilpraK', 'w', 'required');
		$this->form_validation->set_rules('pgDL', 'x');
		$this->form_validation->set_rules('tgl_pgDL', 'y', 'required');
		$this->form_validation->set_rules('aanwizjing', 'z');
		$this->form_validation->set_rules('tgl_aanwizjing', 'aa', 'required');
		$this->form_validation->set_rules('pmDPAT', 'bb');
		$this->form_validation->set_rules('tgl_pmDPAT', 'cc', 'required');
		$this->form_validation->set_rules('pmbDPAT', 'dd');
		$this->form_validation->set_rules('tgl_pmbDPAT', 'ee', 'required');
		$this->form_validation->set_rules('evalAT', 'ff');
		$this->form_validation->set_rules('tgl_evalAT', 'gg', 'required');
		$this->form_validation->set_rules('klarifAT', 'hh');
		$this->form_validation->set_rules('tgl_klarifAT', 'ii', 'required');
		$this->form_validation->set_rules('negoAT', 'jj');
		$this->form_validation->set_rules('tgl_negoAT', 'kk', 'required');
		$this->form_validation->set_rules('pengumumanAT', 'll');
		$this->form_validation->set_rules('tgl_pengumumanAT', 'mm', 'required');
		$this->form_validation->set_rules('pemasukanTwr', 'nn');
		$this->form_validation->set_rules('tgl_pemasukanTwr', 'oo', 'required');
		$this->form_validation->set_rules('evalHarga', 'pp');
		$this->form_validation->set_rules('tgl_evalHarga', 'qq', 'required');
		$this->form_validation->set_rules('negoHarga', 'rr');
		$this->form_validation->set_rules('tgl_negoHarga', 'ss', 'required');
		$this->form_validation->set_rules('pengumumanMenang', 'tt');
		$this->form_validation->set_rules('tgl_pengumumanMenang', 'uu', 'required');
		$this->form_validation->set_rules('tep', 'vv');
		$this->form_validation->set_rules('tgl_tep', 'ww', 'required');
		$this->form_validation->set_rules('SPMK', 'xx');
		$this->form_validation->set_rules('tgl_SPMK', 'yy', 'required');
		$this->form_validation->set_rules('bahasK', 'zz');
		$this->form_validation->set_rules('tgl_bahasK', 'aaa', 'required');
		$this->form_validation->set_rules('ttdK', 'bbb');
		$this->form_validation->set_rules('tgl_ttdK', 'ccc', 'required');
		$this->form_validation->set_rules('efektifK', 'ddd');
		$this->form_validation->set_rules('tgl_efektifK', 'eee', 'required');

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
