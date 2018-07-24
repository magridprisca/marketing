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

<<<<<<< HEAD
	public function getperProject(){
		$hasil = $this->db->where('client.client_code=project.clientID')->get('client, project');
=======
<<<<<<< HEAD
	public function create($data){
		$this->db->insert('client', $data);
=======
	public function getperProject($code){
		$hasil = $this->db->where('client.client_code=project.clientID and client.client_code="'.$code.'"')->get('client, project');
>>>>>>> f89c181d3122eee39f0a33ec90a5ef2e438d74a6
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
>>>>>>> 987332cdcad32ba9fac2ee2b1c1d860de9487c5b
	}
	public function update($id, $data){
		$this->db->where('client',$id)->update('client',$data);
	}
	public function delete($id){
		$this->db->where('client',$id)->delete('client');
	}
}
?>
