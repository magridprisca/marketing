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
                              <th colspan="5" width="100px" style="color: #FFFFFF" align="center"><i class=""> </i>Tahap 1</th>
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
                              <th><input type="checkbox"></th>
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
