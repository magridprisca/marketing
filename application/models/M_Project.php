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
    $query = $this->db->where('pro_code',$code)->limit(1)->get('project');
		foreach($query->result_array() AS $hasil){
			if($this->input->post('mardev')==$hasil['promosi']){ $tgl_promosi=$hasil['tgl_promosi']; } else { $tgl_promosi=date('Y-m-d'); }
			if($this->input->post('opsreq')==$hasil['opsreq']){ $tgl_opsreq=$hasil['tgl_opsreq']; }  else { $tgl_opsreq=date('Y-m-d'); }
			if($this->input->post('design')==$hasil['design']){ $tgl_design=$hasil['tgl_design']; }  else { $tgl_design=date('Y-m-d'); }
			if($this->input->post('presentasi')==$hasil['presentasi']){ $tgl_presentasi=$hasil['tgl_presentasi']; }  else { $tgl_presentasi=date('Y-m-d'); }
			if($this->input->post('sourceprice')==$hasil['sourcing_harga']){ $tgl_sourcing_harga=$hasil['tgl_sourcing_harga']; }  else { $tgl_sourcing_harga=date('Y-m-d'); }
			if($this->input->post('sff')==$hasil['penyiapanDL']){ $tgl_penyiapanDL=$hasil['tgl_penyiapanDL']; }  else { $tgl_penyiapanDL=date('Y-m-d'); }
			if($this->input->post('pgmL')==$hasil['pengumumanL']){ $tgl_pengumumanL=$hasil['tgl_pengumumanL']; }  else { $tgl_pengumumanL=date('Y-m-d'); }
			if($this->input->post('pdfL')==$hasil['pendaftaranL']){ $tgl_pendaftaranL=$hasil['tgl_pendaftaranL']; }  else { $tgl_pendaftaranL=date('Y-m-d'); }
			if($this->input->post('pmDP')==$hasil['prakualifikasi1']){ $tgl_prakualifikasi1=$hasil['tgl_prakualifikasi1']; }  else { $tgl_prakualifikasi1=date('Y-m-d'); }
			if($this->input->post('pmbDP')==$hasil['prakualifikasi2']){ $tgl_prakualifikasi2=$hasil['tgl_prakualifikasi2']; }  else { $tgl_prakualifikasi2=date('Y-m-d'); }
			if($this->input->post('pmbkDP')==$hasil['prakualifikasi3']){ $tgl_prakualifikasi3=$hasil['tgl_prakualifikasi3']; }  else { $tgl_prakualifikasi3=date('Y-m-d'); }
			if($this->input->post('hasilpraK')==$hasil['prakualifikasi4']){ $tgl_prakualifikasi4=$hasil['tgl_prakualifikasi4']; }  else { $tgl_prakualifikasi4=date('Y-m-d'); }
			if($this->input->post('pgDL')==$hasil['pengambilanDL']){ $tgl_pengambilanDL=$hasil['tgl_pengambilanDL']; }  else { $tgl_pengambilanDL=date('Y-m-d'); }
			if($this->input->post('aanwizjing')==$hasil['aanwizjing']){ $tgl_aanwizjing=$hasil['tgl_aanwizjing']; }  else { $tgl_aanwizjing=date('Y-m-d'); }
			if($this->input->post('pmDPAT')==$hasil['pemasukanD1']){ $tgl_pemasukanD1=$hasil['tgl_pemasukanD1']; }  else { $tgl_pemasukanD1=date('Y-m-d'); }
			if($this->input->post('pmbDPAT')==$hasil['pemasukanD2']){ $tgl_pemasukanD2=$hasil['tgl_pemasukanD2']; }  else { $tgl_pemasukanD2=date('Y-m-d'); }
			if($this->input->post('evalAT')==$hasil['pemasukanD3']){ $tgl_pemasukanD3=$hasil['tgl_pemasukanD3']; }  else { $tgl_pemasukanD3=date('Y-m-d'); }
			if($this->input->post('klarAT')==$hasil['pemasukanD4']){ $tgl_pemasukanD4=$hasil['tgl_pemasukanD4']; }  else { $tgl_pemasukanD4=date('Y-m-d'); }
			if($this->input->post('negoAT')==$hasil['pemasukanD5']){ $tgl_pemasukanD5=$hasil['tgl_pemasukanD5']; }  else { $tgl_pemasukanD5=date('Y-m-d'); }
			if($this->input->post('pengumumanAT')==$hasil['pemasukanD6']){ $tgl_pemasukanD6=$hasil['tgl_pemasukanD6']; }  else { $tgl_pemasukanD6=date('Y-m-d'); }
			if($this->input->post('pemasukanTwr')==$hasil['pemasukanD7']){ $tgl_pemasukanD7=$hasil['tgl_pemasukanD7']; }  else { $tgl_pemasukanD7=date('Y-m-d'); }
			if($this->input->post('evalHarga')==$hasil['pemasukanD8']){ $tgl_pemasukanD8=$hasil['tgl_pemasukanD8']; }  else { $tgl_pemasukanD8=date('Y-m-d'); }
			if($this->input->post('negoHarga')==$hasil['pemasukanD9']){ $tgl_pemasukanD9=$hasil['tgl_pemasukanD9']; }  else { $tgl_pemasukanD9=date('Y-m-d'); }
			if($this->input->post('pengumumanMenang')==$hasil['pemasukanD10']){ $tgl_pemasukanD10=$hasil['tgl_pemasukanD10']; }  else { $tgl_pemasukanD610=date('Y-m-d'); }
			if($this->input->post('tep')==$hasil['tep']){ $tgl_tep=$hasil['tgl_tep']; }  else { $tgl_tep=date('Y-m-d'); }
			if($this->input->post('SPMK')==$hasil['spmk']){ $tgl_spmk=$hasil['tgl_spmk']; }  else { $tgl_spmk=date('Y-m-d'); }
			if($this->input->post('bahasK')==$hasil['pembahasanK']){ $tgl_pembahasanK=$hasil['tgl_pembahasanK']; }  else { $tgl_pembahasanK=date('Y-m-d'); }
			if($this->input->post('ttdK')==$hasil['penandatangananK']){ $tgl_penandatangananK=$hasil['tgl_penandatangananK']; }  else { $tgl_penandatangananK=date('Y-m-d'); }
			if($this->input->post('efektifK')==$hasil['efektifK']){ $tgl_efektifK=$hasil['tgl_efektifK']; }  else { $tgl_efektifK=date('Y-m-d'); }
		}
		$data = array(
			'clientID' => $this->input->post('client'),
			'pro_name' => $this->input->post('project'),
			'promosi' => $this->input->post('mardev'),
			'tgl_promosi' => $tgl_promosi,
			'note1' => $this->input->post('note1'),
			'opsreq' => $this->input->post('opsreq'),
			'tgl_opsreq' => $tgl_opsreq,
			'note2' => $this->input->post('note2'),
			'design' => $this->input->post('design'),
			'tgl_design' => $tgl_design,
			'presentasi' => $this->input->post('presentasi'),
			'tgl_presentasi' => $tgl_presentasi,
			'note3' => $this->input->post('note3'),
			'sourcing_harga' => $this->input->post('sourceprice'),
			'tgl_sourcing_harga' => $tgl_sourcing_harga,
			'note4' => $this->input->post('note4'),
			'penyiapanDL' => $this->input->post('sff'),
			'tgl_penyiapanDL' => $tgl_penyiapanDL,
			'note5' => $this->input->post('note5'),
			'pengumumanL' => $this->input->post('pgmL'),
			'tgl_pengumumanL' => $tgl_pengumumanL,
			'note6' => $this->input->post('note6'),
			'pendaftaranL' => $this->input->post('pdfL'),
			'tgl_pendaftaranL' => $tgl_pendaftaranL,
			'note7' => $this->input->post('note7'),
			'prakualifikasi1' => $this->input->post('pmDP'),
			'tgl_prakualifikasi1' => $tgl_prakualifikasi1,
			'note8' => $this->input->post('note8'),
			'prakualifikasi2' => $this->input->post('pmbDP'),
			'tgl_prakualifikasi2' => $tgl_prakualifikasi2,
			'note9' => $this->input->post('note9'),
			'prakualifikasi3' => $this->input->post('pmbkDP'),
			'tgl_prakualifikasi3' => $tgl_prakualifikasi3,
			'note10' => $this->input->post('note10'),
			'prakualifikasi4' => $this->input->post('hasilpraK'),
			'tgl_prakualifikasi4' => $tgl_prakualifikasi4,
			'note11' => $this->input->post('note11'),
			'pengambilanDL' => $this->input->post('pgDL'),
			'tgl_pengambilanDL' => $tgl_pengambilanDL,
			'note12' => $this->input->post('note12'),
			'aanwizjing' => $this->input->post('aanwizjing'),
			'tgl_aanwizjing' => $tgl_aanwizjing,
			'note13' => $this->input->post('note13'),
			'pemasukanD1' => $this->input->post('pmDPAT'),
			'tgl_pemasukanD1' => $tgl_pemasukanD1,
			'note14' => $this->input->post('note14'),
			'pemasukanD2' => $this->input->post('pmbDPAT'),
			'tgl_pemasukanD2' => $tgl_pemasukanD2,
			'note15' => $this->input->post('note15'),
			'pemasukanD3' => $this->input->post('evalAT'),
			'tgl_pemasukanD3' => $tgl_pemasukanD3,
			'note16' => $this->input->post('note16'),
			'pemasukanD4' => $this->input->post('klarifAT'),
			'tgl_pemasukanD4' => $tgl_pemasukanD4,
			'note17' => $this->input->post('note17'),
			'pemasukanD5' => $this->input->post('negoAT'),
			'tgl_pemasukanD5' => $tgl_pemasukanD5,
			'note18' => $this->input->post('note18'),
			'pemasukanD6' => $this->input->post('pengumumanAT'),
			'tgl_pemasukanD6' => $tgl_pemasukanD6,
			'note19' => $this->input->post('note19'),
			'pemasukanD7' => $this->input->post('pemasukanTwr'),
			'tgl_pemasukanD7' => $tgl_pemasukanD7,
			'note20' => $this->input->post('note20'),
			'pemasukanD8' => $this->input->post('evalHarga'),
			'tgl_pemasukanD8' => $tgl_pemasukanD8,
			'note21' => $this->input->post('note21'),
			'pemasukanD9' => $this->input->post('negoHarga'),
			'tgl_pemasukanD9' => $tgl_pemasukanD9,
			'note22' => $this->input->post('note22'),
			'pemasukanD10' => $this->input->post('pengumumanMenang'),
			'tgl_pemasukanD10' => $tgl_pemasukanD10,
			'note23' => $this->input->post('note23'),
			'tep' => $this->input->post('tep'),
			'tgl_tep' => $tgl_tep,
			'note24' => $this->input->post('note24'),
			'spmk' => $this->input->post('SPMK'),
			'tgl_spmk' => $tgl_spmk,
			'note25' => $this->input->post('note25'),
			'pembahasanK' => $this->input->post('bahasK'),
			'tgl_pembahasanK' => $tgl_pembahasanK,
			'note26' => $this->input->post('note26'),
			'penandatangananK' => $this->input->post('ttdK'),
			'tgl_penandatangananK' => $tgl_penandatangananK,
			'note27' => $this->input->post('note27'),
			'efektifK' => $this->input->post('efektifK'),
			'tgl_efektifK' => $tgl_efektifK,
			'note28' => $this->input->post('note28'),
			'note29' => $this->input->post('note29'),
			'note' => $this->input->post('note'),
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

	public function getcount(){
		$this->db->select('COUNT(project.pro_code) AS total');
    $this->db->from('project');
   $getData = $this->db->get('');
  	if($getData->num_rows() > 0){
    return $getData->row();
		}else{
		return null;
		}
	}

	public function getcountProcess(){
		$this->db->select('COUNT(project.pro_code) AS total');
    $this->db->from('project');
		$this->db->where('done=0');
   $getData = $this->db->get('');
  	if($getData->num_rows() > 0){
    return $getData->row();
		}else{
		return null;
		}
	}

	public function getcountDone(){
		$this->db->select('COUNT(project.pro_code) AS total');
    $this->db->from('project');
		$this->db->where('done=1');
   $getData = $this->db->get('');
  	if($getData->num_rows() > 0){
    return $getData->row();
		}else{
		return null;
		}
	}
}
?>
