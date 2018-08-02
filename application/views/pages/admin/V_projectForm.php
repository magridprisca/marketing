<?php $this->load->view('templates/header')?>
<section class="content-header">
  <h1>
    Project
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">New Project</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">New Project</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" id="formInput" method="post" action="<?= base_url('C_Project/addSave') ?>">
          <div class="box-body">
            <div class="form-group">
              <label for="code">Project Code<span class="required">*</span></label>
              <input type="text" class="form-control" name="proCode" id="proCode" placeholder="Code">
            </div>
            <div class="form-group">
              <label for="project">Project Name<span class="required">*</span></label>
              <input type="text" class="form-control" name="proName" id="proName" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="date">Date<span class="required">*</span></label>
              <input type="date" class="form-control" name="proDate" id="proDate" value="<?= date('Y-m-d')?>" >
            </div>
            <div class="form-group">
              <label for="clientID">Client</label><div class="input-group">
              <select class="form-control" name="client" id="client">
                <option> -- Select Client -- </option>
                <?php foreach ($client as $c) { ?>
                  <option value="<?= $c->client_code ?>"><?= $c->client_name ?></option>
                <?php } ?>
              </select>
              <span class="input-group-btn ">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i></button>
            </span></div>
          </div>


            <div class="form-group">
              <label for="note">Add Notes<span class="required">*</span></label>
              <textarea class="form-control" name="Note" id="Note"></textarea>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="button" id="btnTutup" class="btn btn-default" onclick="goBack()">Cancel</button>
            <button id="btnSimpan" type= "submit" class="btn btn-primary pull-right">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!--Pop-up-->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" id="formInput" method="post" action="<?= base_url('C_client/addClient1') ?>">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">FORM NEW CLIENT</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
              <label for="name">Name<span class="required">*</span></label>
              <input class="form-control" id="clientName" name="clientName" placeholder="Client name">
            </div>
          </div>
        </div>
        <div class="box-footer">
          <button type="button" id="btnTutup" class="btn btn-default pull-left" data-dismiss="modal" onclick="goBack()">Cancel</button>
          <button id="btnSimpan" type= "submit" class="btn btn-primary pull-right">Save</button>
        </div>
      </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php $this->load->view('templates/config/js_main')?>
<?php $this->load->view('templates/footer')?>
