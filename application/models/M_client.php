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

	public function getperProject(){
		$hasil = $this->db->where('client.client_code=project.clientID')->get('client, project');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}

	public function findDetail($id){
    $hasil = $this->db->where('client_code',$id)->limit(1)->get('client');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }

	public function create(){
	$data = array(
		'client_code' => $this->input->post('clientCode'),
		'client_name' => $this->input->post('clientName')
	);
	return  $this->db->insert('client', $data);
	}
	public function update($id, $data){
		$this->db->where('client',$id)->update('client',$data);
	}
	public function delete($id){
		$this->db->where('client',$id)->delete('client');
	}
}
?>
