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
                              <th colspan="4" width="100px" style="color: #FFFFFF" align="center"><i class=""> </i>TAHAP PRALELANG</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr style="background-color: #336699">
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> No.</th>
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_calendar"></i> Sub-sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Checklist</th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>1</td>
                              <td colspan="2">Promosi (Market Development)</td>
                              <td align="center"><input type="checkbox" name="mardev" <?php if($process->promosi==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>2</td>
                              <td colspan="2">Opsreq</td>
                              <td align="center"><input type="checkbox" name="opsreq" <?php if($process->opsreq==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>3</td>
                              <td colspan="2">Design</td>
                              <td align="center"><input type="checkbox" name="design" <?php if($process->design==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>4</td>
                              <td colspan="2">Presentasi</td>
                              <td align="center"><input type="checkbox" name="presentasi" <?php if($process->presentasi==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>5</td>
                              <td colspan="2">Sourcing Harga</td>
                              <td align="center"><input type="checkbox" name="sourceprice" <?php if($process->sourcing_harga==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>6</td>
                              <td colspan="2">Penyiapan Dokumen Lelang (SDM, Fasilitas, Finansial)</td>
                              <td align="center"><input type="checkbox" name="sff" <?php if($process->penyiapanDL==1){echo "checked";} ?> value="1"></td>
                            </tr>
                          </tbody>
                          <thead>
                            <tr style="background-color: #2A3542">
                              <th colspan="4" width="100px" style="color: #FFFFFF" align="center"><i class=""> </i>TAHAP LELANG</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr style="background-color: #336699">
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> No.</th>
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_calendar"></i> Sub-sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Checklist</th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>7</td>
                              <td colspan="2">Pengumuman Lelang</td>
                              <td align="center"><input type="checkbox" name="pgmL" <?php if($process->pengumumanL==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>8</td>
                              <td colspan="2">Pendaftaran Lelang</td>
                              <td align="center"><input type="checkbox" name="pdfL" <?php if($process->pendaftaranL==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>9</td>
                              <td rowspan="4">Tahap Prakualifikasi</td>
                              <td>Pemasukan Dokumen Prakualifikasi</td>
                              <td align="center"><input type="checkbox" name="pmDP" <?php if($process->prakualifikasi1==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>10</td>
                              <td>Pembukaan Dokumen Prakualifikasi</td>
                              <td align="center"><input type="checkbox" name="pmbDP" <?php if($process->prakualifikasi2==1){echo "checked";} ?> value="1" ></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>11</td>
                              <td>Pembuktian Kualifikasi</td>
                              <td align="center"><input type="checkbox" name="pmbkDP"<?php if($process->prakualifikasi3==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>12</td>
                              <td>Hasil Prakualifikasi</td>
                              <td align="center"><input type="checkbox" name="hasilpraK"<?php if($process->prakualifikasi4==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>13</td>
                              <td colspan="2">Pengambilan Dokumen Lelang</td>
                              <td align="center"><input type="checkbox" name="pgDL" <?php if($process->pengambilanDL==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>14</td>
                              <td colspan="2">Aanwizjing</td>
                              <td align="center"><input type="checkbox" name="aanwizjing" <?php if($process->aanwizjing==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>15</td>
                              <td rowspan="10">Tahap Pemasukan Dokumen</td>
                              <td>Pemasukan Dokumen Penawaran Administrasi dan Teknis</td>
                              <td align="center"><input type="checkbox" name="pmDPAT"<?php if($process->pemasukanD1==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>16</td>
                              <td>Pembukaan Dokumen Penawaran Administrasi dan Teknis</td>
                              <td align="center"><input type="checkbox" name="pmbDPAT"<?php if($process->pemasukanD2==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>17</td>
                              <td>Evaluasi Administrasi dan Teknis</td>
                              <td align="center"><input type="checkbox" name="evalAT" <?php if($process->pemasukanD3==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>18</td>
                              <td>Klarifikasi Administrasi dan Teknis</td>
                              <td align="center"><input type="checkbox" name="klarifAT" <?php if($process->pemasukanD4==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>19</td>
                              <td>Negoisasi Administrasi dan Teknis</td>
                              <td align="center"><input type="checkbox" name="negoAT" <?php if($process->pemasukanD5==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>20</td>
                              <td>Pengumuman Hasil Administrasi dan Teknis</td>
                              <td align="center"><input type="checkbox" name="pengumumanAT" <?php if($process->pemasukanD6==1){echo "checked";} ?>value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>21</td>
                              <td>Pemasukan Penawaran Harga</td>
                              <td align="center"><input type="checkbox" name="pemasukanTwr" <?php if($process->pemasukanD7==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>22</td>
                              <td>Evaluasi Harga</td>
                              <td align="center"><input type="checkbox" name="evalHarga" <?php if($process->pemasukanD8==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>23</td>
                              <td>Negosiasi Harga</td>
                              <td align="center"><input type="checkbox" name="negoHarga" <?php if($process->pemasukanD9==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>24</td>
                              <td>Pengumuman Pemenang</td>
                              <td align="center"><input type="checkbox" name="pengumumanMenang" <?php if($process->pemasukanD10==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>25</td>
                              <td colspan="2">Tim Evaluasi Pengadaan (TEP)</td>
                              <td align="center"><input type="checkbox" name="TEP" <?php if($process->tep==1){echo "checked";} ?> value="1"></td>
                            </tr>
                          </tbody>
                          <tdead>
                            <tr style="background-color: #2A3542">
                              <td colspan="4" widtd="100px" style="color: #FFFFFF" align="center"><i class=""> </i>TAHAP KONTRAK</td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr style="background-color: #336699">
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> No.</th>
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_calendar"></i> Sub-sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Checklist</th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>26</td>
                              <td colspan="2">SPMK (Penetapan Pemenang)</td>
                              <td align="center"><input type="checkbox" name="SPMK" <?php if($process->spmk==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>27</td>
                              <td colspan="2">Pembahasan Kontrak</td>
                              <td align="center"><input type="checkbox" name="bahasK" <?php if($process->pembahasanK==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>27</td>
                              <td colspan="2">Penandatanganan Kontrak</td>
                              <td align="center"><input type="checkbox" name="ttdK" <?php if($process->penandatangananK==1){echo "checked";} ?> value="1"></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>29</td>
                              <td colspan="2">Efektif Kontrak</td>
                              <td align="center"><input type="checkbox" name="efektifK" <?php if($process->efektifK==1){echo "checked";} ?> value="1"></td>
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
                          <button type="submit" class="btn btn-primary">Save</button>
                          <button type="button" class="btn btn-default" onclick="goBack()">Cancel</button>
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
