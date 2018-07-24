<?php
class M_Project extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$hasil = $this->db->get('project');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
  public function create(){
		$data = array(
			'pro_code'	=> $this->input->post('proCode'),
			'pro_name'	=> $this->input->post('proName'),
			'pro_date'	=> $this->input->post('proDate'),
			'clientID'	=> $this->input->post('client'),
			'note'      => $this->input->post('Note')
		);
    return $this->db->insert('project', $data);
  }
  public function update($id, $data){
    $this->db->where('pro_code',$id)->update('project',$data);
  }
  public function delete($id){
    $this->db->where('pro_code',$id)->delete('project');
  }
  public function findDetail($id){
    $hasil = $this->db->where('pro_code',$id)->limit(1)->get('project');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
