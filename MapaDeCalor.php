<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';
?>
<?php include BASE_PATH . '/includes/header.php'; ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Mapa De Calor</h1>
        </div>        		
		<div class="col-lg-12">
<div class="page-action-links">

<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjyM0CyjiksJbMk4SVzZTz-Uzn5QusoRE&libraries=visualization">
</script>
	<div id="map" class="page-header"  style="border:0;height: 500px;" ></div>
 <script type="text/javascript">      
 var heatMapData = [
	  {location: new google.maps.LatLng(13.705243, -89.24231), weight: 3}, 
	  {location: new google.maps.LatLng(13.696674, -89.197927), weight: 3},
	  {location: new google.maps.LatLng(14.692511, -87.86136), weight: 3},
	  {location: new google.maps.LatLng(12.022747, -86.252007), weight: 3},
	  {location: new google.maps.LatLng(8.103289, -80.596013), weight: 3}  
  
	];
var xcenter = new google.maps.LatLng(13.705043, -89.2023);
map = new google.maps.Map(document.getElementById('map'), {
  center: xcenter,
  zoom: 5,
  mapTypeId: 'satellite'
});
var heatmap = new google.maps.visualization.HeatmapLayer({
  data: heatMapData
});
heatmap.setMap(map);
    </script>
            </div>
        </div>
    </div>
</div>
<?php include BASE_PATH . '/includes/footer.php'; ?>
