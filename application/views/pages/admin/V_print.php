<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename='$process->pro_name'.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
Project Code : <?= $process->pro_code?><br/>
Project Name :<?= $process->pro_name ?><br/>
Date : <?= $process->pro_date ?><br/>
Client : <?= $process->client_name ?><br/>
<table border="1" width="100%">
 <thead>
    <tr>
       <th>No</th>
       <th>Process</th>
       <th>Sub Process</th>
       <th>Sub Sub Process</th>
       <th>Validate</th>
       <th>Date</th>
       <th>Note</th>
    </tr>
 </thead>
 <tbody>
  <tr>
    <td>1</td>
    <td rowspan="6">Tahap Pralelang</td>
    <td colspan="2">Promosi (Market Development)</td>
    <td><?php if($process->promosi==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->promosi==1){echo $process->tgl_promosi; } ?></td>
    <td><?= $process->note1 ?></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Opsreq</td>
    <td></td>
    <td><?php if($process->opsreq==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->opsreq==1){echo $process->tgl_opsreq; } ?></td>
    <td><?= $process->note2 ?></td>
  </tr>
  <tr>
    <td>3</td>
    <td>Design</td>
    <td></td>
    <td><?php if($process->design==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->design==1){echo $process->tgl_design; } ?></td>
    <td><?= $process->note3 ?></td>
  </tr>
  <tr>
    <td>4</td>
    <td>Presentasi</td>
    <td></td>
    <td><?php if($process->presentasi==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->presentasi==1){echo $process->tgl_presentasi; } ?></td>
    <td><?= $process->note4 ?></td>
  </tr>
  <tr>
    <td>5</td>
    <td>Sourcing Harga</td>
    <td></td>
    <td><?php if($process->sourcing_harga==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->sourcing_harga==1){echo $process->tgl_sourcing_harga; } ?></td>
    <td><?= $process->note5 ?></td>
  </tr>
  <tr>
    <td>6</td>
    <td>Penyiapan Dokumen Lelang</td>
    <td></td>
    <td><?php if($process->penyiapanDL==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->penyiapanDL==1){echo $process->tgl_penyiapanDL; } ?></td>
    <td><?= $process->note6 ?></td>
  </tr>
  <tr>
    <td>7</td>
    <td rowspan="19">Tahap Lelang</td>
    <td>Pengumuman Lelang</td>
    <td></td>
    <td><?php if($process->pengumumanL==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pengumumanL==1){echo $process->tgl_pengumumanL; } ?></td>
    <td><?= $process->note7 ?></td>
  </tr>
  <tr>
    <td>8</td>
    <td>Pendaftaran Lelang</td>
    <td></td>
    <td><?php if($process->pendaftaranL==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pendaftaranL==1){echo $process->tgl_pendaftaranL; } ?></td>
    <td><?= $process->note8 ?></td>
  </tr>
  <tr>
    <td>9</td>
    <td rowspan="4">Tahap Prakualifikasi</td>
    <td>Pemasukan Dokumen Prakualifikasi</td>
    <td><?php if($process->prakualifikasi1==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->prakualifikasi1==1){echo $process->tgl_prakualifikasi1; } ?></td>
    <td><?= $process->note9 ?></td>
  </tr>
  <tr>
    <td>10</td>
    <td>Pembukaan Dokumen Prakualifikasi</td>
    <td><?php if($process->prakualifikasi2==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->prakualifikasi2==1){echo $process->tgl_prakualifikasi2; } ?></td>
    <td><?= $process->note10 ?></td>
  </tr>
  <tr>
    <td>11</td>
    <td>Pembuktian Kualifikasi</td>
    <td><?php if($process->prakualifikasi3==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->prakualifikasi3==1){echo $process->tgl_prakualifikasi3; } ?></td>
    <td><?= $process->note11 ?></td>
  </tr>
  <tr>
    <td>12</td>
    <td>Hasil Kualifikasi</td>
    <td><?php if($process->prakualifikasi4==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->prakualifikasi4==1){echo $process->tgl_prakualifikasi4; } ?></td>
    <td><?= $process->note12 ?></td>
  </tr>
  <tr>
    <td>13</td>
    <td colspan="2">Pengambilan Dokumen Lelang</td>
    <td><?php if($process->pengambilanDL==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pengambilanDL==1){echo $process->tgl_pengambilanDL; } ?></td>
    <td><?= $process->note13 ?></td>
  </tr>
  <tr>
    <td>14</td>
    <td colspan="2">Aanwijzing</td>
    <td><?php if($process->aanwizjing==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->aanwizjing==1){echo $process->tgl_aanwizjing; } ?></td>
    <td><?= $process->note14 ?></td>
  </tr>
  <tr>
    <td>15</td>
    <td rowspan="10">Tahap Pemasukan Dokumen</td>
    <td>Pemasukan Dokumen Penawaran Administrasi dan Teknis</td>
    <td><?php if($process->pemasukanD1==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pemasukanD1==1){echo $process->tgl_pemasukanD1; } ?></td>
    <td><?= $process->note15 ?></td>
  </tr>
  <tr>
    <td>16</td>
    <td>Pembukaan Dokumen Penawaran Administrasi dan Teknis</td>
    <td><?php if($process->pemasukanD2==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pemasukanD2==1){echo $process->tgl_pemasukanD2; } ?></td>
    <td><?= $process->note16 ?></td>
  </tr>
  <tr>
    <td>17</td>
    <td>Evaluasi Administrasi dan Teknis</td>
    <td><?php if($process->pemasukanD3==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pemasukanD3==1){echo $process->tgl_pemasukanD3; } ?></td>
    <td><?= $process->note17 ?></td>
  </tr>
  <tr>
    <td>18</td>
    <td>Klarifikasi Administrasi dan Teknis</td>
    <td><?php if($process->pemasukanD4==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pemasukanD4==1){echo $process->tgl_pemasukanD4; } ?></td>
    <td><?= $process->note18 ?></td>
  </tr>
  <tr>
    <td>19</td>
    <td>Negosisasi Administrasi dan Teknis</td>
    <td><?php if($process->pemasukanD5==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pemasukanD5==1){echo $process->tgl_pemasukanD5; } ?></td>
    <td><?= $process->note19 ?></td>
  </tr>
  <tr>
    <td>20</td>
    <td>Pengumuman Hasil Administrasi dan Teknis</td>
    <td><?php if($process->pemasukanD6==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pemasukanD6==1){echo $process->tgl_pemasukanD6; } ?></td>
    <td><?= $process->note20 ?></td>
  </tr>
  <tr>
    <td>21</td>
    <td>Pemasukan Penawaran Harga</td>
    <td><?php if($process->pemasukanD7==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pemasukanD7==1){echo $process->tgl_pemasukanD7; } ?></td>
    <td><?= $process->note21 ?></td>
  </tr>
  <tr>
    <td>22</td>
    <td>Evaluasi Harga</td>
    <td><?php if($process->pemasukanD8==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pemasukanD8==1){echo $process->tgl_pemasukanD8; } ?></td>
    <td><?= $process->note22 ?></td>
  </tr>
  <tr>
    <td>23</td>
    <td>Negosiasi Harga</td>
    <td><?php if($process->pemasukanD9==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pemasukanD9==1){echo $process->tgl_pemasukanD9; } ?></td>
    <td><?= $process->note23 ?></td>
  </tr>
  <tr>
    <td>24</td>
    <td>Pengumuman Pemenang</td>
    <td><?php if($process->pemasukanD10==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pemasukanD10==1){echo $process->tgl_pemasukanD10; } ?></td>
    <td><?= $process->note24 ?></td>
  </tr>
  <tr>
    <td>25</td>
    <td colspan="2">Tim Evaluasi Pengadaan (TEP)</td>
    <td><?php if($process->tep==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->tep==1){echo $process->tgl_tep; } ?></td>
    <td><?= $process->note25 ?></td>
  </tr>
  <tr>
    <td>26</td>
    <td rowspan="4">Tahap Kontrak</td>
    <td>SPMK (Penetapan Pemenang)</td>
    <td><?php if($process->spmk==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->spmk==1){echo $process->tgl_spmk; } ?></td>
    <td><?= $process->note26 ?></td>
  </tr>
  <tr>
    <td>27</td>
    <td colspan="2">Pembahasan Kontrak</td>
    <td><?php if($process->pembahasanK==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->pembahasanK==1){echo $process->tgl_pembahasanK; } ?></td>
    <td><?= $process->note27 ?></td>
  </tr>
  <tr>
    <td>28</td>
    <td colspan="2">Penandatanganan Kontrak</td>
    <td><?php if($process->penandatangananK==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->penandatangananK==1){echo $process->tgl_penandatangananK; } ?></td>
    <td><?= $process->note28 ?></td>
  </tr>
  <tr>
    <td>29</td>
    <td colspan="2">Efektif Kontrak</td>
    <td><?php if($process->efektifK==1){echo "yes"; } else{ echo "no"; } ?></td>
    <td><?php if($process->efektifK==1){echo $process->tgl_efektifK; } ?></td>
    <td><?= $process->note29 ?></td>
  </tr>
 </tbody>
</table>
General Note :<br/><?= $process->note?>
