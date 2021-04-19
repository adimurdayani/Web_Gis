<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active">
        <video width="1900px" height="1080px" src="<?= base_url('assets/video/lioka.mp4'); ?>" autoplay></video>
        <div class="carousel-caption d-none d-md-block">
          <h3>Video Dokumentasi Desa Lioka</h3>
          <p>Video ini menunjukan wilayah persebaran penduduk yang ada di desa lioka, luwu timur.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
    <div class="carousel-caption d-none d-md-block">
     <h3>Second Slide</h3>
     <p>This is a description for the second slide.</p>
    </div>
   </div> -->
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
    <div class="carousel-caption d-none d-md-block">
     <h3>Third Slide</h3>
     <p>This is a description for the third slide.</p>
    </div>
   </div> -->
    </div>
    <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div>
</header>

<!-- Page Content -->
<div class="container">

  <h1 class="my-4">Selamat Datang di WebGis Desa Lioka</h1>

  <!-- Features Section -->
  <div class="row">
    <div class="col-lg-6">
      <h2>Selamat Datang di WebGis Desa Lioka Luwu Timur</h2>
      <p style="text-align: justify; ">Website ini kami hadrikan sebagai media informasi Kantor Camat Bajo kepada masyarakat. Dan juga sebagai sarana interaksi, komunikasi dan transparansi publik sesuai undang-undang keterbukaan informasi.</p>
      <p style="text-align: justify; ">Terimakasih kepada semua pihak yang telah banyak memberikan dukungan dan kontribusi, baik berupa tenaga, pemikiran dan semangat, hingga Website ini dapat terealisasi.</p>
      <p style="text-align: justify; ">Semoga dengan adanya Webgis Desa Lioka ini dapat bermanfaat dan menjadi salah satu upaya peningkatan pelayanan Kantor Desa Lioka</p>
      <p style="text-align: justify; ">Untuk itu kritik, saran dan masukan yang konstruktif, kreatif dan inovatif sangat kami nantikan demi terwujudnya program Kantor Desa Lioka yang terarah dan mengedepankan musyawarah dan mufakat.</p>
    </div>
    <div class="col-lg-6">
      <img class="img-fluid rounded" src="<?= base_url('assets/img/lioka.png'); ?>" width="700px" alt="">
    </div>
  </div>
  <hr>
  <div class="col-lg">
    <div id="mapid" style="height: 480px"></div>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<script>
  var map = L.map('mapid').setView([-2.6392103, 121.3577262], 16);

  L.tileLayer(
    'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      id: 'mapbox/streets-v11',
    }).addTo(map);

  <?php foreach ($alamat as $key => $maskin) { ?>
    L.marker([<?= $maskin['latitude'] ?>, <?= $maskin['longitude'] ?>]).addTo(map).bindPopup("<i class='fa fa-phone'> <?= $maskin['kontak']; ?></i><br><i class='fa fa-map'> <?= $maskin['alamat']; ?></i><br><a href='<?= base_url() ?>'><i class='fa fa-facebook'> <?= $maskin['facebook']; ?></i></a><br><a href='<?= base_url() ?>'><i class='fa fa-instagram'> <?= $maskin['instagram']; ?></i></a>").openPopup();
  <?php } ?>
</script>