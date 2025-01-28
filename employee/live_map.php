<?php
$id=$_REQUEST['id'];
$ulat=$_REQUEST['lat'];
$ulang=$_REQUEST['lang'];

include('../dbconnect/dbconnect.php');
 
 
  $sql="select * from emp_location where User_request_id='$id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  
  $emp_lat=$row['emp_lat'];
  $emp_lang=$row['emp_lang'];
  
  

?>
<!DOCTYPE html>
<html>
<head>
    <title>Live Location Tracking with Google Maps</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0oSUWS2naPylUXIrMa6QeeAbpcwMU9EQ&callback=initMap" async defer></script>
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Live Location Tracking</h1>
    <div id="map"></div>
    <p id="status"></p>

    <script>
        var map;
        var directionsService;
        var directionsRenderer;
        var userMarker;
        var liveLocation = { lat: 0, lng: 0 };

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: { lat: <?php echo $emp_lat; ?>, lng: <?php echo $emp_lang; ?> } // Default center
            });

            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);

            userMarker = new google.maps.Marker({
                map: map,
                title: "You are here"
            });

            startTracking();
        }

        function startTracking() {
            if (navigator.geolocation) {
                navigator.geolocation.watchPosition(function(position) {
                    liveLocation.lat = position.coords.latitude;
                    liveLocation.lng = position.coords.longitude;

                    updateMap();
                }, function(error) {
                    document.getElementById('status').innerText = 'Error: ' + error.message;
                }, {
                    enableHighAccuracy: true,
                    timeout: 5000,  // Timeout after 5 seconds
                    maximumAge: 0  // Do not use cached data
                });
            } else {
                document.getElementById('status').innerText = "Geolocation is not supported by this browser.";
            }
        }

        function updateMap() {
            // Update user marker
            userMarker.setPosition(liveLocation);
            map.setCenter(liveLocation);

            // Example destination
            var destination = { lat: <?php echo $ulat; ?>, lng: <?php echo $ulang; ?> }; // Replace with dynamic destination

            var request = {
                origin: liveLocation,
                destination: destination,
                travelMode: 'DRIVING'
            };

            directionsService.route(request, function(response, status) {
                if (status === 'OK') {
                    directionsRenderer.setDirections(response);
                } else {
                    document.getElementById('status').innerText = 'Directions request failed due to ' + status;
                }
            });
        }
    </script>
</body>
</html>
