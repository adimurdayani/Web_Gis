            <div id="page-wrapper">
             <div class="container-fluid">
              <div class="row">
               <div class="col-lg-12">
                <h1 class="page-header">Tabel Pesan</h1>
               </div>
               <!-- /.col-lg-12 -->
              </div>
              <!-- /.row -->
              <div class="row">
               <div class="col-lg-12">
                <div class="panel panel-primary">
                 <div class="panel-heading">
                  Data Tabel Pesan
                 </div>
                 <!-- /.panel-heading -->
                 <div class="panel-body">
                  <?= $this->session->flashdata('msg');
                                    ?>
                  <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                     <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>NO. Telp</th>
                      <th>Alamat</th>
                      <th>Pesan</th>
                      <th>Aksi</th>
                     </tr>
                    </thead>
                    <tbody>
                     <?php $no = 1;
                                                foreach ($list_pesan as $pesan) : ?>
                     <tr class="odd gradeX">
                      <td><?= $no++; ?></td>
                      <td><?= $pesan['nama']; ?></td>
                      <td><?= $pesan['no_hp']; ?></td>
                      <td><?= $pesan['alamat']; ?></td>
                      <td><?= $pesan['isi']; ?></td>
                      <td>
                       <a href="<?= base_url('belakang/pesan/hapus_data/') . $pesan['id']; ?>" class="btn btn-danger"><i
                         class="fa fa-trash" title="Hapus Data"></i></a>
                      </td>
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