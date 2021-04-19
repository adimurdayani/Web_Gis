    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Peta Administrasi</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url(); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Peta Administrasi</li>
        </ol>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-fluid" src="<?= base_url('assets/img/') . $get_petaadministrasi['gambar']; ?>" width="750px" alt="">
            </div>

            <div class="col-md-4">
                <h3 class="my-3">Deskripsi</h3>
                <p><?= $get_petaadministrasi['deskripsi']; ?></p>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <!-- <h3 class="my-4">Related Projects</h3>

     <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
       <a href="#">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
       </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
       <a href="#">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
       </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
       <a href="#">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
       </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
       <a href="#">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
       </a>
      </div>

     </div> -->
        <!-- /.row -->

    </div>
    <!-- /.container -->