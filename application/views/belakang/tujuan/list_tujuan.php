            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tabel Tujuan WebGis</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Data Tabel Tujuan WebGis
                                </div>
                                <br>
                                <a href="<?= base_url('belakang/tujuan/tbh_tujuan/') ?>" class="btn btn-primary"><i
                                        class="fa fa-plus-circle"></i>Tambah Data</a>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <?= $this->session->flashdata('msg');
                                    ?>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover"
                                            id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Judul</th>
                                                    <th>Isi</th>
                                                    <th>Penulis</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($list_tujuan as $tujuan) : ?>
                                                <tr class="odd gradeX">
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $tujuan['judul']; ?></td>
                                                    <td><?= $tujuan['isi']; ?></td>
                                                    <td><?= $tujuan['penulis']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('belakang/tujuan/edit_tujuan/') . $tujuan['id']; ?>"
                                                            class="btn btn-success"><i class="fa fa-pencil"
                                                                title="Edit Data"></i></a>
                                                        <a href="<?= base_url('belakang/tujuan/hapus_tujuan/') . $tujuan['id']; ?>"
                                                            class="btn btn-danger"><i class="fa fa-trash"
                                                                title="Hapus Data"></i></a>
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