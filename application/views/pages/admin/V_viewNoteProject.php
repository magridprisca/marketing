<?php $this->load->view('templates/header')?>
<section class="content-header">
  <h1>
    Note Project <?= $process->pro_name ?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url() ?>"><i class="fa fa-universal-access"></i> Home</a></li>
    <li><a href="<?= base_url('C_Project') ?>">Project </a></li>
    <li class="active">Note Project</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-body">
          <table class="table table-advance table-bordered">
            <thead>
              <tr style="background-color: #2A3542">
                <th style="color: #FFFFFF" align="center" colspan="2"><i class=""> </i>TAHAP PRALELANG</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td width="200">Promosi</td>
                <td><?= $process->note1 ?></td>
              </tr>
              <tr>
                <td width="200">Opsreq</td>
                <td><?= $process->note2 ?></td>
              </tr>
              <tr>
                <td width="200">Design</td>
                <td><?= $process->note3 ?></td>
              </tr>
              <tr>
                <td width="200">Presentasi</td>
                <td><?= $process->note4 ?></td>
              </tr>
              <tr>
                <td width="200">Sourcing Harga</td>
                <td><?= $process->note5 ?></td>
              </tr>
              <tr>
                <td width="200">Penyiapan Dokumen Lelang (SDM, Fasilitas, Finansial)</td>
                <td><?= $process->note6 ?></td>
              </tr>
            </tbody>
            <thead>
              <tr style="background-color: #2A3542">
                <th style="color: #FFFFFF" align="center" colspan="2"><i class=""> </i>TAHAP LELANG</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td width="200">Pengumuman Lelang</td>
                <td><?= $process->note7 ?></td>
              </tr>
              <tr>
                <td width="200">Pendaftaran Lelang</td>
                <td><?= $process->note8 ?></td>
              </tr>
              <tr>
                <td width="200">Pemasukan Dokumen Prakualifikasi</td>
                <td><?= $process->note9 ?></td>
              </tr>
              <tr>
                <td width="200">Pembukaan Dokumen Prakualifikasi</td>
                <td><?= $process->note10 ?></td>
              </tr>
              <tr>
                <td width="200">Pembuktian Kualifikasi</td>
                <td><?= $process->note11 ?></td>
              </tr>
              <tr>
                <td width="200">Hasil Prakualifikasi</td>
                <td><?= $process->note12 ?></td>
              </tr>
              <tr>
                <td width="200">Pengambilan Dokumen Lelang</td>
                <td><?= $process->note13 ?></td>
              </tr>
              <tr>
                <td width="200">Aanwijzing</td>
                <td><?= $process->note14 ?></td>
              </tr>
              <tr>
                <td width="200">Pemasukan Dokumen Penawaran Administrasi dan Teknis </td>
                <td><?= $process->note15 ?></td>
              </tr>
              <tr>
                <td width="200">Pembukaan Dokumen Administrasi dan Teknis</td>
                <td><?= $process->note16 ?></td>
              </tr>
              <tr>
                <td width="200">Evaluasi Administrasi dan Teknis</td>
                <td><?= $process->note17 ?></td>
              </tr>
              <tr>
                <td width="200">Klarifikasi Administrasi dan Teknis</td>
                <td><?= $process->note18 ?></td>
              </tr>
              <tr>
                <td width="200">Negosiasi Administrasi dan Teknis</td>
                <td><?= $process->note19 ?></td>
              </tr>
              <tr>
                <td width="200">Pengumuman Hasil Administrasi dan Teknis</td>
                <td><?= $process->note20 ?></td>
              </tr>
              <tr>
                <td width="200">Pemasukan Penawaran Harga</td>
                <td><?= $process->note21 ?></td>
              </tr>
              <tr>
                <td width="200">Evaluasi Harga</td>
                <td><?= $process->note22 ?></td>
              </tr>
              <tr>
                <td width="200">Negosiasi Harga</td>
                <td><?= $process->note23 ?></td>
              </tr>
              <tr>
                <td width="200">Pengumuman Pemenang</td>
                <td><?= $process->note24 ?></td>
              </tr>
              <tr>
                <td width="200">Tim Evaluasi Pengadaan (TEP)</td>
                <td><?= $process->note25 ?></td>
              </tr>
            </tbody>
            <thead>
              <tr style="background-color: #2A3542">
                <th style="color: #FFFFFF" align="center" colspan="2"><i class=""> </i>TAHAP KONTRAK</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td width="200">SPMK (Penetapan Pemenang) </td>
                <td><?= $process->note26 ?></td>
              </tr>
              <tr>
                <td width="200">Pembahasan Kontrak</td>
                <td><?= $process->note27 ?></td>
              </tr>
              <tr>
                <td width="200">Penandatanganan Kontrak</td>
                <td><?= $process->note28 ?></td>
              </tr>
              <tr>
                <td width="200">Efektif Kontrak</td>
                <td><?= $process->note29 ?></td>
              </tr>
            </tbody>
            <thead>
              <tr style="background-color: #2A3542">
                <th style="color: #FFFFFF" align="center" colspan="2"><i class=""> </i>NOTE UMUM</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <td colspan="2">
                <?= $process->note ?>
              </td>
              </tr>
            </tbody>
          </table>

            <button type="button" class="btn btn-primary" onclick="goBack()">Back</button>
        </div>
      </div>
    </div>
  </div>
</section>
  <?php $this->load->view('templates/config/js_main')?>
  <?php $this->load->view('templates/footer')?>
