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
<title> Main course </title>
<style>
.d{font-family:fantasy;font-size:28px;}
</style>

<?php include('inc/header.php'); ?>

<center><h1 style="font-family:fantasy;color:rosybrown;">Main menu</h1></center>
<hr>
<br><br><br><br>

<table width="90%" border="0" align="center">
<tr>
<td width="33.3%"><center><a href="main1.php"><img src="media/pic1m.jpg" width="80%"></a></center></td>
<td width="33.3%"><center><a href="main2.php"><img src="media/pic2.jpg" width="80%"></a></center></td>
<td width="33.3%"><center><a href="main3.php"><img src="media/pic3m.jpg" width="80%"></a></center></td>
</tr>
<tr height="20%" align="center">
<td><p class="d">Mac'N'cheese</p></td>
<td><p class="d">Shrimp spaghetti</p></td>
<td><p class="d">One-pan chicken and veggies</p></td>
</tr>
</table>
<br><br><br><br>
<br><br><br><br>
<?php include('inc/footer.php'); ?>
