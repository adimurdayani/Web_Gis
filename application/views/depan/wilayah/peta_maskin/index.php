    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Peta Masyarakat Miskin</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url(); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Peta Masyarakat Miskin</li>
        </ol>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-lg">

                <script
                    src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js">
                </script>
                <link rel="stylesheet"
                    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css"
                    type="text/css" />
                <!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
                <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
                <style>
                #menu {
                    position: absolute;
                    background: #fff;
                    padding: 10px;
                    font-family: 'Open Sans', sans-serif;
                }

                .mapboxgl-popup {
                    max-width: 200px;
                    font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
                }

                #marker {
                    background-image: url('<?= base_url('assets/img/marker-editor.svg') ?>');
                    background-size: cover;
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    cursor: pointer;
                }
                </style>
                <div id="map" style="height: 480px">
                </div>

            </div>

        </div>
        <div class="col-lg pt-3">
            <div id="menu">
                <input id="streets-v11" type="radio" name="rtoggle" value="streets" checked="checked" />
                <label for="streets-v11">streets</label>
                <input id="satellite-v9" type="radio" name="rtoggle" value="satellite" />
                <label for="satellite-v9">satellite</label>
            </div>
            <h3 class="my-3">Deskripsi</h3>
            <a href="<?= base_url('peta_maskin/print'); ?>" class="btn btn-primary"><i class="fa fa-print"></i>
                Print</a>
            <a href="<?= base_url('peta_maskin/pdf'); ?>" class="btn btn-success"><i class="fa fa-download"></i>
                Download PDF</a>
            <div class="panel-body">
                <div class="table-responsive pt-2">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th style="font-size: 12px;">NO. KK</th>
                                <th style="font-size: 12px;">Alamat Penduduk</th>
                                <th style="font-size: 12px;">Nama</th>
                                <th style="font-size: 12px;">Jenis Kelamin</th>
                                <th style="font-size: 12px;">Luas Rumah</th>
                                <th style="font-size: 12px;">Pekerjaan</th>
                                <th style="font-size: 12px;">Tanggungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($get_maskin as $maskin) : ?>
                            <tr>
                                <td style="font-size: 12px;"><?= $maskin['no_kk']; ?></td>
                                <td style="font-size: 12px;"><?= $maskin['alamat']; ?></td>
                                <td style="font-size: 12px;"><?= $maskin['nama']; ?></td>
                                <td style="font-size: 12px;"><?= $maskin['jenis_kelamin']; ?></td>
                                <td style="font-size: 12px;"><?= $maskin['luas_rumah']; ?></td>
                                <td style="font-size: 12px;"><?= $maskin['pekerjaan']; ?></td>
                                <td style="font-size: 12px;"><?= $maskin['tanggungan']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
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
mapboxgl.accessToken =
    'pk.eyJ1IjoiYWRpbXVyZGF5YW5pIiwiYSI6ImNraDljcGt2ZTAwZmoydGszeHFzMWswYTEifQ.ETs_AylEri43KD4PX14tuA';
var Coordinates = document.getElementById('coordinates');

var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    zoom: 16,
    center: [121.3580206, -2.6388477]
});

map.addControl(
    new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
    })
);


<?php foreach ($get_maskin as $get_maskin) : ?>

// create the popup
var popup = new mapboxgl.Popup({
    offset: 30
}).setHTML(
    '<center><b>Data Maskin</b></center><hr>Nomor KK: <?= $get_maskin['no_kk'] ?> <br>Nama: <?= $get_data['nama'] ?> <br>Jenis Kelamin: <?= $get_maskin['jenis_kelamin'] ?> <br>Luas Rumah: <?= $get_maskin['luas_rumah'] ?><br>Pekerjaan: <?= $get_maskin['pekerjaan'] ?><br>Tanggungan: <?= $get_maskin['tanggungan'] ?><hr><img class="img-thumbnail" width="40%" src="<?= base_url('assets/img/') . $get_maskin['gambar'] ?>">'
);

// create DOM element for the marker
var el = document.createElement('div');
el.id = 'marker';

// create the marker
new mapboxgl.Marker(el)
    .setLngLat([<?= $get_maskin['longitude'] ?>, <?= $get_maskin['latitude'] ?>])
    .setPopup(popup) // sets a popup on this marker
    .addTo(map);
<?php endforeach; ?>
var layerList = document.getElementById('menu');
var inputs = layerList.getElementsByTagName('input');

function switchLayer(layer) {
    var layerId = layer.target.id;
    map.setStyle('mapbox://styles/mapbox/' + layerId);
}

for (var i = 0; i < inputs.length; i++) {
    inputs[i].onclick = switchLayer;
}

map.addControl(new mapboxgl.FullscreenControl());

// Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl());
    </script>