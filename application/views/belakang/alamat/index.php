<div id="page-wrapper">
 <div class="container-fluid">
  <div class="row">
   <div class="col-lg-12">
    <h1 class="page-header">Tabel Alamat</h1>
   </div>
   <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
   <div class="col-lg-12">
    <div class="panel panel-primary">
     <div class="panel-heading">
      Data Tabel Alamat
     </div>
     <br>
     <a href="<?= base_url('belakang/alamat/tbh_data/') ?>" class="btn btn-primary"><i
       class="fa fa-plus-circle"></i>Tambah Data</a>
     <!-- /.panel-heading -->
     <div class="panel-body">
      <?= $this->session->flashdata('msg');
            ?>
      <div class="table-responsive">
       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
         <tr>
          <th>NO</th>
          <th>Kontak</th>
          <th>Alamat</th>
          <th>Email</th>
          <th>Facebook</th>
          <th>Instagram</th>
          <th>Aksi</th>
         </tr>
        </thead>
        <tbody>
         <?php $no = 1;
                  foreach ($list_alamat as $alamat) : ?>
         <tr class="odd gradeX">
          <td><?= $no++; ?></td>
          <td><?= $alamat['kontak']; ?></td>
          <td><?= $alamat['alamat']; ?></td>
          <td><?= $alamat['email']; ?></td>
          <td><?= $alamat['facebook']; ?></td>
          <td><?= $alamat['instagram']; ?></td>
          <td>
           <a href="<?= base_url('belakang/alamat/edit_data/') . $alamat['id']; ?>" class="btn btn-success"><i
             class="fa fa-pencil" title="Edit Data"></i></a>
           <a href="<?= base_url('belakang/alamat/hapus_data/') . $alamat['id']; ?>" class="btn btn-danger"><i
             class="fa fa-trash" title="Hapus Data"></i></a>
           </>
         </tr>
         <?php endforeach; ?>
        </tbody>
       </table>
      </div>
      <!-- /.table-responsive -->
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