<?php $this->load->view('templates/header')?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-folder-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Project</span>
              <span class="info-box-number">
                <?= $project->total?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-spinner"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">On Process</span>
              <span class="info-box-number">
                <?= $projectProcess->total?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check-circle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Done</span>
              <span class="info-box-number">
                <?= $projectDone->total?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 style="text-align: center;">Yearly Recap Report</h3>
                <div class="col-md-12">
                  <div class="progress-group">
                    <span class="progress-text">Progress Tahap Pralelang</span>
                    <span class="progress-number">
                      <b>
                        <?= $total_pralelang = $thp_praLelang->tot+$thp_praLelang->pro+$thp_praLelang->des+
                            $thp_praLelang->pre+$thp_praLelang->sou+$thp_praLelang->pen ?>
                      </b>
                        /<?= $project->total*6 ?>
                    </span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: <?= $total_pralelang/($project->total*6)*100 ?>%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Progress Tahap Lelang</span>
                    <span class="progress-number">
                      <b>
                        <?= $totalLelang = $thp_lelang->peng+$thp_lelang->pend+$thp_lelang->pra1+$thp_lelang->pra2+
                            $thp_lelang->pra3+$thp_lelang->pra4+$thp_lelang->penga+$thp_lelang->aanw+
                            $thp_lelang->pem1+$thp_lelang->pem2+$thp_lelang->pem3+$thp_lelang->pem4+
                            $thp_lelang->pem5+$thp_lelang->pem6+$thp_lelang->pem7+$thp_lelang->pem8+
                            $thp_lelang->pem9+$thp_lelang->pem10+$thp_lelang->tepp?>
                      </b>
                        /<?= $project->total*19 ?>
                    </span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: <?= $totalLelang/($project->total*19)*100 ?>%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Progress Tahap Kontrak</span>
                    <span class="progress-number">
                      <b>
                        <?= $totalKontrak = $thp_kontrak->spm+$thp_kontrak->pemK+
                            $thp_kontrak->penK+$thp_kontrak->efeK?>
                      </b>
                        /<?= $project->total*4 ?>
                    </span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: <?= $totalKontrak/($project->total*4)*100 ?>%"></div>
                    </div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

<?php $this->load->view('templates/config/js_main')?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/templates/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/templates/js/demo.js"></script>
<?php $this->load->view('templates/footer')?>
