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
		if($this->input->post('mardev')==1){ $tgl_promosi=date('Y-m-d'); } else { $tgl_promosi="0000-00-00"; }
		if($this->input->post('opsreq')==1){ $tgl_opsreq=date('Y-m-d'); }  else { $tgl_opsreq="0000-00-00"; }
		if($this->input->post('presentasi')==1){ $tgl_presentasi=date('Y-m-d'); }  else { $tgl_presentasi="0000-00-00"; }
		if($this->input->post('sourceprice')==1){ $tgl_sourcing_harga=date('Y-m-d'); }  else { $tgl_sourcing_harga="0000-00-00"; }
		if($this->input->post('sff')==1){ $tgl_penyiapanDL=date('Y-m-d'); }  else { $tgl_penyiapanDL="0000-00-00"; }
		if($this->input->post('pgmL')==1){ $tgl_pengumumanL=date('Y-m-d'); }  else { $tgl_pengumumanL="0000-00-00"; }
		if($this->input->post('pdfL')==1){ $tgl_pendaftaranL=date('Y-m-d'); }  else { $tgl_pendaftaranL="0000-00-00"; }
		if($this->input->post('pmDP')==1){ $tgl_prakualifikasi1=date('Y-m-d'); }  else { $tgl_prakualifikasi1="0000-00-00"; }
		if($this->input->post('pmbDP')==1){ $tgl_prakualifikasi2=date('Y-m-d'); }  else { $tgl_prakualifikasi2="0000-00-00"; }
		if($this->input->post('pmbkDP')==1){ $tgl_prakualifikasi3=date('Y-m-d'); }  else { $tgl_prakualifikasi3="0000-00-00"; }
		if($this->input->post('hasilpraK')==1){ $tgl_prakualifikasi4=date('Y-m-d'); }  else { $tgl_prakualifikasi4="0000-00-00"; }
		if($this->input->post('pgDL')==1){ $tgl_pengambilanDL=date('Y-m-d'); }  else { $tgl_pengambilanDL="0000-00-00"; }
		if($this->input->post('aanwizjing')==1){ $tgl_aanwizjing=date('Y-m-d'); }  else { $tgl_aanwizjing="0000-00-00"; }
		if($this->input->post('pmDPAT')==1){ $tgl_pemasukanD1=date('Y-m-d'); }  else { $tgl_pemasukanD1="0000-00-00"; }
		if($this->input->post('pmbDPAT')==1){ $tgl_pemasukanD2=date('Y-m-d'); }  else { $tgl_pemasukanD2="0000-00-00"; }
		if($this->input->post('evalAT')==1){ $tgl_pemasukanD3=date('Y-m-d'); }  else { $tgl_pemasukanD3="0000-00-00"; }
		if($this->input->post('klarAT')==1){ $tgl_pemasukanD4=date('Y-m-d'); }  else { $tgl_pemasukanD4="0000-00-00"; }
		if($this->input->post('negoAT')==1){ $tgl_pemasukanD5=date('Y-m-d'); }  else { $tgl_pemasukanD5="0000-00-00"; }
		if($this->input->post('pengumumanAT')==1){ $tgl_pemasukanD6=date('Y-m-d'); }  else { $tgl_pemasukanD6="0000-00-00"; }
		if($this->input->post('pemasukanTwr')==1){ $tgl_pemasukanD7=date('Y-m-d'); }  else { $tgl_pemasukanD7="0000-00-00"; }
		if($this->input->post('evalHarga')==1){ $tgl_pemasukanD8=date('Y-m-d'); }  else { $tgl_pemasukanD8="0000-00-00"; }
		if($this->input->post('negoHarga')==1){ $tgl_pemasukanD9=date('Y-m-d'); }  else { $tgl_pemasukanD9="0000-00-00"; }
		if($this->input->post('pengumumanMenang')==1){ $tgl_pemasukanD10=date('Y-m-d'); }  else { $tgl_pemasukanD610="0000-00-00"; }
		if($this->input->post('tep')==1){ $tgl_tep=date('Y-m-d'); }  else { $tgl_tep="0000-00-00"; }
		if($this->input->post('SPMK')==1){ $tgl_spmk=date('Y-m-d'); }  else { $tgl_spmk="0000-00-00"; }
		if($this->input->post('bahasK')==1){ $tgl_pembahasanK=date('Y-m-d'); }  else { $tgl_pembahasanK="0000-00-00"; }
		if($this->input->post('ttdK')==1){ $tgl_penandatangananK=date('Y-m-d'); }  else { $tgl_penandatangananK="0000-00-00"; }
		if($this->input->post('efektifK')==1){ $tgl_efektifK=date('Y-m-d'); }  else { $tgl_efektifK="0000-00-00"; }
		$data = array(
			'pro_name' => $this->input->post('project'),
			'promosi' => $this->input->post('mardev'),
			'tgl_promosi' => $tgl_promosi,
			'opsreq' => $this->input->post('opsreq'),
			'tgl_opsreq' => $tgl_opsreq,
			'presentasi' => $this->input->post('presentasi'),
			'tgl_presentasi' => $tgl_presentasi,
			'sourcing_harga' => $this->input->post('sourceprice'),
			'tgl_sourcing_harga' => $tgl_sourcing_harga,
			'penyiapanDL' => $this->input->post('sff'),
			'tgl_penyiapanDL' => $tgl_penyiapanDL,
			'pengumumanL' => $this->input->post('pgmL'),
			'tgl_pengumumanL' => $tgl_pengumumanL,
			'pendaftaranL' => $this->input->post('pdfL'),
			'tgl_pendaftaranL' => $tgl_pendaftaranL,
			'prakualifikasi1' => $this->input->post('pmDP'),
			'tgl_prakualifikasi1' => $tgl_prakualifikasi1,
			'prakualifikasi2' => $this->input->post('pmbDP'),
			'tgl_prakualifikasi2' => $tgl_prakualifikasi2,
			'prakualifikasi3' => $this->input->post('pmbkDP'),
			'tgl_prakualifikasi3' => $tgl_prakualifikasi3,
			'prakualifikasi4' => $this->input->post('hasilpraK'),
			'tgl_prakualifikasi4' => $tgl_prakualifikasi4,
			'pengambilanDL' => $this->input->post('pgDL'),
			'tgl_pengambilanDL' => $tgl_pengambilanDL,
			'aanwizjing' => $this->input->post('aanwizjing'),
			'tgl_aanwizjing' => $tgl_aanwizjing,
			'pemasukanD1' => $this->input->post('pmDPAT'),
			'tgl_pemasukanD1' => $tgl_pemasukanD1,
			'pemasukanD2' => $this->input->post('pmbDPAT'),
			'tgl_pemasukanD2' => $tgl_pemasukanD2,
			'pemasukanD3' => $this->input->post('evalAT'),
			'tgl_pemasukanD3' => $tgl_pemasukanD3,
			'pemasukanD4' => $this->input->post('klarifAT'),
			'tgl_pemasukanD4' => $tgl_pemasukanD4,
			'pemasukanD5' => $this->input->post('negoAT'),
			'tgl_pemasukanD5' => $tgl_pemasukanD5,
			'pemasukanD6' => $this->input->post('pengumumanAT'),
			'tgl_pemasukanD6' => $tgl_pemasukanD6,
			'pemasukanD7' => $this->input->post('pemasukanTwr'),
			'tgl_pemasukanD7' => $tgl_pemasukanD7,
			'pemasukanD8' => $this->input->post('evalHarga'),
			'tgl_pemasukanD8' => $tgl_pemasukanD8,
			'pemasukanD9' => $this->input->post('negoHarga'),
			'tgl_pemasukanD9' => $tgl_pemasukanD9,
			'pemasukanD10' => $this->input->post('pengumumanMenang'),
			'tgl_pemasukanD10' => $tgl_pemasukanD10,
			'tep' => $this->input->post('tep'),
			'tgl_tep' => $tgl_tep,
			'spmk' => $this->input->post('SPMK'),
			'tgl_spmk' => $tgl_spmk,
			'pembahasanK' => $this->input->post('bahasK'),
			'tgl_pembahasanK' => $tgl_pembahasanK,
			'penandatangananK' => $this->input->post('ttdK'),
			'tgl_penandatangananK' => $tgl_penandatangananK,
			'efektifK' => $this->input->post('efektifK'),
			'tgl_efektifK' => $tgl_efektifK
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
