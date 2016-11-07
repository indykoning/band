<?php /* Smarty version Smarty-3.1.18, created on 2016-11-01 16:45:20
         compiled from "views\schema.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140335800b4d1991453-44266529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b295056efdd3a7f56de855f3a4990e7bb88eb837' => 
    array (
      0 => 'views\\schema.tpl',
      1 => 1478015117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140335800b4d1991453-44266529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5800b4d1a18c21_85562881',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800b4d1a18c21_85562881')) {function content_5800b4d1a18c21_85562881($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp64\\www\\school\\jaar_2\\Projecten\\band\\libs\\plugins\\modifier.date_format.php';
?><script>
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
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['info'];?>
</td>
            <td>&euro;<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['price'];?>
,-</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['Date'],"%e, %B, %Y");?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['location'];?>
</td>
        </tr>
    <?php } ?>
</table>
</div>
<div style="width: 500px; height: 500px; " id="map" onload="load()"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTvy33r3VqsORjvZlMHdmf7MHeIkUMR7Y" type="text/javascript"></script>
<script type="text/javascript">
    //<![CDATA[
    var markers = <?php echo json_encode($_smarty_tpl->tpl_vars['result']->value);?>
;
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
</style><?php }} ?>
