<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
    $this->load->model('M_Project');
	}

	public function index(){
		$data['menu']='home';
		$data['project']=$this->M_Project->getcount();
		$this->load->view('pages/dashboard',$data);
	}
}
?>
