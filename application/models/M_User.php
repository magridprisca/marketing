<?php
class M_User extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	function login_authen($username,$password){
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->from('user');
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		}else{
			return false;
		}
	}

	public function authen_user($id){
		$this->db->select('*');
		$this->db->where('username', $id);
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result_array();
  }

	public function wrong_password($id, $value){
		$this->db->set('authentication', $value);
		$this->db->where('username', $id);
		$this->db->update('user');
	}

	public function getAll(){
		$hasil = $this->db->order_by("username")->get('user');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
  public function findDetail($id){
    $hasil = $this->db->where('username=',$id)->limit(1)->get('user');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
