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
                    <form class="form-horizontal">
                      <!-- Project ID -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="projectid">Project ID</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title" disabled value="<?= $process->pro_code ?>">
                        </div>
                      </div>
                      <!-- Project -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="projectname">Project Name</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="project" value="<?= $process->pro_name ?>">
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
                              <th><input type="checkbox" name="mardev"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>2</th>
                              <th colspan="2">Opsreq</th>
                              <th><input type="checkbox" name="opsreq"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>3</th>
                              <th colspan="2">Design</th>
                              <th><input type="checkbox" name="design"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>4</th>
                              <th colspan="2">Presentasi</th>
                              <th><input type="checkbox" name="presentasi"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>5</th>
                              <th colspan="2">Sourcing Harga</th>
                              <th><input type="checkbox" name="sourceprice"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>6</th>
                              <th colspan="2">Penyimpanan Dokumen Lelang (SDM, Fasilitas, Finansial)</th>
                              <th><input type="checkbox" name="sff"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
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
                              <th><input type="checkbox" name="pgmL"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>8</th>
                              <th colspan="2">Pendaftaran Lelang</th>
                              <th><input type="checkbox" name="pdfL"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>9</th>
                              <th>Tahap Prakualifikasi</th>
                              <th>Pemasukan Dokumen Prakualifikasi</th>
                              <th><input type="checkbox" anme="pmDP"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>10</th>
                              <th>Tahap Prakualifikasi</th>
                              <th>Pembukaan Dokumen Prakualifikasi</th>
                              <th><input type="checkbox" name="pmbDP"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>11</th>
                              <th>Tahap Prakualifikasi</th>
                              <th>Pembuktian Kualifikasi</th>
                              <th><input type="checkbox" name="pmbkDP"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>12</th>
                              <th colspan="2">Pengambilan Dokumen Lelang</th>
                              <th><input type="checkbox" name="pgDL"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>13</th>
                              <th colspan="2">Aanwizjing</th>
                              <th><input type="checkbox" name="aanwizjing"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>14</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Pemasukan Dokumen Penawaran Administrasi dan Teknis</th>
                              <th><input type="checkbox" name="pmDPAT"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>15</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Pembukaan Dokumen Penawaran Administrasi dan Teknis</th>
                              <th><input type="checkbox" name="pmbDPAT"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>16</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Evaluasi Administrasi dan Teknis</th>
                              <th><input type="checkbox" name="evalAT"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>17</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Klarifikasi Administrasi dan Teknis</th>
                              <th><input type="checkbox" name="klarifAT"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>18</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Negoisasi Administrasi dan Teknis</th>
                              <th><input type="checkbox" name="negoAT"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>19</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Pengumuman Hasil Administrasi dan Teknis</th>
                              <th><input type="checkbox" name="pengumumanAT"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>20</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Pemasukan Penawaran Harga</th>
                              <th><input type="checkbox" name="pemasukanTwr"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>21</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Evaluasi Harga</th>
                              <th><input type="checkbox" name="evalHarga"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>22</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Negosiasi Harga</th>
                              <th><input type="checkbox" name="negoHarga"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>23</th>
                              <th>Tahap Pemasukan Dokumen</th>
                              <th>Pengumuman Pemenang</th>
                              <th><input type="checkbox" name="pengumumanMenang"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>24</th>
                              <th colspan="2">Tim Evaluasi Pengadaan (TEP)</th>
                              <th><input type="checkbox" name="TEP"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
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
                              <th>25</th>
                              <th colspan="2">SPMK (Penetapan Pemenang)</th>
                              <th><input type="checkbox" name="SPMK"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>26</th>
                              <th colspan="2">Pembahasan Kontrak</th>
                              <th><input type="checkbox" name="bahasK"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>27</th>
                              <th colspan="2">Penandatanganan Kontrak</th>
                              <th><input type="checkbox" name="ttdK"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <th>28</th>
                              <th colspan="2">Efektif Kontrak</th>
                              <th><input type="checkbox" name="efektifK"></th>
                              <th><input type="date" value="<?= date('Y-m-d')?>" border=0></th>
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
                          <button type="submit" class="btn btn-primary">Publish</button>
                          <button type="submit" class="btn btn-danger">Save Draft</button>
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
