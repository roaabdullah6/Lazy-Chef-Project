<?php

require('config/db.php');
session_start();
if(!isset($_SESSION['admin_name'])){

  header('location:login_form.php');
}

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
  <title> Admin page </title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" type="text/css" href="css/styleAdmin.css">
<?php include('inc/headerAdmin.php'); ?>

        <center><h1 class="f">WELCOME TO ADMIN PAGE</h1></center>

        <div class="container">
            <div class="box">
                <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <div class="content">
                  <table border="0" width="100%">
                  <tr>
                  <td width="100%"><hr></td>
                  </tr></table>
                    <h3><a href="userAdmin.php" class="b1">USERS</a></h3>
                    <p>To view or delete users on your website</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-cutlery" aria-hidden="true"></i></div>
                <div class="content">
                  <table border="0" width="100%">
                  <tr>
                  <td width="100%"><hr></td>
                  </tr></table>
                    <h3><a class="b1">COOMING SOON!!</a></h3>

                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                <div class="content">
                  <table border="0" width="100%">
                  <tr>
                  <td width="100%"><hr></td>
                  </tr></table>
                    <h3><a href="commentsAdmin.php" class="b1">COMMENTS</a></h3>
                    <p>To View / Delete comments on your website</p>
                </div>
            </div>
        </div>


        <?php include('inc/footer.php'); ?>
