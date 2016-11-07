<?php
if(!empty($_POST['id'])){
    require_once ('../includes/config.php');
    require_once ('../includes/database.php');
$id = $_POST['id'];
$title = str_replace("'", "''", $_POST['title']);
$content = str_replace("'", "''", $_POST['content']);

$sql = "UPDATE `newsarticles` SET title='" . $title . "', content='" . $content ."' WHERE id=" . $id;

$result = $mysqli->query($sql);

    var_dump(mysqli_error($mysqli));
    if($result){
        header("location:../admin?subpage=editMessage");
    ?>
    <script>
        window.location = '../admin?subpage=editMessage';
    </script>
    <?php
    }
}