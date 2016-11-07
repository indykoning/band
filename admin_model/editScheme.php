<?php
if(!empty($_POST['id'])){
    require_once ('../includes/config.php');
    require_once ('../includes/database.php');
$id = $_POST['id'];
$titel = str_replace("'", "''", $_POST['titel']);
$info = str_replace("'", "''", $_POST['info']);
$price = str_replace("'", "''", $_POST['price']);
$Date = str_replace("'", "''", $_POST['date']);
$location = str_replace("'", "''", $_POST['location']);

$sql = "UPDATE `scheme` SET titel='" . $titel . "', info='" . $info ."', price='" . $price ."', Date='" . $Date ."', location='" . $location ."' WHERE id=" . $id;

$result = $mysqli->query($sql);
    var_dump(mysqli_error($mysqli));
    if($result){
        header("location:../admin?subpage=editScheme");
    ?>
    <script>
        window.location = '../admin?subpage=editScheme';
    </script>
    <?php
    }
}