<?php $this->load->view('templates/header')?>
<section class="content-header">
  <h1>
    Note Project <?= $process->pro_name ?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-universal-access"></i> Home</a></li>
    <li>Project</li>
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
                <th style="color: #FFFFFF" align="center"><i class=""> </i>TAHAP PRALELANG</th>
              </tr>
            </thead>
            <tbody>
              <td>
                <?= $process->note1 ?><br/><?= $process->note2 ?><br/><?= $process->note3 ?><br/>
                <?= $process->note4 ?><br/><?= $process->note5 ?><br/><?= $process->note6 ?>
              </td>
            </tbody>
            <thead>
              <tr style="background-color: #2A3542">
                <th style="color: #FFFFFF" align="center"><i class=""> </i>TAHAP LELANG</th>
              </tr>
            </thead>
            <tbody>
              <td>
                <?= $process->note7 ?><br/><?= $process->note8 ?><br/><?= $process->note9 ?><br/><?= $process->note10 ?><br/><?= $process->note11 ?><br/>
                <?= $process->note12 ?><br/><?= $process->note13 ?><br/><?= $process->note14 ?><br/><?= $process->note15 ?><br/><?= $process->note16 ?><br/>
                <?= $process->note17 ?><br/><?= $process->note18 ?><br/><?= $process->note19 ?><br/><?= $process->note20 ?><br/><?= $process->note21 ?><br/>
                <?= $process->note22 ?><br/><?= $process->note23 ?><br/><?= $process->note24 ?><br/><?= $process->note25 ?>
              </td>
            </tbody>
            <thead>
              <tr style="background-color: #2A3542">
                <th style="color: #FFFFFF" align="center"><i class=""> </i>TAHAP KONTRAK</th>
              </tr>
            </thead>
            <tbody>
              <td>
                <?= $process->note26 ?><br/><?= $process->note27 ?><br/><?= $process->note28 ?><br/><?= $process->note29 ?>
              </td>
            </tbody>
            <thead>
              <tr style="background-color: #2A3542">
                <th style="color: #FFFFFF" align="center"><i class=""> </i>NOTE UMUM</th>
              </tr>
            </thead>
            <tbody>
              <td>
                <?= $process->note ?>
              </td>
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
