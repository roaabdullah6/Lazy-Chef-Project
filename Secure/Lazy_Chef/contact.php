<?php require('config/db.php');
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
<html>
<head>
<title> Contact </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<style>
.d{font-family:fantasy;font-size:28px;}
</style>
<?php include('inc/header.php'); ?>


<center><h1 style="font-family:fantasy;color:rosybrown;">CONTACT LAZY CHEF</h1></center>
<center><h2 style="font-family:Calibri;color:rosybrown;">While we're good with kitchen recipes,<br> there are simpler ways for us to get in touch and answer your questions
</h2></center>
<hr>
<h3 align=center style="font-size: 21px">
<a href="mailto:2190001593@iau.edu.sa" align=center class="b1"> Khaireya H. AlQahtani </a><br>
<a href="mailto:2190003001@iau.edu.sa" align=center class="b1"> Roa      A. AlMoussa </a><br>
<a href="mailto:2190001867@iau.edu.sa" align=center class="b1"> Rahaf    A. AlGhamdi  </a><br>
<a href="mailto:2190001000@iau.edu.sa" align=center class="b1"> Rana     M. AlAjmi </a><br>
<a href="mailto:2190004263@iau.edu.sa" align=center class="b1"> Raghad   A. AlSufaian </a><br> </h3>



<?php include('inc/footer.php'); ?>
