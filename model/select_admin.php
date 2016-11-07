<?php
require_once 'includes/functions.php';
if(loggedin($_SESSION['userID'], $_SESSION['login_key'], $_SESSION['loginIP'])) {
switch ($_GET['subpage']){
    case 'newMessage':
        $templateParser->display($_GET['subpage'] . '.tpl');
        break;
    case 'editMessage':
        require_once ('select_newsarticles.php');
        $result2 = convertResultToArray($result2);
        $templateParser->assign('result', $result2);
        $templateParser->display($_GET['subpage'] . '.tpl');
        break;
    case 'deleteMessage':
        require_once ('select_newsarticles.php');
        $templateParser->assign('result', $result2);
        $templateParser->display($_GET['subpage'] . '.tpl');
        break;

    case 'newScheme':
        $templateParser->display($_GET['subpage'] . '.tpl');
        break;
    case 'editScheme':
        require_once ('select_schema.php');
        $templateParser->assign('result', $result);
        $templateParser->display($_GET['subpage'] . '.tpl');
        break;
    case 'deleteScheme':
        require_once ('select_schema.php');
        $templateParser->assign('result', $result);
        $templateParser->display($_GET['subpage'] . '.tpl');
        break;
    case 'newAbout':
        $templateParser->display($_GET['subpage'] . '.tpl');
        break;
    default:
        echo 'Welkom, klik op een van de onderdelen om te starten';
        break;
}}else{
    header("location:login");
    ?>
    <script>
        window.location = 'login';
    </script>
    <?php
}