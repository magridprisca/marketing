<?php $this->load->view('templates/header')?>
<section class="content-header">
  <h1>
    Example
    <small>list</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Example</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" id="formInput" action="<?php echo site_url() ?>example/saving" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile">

              <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div>
            <div class="form-group">
              <label for="exampleInputModal">Modal</label>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Default Modal</button>
              <a href="#modal-fancybox" id="btnModal" class="btn btn-default">Fancybox Modal</a>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="button" id="btnTutup" class="btn btn-default">Tutup</button>
            <button id="btnSimpan" class="btn btn-primary pull-right">Simpan</button>
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
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
      </div>
      <!-- modal-dialog -->

      <!-- fancybox-dialog -->
      <div id="modal-fancybox" style="display:none">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Fancybox Modal</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" id="formInputModal" action="<?php echo site_url() ?>example/saving" method="post">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleModalEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleModalEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleModalPassword1">Password</label>
                <input type="password" class="form-control" id="exampleModalPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleModalFile">File input</label>
                <input type="file" id="exampleModalFile">

                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="button" id="btnTutupModal" class="btn btn-default">Tutup</button>
              <button id="btnSimpanModal" class="btn btn-primary pull-right">Simpan</button>
            </div>
          </form>
        </div>
      </div>
      <!-- fancybox-dialog -->

    </div>
  </div>
</section>

<?php $this->load->view('templates/config/js_main')?>
<script>
$(document).ready(function() {
  $("#btnModal").fancybox({
      'width':800,
      'height':'auto',
      'padding': 10,
      'closeBtn': false,
      'autoSize' : false,
      'autoDimensions': false,
      'closeClick'  : false, // prevents closing when clicking INSIDE fancybox
      'helpers'     : {
        'overlay' : {'closeClick': false} // prevents closing when clicking OUTSIDE fancybox
      },
      'afterShow' : function() {
        $('#btnTutupModal').on('click',function(){
          $.fancybox.close();
        });
      }
  });
});

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
