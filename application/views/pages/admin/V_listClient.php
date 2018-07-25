<?php $this->load->view('templates/header')?>
<section class="content">
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-universal-access"></i> Home</a></li>
    <li class="active"><i class="fa fa-handshake-o"></i> Client</li>
  </ol>
    <!-- Add new clinet-->

      <div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title" text-style="bold">Client List</h3>
              <div class="box-tools pull-right">
                <a href="<?= base_url('C_client/addClient')?>"><button type="button" id="btnTambah" class="btn btn-primary btn-sm fa fa-plus">  Tambah</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
<!--List client-->
    <div class="row">
    <div class="col-lg-12">
        <section class="panel">
        <table class="table table-striped table-bordered" style="width:100%">
          <tbody>
            <tr style="background-color: #2A3542">
              <th width="150px" style="color: #FFFFFF"><i class="fa fa-ticket"> </i>  Client Code</th>
              <th width="450px" style="color: #FFFFFF"><i class="fa fa-user-o"></i>  Client Name</th>
              <th width="300px" style="color: #FFFFFF"><i class="fa fa-cogs"></i>  Action</th>
            </tr>
            <?php foreach ($client as $key){?>
              <tr>
                <td><?= $key->client_code ?></td>
                <td><?= $key->client_name ?></td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-success" href="<?= base_url('C_client/addClient')?>"><i class="fa fa-eye"> See Details</i></a>
                    <a class="btn btn-danger" href="<?= base_url('C_client/removeList')?>"><i class="fa fa-remove"> Remove Client</i></a>
                    <a class="btn btn-info" href="<?= base_url('C_client/addClient')?>"><i class="fa fa-edit"> Edit Client</i></a>
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
    </section>
    </div>
  </div>
</section>
<?php $this->load->view('templates/config/js_main')?>
<script>
$(document).ready(function() {
  $('#example').DataTable();
});

</script>
<?php $this->load->view('templates/footer')?>
