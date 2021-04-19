            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Forms Edit Data</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Edit Data User
                                </div>
                                <div class="panel-body">
                                    <?= form_open_multipart() ?>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="hidden" class="form-control" name="id" id="id" value="<?= $get_data['id']; ?>">
                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $get_data['nama']; ?>">
                                                <?= form_error('nama', '<div class="error"><small style="color:red;">', '</small></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email" value="<?= $get_data['email']; ?>">
                                                <?= form_error('email', '<div class="error"><small style="color:red;">', '</small></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" value="<?= $get_data['password']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Password Baru</label>
                                                <input type="password" class="form-control" name="password" placeholder="Password Baru">
                                                <?= form_error('password', '<div class="error"><small style="color:red;">', '</small></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Konfirmasi Password</label>
                                                <input type="password" class="form-control" name="conf_password" placeholder="Konfirmasi Password">
                                                <?= form_error('conf_password', '<div class="error"><small style="color:red;">', '</small></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                                    <option value="<?= $get_data['jenis_kelamin']; ?>" disabled>
                                                        <?= $get_data['jenis_kelamin']; ?></option>
                                                    <option value=" Perempuan">Perempuan</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>NO. Telp</label>
                                                <input class="form-control" name="no_hp" placeholder="No. Telp" value="<?= $get_data['no_hp']; ?>">
                                                <?= form_error('no_hp', '<div class="error"><small style="color:red;">', '</small></div>') ?>
                                            </div>
                                            <button type=" submit" class="btn btn-success">Simpan</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Tipe User</label>
                                                <select name="user_level" class="form-control" id="user_level">
                                                    <option value="<?= $get_data['user_level']; ?>">
                                                        <?= $get_data['user_level']; ?></option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="User">User</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Upload Gambar</label>
                                                <input type="file" name="gambar" value="<?= $get_data['gambar']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Pendidikan</label>
                                                <input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan" value="<?= $get_data['pendidikan']; ?>">
                                                <?= form_error('pendidikan', '<div class="error"><small style="color:red;">', '</small></div>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea name="alamat" class="form-control" id="" cols="30" rows="10"><?= $get_data['Alamat']; ?></textarea>
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