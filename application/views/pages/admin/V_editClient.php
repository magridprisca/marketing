<?php $this->load->view('templates/header')?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>FORM NEW CLIENT</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Client</li>
      </ol>
    </section>
<!-- Formulir new clinet-->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Client</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" id="formInput" method="post" action="<?= base_url('C_client/editClient/'.$client->client_code) ?>">
            <div class="box-body">
              <div class="form-group">
                <label for="code">Client code<span class="required">*</span></label>
                <input class="form-control" id="clientCode" name="clientCode"  value="<?= $client->client_code ?>">
              </div>
              <div class="form-group">
                <label for="name">Name<span class="required">*</span></label>
                <input class="form-control" id="clientName" name="clientName" value="<?= $client->client_name ?>">
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="button" id="btnTutup" class="btn btn-default" onclick="goBack()">Cancel</button>
              <button id="btnSimpan" type= "submit" class="btn btn-primary pull-right">Save</button>
            </div>
          </form>
        </div>

        <!-- modal-dialog -->
        <div class="modal fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body…</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="goBack()">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
        </div>
        <!-- modal-dialog -->

      </div>
    </div>
  </section>

  <?php $this->load->view('templates/config/js_main')?>
  <?php $this->load->view('templates/footer')?>
