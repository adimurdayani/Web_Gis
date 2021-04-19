<div id="page-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Forms Input Data</h1>
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
               <i class="fa fa-pencil"></i> Edit Data Alamat
            </div>
            <div class="panel-body">
               <?= $this->session->flashdata('msg');
               ?>
               <?= form_open() ?>
               <div class="form-group">
                  <label>No. Kontak</label>
                  <input type="hidden" name="id" id="id" value="<?= $get_alamat['id']; ?>">
                  <input type="text" class="form-control" name="kontak" id="kontak" value="<?= $get_alamat['kontak']; ?>">
                  <?= form_error('kontak', '<div class="error"><small style="color:red;">', '</small></div>') ?>
               </div>
               <div class="form-group">
                  <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"> <?= $get_alamat['alamat']; ?></textarea>
                  <?= form_error('alamat', '<div class="error"><small style="color:red;">', '</small></div>') ?>
               </div>
               <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" id="email" value="<?= $get_alamat['email']; ?>">
                  <?= form_error('email', '<div class="error"><small style="color:red;">', '</small></div>') ?>
               </div>
               <div class="form-group">
                  <label>Facebook</label>
                  <input type="text" class="form-control" name="facebook" id="facebook" value="<?= $get_alamat['facebook']; ?>">
                  <?= form_error('facebook', '<div class="error"><small style="color:red;">', '</small></div>') ?>
               </div>
               <div class="form-group">
                  <label>Instagram</label>
                  <input type="text" class="form-control" name="instagram" id="instagram" value="<?= $get_alamat['instagram']; ?>">
                  <?= form_error('instagram', '<div class="error"><small style="color:red;">', '</small></div>') ?>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <label>Latitude</label>
                     <input type="text" class="form-control " name="latitude" id="Latitude" value="<?= $get_alamat['latitude']; ?>">
                     <?= form_error('latitude', '<div class="error"><small style="color:red;">', '</small></div>') ?>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <label>Longitude</label>
                     <input type="text" class="form-control" name="longitude" id="Longitude" value="<?= $get_alamat['longitude']; ?>">
                     <?= form_error('longitude', '<div class="error"><small style="color:red;">', '</small></div>') ?>
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
      center: [<?= $get_alamat['longitude']; ?>, <?= $get_alamat['latitude']; ?>]
   });

   var marker = new mapboxgl.Marker({
         draggable: true
      })
      .setLngLat([<?= $get_alamat['longitude']; ?>, <?= $get_alamat['latitude']; ?>])
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