<?php $this->load->view('templates/header')?>
<section class="content-header">
  <h1>
    Process Project
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-universal-access"></i> Home</a></li>
    <li>Project</li>
    <li class="active">Process Project</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <div class="box-tools pull-right"></div>
<!-- Process -->
                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" role="form" id="formInput" method="post" action="<?= base_url('C_Project/editproses/'.$process->pro_code) ?>">
                      <!-- Project ID -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="projectid">Project ID</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title" name="code" disabled value="<?= $process->pro_code ?>">
                        </div>
                      </div>
                      <!-- Project -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="projectname">Project Name</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="project" name="project" value="<?= $process->pro_name ?>">
                        </div>
                      </div>
                      <!-- Client -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="client">Client</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="Client" id="Client" value="<?= $process->client_name ?>">
                        </div>
                      </div>
                      <!--Table Process-->

                      <div class="form-group">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                        <table class="table table-advance table-bordered">
                          <thead>
                            <tr style="background-color: #2A3542">
                              <th colspan="5" width="100px" style="color: #FFFFFF" align="center"><i class=""> </i>TAHAP PRALELANG</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr style="background-color: #336699">
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> No.</th>
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_calendar"></i> Sub-sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Checklist</th>
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Date</th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>1</th>
                              <th colspan="2">Promosi (Market Development)</th>
                              <th><input type="checkbox" name="mardev" <?php if($process->promosi==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_mardev" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>2</th>
                              <th colspan="2">Opsreq</th>
                              <th><input type="checkbox" name="opsreq" <?php if($process->opsreq==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_opsreq" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>3</th>
                              <th colspan="2">Design</th>
                              <th><input type="checkbox" name="design" <?php if($process->design==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_design" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>4</th>
                              <th colspan="2">Presentasi</th>
                              <th><input type="checkbox" name="presentasi" <?php if($process->presentasi==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_presentasi" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>5</th>
                              <th colspan="2">Sourcing Harga</th>
                              <th><input type="checkbox" name="sourceprice" <?php if($process->sourcing_harga==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_sourceprice"value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>6</th>
                              <th colspan="2">Penyiapan Dokumen Lelang (SDM, Fasilitas, Finansial)</th>
                              <th><input type="checkbox" name="sff" <?php if($process->penyiapanDL==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_sff" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                          </tbody>
                          <thead>
                            <tr style="background-color: #2A3542">
                              <th colspan="5" width="100px" style="color: #FFFFFF" align="center"><i class=""> </i>TAHAP LELANG</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr style="background-color: #336699">
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> No.</th>
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_calendar"></i> Sub-sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Checklist</th>
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Date</th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>7</th>
                              <th colspan="2">Pengumuman Lelang</th>
                              <th><input type="checkbox" name="pgmL" <?php if($process->pengumumanL==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_pgmL" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>8</th>
                              <th colspan="2">Pendaftaran Lelang</th>
                              <th><input type="checkbox" name="pdfL" <?php if($process->pendaftaranL==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_pdfL" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>9</th>
                              <th>Tahap Prakualifikasi</th>
                              <th>Pemasukan Dokumen Prakualifikasi</th>
                              <th><input type="checkbox" name="pmDP" <?php if($process->prakualifikasi1==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_pmDP" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>10</th>
                              <th>Tahap Prakualifikasi</th>
                              <th>Pembukaan Dokumen Prakualifikasi</th>
                              <th><input type="checkbox" name="pmbDP" <?php if($process->prakualifikasi2==1){echo "checked";} ?> value="1" ></th>
                              <th><input type="date" name="tgl_pmbDP" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>11</th>
                              <th>Tahap Prakualifikasi</th>
                              <th>Pembuktian Kualifikasi</th>
                              <th><input type="checkbox" name="pmbkDP"<?php if($process->prakualifikasi3==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_pmbkDP" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>12</th>
                              <th>Tahap Prakualifikasi</th>
                              <th>Hasil Prakualifikasi</th>
                              <th><input type="checkbox" name="hasilpraK"<?php if($process->prakualifikasi4==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_hasilpraK" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>13</th>
                              <th colspan="2">Pengambilan Dokumen Lelang</th>
                              <th><input type="checkbox" name="pgDL" <?php if($process->pengambilanDL==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_pgDL" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>14</th>
                              <th colspan="2">Aanwizjing</th>
                              <th><input type="checkbox" name="aanwizjing" <?php if($process->aanwizjing==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_aanwizjing" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>15</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Pemasukan Dokumen Penawaran Administrasi dan Teknis</th>
                              <th><input type="checkbox" name="pmDPAT"<?php if($process->pemasukanD1==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_pmDPAT" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>16</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Pembukaan Dokumen Penawaran Administrasi dan Teknis</th>
                              <th><input type="checkbox" name="pmbDPAT"<?php if($process->pemasukanD2==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_pmbDPAT" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>17</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Evaluasi Administrasi dan Teknis</th>
                              <th><input type="checkbox" name="evalAT" <?php if($process->pemasukanD3==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_evalAT" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>18</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Klarifikasi Administrasi dan Teknis</th>
                              <th><input type="checkbox" name="klarifAT" <?php if($process->pemasukanD4==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_klarifAT" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>19</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Negoisasi Administrasi dan Teknis</th>
                              <th><input type="checkbox" name="negoAT" <?php if($process->pemasukanD5==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_negoAT" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>20</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Pengumuman Hasil Administrasi dan Teknis</th>
                              <th><input type="checkbox" name="pengumumanAT" <?php if($process->pemasukanD6==1){echo "checked";} ?>value="1"></th>
                              <th><input type="date" name="tgl_pengumumanAT" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>21</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Pemasukan Penawaran Harga</th>
                              <th><input type="checkbox" name="pemasukanTwr" <?php if($process->pemasukanD7==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_pemasukanTwr" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>22</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Evaluasi Harga</th>
                              <th><input type="checkbox" name="evalHarga" <?php if($process->pemasukanD8==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_evalHarga" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>23</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Negosiasi Harga</th>
                              <th><input type="checkbox" name="negoHarga" <?php if($process->pemasukanD9==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_negoHarga" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>24</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Pengumuman Pemenang</th>
                              <th><input type="checkbox" name="pengumumanMenang" <?php if($process->pemasukanD10==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_pengumumanMenang" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>25</th>
                              <th colspan="2">Tim Evaluasi Pengadaan (TEP)</th>
                              <th><input type="checkbox" name="TEP" <?php if($process->tep==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_TEP" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                          </tbody>
                          <thead>
                            <tr style="background-color: #2A3542">
                              <th colspan="5" width="100px" style="color: #FFFFFF" align="center"><i class=""> </i>TAHAP KONTRAK</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr style="background-color: #336699">
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> No.</th>
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_calendar"></i> Sub-sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Checklist</th>
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Date</th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>26</th>
                              <th colspan="2">SPMK (Penetapan Pemenang)</th>
                              <th><input type="checkbox" name="SPMK" <?php if($process->spmk==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_SPMK" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>27</th>
                              <th colspan="2">Pembahasan Kontrak</th>
                              <th><input type="checkbox" name="bahasK" <?php if($process->pembahasanK==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_bahasK" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>27</th>
                              <th colspan="2">Penandatanganan Kontrak</th>
                              <th><input type="checkbox" name="ttdK" <?php if($process->penandatangananK==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date"  name="tgl_ttdK" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>29</th>
                              <th colspan="2">Efektif Kontrak</th>
                              <th><input type="checkbox" name="efektifK" <?php if($process->efektifK==1){echo "checked";} ?> value="1"></th>
                              <th><input type="date" name="tgl_efektifK" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                      </div>
                      <!-- Note -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="note">Note</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" name="Note" id="Note"><?= $process->note ?></textarea>
                        </div>
                      </div>
                      <!-- Buttons --><br>
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="button" class="btn btn-primary">Publish</button>
                          <button type="submit" class="btn btn-primary">Save Draft</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>
            </div>
          </div>
        </div>
      </div>
</section>
  <?php $this->load->view('templates/config/js_main')?>
  <?php $this->load->view('templates/footer')?>
