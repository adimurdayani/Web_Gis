  <!-- ======== @Region: #content ======== -->
  <div id="content">
    <div class="container">
      <h2>
        Peta Wilayah Masyakarat Miskin
      </h2>
      <!--Intro-->

      <div class="block block-border-bottom">
        <!--Alerts-->
        <h3 class="block-title text-weight-strong text-uppercase">
          Peta Lokasi
        </h3>
        <div id="mapid" style="height: 480px"></div>

      </div>

      <div class="jumbotron">

        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>NO</th>
                <th>No. KK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Pekerjaan</th>
                <th>Tanggungan</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($get_wilayah as $maskin) : ?>
                <tr class="odd gradeX">
                  <td><?= $no++; ?></td>
                  <td><?= $maskin['no_kk']; ?></td>
                  <td><?= $maskin['nama']; ?></td>
                  <td><?= $maskin['jenis_kelamin']; ?></td>
                  <td><?= $maskin['pekerjaan']; ?></td>
                  <td><?= $maskin['tanggungan']; ?></td>
                  <td><?= $maskin['latitude']; ?></td>
                  <td><?= $maskin['longitude']; ?></td>
                  <td><?= $maskin['alamat']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
    </div>
  </div>

  <script>
    var map = L.map('mapid').setView([-3.001952, 120.1969363], 15);

    L.tileLayer(
      'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        id: 'mapbox/streets-v11',
      }).addTo(map);

    <?php foreach ($list_maskin as $key => $maskin) { ?>
      L.marker([<?= $maskin['latitude'] ?>, <?= $maskin['longitude'] ?>]).addTo(map).bindPopup("<?= $maskin['alamat'] ?>").openPopup();
    <?php } ?>
  </script>