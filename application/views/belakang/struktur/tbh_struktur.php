<div id="page-wrapper">
 <div class="container-fluid">
  <div class="row">
   <div class="col-lg-12">
    <h1 class="page-header">Forms Input Data</h1>
   </div>
   <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
   <div class="col-lg-12">
    <div class="panel panel-primary">
     <div class="panel-heading">
      Input Data Struktur Organisasi
     </div>
     <div class="panel-body">
      <?= $this->session->flashdata('msg');
                        ?>
      <?= form_open_multipart('belakang/struktur/tbh_struktur/') ?>
      <div class="row">
       <div class="col-lg-6">
        <div class="form-group">
         <label>Judul</label>
         <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
         <?= form_error('judul', '<div class="error"><small style="color:red;">', '</small></div>') ?>
        </div>
        <div class="form-group">
         <label>Gambar</label>
         <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
       </div>
       <!-- /.col-lg-6 (nested) -->
       <div class="col-lg-6">
        <div class="form-group">
         <label>Penulis</label>
         <input type="text" class="form-control" name="penulis" placeholder="Nama Penulis">
         <?= form_error('penulis', '<div class="error"><small style="color:red;">', '</small></div>') ?>
        </div>
       </div>
       <!-- /.col-lg-6 (nested) -->
      </div>
      <!-- /.row (nested) -->
      <?= form_close() ?>
     </div>

     <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
   </div>
   <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
 </div>
 <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->