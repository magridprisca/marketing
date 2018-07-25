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
  <div class="widget-icons"></div>
                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal">
                      <!-- Project ID -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Project ID</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title">
                        </div>
                      </div>
                      <!-- Project -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Project Name</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="project">
                        </div>
                      </div>
                      <!-- Client -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="client">Client</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="Client" id="Client">
                        </div>
                      </div>
                      <!-- Process, Sub-Process, Sub-sub Process-->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="process">Process</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="Process" id="Process">
                                                  <option value="">- Choose Process -</option>
                                                  <?php foreach ($process as $pc) { ?>
                                                    <option value="<?= $pc->process_code ?>"><?= $c->process_name ?></option>
                                                  <?php } ?>
                                                </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="sub-process">Sub Process</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="subProcess" id="subProcess">
                                                  <option value="">- Choose Sub Process -</option>
                                                  <?php foreach ($process as $pc) { ?>
                                                    <option value="<?= $pc->process_code ?>"><?= $c->process_name ?></option>
                                                  <?php } ?>
                                                </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="sub-sub process">Sub-sub Process</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="subsubProcess" id="subsubProcess">
                                                  <option value="">- Choose Sub-sub Process -</option>
                                                  <?php foreach ($process as $pc) { ?>
                                                    <option value="<?= $pc->process_code ?>"><?= $c->process_name ?></option>
                                                  <?php } ?>
                                                </select>
                        </div>
                      </div>
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="note">Note<span class="required"></span></label>
                        <div class="col-lg-10">
                          <textarea class="form-control" name="Note" id="Note"></textarea>
                        </div>
                      </div>
                      <!-- Buttons -->
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
<!-- Footer goes here -->
<div class="widget-foot"></div>
<!-- Asli -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<section>
