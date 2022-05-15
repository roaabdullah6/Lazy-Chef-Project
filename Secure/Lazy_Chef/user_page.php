<?php
require('config/db.php');
session_start();
if(!isset($_SESSION['user_name'])){
  if(!isset($_SESSION['admin_name'])){
  header('location:login_form.php');}}

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


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body bgcolor="#c0c0c0">

<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo base64_decode($_COOKIE['logs']); ?> </span></h1>
      <input type="hidden" name="csrf-token" value="<?php echo $token; ?>"
      <p>this is an user page</p>
     <!-- <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>-->
      <a href="lazy_chef.php" class="btn">HOME</a>
      <a href="logout.php" class="btn">LOG OUT</a>
   </div>

</div>

</body>
</html>
