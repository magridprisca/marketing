<?php $this->load->view('templates/header')?>
<section class="content-header">
  <h1>
    Client
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-universal-access"></i> Home</a></li>
    <li class="active">Client</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Datatable Client List</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm fa fa-plus" data-toggle="modal" data-target="#modal-default"> Add</button>
          </div>
        </div>
<!--List client-->
<div class="box-body">
  <div class="row">
    <div class="col-md-12">
      <table id="example" class="table table-striped table-bordered" style="width:100%; order: 0.5px solid grey">
        <thead>
            <tr style="background-color: #2A3542">
              <th width="100px" style="color: #FFFFFF; border: 0.5px solid grey"><i class="fa fa-ticket"> </i>  Client Code</th>
              <th width="500px" style="color: #FFFFFF; border: 0.5px solid grey"><i class="fa fa-user-o"></i>  Client Name</th>
              <th width="100px" style="color: #FFFFFF; border: 0.5px solid grey"><i class="fa fa-cogs"></i>  Action</th>
            </tr>
        </thead>
          <tbody>
            <?php foreach ($client as $key){?>
              <tr>
                <td style="border: 0.5px solid grey"><?= $key->client_code ?></td>
                <td style="border: 0.5px solid grey"><?= $key->client_name ?></td>
                <td align="center" style="border: 0.5px solid grey">
                  <div class="btn-group">
                    <?php if ($this->session->userdata('user')){ ?>
                    <a class="btn btn-info" href="<?= base_url('C_client/editClient/'.$key->client_code)?>"><i class="fa fa-edit"> Edit</i></a>
                    <a class="btn btn-danger" href="<?= base_url('C_client/remove/'.$key->client_code)?>"><i class="fa fa-remove"> Remove</i></a>
                    <?php } ?>
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
<!--box body-->
        </div>
      </div>
    </div>
<!--list client-->
    </div>
  </div>
</div>
</section>
<!--Pop-up-->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" id="formInput" method="post" action="<?= base_url('C_client/addClient') ?>">
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
<script>
$(document).ready(function() {
  $('#example').DataTable();
});

</script>
<?php $this->load->view('templates/config/js_main')?>
<?php $this->load->view('templates/footer')?>
