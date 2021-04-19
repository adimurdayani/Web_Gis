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
                                    Edit Data Visi dan Misi
                                </div>
                                <div class="panel-body">
                                    <?= $this->session->flashdata('msg');
                                    ?>
                                    <form action="" method="POST">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Judul</label>
                                                    <input type="hidden" class="form-control" name="id" id="id"
                                                        value="<?= $get_visimisi['id']; ?>">
                                                    <input type="text" class="form-control" name="judul" id="judul"
                                                        value="<?= $get_visimisi['judul']; ?>">
                                                    <?= form_error('judul', '<div class="error"><small style="color:red;">', '</small></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Isi</label>
                                                    <textarea name="isi" class="form-control" id="isi" cols="30"
                                                        rows="10"><?= $get_visimisi['isi']; ?></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                            </div>
                                            <!-- /.col-lg-6 (nested) -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Penulis</label>
                                                    <input type="text" class="form-control" name="penulis"
                                                        value="<?= $get_visimisi['penulis']; ?>">
                                                    <?= form_error('penulis', '<div class="error"><small style="color:red;">', '</small></div>') ?>
                                                </div>
                                            </div>
                                            <!-- /.col-lg-6 (nested) -->
                                        </div>
                                        <!-- /.row (nested) -->
                                    </form>
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