<?php $this->load->view('templates/header')?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
    </section>
    <!-- Add new clinet-->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Datatable List</h3>

              <div class="box-tools pull-right">
                <button type="button" id="btnTambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i><a href = 'C_client/addClient'>Tambah</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--List client-->
    <!--<div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><i class="icon_document_alt"></i>knowledge</h3>
    <ol class="breadcrumb">
      <li><i class="icon_document_alt"></i><a href="<?php echo base_url('C_client/getAll'.$divi->divisionID) ?>"><?php echo ucwords($divi->divisionName); ?></a></li>
      <li><i class="fa fa-paperclip"></i>Details</li>
    </ol>
        <section class="panel">
        <table class="table table-advance table-bordered">
                <tbody>
                  <tr style="background-color: #2A3542">
                    <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Client Code</th>
                    <th style="color: #FFFFFF"><i class="icon_calendar"></i> Client Name</th>
                    <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Project Name</th>
                    <th style="color: #FFFFFF"><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <?php foreach ($knowledge as $key){?>
                    <tr>
                      <td><?= $key->title ?></td>
                      <td><?= $key->dateOfUpload ?></td>
                      <td><?= $key->description ?></td>
                      <td><?= $key->name ?></td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-success" href="<?= base_url('C_knowledge/detail/'.$key->knowledgeID.'/'.$key->divisionID )?>"><i class="fa fa-eye"> See Details</i></a>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
    <section>
    </div>
  </div>-->