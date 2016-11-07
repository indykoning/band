<script>
    function showUser(str) {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("results").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","model/search_schema.php?q="+str,true);
            xmlhttp.send();

    }
</script>
<input type="search" onkeyup="showUser(this.value)" placeholder='search...'>
<div id="results">
<table>
    <td><b>Titel</b></td><td><b>Info</b></td><td><b>Prijs</b></td><td><b>Datum</b></td><td><b>Locatie</b></td>
    {foreach from=$result item=oneItem}
        <tr><td>{$oneItem.titel}</td>
        <td>{$oneItem.info}</td>
            <td>&euro;{$oneItem.price},-</td>
            <td>{$oneItem.Date|date_format:"%e, %B, %Y"}</td>
            <td>{$oneItem.location}</td>
        </tr>
    {/foreach}
</table>
</div>
<div style="width: 500px; height: 500px; " id="map" onload="load()"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTvy33r3VqsORjvZlMHdmf7MHeIkUMR7Y" type="text/javascript"></script>
<script type="text/javascript">
    //<![CDATA[
    var markers = {$result|json_encode};
    console.log(markers);
    var customIcons = {
        restaurant: {
            icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
        }
        , bar: {
            icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
        }
    };

    function load() {
        console.log('load');
        var map = new google.maps.Map(document.getElementById("map"), {
            center: new google.maps.LatLng(52.3104, 5.03258)
            , zoom: 8
            , mapTypeId: 'roadmap'
        });
        var infoWindow = new google.maps.InfoWindow;

        // Change this depending on the name of your PHP file
            for (var i = 0; i < markers.length; i++) {
                console.log('ez');
                var Date = markers[i]['Date'];
                var name = markers[i]["titel"];
                var comment = markers[i]["info"];
                var rating = markers[i]["price"];
                var location = markers[i]['location'];
                var point = new google.maps.LatLng(
                        parseFloat(markers[i]["latitude"])
                        , parseFloat(markers[i]["longitude"]));
                var html = "<b>" + name + "</b><br><br>" + comment + "<p>Prijs: &euro;" + rating + ",-</p><p>Op: " + Date +"</p><p>Waar: " + location + "</p>";
                var icon = {};
                var marker = new google.maps.Marker({
                    map: map
                    , position: point
                    , icon: icon.icon
                });
                bindInfoWindow(marker, map, infoWindow, html);
            }
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
        google.maps.event.addListener(marker, 'click', function () {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
        });
    }

    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

        request.onreadystatechange = function () {
            if (request.readyState == 4) {
                request.onreadystatechange = doNothing;
                callback(request, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }

    function doNothing(){};
load();
    //]]>
</script><style>
    #map{
        border-radius: 5px;
    }
    table {
        border-collapse: collapse;
    }

    tr {
        border: 1px groove black;
    }
    td{
        border: 1px groove black;
    }
</style>