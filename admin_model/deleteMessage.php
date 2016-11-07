<?php


if(!empty($_POST['delete'])){
require_once ('../includes/config.php');
require_once ('../includes/database.php');


$delete = $_POST['delete'];

$deletestring = implode(",",$delete);
$sql = "SELECT * FROM newsarticles WHERE id in ($deletestring)";
    $result = $mysqli->query($sql);
    while($row = $result->fetch_assoc()){
        unlink("../images/" . $row['image']);
    }
    
$sql = "DELETE FROM newsarticles WHERE id in ($deletestring)";
$result = $mysqli->query($sql);


var_dump($delete);
var_dump($result);
    header("location:../admin?subpage=deleteMessage");
    ?>
    <script>
        window.location = '../admin?subpage=deleteMessage';
    </script>
    <?php
}else{

    $sql = "SELECT * FROM newsarticles";
    $result = $mysqli->query($sql);
    $result = convertResultToArray($result);


}