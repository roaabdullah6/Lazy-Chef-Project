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
<title> vegan course </title>
<style>
.d{font-family:fantasy;font-size:28px;}
</style>
<?php include('inc/header.php'); ?>

<center><h1 style="font-family:fantasy;color:rosybrown;">vegan course</h1></center>
<hr>
<br><br><br><br>

<table width="90%" border="0" align="center">
<tr>
<td width="33.3%"><center><a href="vegan_rossito.php"><img src="media/1.jpg" alt="main course" width="80%" height="60%"></a></center></td>
<td width="33.3%"><center><a href="Kale_Black_Bean_and_Avocado_Burrito_Bowl.php"><img src="media/3t.jpg" alt="vegan course" width="80%" height="40%"></a></center></td>
<td width="33.3%"><center><a href="Vegetable_Paella.php"><img src="media/5.png" alt="sweets course" width="80%"></a></center></td>
</tr>
<tr height="20%" align="center">
<td><p class="d">Vegan Risotto-Style Oats with Peas & Mushrooms</p></td>
<td><p class="d">Kale, Black Bean and Avocado Burrito Bowl</p></td>
<td><p class="d">Vegetable Paella</p></td>
</tr>
</table>
<br><br><br><br>
<br><br><br><br>
<?php include('inc/footer.php'); ?>
