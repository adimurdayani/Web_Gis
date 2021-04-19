<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-map fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?= $get_jumlah_administrasi; ?></div>
                                <div>Peta Administrasi!</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('belakang/peta_administrasi/') ?>">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?= $get_maskin; ?></div>
                                <div>Data Masyarakat!</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('belakang/maskin/') ?>">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?= $get_jumlah_user; ?></div>
                                <div>Data User!</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('belakang/user/') ?>">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-map fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?= $get_persebaran; ?></div>
                                <div>Persebaran Penduduk!</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('belakang/peta_persebaran/') ?>">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-globe"></i> Peta
            </div>
            <div class="panel-body">

                <style>
                .mapboxgl-popup {
                    max-width: 400px;
                    font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
                }
                </style>

                <div id="menu">
                    <input id="streets-v11" type="radio" name="rtoggle" value="streets" checked="checked" />
                    <label for="streets-v11">streets</label>
                    <input id="satellite-v9" type="radio" name="rtoggle" value="satellite" />
                    <label for="satellite-v9">satellite</label>
                </div>
                <div id="map" style="height: 480px"></div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<script>
mapboxgl.accessToken =
    'pk.eyJ1IjoiYWRpbXVyZGF5YW5pIiwiYSI6ImNraDljcGt2ZTAwZmoydGszeHFzMWswYTEifQ.ETs_AylEri43KD4PX14tuA';
var Coordinates = document.getElementById('coordinates');
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    zoom: 14,
    center: [121.3580206, -2.6388477]
});

var layerList = document.getElementById('menu');
var inputs = layerList.getElementsByTagName('input');

function switchLayer(layer) {
    var layerId = layer.target.id;
    map.setStyle('mapbox://styles/mapbox/' + layerId);
}

for (var i = 0; i < inputs.length; i++) {
    inputs[i].onclick = switchLayer;
}

map.on('load', function() {
    map.loadImage(
        'https://docs.mapbox.com/mapbox-gl-js/assets/custom_marker.png',
        // Add an image to use as a custom marker
        function(error, image) {
            if (error) throw error;
            map.addImage('custom-marker', image);

            map.addSource('places', {
                'type': 'geojson',
                'data': {
                    'type': 'FeatureCollection',
                    'features': [{
                        'type': 'Feature',
                        'properties': {
                            'description': '<center><b>Alamat Desa Lioka</b></center><br><?= $alamat['alamat']; ?> <?= $alamat['kontak']; ?> <br> <hr> <?= $alamat['facebook']; ?> <br><?= $alamat['instagram']; ?> <br> <?= $alamat['email']; ?>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [<?= $alamat['longitude']; ?>,
                                <?= $alamat['latitude']; ?>
                            ]
                        }
                    }]
                }
            });

            // Add a layer showing the places.
            map.addLayer({
                'id': 'places',
                'type': 'symbol',
                'source': 'places',
                'layout': {
                    'icon-image': 'custom-marker',
                    'icon-allow-overlap': true
                }
            });
        }
    );

    // Create a popup, but don't add it to the map yet.
    var popup = new mapboxgl.Popup({
        closeButton: false,
        closeOnClick: false
    });

    map.on('mouseenter', 'places', function(e) {
        // Change the cursor style as a UI indicator.
        map.getCanvas().style.cursor = 'pointer';

        var coordinates = e.features[0].geometry.coordinates.slice();
        var description = e.features[0].properties.description;

        // Ensure that if the map is zoomed out such that multiple
        // copies of the feature are visible, the popup appears
        // over the copy being pointed to.
        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
        }

        // Populate the popup and set its coordinates
        // based on the feature found.
        popup.setLngLat(coordinates).setHTML(description).addTo(map);
    });

    map.on('mouseleave', 'places', function() {
        map.getCanvas().style.cursor = '';
        popup.remove();
    });
});
// Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl());
</script>