<?php $this->load->view('templates/header')?>
<section class="content-header">
  <h1>
    Process
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-universal-access"></i> Home</a></li>
    <li>Project</li>
    <li class="active">View Project</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">

            <div class="box-header with-border">
              <h3 class="box-title"><?= $process->pro_name ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                  <div class="form quick-post">
                      <!-- Project ID -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Project ID</label>
                        <label class="control-label col-lg-10">: <?= $process->pro_code ?></label>
                      </div>
                      <!-- Project -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Project Name</label>
                        <label class="control-label col-lg-10">: <?= $process->pro_name ?></label>
                      </div>
                      <!-- Client -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Client</label>
                        <label class="control-label col-lg-10">: <?= $process->client_name ?></label>
                      </div>
                      <!-- Tags -->
                      <div class="form-group">
                        <div class="col-md-12">
                          <section class="panel">
                            <header class="panel-heading tab-bg-info">
                              <p class="text-center">
                                <strong>Process Completion</strong>
                              </p>
                              <div class="col-md-10">
                                <div class="progress-group">
                                  <?php
                                  $pralelang=$process->promosi+$process->opsreq+$process->design+$process->presentasi+$process->sourcing_harga+$process->penyiapanDL;
                                  $pralelang_persen= $pralelang/6 * 100;
                                  ?>
                                  <span class="progress-text">Tahap Pralelang</span>
                                  <span class="progress-number"><b><?= $pralelang ?></b>/6</span>

                                  <div class="progress sm">
                                    <div class="progress-bar progress-bar-aqua" style="width: <?= $pralelang_persen ?>%"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <a data-toggle="tab" href="#pralelang"><button class="btn btn-info" id="history1">History Tahap Pralelang</button></a>
                              </div>
                              <div class="col-md-10">
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                  <?php
                                  $lelang=$process->pengumumanL+$process->pendaftaranL+
                                        $process->prakualifikasi1+$process->prakualifikasi2+$process->prakualifikasi3+$process->prakualifikasi4+
                                        $process->pengambilanDL+$process->aanwizjing+
                                        $process->pemasukanD1+$process->pemasukanD2+$process->pemasukanD3+$process->pemasukanD4+$process->pemasukanD5+
                                        $process->pemasukanD6+$process->pemasukanD7+$process->pemasukanD8+$process->pemasukanD9+$process->pemasukanD10+
                                        $process->tep
                                        ;
                                  $lelang_persen= $lelang/19 * 100;
                                  ?>
                                  <span class="progress-text">Tahap Lelang</span>
                                  <span class="progress-number"><b><?= $lelang ?></b>/19</span>

                                  <div class="progress sm">
                                    <div class="progress-bar progress-bar-green" style="width: <?= $lelang_persen ?>%"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <a data-toggle="tab" href="#lelang"><button class="btn btn-success" id="history">History Tahap Lelang</button></a>
                              </div>
                              <div class="col-md-10">
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                  <?php
                                  $kontrak=$process->spmk+$process->pembahasanK+$process->penandatangananK+$process->efektifK;
                                  $kontrak_persen= $kontrak/4 * 100;
                                  ?>
                                  <span class="progress-text">Tahap Kontrak</span>
                                  <span class="progress-number"><b><?= $kontrak ?></b>/4</span>

                                  <div class="progress sm">
                                    <div class="progress-bar progress-bar-red" style="width: <?= $kontrak_persen ?>%"></div>
                                  </div>
                                </div>
                                <!-- /.progress-group -->
                              </div>
                              <div class="col-md-2">
                                <a data-toggle="tab" href="#kontrak"><button class="btn btn-danger" id="history">History Tahap Kontrak</button></a>
                              </div>
                            </header>
                            <div class="panel-body">
                              <div class="tab-content">
                                <div id="pralelang" class="tab-pane">
                                  <div class="col-md-12">
                                    <table class="table">
                                      <tr>
                                        <td>1</td><td>Promosi</td>
                                        <?php if($process->promosi==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_promosi ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>2</td><td>Opsrec</td>
                                        <?php if($process->opsreq==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_opsreq ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>3</td><td>Design</td>
                                        <?php if($process->design==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_design ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>4</td><td>Presentasi</td>
                                        <?php if($process->presentasi==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_presentasi ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>5</td><td>Sourcing Harga</td>
                                        <?php if($process->sourcing_harga==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_sourcing_harga ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>6</td><td>Penyiapan Dokumen Lelang</td>
                                        <?php if($process->penyiapanDL==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_penyiapanDL ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                                <div id="lelang" class="tab-pane">
                                  <div class="col-md-12">
                                    <table class="table">
                                      <tr>
                                        <td>1</td><td>Pengumuman Lelang</td>
                                        <?php if($process->pengumumanL==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pengumumanL ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>2</td><td>Pendaftaran Lelang</td>
                                        <?php if($process->pendaftaranL==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pendaftaranL ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>3</td><td>Pemasukan Dokumen Prakualifikasi</td>
                                        <?php if($process->prakualifikasi1==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_prakualifikasi1 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>4</td><td>Pembukaan Dokumen Prakualifikasi</td>
                                        <?php if($process->prakualifikasi2==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_prakualifikasi2 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>5</td><td>Pembuktian Kualifikasi</td>
                                        <?php if($process->prakualifikasi3==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_prakualifikasi3 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>6</td><td>Hasil Kualifikasi</td>
                                        <?php if($process->prakualifikasi4==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_prakualifikasi4 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>7</td><td>Pengambilan Dokumen Lelang</td>
                                        <?php if($process->pengambilanDL==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pengambilanDL ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>8</td><td>Aanwijzing</td>
                                        <?php if($process->aanwizjing==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_aanwizjing ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>9</td><td>Pemasukkan Dokumen Penawaran Administrasi dan Teknis</td>
                                        <?php if($process->pemasukanD1==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pemasukanD1 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>10</td><td>Pembukaan Dokumen Penawaran Administrasi dan Teknis</td>
                                        <?php if($process->pemasukanD2==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pemasukanD2 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>11</td><td>Evaluasi Administrasi dan Teknis</td>
                                        <?php if($process->pemasukanD3==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pemasukanD3 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>12</td><td>Klarifikasi Administrasi dan Teknis</td>
                                        <?php if($process->pemasukanD4==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pemasukanD4 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>13</td><td>Negoisasi Administrasi dan Teknis</td>
                                        <?php if($process->pemasukanD5==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pemasukanD5 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>14</td><td>Pengumuman Hasil Administrasi dan Teknis</td>
                                        <?php if($process->pemasukanD6==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pemasukanD6 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>15</td><td>Pemasukkan Penawaran Harga</td>
                                        <?php if($process->pemasukanD7==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pemasukanD7 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>16</td><td>Evaluasi Harga</td>
                                        <?php if($process->pemasukanD8==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pemasukanD8 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>17</td><td>Negosiasi Harga</td>
                                        <?php if($process->pemasukanD9==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pemasukanD9 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>18</td><td>Pengumuman Pemenang</td>
                                        <?php if($process->pemasukanD10==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pemasukanD10 ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>19</td><td>Tim Evaluasi Pengadaan (TEP)</td>
                                        <?php if($process->tep==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_tep ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                                <div id="kontrak" class="tab-pane">
                                  <div class="col-md-12">
                                    <table class="table">
                                      <tr>
                                        <td>1</td><td>SPMK (Penetapan Pemenang)</td>
                                        <?php if($process->spmk==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_spmk ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>2</td><td>Pembahasan Kontrak</td>
                                        <?php if($process->pembahasanK==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_pembahasanK ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>3</td><td>Penandatanganan Kontrak</td>
                                        <?php if($process->penandatangananK==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_penandatangananK ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                      <tr>
                                        <td>4</td><td>Efektif Kontrak</td>
                                        <?php if($process->efektifK==1){ ?>
                                          <td><span class="fa fa-check"></span></td>
                                          <td><?= $process->tgl_efektifK ?></td>
                                        <?php }else { ?>
                                          <td colspan="2"><span class="fa fa-ban"></span></td>
                                        <?php } ?>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2">Next Step</span></label>
                        <label class="control-label col-lg-10"><?php
                        $i=1;
                        if($process->promosi==0){echo $i.". Promosi (Market Development)<br/>";$i++;}
                        if($process->opsreq==0){echo $i.". Opsreq<br/>";$i++;}
                        if($process->design==0){echo $i.". Design<br/>";$i++;}
                        if($process->presentasi==0){echo $i.". Presentasi<br/>";$i++;}
                        if($process->sourcing_harga==0){echo $i.". Sourcing Harga<br/>";$i++;}
                        if($process->penyiapanDL==0){echo $i.". Penyiapan Dokumen Lelang (SDM, Fasilitas, Finansial)<br/>";$i++;}

                        if($process->pengumumanL==0){echo $i.". Pengumuman Lelang<br/>";$i++;}
                        if($process->pendaftaranL==0){echo $i.". Pendaftaran Lelang<br/>";$i++;}
                        if($process->prakualifikasi1==0){echo $i.". Pemasukan Dokumen Prakualifikasi<br/>";$i++;}
                        if($process->prakualifikasi2==0){echo $i.". Pembukaan Dokumen Prakualifikasi<br/>";$i++;}
                        if($process->prakualifikasi3==0){echo $i.". Pembuktian Kualifikasi<br/>";$i++;}
                        if($process->prakualifikasi4==0){echo $i.". Hasil Prakualifikasi<br/>";$i++;}
                        if($process->pengambilanDL==0){echo $i.". Pengambilan Dokumen Lelang<br/>";$i++;}
                        if($process->aanwizjing==0){echo $i.". Aanwijzing<br/>";$i++;}
                        if($process->pemasukanD1==0){echo $i.". Pemasukan Dokumen Penawaran Administrasi dan Teknis <br/>";$i++;}
                        if($process->pemasukanD2==0){echo $i.". Pembukaan Dokumen Administrasi dan Teknis <br/>";$i++;}
                        if($process->pemasukanD3==0){echo $i.". Evaluasi Administrasi dan Teknis<br/>";$i++;}
                        if($process->pemasukanD4==0){echo $i.". Klarifikasi Administrasi danTeknis<br/>";$i++;}
                        if($process->pemasukanD5==0){echo $i.". Negosiasi Administrasi dan Teknis<br/>";$i++;}
                        if($process->pemasukanD6==0){echo $i.". Pengumuman Hasil Administrasi dan Teknis<br/>";$i++;}
                        if($process->pemasukanD7==0){echo $i.". Pemasukan Penawaran Harga<br/>";$i++;}
                        if($process->pemasukanD8==0){echo $i.". Evaluasi Harga<br/>";$i++;}
                        if($process->pemasukanD9==0){echo $i.". Negosiasi Harga<br/>";$i++;}
                        if($process->pemasukanD10==0){echo $i.". Pengumuman Pemenang<br/>";$i++;}
                        if($process->tep==0){echo $i.". Tim Evaluasi Pengadaan (TEP)<br/>";$i++;}

                        if($process->spmk==0){echo $i.". SPMK (Penetapan Pemenang)<br/>";$i++;}
                        if($process->pembahasanK==0){echo $i.". Pembahasan Kontrak<br/>";$i++;}
                        if($process->penandatangananK==0){echo $i.". Penandatanganan Kontrak<br/>";$i++;}
                        if($process->efektifK==0){echo $i.". Efektif Kontrak<br/>";$i++;}
                        ?></label>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2">Note</span></label>
                        <label class="control-label col-lg-10">: <?= $process->note ?></label>
                      </div>
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-12 center-block">
                          <button type="button" class="btn btn-primary" onclick="goBack()">Back</button>
                          <a href="<?= base_url('C_Project/note/'.$process->pro_code) ?>"><button type="button" class="btn btn-primary">View All Notes</button></a>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
</section>
<script>

</script>
  <?php $this->load->view('templates/config/js_main')?>
  <?php $this->load->view('templates/footer')?>
