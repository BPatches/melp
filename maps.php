<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1gHfN9FtCpJP_f9oaBpv1xdCuu7YPmug&sensor=false">
    </script>
	 <script type="text/javascript">
      var map;
      function initialize() {
        geocoder = new google.maps.Geocoder();
        // console.log("initialize called");
        var mapOptions = {
          center: new google.maps.LatLng(39.750287, -105.221344),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      var geocoder;
      function codeAddress() {
      var address = document.getElementById('address').value;
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          map.setCenter(results[0].geometry.location);
          var marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location
          });
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
      });
    }
      function setLocation(form){

          var myLatlng = new google.maps.LatLng(parseInt(form.latitude.value), parseInt(form.longitude.value));
          // console.log("setLocation Called: " + parseInt(form.longitude.value));
          var mapOptions = {
            
            zoom: 4,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          }
          map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
          google.maps.event.addDomListener(window, 'load', initialize);
        };
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	
	<style>
	#map-canvas {
		width: 800px;
		height: 600px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="default.css" />
  <title>Melp! Maps</title>
  </head>
  <body onload="initialize()">
  <div id="wrapper">
  <div id="header-wrapper">
  <div id="header" class="container">
  <div id="logo">
	<h1>
		<a href="index.php">Melp!</a>
	</h1>
	<p>A Yelp! Clone</p>
	</div>
	</div>
	<div id="menu" class="container">
	<ul>
	<li>
		<a title="" accesskey="1" href="index.php">Home Page</a>
	</li>
	<li>
		<a title="" accesskey="1" href="login.php">Login</a>
	</li>
	<li class="current_page_item">
		<a title="" accesskey="1" href="#">Map</a>
	</li>
	<li>
		<a title="" accesskey="1" href="search.php">Search</a>
	</li>
	<li>
	<?php
	   if (isset($_SESSION['uname'])){
              echo "<a href=\"logout.php\">logout ".$_SESSION['uname']."</a>";
	   }
        ?>
	</li>
	</div>
	<div id="page" class="container">
	<h2>Interactive Map</h2>   
    <div>
      <FORM NAME="myform" ACTION="" METHOD="GET">Enter an address<BR>
    <!-- <input TYPE="text" id="latitude">
    <input TYPE="text" id="longitude">
    <input TYPE="button" id="setLocationButton" Value="Find" onClick="setLocation(this.form)"> -->
    <input TYPE="text" id="address">
    <input type="button" value="Find" onclick="codeAddress()">
    </div>

	<br/>
    <div id="map-canvas"/>
	</div>
  </body>
</html>