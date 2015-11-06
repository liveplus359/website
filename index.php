<!DOCTYPE html>
<!-- Created by spont4e on 07/11/2015 -->
<html>
<head>
    <meta charset="UTF-8">
    <title>Life Plus - Your Healthy Zone!</title>
</head>
<body onload="getLocation();">
<p id="location"></p>
<script>
    var x = document.getElementById("location");
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
    }
</script>
</body>
</html>