<?php

require('config/db.php');
session_start();
if(!isset($_SESSION['admin_name'])){

  header('location:login_form.php');
}

// if(empty(base64_decode($_COOKIE['login']))){
//   header('location:login_form.php');}
// if( base64_decode($_COOKIE['login']) != 'admin'){
//   header('location:login_form.php');}

//token validation .
     if ($_COOKIE['token'] == $_SESSION['csrf-token']){
         //echo '<script>alert("CSRF token valid"")</script>';
       }
     else {
       setcookie("token", $_SESSION['csrf-token'], time()+86400, "/", $_SERVER['HTTP_HOST'], true, true );//token
        echo '<script>alert(" Invalid CSRF token ")</script>';}

     if ($_COOKIE['logs'] == $_SESSION['cookie1']){
             //echo '<script>alert("CSRF token valid"")</script>';
          }
    else {
        setcookie("logs", $_SESSION['cookie1'], time()+86400, "/", $_SERVER['HTTP_HOST'], true, true );//token
        echo '<script>alert(" Invalid logs ")</script>';}

    if ($_COOKIE['cookie'] == $_SESSION['cookie2']){
               //echo '<script>alert("CSRF token valid"")</script>';
          }
    else {
        setcookie("cookie", $_SESSION['cookie2'], time()+86400, "/", $_SERVER['HTTP_HOST'], true, true );//token
        echo '<script>alert(" Invalid cookie ")</script>';}

?>
<html>
<head>
    <title> COMINGSOON </title>
    <?php include('inc/header.php'); ?>


    <body bgcolor="#c0c0c0">
        <center><img src="media/logo.jpg" height="40%" width="45%"></center>
        <hr>
        <table width="100%" height="10%" border="0" align="center">
            <tr>
                <td width="27.5%"></td>
                <td width="15%">
                    <table width="100%" height="100%" border="0" align="center">
                        <tr>
                            <td width="50%"><center><img src="media/home.png" alt="home icon" width="25%" height="45%"></center></td>
                            <td width="50%"><left><a href="lazy_chef.html" class="b1"><b>HOME</b></a></left></td>
                        </tr>
                    </table>
                </td>
                <td width="15%">
                    <table width="100%" height="100%" border="0" align="center">
                        <tr>
                            <td width="50%"><center><img src="media/contact.png" alt="contact icon" width="25%" height="45%"></center></td>
                            <td width="50%"><left><a href="contact.html" class="b1"><b>CONTACT</b></a></left></td>
                        </tr>
                    </table>
                </td>
                <td width="15%">
                    <table width="100%" height="100%" border="0" align="center">
                        <tr>
                            <td width="50%"><center><img src="media/comment.png" alt="comment icon" width="25%" height="45%"></center></td>
                            <td width="50%"><a href="suggestions.html" class="b1"><left><b>SUGGESTION</b></left></a></td>
                        </tr>
                    </table>
                </td>
                <td width="27.5%"></td>
            </tr>
        </table>
        <hr>

        <center><h1 class="f">WELCOME TO ADMIN PAGE</h1></center>




        <?php include('inc/footer.php'); ?>
