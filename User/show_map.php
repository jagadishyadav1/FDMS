<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Map with Circle</title>

    <!-- Google Maps JavaScript API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0oSUWS2naPylUXIrMa6QeeAbpcwMU9EQ"></script>

    <style>
        /* Set the size of the map container */
        #map {
            height: 100vh; /* Full height */
            width: 100%; /* Full width */
        }
    </style>
</head>
<body>
    <h3>Google Map with Circle</h3>

    <!-- Map container -->
    <div id="map"></div>

    <script>
        function initMap() {
            // Specify the coordinates for the map center
            var location = { lat: 15.4418684, lng: 75.0147919 };

            // Create a map centered at the specified location
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10, // Zoom level
                center: location
            });

            // Add a marker at the center
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Location'
            });

            // Add a circle around the center
            var circle = new google.maps.Circle({
                map: map,
                center: location,
                radius: 2000, // Radius in meters (e.g., 5000 meters = 5 kilometers)
                fillColor: '#FF0000', // Fill color
                fillOpacity: 0.35, // Fill opacity
                strokeColor: '#FF0000', // Stroke color
                strokeOpacity: 0.8, // Stroke opacity
                strokeWeight: 2 // Stroke weight
            });
        }

        // Initialize the map
        initMap();
    </script>
</body>
</html>
