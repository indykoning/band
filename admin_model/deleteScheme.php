<?php
require_once ('../includes/config.php');
require_once ('../includes/database.php');

$delete = $_POST['delete'];
$deletestring = implode(",",$delete);
echo $deletestring;
$sql = "DELETE FROM scheme WHERE id IN ($deletestring)";
$result = $mysqli->query($sql);
header("location:../admin?subpage=deleteScheme");
?>
    <script>
        window.location = '../admin?subpage=deleteScheme';
    </script>
<?php