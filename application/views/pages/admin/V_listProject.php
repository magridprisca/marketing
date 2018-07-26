<?php $this->load->view('templates/header')?>
<section class="content-header">
  <h1>
    CProject
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-universal-access"></i> Home</a></li>
    <li class="active">Project</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Datatable Project List</h3>
          <div class="box-tools pull-right">
        </div>
      </div>
<!--List project-->
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr style="background-color: #2A3542">
                    <th width="100px" style="color: #FFFFFF"><i class=""> </i>  Project Code</th>
                    <th width="200px" style="color: #FFFFFF"><i class="fa fa-user-o"></i>  Project Name</th>
                      <th width="100px" style="color: #FFFFFF"><i class=""> </i>  Date Create</th>
                      <th width="100px" style="color: #FFFFFF"><i class="fa fa-user-o"></i>  Client</th>
                    <th width="300px" style="color: #FFFFFF"><i class="fa fa-cogs"></i>  Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($project as $key){?>
                    <tr>
                      <td><?= $key->pro_code ?></td>
                      <td><?= $key->pro_name ?></td>
                      <td><?= $key->pro_date ?></td>
                      <td><?= $key->clientID ?></td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-success" href="<?= base_url('C_Project/detail/'.$key->pro_code)?>"><i class="fa fa-eye"> See Details</i></a>
                          <?php //if (!isset($this->session->userdata('user'))){ ?>
                            <a class="btn btn-info" href="<?= base_url('C_Project/edit/'.$key->pro_code)?>"><i class="fa fa-edit"> Edit Project</i></a>
                            <a class="btn btn-danger" href="<?= base_url('C_Project/remove/'.$key->pro_code)?>"><i class="fa fa-remove"> Remove Priject</i></a>
                          <?php //} ?>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
<!--box header-->
    </div>
  </div>
</div>
<!--List project-->
      </div>
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
