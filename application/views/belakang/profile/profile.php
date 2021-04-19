            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Profil User</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Data User
                                </div>

                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="hero-widget well well-sm">
                                                <div class="icon">
                                                    <img src="<?= base_url('assets/img/profil/') . $get_user['gambar']; ?>" alt="" style="width: 100px;">
                                                </div>
                                                <div class="text">
                                                    <h3><?= $get_user['nama']; ?></h3>
                                                    <label class="text-muted"><?= $get_user['user_level']; ?></label>
                                                </div>
                                                <div class="options">
                                                    <a href="<?= base_url('belakang/user/') ?>" class="btn btn-primary btn-lg"><i class="fa fa-pencil"></i> Edit</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="well">
                                                <h4>Biodata</h4>
                                                <table>
                                                    <tr>
                                                        <td>Nama Email</td>
                                                        <td> </td>
                                                        <td> : </td>
                                                        <td></td>
                                                        <td><?= $get_user['email']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <td> </td>
                                                        <td> : </td>
                                                        <td></td>
                                                        <td><?= $get_user['jenis_kelamin']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Telp</td>
                                                        <td></td>
                                                        <td> : </td>
                                                        <td></td>
                                                        <td><?= $get_user['no_hp']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pendidikan Terakhir</td>
                                                        <td> </td>
                                                        <td> : </td>
                                                        <td></td>
                                                        <td><?= $get_user['pendidikan']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td> </td>
                                                        <td> : </td>
                                                        <td></td>
                                                        <td><?= $get_user['Alamat']; ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
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