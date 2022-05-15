<?php
require('config/db.php');
if (isset ($_COOKIE['logs'])){
    unset($_COOKIE['logs']);
    setcookie("logs", '', time()  - 3600, "/", $_SERVER['HTTP_HOST'], false, false );}

if (isset ($_COOKIE['token'])){
  unset($_COOKIE['token']);
setcookie("token", '', time()  - 3600, "/", $_SERVER['HTTP_HOST'], true, true );}


if (isset ($_COOKIE['cookie'])){
unset($_COOKIE['cookie']);
setcookie("cookie", '', time()  - 3600, "/", $_SERVER['HTTP_HOST'], true, true );}
//Initialize the session
session_start();

session_unset();

//Destroy the session.
session_destroy();

//Redirect to login page
header("location: login_form.php");
exit;
?>
