            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tabel Masyarakat Miskin</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Data Tabel Masyarakat Miskin
                                </div>
                                <br>
                                <a href="<?= base_url('belakang/maskin/tbh_maskin/') ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah Data</a>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <?= $this->session->flashdata('msg');
                                    ?>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>No. KK</th>
                                                    <th>Nama</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Luas Rumah</th>
                                                    <th>Tanggungan</th>
                                                    <th>Latitude</th>
                                                    <th>Longitude</th>
                                                    <th>Alamat</th>
                                                    <th>Gambar</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($list_maskin as $maskin) : ?>
                                                    <tr class="odd gradeX">
                                                        <td><?= $no++; ?></td>
                                                        <td><?= $maskin['no_kk']; ?></td>
                                                        <td><?= $maskin['nama']; ?></td>
                                                        <td><?= $maskin['jenis_kelamin']; ?></td>
                                                        <td><?= $maskin['pekerjaan']; ?></td>
                                                        <td><?= $maskin['luas_rumah']; ?></td>
                                                        <td><?= $maskin['tanggungan']; ?></td>
                                                        <td><?= $maskin['latitude']; ?></td>
                                                        <td><?= $maskin['longitude']; ?></td>
                                                        <td><?= $maskin['alamat']; ?></td>
                                                        <td><img src="<?= base_url('assets/img/') . $maskin['gambar']; ?>" class="img-thumbnail" width="200px" alt=""></td>
                                                        <td>
                                                            <a href="<?= base_url('belakang/maskin/edit_maskin/') . $maskin['id']; ?>" class="btn btn-success"><i class="fa fa-pencil" title="Edit Data"></i></a>
                                                            <a href="<?= base_url('belakang/maskin/hapus_maskin/') . $maskin['id']; ?>" class="btn btn-danger"><i class="fa fa-trash" title="Hapus Data"></i></a>
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