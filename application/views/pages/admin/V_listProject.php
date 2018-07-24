<?php $this->load->view('templates/header')?>
<section class="content-header">
  <h1>
    Project
    <small>list</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">List Project</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Datatable List</h3>

          <div class="box-tools pull-right">
            <button type="button" id="btnTambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Project Code</th>
                        <th>Project Name</th>
                        <th>Date Create</th>
                        <th>Client</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach ($project as $key) { ?>
                    <tr>
                      <td><?= $key->pro_code?></td>
                      <td><?= $key->pro_name?></td>
                      <td><?= $key->pro_date?></td>
                      <td><?= $key->clientID?></td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-success" href="<?= base_url('C_client/addClient')?>"><i class="fa fa-eye"> See Details</i></a>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Project Code</th>
                        <th>Project Name</th>
                        <th>Date Create</th>
                        <th>Client</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
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
</section>
<?php $this->load->view('templates/config/js_main')?>
<script>
$(document).ready(function() {
  $('#example').DataTable();
});

$('#btnTambah').on('click',function(){
  window.location = "<?php echo site_url()?>example/form";
});
</script>
<?php $this->load->view('templates/footer')?>
