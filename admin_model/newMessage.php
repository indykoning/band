<?php
require_once ('../includes/config.php');
require_once ('../includes/database.php');
$title = str_replace("'", "''", $_POST['title']);
$content = str_replace("'", "''", $_POST['content']);
$image = str_replace("'", "''", $_FILES['image']);

if(!empty($title) && !empty($content)){

    $target_dir = "../images/";
    $target_file = $target_dir . basename($image["name"]);
    var_dump($image);

        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            echo "<p style='color: limegreen'>Het bestand '". basename( $image["name"]). "' is geüpload.</p><br>";

            $imagelocation = basename( $image["name"]);

            $sql = "INSERT INTO `newsarticles` (`title`, `content`,`image`) VALUES ('$title', '$content', '$imagelocation')";
            $result = $mysqli->query($sql);
            
            var_dump($result);
            var_dump($sql);
            var_dump(mysqli_error($mysqli));
                if($result){
            header("location:../admin?subpage=newMessage");
            ?>
            <script>
                window.location = '../admin?subpage=newMessage';
            </script>
            <?php
                }
        } else {
            $everythingOK = 0;
            echo "<p style='color: red'>Sorry, er was een probleem met uploaden.</p><br>";
        }


}else{
    echo 'not everything has been entered, please return to the previous page';
}