<?php $this->load->view('templates/header')?>
<section class="content">
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-universal-access"></i> Home</a></li>
    <li class="active"><i class="fa fa-dashboard"></i> Project</li>
  </ol>
      <div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title" text-style="bold">Project List</h3>
            </div>
          </div>
        </div>
      </div>
<!--List client-->
    <div class="row">
    <div class="col-lg-12">
        <section class="panel">
        <table class="table table-striped table-bordered">
                <tbody>
                  <tr style="background-color: #2A3542">
                    <th width="150px" style="color: #FFFFFF"><i class=""> </i>  Project Code</th>
                    <th width="250px" style="color: #FFFFFF"><i class="fa fa-user-o"></i>  Project Name</th>
                      <th width="100px" style="color: #FFFFFF"><i class=""> </i>  Date Create</th>
                      <th width="100px" style="color: #FFFFFF"><i class="fa fa-user-o"></i>  Client</th>
                    <th width="300px" style="color: #FFFFFF"><i class="fa fa-cogs"></i>  Action</th>
                  </tr>
                  <?php foreach ($project as $key){?>
                    <tr>
                      <td><?= $key->pro_code ?></td>
                      <td><?= $key->pro_name ?></td>
                      <td><?= $key->pro_date ?></td>
                      <td><?= $key->clientID ?></td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-success" href="<?= base_url('C_Project/detail/'.$key->pro_code)?>"><i class="fa fa-eye"> See Details</i></a>
                          <a class="btn btn-info" href="<?= base_url('C_Project/edit/'.$key->pro_code)?>"><i class="fa fa-edit"> Edit Project</i></a>
                          <a class="btn btn-danger" href="<?= base_url('C_Project/remove/'.$key->pro_code)?>"><i class="fa fa-remove"> Remove Priject</i></a>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
    <section>
    </div>
  </div>
  <section>
