<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
    $this->load->model('M_Project');
	}

	public function index(){
		$data['menu']='home';
		$data['menuu']='project';
		$data['project']=$this->M_Project->getcount();
		$data['projectDone']=$this->M_Project->getcountDone();
		$data['projectProcess']=$this->M_Project->getcountProcess();
		$data['thp_praLelang']=$this->M_Project->thpPralelang();
		$data['thp_lelang']=$this->M_Project->thpLelang();
		$data['thp_kontrak']=$this->M_Project->thpKontrak();
		$this->load->view('pages/dashboard',$data);
	}

}
?>
