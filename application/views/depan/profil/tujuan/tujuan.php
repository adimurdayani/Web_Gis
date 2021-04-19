<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Tujuan WebGis</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?= base_url(); ?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Tujuan WebGis</li>
  </ol>

  <!-- Intro Content -->
  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid rounded mb-4" src="<?= base_url('assets/img/lioka.png'); ?>" width="750px" alt="">
    </div>
    <div class="col-lg-6">
      <?php foreach ($get_tujuan as $get_tujuan) : ?>
        <h2><?= $get_tujuan['judul']; ?></h2>
        <p><?= $get_tujuan['isi']; ?></p>
      <?php endforeach; ?>
    </div>
  </div>
  <!-- /.row -->
  <hr>
</div>
</div>
<!-- /.row -->

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