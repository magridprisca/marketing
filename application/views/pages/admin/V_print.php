<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename='$process->pro_name.xls'");
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
 </tbody>
</table>
General Note :<br/><?= $process->note?>
