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
                    <span class="progress-number"><b><!--<?= $thp_praLelang->tot+$thp_praLelang->pro+$thp_praLelang->des+
                    $thp_praLelang->pre+$thp_praLelang->sou+$thp_praLelang->pen ?>--></b>
                    /<?= $thp_praaLelang->tot+$thp_praaLelang->pro+$thp_praaLelang->des+
                    $thp_praaLelang->pre+$thp_praaLelang->sou+$thp_praaLelang->pen ?></span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Progress Tahap Lelang</span>
                    <span class="progress-number"><b><?=$thp_lelang->totalLelang?></b>
                      /<?= $thp_leelang->peng+$thp_leelang->pend+$thp_leelang->pra1+$thp_leelang->pra2+
                      $thp_leelang->pra3+$thp_leelang->pra4+$thp_leelang->penga+$thp_leelang->aanw+
                      $thp_leelang->pem1+$thp_leelang->pem2+$thp_leelang->pem3+$thp_leelang->pem4+
                      $thp_leelang->pem5+$thp_leelang->pem6+$thp_leelang->pem7+$thp_leelang->pem8+
                      $thp_leelang->pem9+$thp_leelang->pem10+$thp_leelang->tepp?></span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Progress Tahap Kontrak</span>
                    <span class="progress-number"><b><?= $thp_kontrak->spm+$thp_kontrak->pemK+
                    $thp_kontrak->penK+$thp_kontrak->efeK?></b>
                      /<?= $thp_koontrak->spm+$thp_koontrak->pemK+
                      $thp_koontrak->penK+$thp_koontrak->efeK?></span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                    </div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$35,210.43</h5>
                    <span class="description-text">TOTAL REVENUE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">TOTAL COST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TOTAL PROFIT</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">GOAL COMPLETIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
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
