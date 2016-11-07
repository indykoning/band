<?php
require_once ('../includes/config.php');
require_once ('../includes/database.php');
if($q = $_GET['q']){
    $sql = "SELECT * FROM scheme WHERE `titel` LIKE '%". $q . "%' OR `info` LIKE '%". $q . "%' OR `price` LIKE '%". $q . "%' OR `location` LIKE '%". $q . "%' ORDER BY `Date`";
}else{
$sql = "SELECT * FROM scheme ORDER BY `Date`";
}
$result = $mysqli->query($sql);
echo "<table><td><b>Titel</b></td><td><b>Info</b></td><td><b>Prijs</b></td><td><b>Datum</b></td><td><b>Locatie</b></td>
";
while($row = mysqli_fetch_array($result)) {
    $phpdate = strtotime( $row['Date'] );
    $date = date( 'd, F, Y', $phpdate );


echo "<tr><td>". $row['titel'] . "</td><td>" . $row['info'] . "</td><td>&euro;" . $row['price'] . ",-</td><td>" . $date . "</td><td>" . $row['location'] . "</td></tr>
";

}