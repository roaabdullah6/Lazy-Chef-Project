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
<title> SWEETS </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<style>
.d{font-family:fantasy;font-size:28px;}
</style>
<?php include('inc/header.php'); ?>


<center><h1 style="font-family:fantasy;color:rosybrown;">SWEETS</h1></center>
<hr>
<br><br><br><br>

<table width="90%" border="0" align="center">
<tr>
<td width="33.3%"><center><a href="Chocolate_Snack_Cupcakes.php"><img src="media/cupcake.jpg" alt="main course" width="80%"></a></center></td>
<td width="33.3%"><center><a href="Giant_Caramel_Candy_Bar_Cake.php"><img src="media/cake.jpg" alt="vegan course" width="80%"></a></center></td>
<td width="33.3%"><center><a href="Power_Protein_Brownies.php"><img src="media/brownies.jpg" alt="sweets course" width="80%"></a></center></td>
</tr>
<tr height="20%" align="center">
<td><p class="d">Chocolate Snack Cupcakes</p></td>
<td><p class="d">Giant Caramel Candy Bar Cake</p></td>
<td><p class="d">Power Protein Brownies</p></td>
</tr>
</table>
<br><br><br><br>
<br><br><br><br>
<?php include('inc/footer.php'); ?>
