<?php
session_start();
include  'includes/functions.php';
// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

$templateParser->assign('get',$_GET);
// Assign value of page title to the smarty variable 'title', usually the value comes from a database


// Display template: output html
if(loggedin($_SESSION['userID'], $_SESSION['login_key'], $_SESSION['loginIP'])) {
    $templateParser->assign('loggedin', '1');
}else{
    $templateParser->assign('loggedin', '0');
}
if(!empty($_GET['logout'])){
    logout();
}
$target = (isset($_GET['page']) && file_exists('views/' . $_GET['page'] . '.tpl')) ? $_GET['page'] : 'newsarticles';
$templateParser->assign('current_page', $target);
$templateParser->assign('title', "Guns n roses | " . $target);
$templateParser->display('head.tpl');
$templateParser->display('header.tpl');


// Get newsarticles from database



include_once('model/select_' . $target . '.php');
if(!empty($result)){
$templateParser->assign('result', $result);
}
$templateParser->display($target . '.tpl');




$footerText = 'DISCLAIMER: this is for a school project and no real info is shown. copyright indy&copy';
$templateParser->assign('footerString', $footerText);
$templateParser->display('footer.tpl');