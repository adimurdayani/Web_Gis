<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Forms Edit Data</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="col-sm-8">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <i class="fa fa-globe"></i> Peta
        </div>
        <div class="panel-body">
          <div id="menu">
            <input id="streets-v11" type="radio" name="rtoggle" value="streets" checked="checked" />
            <label for="streets-v11">streets</label>
            <input id="satellite-v9" type="radio" name="rtoggle" value="satellite" />
            <label for="satellite-v9">satellite</label>
          </div>
          <div id="map" style="height: 480px"></div>
          <pre id="coordinates" class="coordinates"></pre>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <i class="fa fa-pencil"></i> Edit Data Masyarakat
        </div>
        <div class="panel-body">
          <?= $this->session->flashdata('msg');
          ?>
          <?= form_open_multipart(); ?>
          <div class="form-group">
            <input type="hidden" class="form-control" name="id" id="id" value="<?= $get_maskin['id']; ?>">
            <label>No. KK</label>
            <input type="text" class="form-control" name="no_kk" id="no_kk" value="<?= $get_maskin['no_kk']; ?>" autofocus>
            <?= form_error('no_kk', '<div class="error"><small style="color:red;">', '</small></div>') ?>
          </div>
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?= $get_maskin['nama']; ?>">
            <?= form_error('nama', '<div class="error"><small style="color:red;">', '</small></div>') ?>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
              <option value="<?= $get_maskin['jenis_kelamin']; ?>">
                <?= $get_maskin['jenis_kelamin']; ?></option>
              <option value="Perempuan">Perempuan</option>
              <option value="Laki-Laki">Laki-Laki</option>
            </select>
          </div>
          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?= $get_maskin['pekerjaan']; ?>">
            <?= form_error('pekerjaan', '<div class="error"><small style="color:red;">', '</small></div>') ?>
          </div>

          <div class="form-group">
            <label>Luas Rumah</label>
            <input type="text" class="form-control" name="luas_rumah" id="luas_rumah" value="<?= $get_maskin['luas_rumah']; ?>">
            <?= form_error('luas_rumah', '<div class="error"><small style="color:red;">', '</small></div>') ?>
          </div>

          <div class="form-group">
            <label>Tanggungan</label>
            <input type="text" class="form-control" name="tanggungan" id="tanggungan" value="<?= $get_maskin['tanggungan']; ?>">
            <?= form_error('tanggungan', '<div class="error"><small style="color:red;">', '</small></div>') ?>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" id="isi" cols="30" rows="10" class="form-control"><?= $get_maskin['alamat']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="gambar">Upload Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar" value="<?= $get_maskin['gambar']; ?>">
            <img src="<?= base_url('assets/img/') . $get_maskin['gambar']; ?>" class="img-thumbnail" width="200px" alt="">
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Latitude</label>
              <input type="text" class="form-control " name="latitude" id="Latitude" value="<?= $get_maskin['latitude']; ?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Longitude</label>
              <input type="text" class="form-control" name="longitude" id="Longitude" value="<?= $get_maskin['longitude']; ?>">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
          <?=
            form_close();
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoiYWRpbXVyZGF5YW5pIiwiYSI6ImNraDljcGt2ZTAwZmoydGszeHFzMWswYTEifQ.ETs_AylEri43KD4PX14tuA';
  var Coordinates = document.getElementById('coordinates');
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    zoom: 14,
    center: [<?= $get_maskin['longitude']; ?>, <?= $get_maskin['latitude']; ?>]
  });

  var marker = new mapboxgl.Marker({
      draggable: true
    })
    .setLngLat([<?= $get_maskin['longitude']; ?>, <?= $get_maskin['latitude']; ?>])
    .addTo(map);

  function onDragEnd() {
    var lngLat = marker.getLngLat();
    Coordinates.style.display = 'block';
    Coordinates.innerHTML =
      'Longitude: ' + lngLat.lng + '<br />Latitude: ' + lngLat.lat;
  }
  marker.on('dragend', onDragEnd);

  // Add zoom and rotation controls to the map.
  map.addControl(new mapboxgl.NavigationControl());

  var layerList = document.getElementById('menu');
  var inputs = layerList.getElementsByTagName('input');

  function switchLayer(layer) {
    var layerId = layer.target.id;
    map.setStyle('mapbox://styles/mapbox/' + layerId);
  }

  for (var i = 0; i < inputs.length; i++) {
    inputs[i].onclick = switchLayer;
  }
</script>