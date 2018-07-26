<?php $this->load->view('templates/header')?>
<section class="content-header">
  <h1>
    Project <?= $process->pro_name ?>
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
                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal">
                      <!-- Project ID -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Project ID :</label>
                        <label class="control-label col-lg-10"><?= $process->pro_code ?></label>
                      </div>
                      <!-- Project -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Project Name :</label>
                        <label class="control-label col-lg-10"><?= $process->pro_name ?></label>
                      </div>
                      <!-- Client -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Client :</label>
                        <label class="control-label col-lg-10"><?= $process->client_name ?></label>
                      </div>
                      <!-- Tags -->
                      <div class="form-group">
                        <table></table>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2">Note :</span></label>
                        <label class="control-label col-lg-10"><?= $process->pro_code ?></label>
                      </div>
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <button type="submit" class="btn btn-danger">Cancel</button>
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
