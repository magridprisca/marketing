<?php
class M_Process extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$hasil = $this->db->get('process');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
  public function create($data){
    $this->db->insert('process_code', $data);
  }
  public function update($id, $data){
    $this->db->where('process_code',$id)->update('process',$data);
  }
  public function delete($id){
    $this->db->where('process_code',$id)->delete('process');
  }
  public function findDetail($id){
    $hasil = $this->db->where('process_code',$id)->limit(1)->get('process');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
