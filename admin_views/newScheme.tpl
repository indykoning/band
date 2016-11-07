<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTvy33r3VqsORjvZlMHdmf7MHeIkUMR7Y" type="text/javascript"></script>



<form action="admin_model/newScheme.php" method="post">
    <table>
        <tr><td><label>Titel</label></td><td><input type="text" name="titel"></td></tr>
        <tr><td><label>info</label></td><td><textarea name="info" rows="10" cols="50"></textarea></td></tr>
        <tr><td><label>price</label></td><td>&euro;<input type="number" name="price">,-</td></tr>
        <tr><td><label>date</label></td><td><input type="date" name="date"></td></tr>
        <tr><td><label>location</label></td><td><input type="text" name="location"></td></tr>
        <tr><td></td><td><div style="display: none"><input name="lat" type="text" id="lat"><input name="lng" type="text" id="lng"></div><div onload="load()" id="map" style="width: 800px; height: 500px"></div>
            </td></tr>
        <tr><td><label></label></td><td><input type="submit"></td></tr>

    </table>
</form>


<script type="text/javascript">
    //<![CDATA[
    var markers = [];
    var customIcons = {
        restaurant: {
            icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
        }
        , bar: {
            icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
        }
    };

        console.log('load');
        var map = new google.maps.Map(document.getElementById("map"), {
            center: new google.maps.LatLng(52.3104, 5.03258)
            , zoom: 13
            , mapTypeId: 'roadmap'
        });
        var infoWindow = new google.maps.InfoWindow;

    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }
    function clearMarkers() {
        setMapOnAll(null);
    }

    function deleteMarkers() {
        clearMarkers();
        markers = [];
    }

    google.maps.event.addListener(map, "click", function (e) {
        deleteMarkers();
        //lat and lng is available in e object
        var latLng = e.latLng;
        document.getElementById('lat').value = latLng.lat();
        document.getElementById('lng').value = latLng.lng();

        var point = new google.maps.LatLng(
                parseFloat(latLng.lat())
                , parseFloat(latLng.lng()));
        var marker = new google.maps.Marker({
            map: map
            , position: point
            , title: "uw geselecteerde locatie"
        });
        markers.push(marker);
    });

    //]]>
</script>

