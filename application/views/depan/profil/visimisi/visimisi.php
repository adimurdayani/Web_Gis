<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Visi dan Misi</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?= base_url(); ?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Visi dan Misi</li>
  </ol>

  <!-- Intro Content -->
  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid rounded mb-4" src="<?= base_url('assets/img/lioka.png'); ?>" width="750px" alt="">
    </div>
    <div class="col-lg-6">
      <h2><?= $visimisi['judul']; ?></h2>
      <p><?= $visimisi['isi']; ?></p>

    </div>
  </div>
  <!-- /.row -->

  <hr>
  <!-- Team Members -->
  <h2>Pemetaan</h2>

  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="<?= base_url('assets/img/') . $get_administrasi['gambar']; ?>" width="700px" alt="">
        <div class="card-body">
          <h4 class="card-title"><?= $get_administrasi['judul']; ?></h4>
          <p class="card-text"><?= $get_administrasi['deskripsi']; ?></p>
        </div>
        <div class="card-footer">
          <a href="<?= base_url('peta_administrasi'); ?>">Selengkapnya</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="<?= base_url('assets/img/') . $get_persebaran['gambar']; ?>" width="700px" " alt="">
        <div class=" card-body">
        <h4 class="card-title"><?= $get_persebaran['judul']; ?></h4>
        <p class="card-text"><?= $get_persebaran['deskripsi']; ?></p>
      </div>
      <div class="card-footer">
        <a href="<?= base_url('peta_penyebaran'); ?>">Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <div id="mapid" style="width:350px; height: 240px;"></div>
      <div class=" card-body">
        <h4 class="card-title"><?= $get_persebaran['judul']; ?></h4>
        <p class="card-text"><?= $get_persebaran['deskripsi']; ?></p>
      </div>
      <div class="card-footer">
        <a href="<?= base_url('peta_persebaran'); ?>">Selengkapnya</a>
      </div>
    </div>
  </div>
</div>

</div>
<!-- /.container -->

<script>
  var map = L.map('mapid').setView([-2.6357846, 121.3539943], 13);
  L.tileLayer(
    'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      id: 'mapbox/streets-v11',
    }).addTo(map);

  <?php foreach ($get_maskin as $key => $maskin) { ?>
    L.marker([<?= $maskin['latitude'] ?>, <?= $maskin['longitude'] ?>]).addTo(map).bindPopup("<a href='<?= base_url('assets/img/') . $maskin['gambar'] ?>'><img src='<?= base_url('assets/img/') . $maskin['gambar'] ?>' class='img-thumbnail' width='50px'></a><br><?= $maskin['no_kk']; ?><br><?= $maskin['nama']; ?><br><?= $maskin['jenis_kelamin']; ?><br><?= $maskin['pekerjaan']; ?><br><?= $maskin['tanggungan']; ?><br><?= $maskin['alamat']; ?>").openPopup();
  <?php } ?>
</script>