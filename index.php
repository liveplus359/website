<!DOCTYPE html>
<!-- Created by spont4e on 07/11/2015 -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Life Plus - Your Healthy Zone!</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/custom.css">
        <script src="js/jquery-1.11.3.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/custom.js"></script>
    </head>
    <body onload="getLocation();">

        <p id="location"></p>

        <script>
            var x = document.getElementById("location");

            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition, showError);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            function showPosition(position) {
                x.innerHTML = "Latitude: " + position.coords.latitude +
                        "<br>Longitude: " + position.coords.longitude;
            }

            function showError(error) {
                switch (error.code) {
                    case error.PERMISSION_DENIED:
                        x.innerHTML = "User denied the request for Geolocation."
                        break;
                    case error.POSITION_UNAVAILABLE:
                        x.innerHTML = "Location information is unavailable."
                        break;
                    case error.TIMEOUT:
                        x.innerHTML = "The request to get user location timed out."
                        break;
                    case error.UNKNOWN_ERROR:
                        x.innerHTML = "An unknown error occurred."
                        break;
                }
            }
        </script>
        <?php
        ?>
    </body>
</html>