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
                        <select class="form-control" name="client" id="client">
                          <option> -- Select Client -- </option>
                          <?php foreach ($client as $c) { ?>
                            <option value="<?= $c->client_code ?>" <?php if($c->client_code==$process->clientID){echo "selected";} ?>><?= $c->client_name ?></option>
                          <?php } ?>
                        </select>
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
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Note</th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>1</td>
                              <td colspan="2">Promosi (Market Development)</td>
                              <td align="center"><input type="checkbox" name="mardev" id="cek1" <?php if($process->promosi==1){echo "checked";} ?> value="1" onclick="myClick(1)"></td>
                              <td><textarea name="note1" class="form-control" rows="1"  cols="50" id="cnote1"><?= $process->note1 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>2</td>
                              <td colspan="2">Opsreq</td>
                              <td align="center"><input type="checkbox" name="opsreq" id="cek2" <?php if($process->opsreq==1){echo "checked";} ?> value="1" onclick="myClick(2)"></td>
                              <td><textarea name="note2" class="form-control" rows="1"  cols="50" id="cnote2"><?= $process->note2 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>3</td>
                              <td colspan="2">Design</td>
                              <td align="center"><input type="checkbox" name="design" id="cek3" <?php if($process->design==1){echo "checked";} ?> value="1" onclick="myClick(3)"></td>
                              <td><textarea name="note3" class="form-control" rows="1"  cols="50" id="cnote3"><?= $process->note3 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>4</td>
                              <td colspan="2">Presentasi</td>
                              <td align="center"><input type="checkbox" name="presentasi" id="cek4" <?php if($process->presentasi==1){echo "checked";} ?> value="1" onclick="myClick(4)"></td>
                              <td><textarea name="note4" class="form-control" rows="1"  cols="50" id="cnote4"><?= $process->note4 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>5</td>
                              <td colspan="2">Sourcing Harga</td>
                              <td align="center"><input type="checkbox" name="sourceprice" id="cek5" <?php if($process->sourcing_harga==1){echo "checked";} ?> value="1" onclick="myClick(5)"></td>
                              <td><textarea name="note5" class="form-control" rows="1"  cols="50" id="cnote5"><?= $process->note5 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>6</td>
                              <td colspan="2">Penyiapan Dokumen Lelang (SDM, Fasilitas, Finansial)</td>
                              <td align="center"><input type="checkbox" name="sff" id="cek6" <?php if($process->penyiapanDL==1){echo "checked";} ?> value="1" onclick="myClick(6)"></td>
                              <td><textarea name="note6" class="form-control" rows="1"  cols="50" id="cnote6"><?= $process->note6 ?></textarea></td>
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
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Note</th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>7</td>
                              <td colspan="2">Pengumuman Lelang</td>
                              <td align="center"><input type="checkbox" name="pgmL" id="cek7" <?php if($process->pengumumanL==1){echo "checked";} ?> value="1" onclick="myClick(7)"></td>
                              <td><textarea name="note7" class="form-control" rows="1"  cols="50" id="cnote7"><?= $process->note7 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>8</td>
                              <td colspan="2">Pendaftaran Lelang</td>
                              <td align="center"><input type="checkbox" name="pdfL" id="cek8" <?php if($process->pendaftaranL==1){echo "checked";} ?> value="1" onclick="myClick(8)"></td>
                              <td><textarea name="note8" class="form-control" rows="1"  cols="50" id="cnote8"><?= $process->note8 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>9</td>
                              <td rowspan="4">Tahap Prakualifikasi</td>
                              <td>Pemasukan Dokumen Prakualifikasi</td>
                              <td align="center"><input type="checkbox" name="pmDP" id="cek9" <?php if($process->prakualifikasi1==1){echo "checked";} ?> value="1" onclick="myClick(9)"></td>
                              <td><textarea name="note9" class="form-control" rows="1"  cols="50" id="cnote9"><?= $process->note9 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>10</td>
                              <td>Pembukaan Dokumen Prakualifikasi</td>
                              <td align="center"><input type="checkbox" name="pmbDP" id="cek10" <?php if($process->prakualifikasi2==1){echo "checked";} ?> value="1" onclick="myClick(10)" ></td>
                              <td><textarea name="note10" class="form-control" rows="1"  cols="50" id="cnote10"><?= $process->note10 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>11</td>
                              <td>Pembuktian Kualifikasi</td>
                              <td align="center"><input type="checkbox" name="pmbkDP" id="cek11" <?php if($process->prakualifikasi3==1){echo "checked";} ?> value="1" onclick="myClick(11)"></td>
                              <td><textarea name="note11" class="form-control" rows="1"  cols="50" id="cnote11"><?= $process->note11 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>12</td>
                              <td>Hasil Prakualifikasi</td>
                              <td align="center"><input type="checkbox" name="hasilpraK" id="cek12" <?php if($process->prakualifikasi4==1){echo "checked";} ?> value="1" onclick="myClick(12)"></td>
                              <td><textarea name="note12" class="form-control" rows="1"  cols="50" id="cnote12"><?= $process->note12 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>13</td>
                              <td colspan="2">Pengambilan Dokumen Lelang</td>
                              <td align="center"><input type="checkbox" name="pgDL" id="cek13" <?php if($process->pengambilanDL==1){echo "checked";} ?> value="1" onclick="myClick(13)"></td>
                              <td><textarea name="note13" class="form-control" rows="1"  cols="50" id="cnote13"><?= $process->note13 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>14</td>
                              <td colspan="2">Aanwizjing</td>
                              <td align="center"><input type="checkbox" name="aanwizjing" id="cek14" <?php if($process->aanwizjing==1){echo "checked";} ?> value="1" onclick="myClick(14)"></td>
                              <td><textarea name="note14" class="form-control" rows="1"  cols="50" id="cnote14"><?= $process->note14 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>15</td>
                              <td rowspan="10">Tahap Pemasukan Dokumen</td>
                              <td>Pemasukan Dokumen Penawaran Administrasi dan Teknis</td>
                              <td align="center"><input type="checkbox" name="pmDPAT" id="cek15" <?php if($process->pemasukanD1==1){echo "checked";} ?> value="1" onclick="myClick(15)"></td>
                              <td><textarea name="note15" class="form-control" rows="1"  cols="50" id="cnote15"><?= $process->note15 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>16</td>
                              <td>Pembukaan Dokumen Penawaran Administrasi dan Teknis</td>
                              <td align="center"><input type="checkbox" name="pmbDPAT" id="cek16" <?php if($process->pemasukanD2==1){echo "checked";} ?> value="1" onclick="myClick(16)"></td>
                              <td><textarea name="note16" class="form-control" rows="1"  cols="50" id="cnote16"><?= $process->note16 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>17</td>
                              <td>Evaluasi Administrasi dan Teknis</td>
                              <td align="center"><input type="checkbox" name="evalAT" id="cek17" <?php if($process->pemasukanD3==1){echo "checked";} ?> value="1" onclick="myClick(17)"></td>
                              <td><textarea name="note17" class="form-control" rows="1"  cols="50" id="cnote17"><?= $process->note17 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>18</td>
                              <td>Klarifikasi Administrasi dan Teknis</td>
                              <td align="center"><input type="checkbox" name="klarifAT" id="cek18" <?php if($process->pemasukanD4==1){echo "checked";} ?> value="1" onclick="myClick(18)"></td>
                              <td><textarea name="note18" class="form-control" rows="1"  cols="50" id="cnote18"><?= $process->note18 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>19</td>
                              <td>Negoisasi Administrasi dan Teknis</td>
                              <td align="center"><input type="checkbox" name="negoAT" id="cek19" <?php if($process->pemasukanD5==1){echo "checked";} ?> value="1" onclick="myClick(19)"></td>
                              <td><textarea name="note19" class="form-control" rows="1"  cols="50" id="cnote19"><?= $process->note19 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>20</td>
                              <td>Pengumuman Hasil Administrasi dan Teknis</td>
                              <td align="center"><input type="checkbox" name="pengumumanAT" id="cek20" <?php if($process->pemasukanD6==1){echo "checked";} ?>value="1" onclick="myClick(20)"></td>
                              <td><textarea name="note20" class="form-control" rows="1"  cols="50" id="cnote20"><?= $process->note20 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>21</td>
                              <td>Pemasukan Penawaran Harga</td>
                              <td align="center"><input type="checkbox" name="pemasukanTwr" id="cek21" <?php if($process->pemasukanD7==1){echo "checked";} ?> value="1" onclick="myClick(21)"></td>
                              <td><textarea name="note21" class="form-control" rows="1"  cols="50" id="cnote21"><?= $process->note21 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>22</td>
                              <td>Evaluasi Harga</td>
                              <td align="center"><input type="checkbox" name="evalHarga" id="cek22" <?php if($process->pemasukanD8==1){echo "checked";} ?> value="1" onclick="myClick(22)"></td>
                              <td><textarea name="note22" class="form-control" rows="1"  cols="50" id="cnote22"><?= $process->note22 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>23</td>
                              <td>Negosiasi Harga</td>
                              <td align="center"><input type="checkbox" name="negoHarga" id="cek23" <?php if($process->pemasukanD9==1){echo "checked";} ?> value="1" onclick="myClick(23)"></td>
                              <td><textarea name="note23" class="form-control" rows="1"  cols="50" id="cnote23"><?= $process->note23 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>24</td>
                              <td>Pengumuman Pemenang</td>
                              <td align="center"><input type="checkbox" name="pengumumanMenang" id="cek24" <?php if($process->pemasukanD10==1){echo "checked";} ?> value="1" onclick="myClick(24)"></td>
                              <td><textarea name="note24" class="form-control" rows="1"  cols="50" id="cnote24"><?= $process->note24 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>25</td>
                              <td colspan="2">Tim Evaluasi Pengadaan (TEP)</td>
                              <td align="center"><input type="checkbox" name="TEP" id="cek25" <?php if($process->tep==1){echo "checked";} ?> value="1" onclick="myClick(25)"></td>
                              <td><textarea name="note25" class="form-control" rows="1"  cols="50" id="cnote25"><?= $process->note25 ?></textarea></td>
                            </tr>
                          </tbody>
                          <tdead>
                            <tr style="background-color: #2A3542">
                              <td colspan="5" widtd="100px" style="color: #FFFFFF" align="center"><i class=""> </i>TAHAP KONTRAK</td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr style="background-color: #336699">
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> No.</th>
                              <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_calendar"></i> Sub-sub Process</th>
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Checklist</th>
                              <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Note</th>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>26</td>
                              <td colspan="2">SPMK (Penetapan Pemenang)</td>
                              <td align="center"><input type="checkbox" name="SPMK" id="cek26" <?php if($process->spmk==1){echo "checked";} ?> value="1" onclick="myClick(26)"></td>
                              <td><textarea name="note26" class="form-control" rows="1"  cols="50" id="cnote26"><?= $process->note26 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>27</td>
                              <td colspan="2">Pembahasan Kontrak</td>
                              <td align="center"><input type="checkbox" name="bahasK" id="cek27" <?php if($process->pembahasanK==1){echo "checked";} ?> value="1" onclick="myClick(27)"></td>
                              <td><textarea name="note27" class="form-control" rows="1"  cols="50" id="cnote27"><?= $process->note27 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>27</td>
                              <td colspan="2">Penandatanganan Kontrak</td>
                              <td align="center"><input type="checkbox" name="ttdK" id="cek28" <?php if($process->penandatangananK==1){echo "checked";} ?> value="1" onclick="myClick(28)"></td>
                              <td><textarea name="note28" class="form-control" rows="1"  cols="50" id="cnote28"><?= $process->note28 ?></textarea></td>
                            </tr>
                            <tr style="background-color: #FFFFFF">
                              <td>29</td>
                              <td colspan="2">Efektif Kontrak</td>
                              <td align="center"><input type="checkbox" name="efektifK" id="cek29" <?php if($process->efektifK==1){echo "checked";} ?> value="1" onclick="myClick(29)"></input></td>
                              <td><textarea name="note29" class="form-control" rows="1" cols="50" id="cnote29"><?= $process->note29 ?></textarea></td>
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
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="done">Project Is Done </label>
                        <div class="col-lg-10">
                          <input type="checkbox" name="done" <?php if($process->done==1){echo "checked";} ?> value="1"> yes</input>
                        </div>
                      </div>
                      <!-- Buttons --><br>
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
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


<script>
function myClicka(num) {
    var checkBox = document.getElementById("cek"+num);
    var note = document.getElementById("cnote"+num);
    if (checkBox.checked){
        note.disabled = "false";
    } else {
        note.disabled = "true";
    }
}
</script>

  <?php $this->load->view('templates/config/js_main')?>
  <?php $this->load->view('templates/footer')?>
