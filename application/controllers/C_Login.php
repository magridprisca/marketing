<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {
  public function __construct(){
		parent::__construct();
		$this->load->model('M_User');
	}

	public function index(){
    $data['err_message'] = "";
		$this->load->view('pages/V_login',$data);
	}

  public function aksi_login(){
		$username = $this->input->post('user');
		$password = md5($this->input->post('pass'));
		$isLogin = $this->M_User->login_authen($username, $password);

		$i = $this->M_User->authen_user($username);

		if ($isLogin == true){
      if($i[0]['authentication'] < 3) {
  			$newdata = array(
  			'user'	=> $i[0]['username'],
  			'nama'	=> $i[0]['name'],
        'email'	=> $i[0]['email'],
  			'status'	=> 'Login'
  			);
  			$this->session->set_userdata($newdata);
  			$this->M_User->wrong_password($username, 0);
  			redirect(base_url());
  		}
  		else{
  			if ($i[0]['authentication'] < 3) {
  				$update = $this->M_User->wrong_password($username, $i[0]['authentication']+1);
  				$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);
  				$this->load->view('pages/V_login', $data);
  			}
  			else{
  				$data['err_message'] = "AKUN ANDA TERBLOCK";
  				$this->load->view('pages/V_login', $data);
  			}
  		}
    }else{
			  $this->session->set_flashdata('error', true);
        $data['err_message'] = "Username atau Password Salah";
    		$this->load->view('pages/V_login',$data);
    }
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
