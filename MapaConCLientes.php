<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';
?>
<?php include BASE_PATH . '/includes/header.php'; ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">Mapa Con Clientes</h1>
        </div>
		<div class="col-lg-12">
        <div class="page-action-links">
<!---map-->
	<div id="map" class="page-header"  style="border:0;height: 500px;" ></div>
    <script type="text/javascript">
      function initMap() {//
        var myLatLng = {lat: 13.7, lng: -89.2};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: myLatLng
        });
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
		setMarkers(map);
      }  
	  
var beaches = [
  ['Punto 1', 13.705243, -89.24231, 0],
  ['Punto 2', 13.696674, -89.197927, 1],
  ['Punto 3', 14.692511, -87.86136, 2],
  ['Punto 4', 12.022747, -86.252007,3],
  ['Punto 5', 8.103289, -80.596013, 4]
];

function setMarkers(map) {
  var image = {
    url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',    
    size: new google.maps.Size(20, 32),    
    origin: new google.maps.Point(0, 0),    
    anchor: new google.maps.Point(0, 32)
  };
  var shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: 'poly'
  };
  for (var i = 0; i < beaches.length; i++) {
    var beach = beaches[i];
    var marker = new google.maps.Marker({
      position: {lat: beach[1], lng: beach[2]},
      map: map,
      icon: image,
      shape: shape,
      title: beach[0],
      zIndex: beach[3]
    });
  }
}
    </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjyM0CyjiksJbMk4SVzZTz-Uzn5QusoRE&callback=initMap"></script>
<!---fin map-->
            </div>
        </div>
    </div>
</div>
<?php include BASE_PATH . '/includes/footer.php'; ?>
