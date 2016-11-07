<?php
require_once ('../includes/config.php');
require_once ('../includes/database.php');
$titel = str_replace("'", "''", $_POST['titel']);
$info = str_replace("'", "''", $_POST['info']);
$price = str_replace("'", "''", $_POST['price']);
$date = $_POST['date'];
$location = str_replace("'", "''", $_POST['location']);
$lat = $_POST['lat'];
$lng = $_POST['lng'];

if(!empty($titel) && !empty($info) && !empty($date) && !empty($location)){

        $sql = "INSERT INTO `scheme`(`titel`, `info`, `price`, `date`, `location`, `latitude`, `longitude`) VALUES ('$titel', '$info', '$price' , '$date', '$location', '$lat', '$lng')";
        $result = $mysqli->query($sql);

    var_dump($result);
    var_dump(mysqli_error($mysqli));
    if($result){
    header("location:../admin?subpage=newScheme");
    ?>
    <script>
        window.location = '../admin?subpage=newScheme';
    </script>
    <?php
    }

}else{
    echo 'not everything has been entered, please return to the previous page';
}