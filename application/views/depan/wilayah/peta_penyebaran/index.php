    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Peta Persebaran Penduduk</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url(); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Peta Persebaran Penduduk</li>
        </ol>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <style>
                .mySlides {
                    display: none;
                }
                </style>
                <div class="w3-content w3-display-container">

                    <?php foreach($get_petapenyebaran as $penyebaran):?>

                    <div class="w3-display-container mySlides">
                        <img src="<?= base_url('assets/img/') . $penyebaran['gambar'] ; ?>" style="width:100%">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                            <?= $penyebaran['deskripsi'] ; ?>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

                </div>

            </div>

            <div class="col-md-4">
                <h3 class="my-3">Deskripsi</h3>
                <p><?= $getpetapenyebaran['deskripsi'] ; ?></p>
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

    <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
}
    </script>