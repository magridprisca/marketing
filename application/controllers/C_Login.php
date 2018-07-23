<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {
  public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index(){
    $data['err_message'] = "";
		$this->load->view('pages/V_login',$data);
	}

  public function aksi_login(){
		$username = $this->input->post('user');
		$password = md5($this->input->post('pass'));
		$isLogin = $this->M_user->login_authen($username, $password);

		$i = $this->M_user->authen_user($username);

		if ($isLogin == true && $i[0]['authentication'] < 3) {
			$newdata = array(
			'user'	=> $i[0]['userID'],
			'nama'	=> $i[0]['name'],
			'poto'	=> $i[0]['userPhoto'],
			'level'	=> $i[0]['level']
			);
			$this->session->set_userdata($newdata);
			$this->M_user->wrong_password($username, 0);
			redirect(base_url());
		}
		else{
			if ($i[0]['authentication'] < 3) {
				$update = $this->M_user->wrong_password($username, $i[0]['authentication']+1);
				$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);
				$this->load->view('pages/V_login', $data);
			}
			else{
				$data['err_message'] = "AKUN ANDA TERBLOCK";
				$this->load->view('pages/V_login', $data);
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
