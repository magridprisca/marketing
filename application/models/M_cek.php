<?php
class M_cek extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$hasil = $this->db->get('check_process');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
  public function create($data){
    $this->db->insert('pro_code', $data);
  }
  public function update($id, $data){
    $this->db->where('pro_code',$id)->update('check_process',$data);
  }
  public function delete($id){
    $this->db->where('pro_code',$id)->delete('check_process');
  }
  public function findDetail($id){
    $hasil = $this->db->where('pro_code',$id)->limit(1)->get('check_process');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
