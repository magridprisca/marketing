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
<<<<<<< HEAD
	$this->db->insert('client', $data);
=======
		$this->db->insert('client', $data);
>>>>>>> 720400479694d55d44538385528c10e6ca11817e
	}
	public function update($id, $data){
		$this->db->where('client',$id)->update('client',$data);
	}
	public function delete($id){
		$this->db->where('client',$id)->delete('client');
	}
<<<<<<< HEAD
}
=======
>>>>>>> 720400479694d55d44538385528c10e6ca11817e
?>
