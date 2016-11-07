<?php

?>
<form target="_self" method="post">
    <input type="text" name="username" placeholder="Gebruikersnaam">
    <input type="password" name="pass" placeholder="Wachtwoord">
    <input type="password" name="pass2" placeholder="Herhaal Wachtwoord">
    <input type="submit" name="register" value="register">
</form>
<?php
if(!empty($_POST['register'])){
    require_once "../includes/config.php";
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $username = $_POST['username'];
    $pass2 = $_POST['pass2'];
    $pass = $_POST['pass'];



    if($username != ''&&$pass != ''){
        if($pass2==$pass){
            $sql = "SELECT * FROM login WHERE Username = '$username'";

            if ($mysqli->query($sql)->num_rows > 0){
                echo 'user already exists';
            }else{
                $pass = password_hash($pass, PASSWORD_DEFAULT);

                $sql = "INSERT INTO `login`(`Username`, `Password`) VALUES ('$username','$pass')";
                if($mysqli->query($sql)){
                    echo 'Register successfull!';
                }else{
                    echo "Registreren mislukt";
                }

            }
        }else{
            echo "Wachtwoorden kloppen niet samen";
        }}else{
        echo 'èèn van de velden is leeg';
    }

mysqli_close($mysqli);
}

?>