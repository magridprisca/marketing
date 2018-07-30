<?php
class M_Project extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$hasil = $this->db->where('project.clientID=client.client_code')->get('project,client');
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
  public function update($code){
		$data = array(
			'pro_code' => $this->input->post('code'),
			'pro_name' => $this->input->post('project'),
			'clientID' => $this->input->post('client'),
			'promosi' => $this->input->post('mardev'),
			'tgl_promosi' => $this->input->post('tgl_mardev'),
			'opsreq' => $this->input->post('opsreq'),
			'tgl_opsreq' => $this->input->post('tgl_opsreq'),
			'presentasi' => $this->input->post('presentasi'),
			'tgl_presentasi' => $this->input->post('tgl_presentasi'),
			'sourcing_harga' => $this->input->post('sourceprice'),
			'tgl_sourcing_harga' => $this->input->post('tgl_sourceprice'),
			'penyimpananDL' => $this->input->post('sff'),
			'tgl_penyimpananDL' => $this->input->post('tgl_sff'),
			'pengumumanL' => $this->input->post('pgmL'),
			'tgl_pengumumanL' => $this->input->post('tgl_pgmL'),
			'pendaftaranL' => $this->input->post('pdfL'),
			'tgl_pendaftaranL' => $this->input->post('tgl_pdfL'),
			'prakualifikasi1' => $this->input->post('pmDP'),
			'tgl_prakualifikasi1' => $this->input->post('tgl_pmDP'),
			'prakualifikasi2' => $this->input->post('pmbDP'),
			'tgl_prakualifikasi2' => $this->input->post('tgl_pmbDP'),
			'prakualifikasi3' => $this->input->post('pmbkDP'),
			'tgl_prakualifikasi3' => $this->input->post('tgl_pmbkDP'),
			'prakualifikasi4' => $this->input->post('hasilpraK'),
			'tgl_prakualifikasi4' => $this->input->post('tgl_hasilpraK'),
			'pengambilanDL' => $this->input->post('pgDL'),
			'tgl_pengambilanDL' => $this->input->post('tgl_pgDL'),
			'aanwizjing' => $this->input->post('aanwizjing'),
			'tgl_aanwizjing' => $this->input->post('tgl_aanwizjing'),
			'pemasukanD1' => $this->input->post('pmDPAT'),
			'tgl_pemasukanD1' => $this->input->post('tgl_pmDPAT'),
			'pemasukanD2' => $this->input->post('pmbDPAT'),
			'tgl_pemasukanD2' => $this->input->post('tgl_pmbDPAT'),
			'pemasukanD3' => $this->input->post('evalAT'),
			'tgl_pemasukanD3' => $this->input->post('tgl_evalAT'),
			'pemasukanD4' => $this->input->post('klarifAT'),
			'tgl_pemasukanD4' => $this->input->post('tgl_klarifAT'),
			'pemasukanD5' => $this->input->post('negoAT'),
			'tgl_pemasukanD5' => $this->input->post('tgl_negoAT'),
			'pemasukanD6' => $this->input->post('pengumumanAT'),
			'tgl_pemasukanD6' => $this->input->post('tgl_pengumumanAT'),
			'pemasukanD7' => $this->input->post('pemasukanTwr'),
			'tgl_pemasukanD7' => $this->input->post('tgl_pemasukanTwr'),
			'pemasukanD8' => $this->input->post('evalHarga'),
			'tgl_pemasukanD8' => $this->input->post('tgl_evalHarga'),
			'pemasukanD9' => $this->input->post('negoHarga'),
			'tgl_pemasukanD9' => $this->input->post('tgl_negoHarga'),
			'pemasukanD10' => $this->input->post('pengumumanMenang'),
			'tgl_pemasukanD10' => $this->input->post('tgl_pengumumanMenang'),
			'tep' => $this->input->post('tep'),
			'tgl_tep' => $this->input->post('tgl_tep'),
			'spmk' => $this->input->post('SPMK'),
			'tgl_spmk' => $this->input->post('tgl_SPMK'),
			'pembahasanK' => $this->input->post('bahasK'),
			'tgl_pembahasanK' => $this->input->post('tgl_bahasK'),
			'penandatangananK' => $this->input->post('ttdK'),
			'tgl_penandatangananK' => $this->input->post('tgl_ttdK'),
			'efektifK' => $this->input->post('efektifK'),
			'tgl_efektifK' => $this->input->post('tgl_efektifK')
		);
    $this->db->where('pro_code',$code)->update('project',$data);
  }
  public function delete($code){
    $this->db->where('pro_code',$code)->delete('project');
  }
  public function findDetail($id){
    $hasil = $this->db->where('project.clientID=client.client_code and pro_code=',$id)->limit(1)->get('project,client');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
