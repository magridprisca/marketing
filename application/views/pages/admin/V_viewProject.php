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
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
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
                                            <p class="text-center">
                                              <strong>Process Completion</strong>
                                            </p>

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
                                              <span class="progress-number"><b><?= $lelang ?></b>/18</span>

                                              <div class="progress sm">
                                                <div class="progress-bar progress-bar-green" style="width: <?= $lelang_persen ?>%"></div>
                                              </div>
                                            </div>
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

                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2">Next Step</span></label>
                        <label class="control-label col-lg-10">: <?php
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
                        <label class="control-label col-lg-10">: <?= $process->pro_code ?></label>
                      </div>
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-12 center-block">
                          <button type="button" class="btn btn-primary" onclick="goBack()">Back</button>
                        </div>
                      </div>
                  </div>

                </div>
              </div>


          </div>
        </div>
      </div>
</section>

  <?php $this->load->view('templates/config/js_main')?>
  <?php $this->load->view('templates/footer')?>
