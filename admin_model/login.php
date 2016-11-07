<?php
echo 'login start';
session_start();
echo 'session start';
if (!empty($_POST)) {
    echo 'post not empty';
    $username = $_POST['username'];
    $pass = $_POST['password'];
    require_once "../includes/config.php";
    require_once "../includes/database.php";
    $sql = "SELECT `Password`, `id` FROM login WHERE Username='" . $username . "'";
    $result = $mysqli->query($sql);
    echo $result;
    if($result){
        $row = $result->fetch_assoc();
        if(password_verify($pass, $row['Password'])){
            $id = $row['id'];
            echo 'Welkom ' . $username;
            $_SESSION['userID'] = $id;
            $login_key = hash('whirlpool', rand(0, 500));
            $_SESSION['login_key'] = $login_key;
            $_SESSION['loginIP'] = $_SERVER["REMOTE_ADDR"];
            setcookie( 'key', $login_key, 0, '/' , $_SERVER["HTTP_HOST"], isset($_SERVER["HTTPS"]), true);
            header("location:../admin");
            ?>
            <script>
                window.location = '../admin';
            </script>
            <?php
        }else{
            echo 'Username or password incorrect';
        }}
var_dump(mysqli_error($mysqli));
}
echo 'nothing entered';
