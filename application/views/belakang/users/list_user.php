            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tabel User</h1>
                        </div>
                        <?= $this->session->flashdata('msg');
                        ?>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Data Tabel User
                                </div>
                                <br>
                                <a href="<?= base_url('belakang/user/tbh_user/') ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah Data</a>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <?= $this->session->flashdata('msg');
                                    ?>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Foto</th>
                                                    <th>NO. Telp</th>
                                                    <th>Tipe User</th>
                                                    <th>User Aktif</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Pendidkan</th>
                                                    <th>Alamat</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($list_user as $user) : ?>
                                                    <tr class="odd gradeX">
                                                        <td><?= $no++; ?></td>
                                                        <td class="center"><img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" alt="" class="img-thumbnail"></td>
                                                        <td class="center"><?= $user['no_hp']; ?></td>
                                                        <td class="center"><?= $user['user_level']; ?></td>
                                                        <td class="center"><?= $user['user_aktif']; ?></td>
                                                        <td><?= $user['nama']; ?></td>
                                                        <td><?= $user['email']; ?></td>
                                                        <td><?= $user['jenis_kelamin']; ?></td>
                                                        <td><?= $user['pendidikan']; ?></td>
                                                        <td><?= $user['Alamat']; ?></td>
                                                        <td>
                                                            <a href="<?= base_url('belakang/user/edit_user/') . $user['id']; ?>" class="btn btn-success"><i class="fa fa-pencil" title="Edit Data"></i></a>
                                                            <a href="<?= base_url('belakang/user/hapus_user/') . $user['id']; ?>" class="btn btn-danger"><i class="fa fa-trash" title="Hapus Data"></i></a>
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