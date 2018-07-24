<?php
class M_client extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$hasil = $this->db->where('client.client_code=project.clientID')->get('client,project');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}

	public function create($data){
		$this->db->insert('client', $data);
	}
	public function update($id, $data){
		$this->db->where('client',$id)->update('client',$data);
	}
	public function delete($id){
		$this->db->where('client',$id)->delete('client');
	}
}
?>
