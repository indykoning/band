<?php
function convertResultToArray($DB_Result){
    $ResultArray = array();
    while ($row = $DB_Result->fetch_assoc()) {
        array_push($ResultArray, $row);
    }
    return $ResultArray;
}
function convertResultToAssoc($DB_Result){
    $ResultArray = array();
    while ($row = $DB_Result->fetch_assoc()) {

        $ResultArray[$row['id']] = $row;
       // var_dump($row);
//        foreach ($row as $v){
//            var_dump($v);
//        }
//        array_push($ResultArray, $row);
    }
    return $ResultArray;
}

function loggedin($userID, $login_key, $loginIP)
{
    if ($login_key !== '' && !empty($login_key) && !empty($userID) && !empty($loginIP)) {

        if ($loginIP == $_SERVER["REMOTE_ADDR"] && $login_key == $_SESSION['login_key']) {
            return 1;
        } else {
            return 0;
        }
    } else {
        return 0;
    }
}
function logout(){
session_start();
$_SESSION['userID'] = '';
$_SESSION['login_key'] = '';
$_SESSION['loginIP'] = '';
session_unset();
session_destroy();



header("location:login");
?>
<script>
    window.location = 'login';
</script>
<?php
}