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
        <form role="form" id="formInput" method="post" action="<?php base_url('C_Project/addSave') ?>">
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
              <label for="clientID">Client</label>
              <select class="form-control" name="client" id="client">
                <option> -- Select Client -- </option>
                <?php foreach ($client as $c) { ?>
                  <option value="<?= $c->client_code ?>"><?= $c->client_name ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="note">Add Notes<span class="required">*</span></label>
              <textarea class="form-control" name="Note" id="Note"></textarea>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="button" id="btnTutup" class="btn btn-default">Tutup</button>
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
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
              <button type="button" class="btn btn-primary">Save changes</button>
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
<script>
$('#btnSimpan').on('click',function(){
  var frm = $('#formInput');
  var submitData = true;
  frm.submit(function (e) {
    e.preventDefault();

    if(submitData){
      $.ajax({
          type: frm.attr('method'),
          url: frm.attr('action'),
          data: frm.serialize(),
          beforeSend: function(){
            blockShow();
          },
          success: function (data) {
            blockHide();
            toastr.success('Data Berhasil Ditambah');
          },
          error: function (data) {
            blockHide();
            toastr.error('Terdapat Kesalahaan Penyimpanan');
          },
      });
      submitData = false;
    }
    return false;
  });
});

$('#btnTutup').on('click',function(){
  window.location = "<?php echo site_url()?>example";
});
</script>
<?php $this->load->view('templates/footer')?>
