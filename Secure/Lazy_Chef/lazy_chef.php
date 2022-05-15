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
  <title> The Lazy Chef </title>
<link rel="stylesheet"  href="css/stylesearch.css">
<?php include('inc/header.php'); ?>

<table width="100%" height="10%" border="0" align="center">
<tr>
<td width="27.5%"></td>
<div class="wrapper">
  <div class="search-input">
    <a href="" target="_blank" hidden></a>
    <input type="text" placeholder="Type to search..">
    <div class="autocom-box">
      <!-- here list are inserted from javascript -->
    </div>
    <div class="icon"><i class="fa fa-search" aria-hidden="true"></i></div>
  </div>
</div>
<script src="suggestions.js"></script>
<script src="script.js"></script>
<hr>
</tr>
</table>

<marquee direction="left">
<a href="giant_caramel_candy_bar_cake.php"><img src="media/cake.jpg" width="250" height="250" border="0" class="border2"></a>
<a href="power_protein_brownies.php"><img src="media/brownies.jpg" width="250" height="250" border="0" class="border2"></a>
<a href="chocolate_snack_cupcakes.php"><img src="media/cupcake.jpg" width="250" height="250" border="0" class="border2"></a>
<a href="vegan_rossito.php"><img src="media/1.jpg" width="250" height="250" border="0" class="border2"></a>
<a href="Kale_Black_Bean_and_Avocado_Burrito_Bowl.php"><img src="media/3t.jpg" width="250" height="250" border="0" class="border2"></a>
<a href="Vegetable_Paella.php"><img src="media/5.png" width="250" height="250" border="0" class="border2"></a>
<a href="main1.php"><img src="media/pic1m.jpg" width="250" height="250" border="0" class="border2"></a>
<a href="main2.php"><img src="media/pic2.jpg" width="250" height="250" border="0" class="border2"></a>
<a href="main3.php"><img src="media/pic3m.jpg" width="250" height="250" border="0" class="border2"></a>
</marquee>


<br><br>
<center>
<br><br><br>
<center><h1 class="f1">MENU</h1></center> <br>
<table width="90%" border="0" align="center">
<tr>
<td width="33.3%"><center><a href="main_menu.php"><img src="media/mcourse.jpeg" alt="main course" width="80%" border="0" class="border"></a></center></td>
<td width="33.3%"><center><a href="vegan_course.php"><img src="media/vcourse.jpg" alt="vegan course" width="80%" border="0" class="border"></a></center></td>
<td width="33.3%"><center><a href="sweet.php"><img src="media/scourse.jpg" alt="sweets course" width="80%" border="0" class="border"></a></center></td>
</tr>
<tr height="30%" align="center">
<th><h1><a href="main_menu.php" class="f">MAIN DISHES</a></h1></td>
<th><H1><a href="vegan_course.php" class="f">VEGAN DISHES</a></H1></td>
<th><H1><a href="sweet.php" class="f">SWEETS DISHES</a></H1></td>
</tr>
</table>
<br><br>
<br><br><br><br>

<?php include('inc/footer.php'); ?>
