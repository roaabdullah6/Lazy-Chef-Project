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
 <head><title> Mac'N'Cheese</title>
   <meta name="keywords" content="one pot,macaroni,cheese,MacNcheese">
   <link rel="stylesheet" type="text/css" href="css/font.css">
   <?php include('inc/header.php'); ?>

 <table width="80%" height="60%" border="0" align="center">
  <tr><td colspan="2"><h1 id="top"><center>One-pot Mac'N'cheese</center></h1><hr></td></tr>
  <tr><td align="center" colspan="2"><img src="media/pic1.jpg" width="50%" ></td></tr>
  <tr><td colspan="2"><br><br><hr><br></td></tr>
  <tr>
       <td width="50%"><h3 id="h">&nbsp&nbsp&nbsp&nbsp&nbspingreadents</h3>
           <ul>
           <li>4 cups whole milk</li>
           <li>340g macaroni (about 3 cups)</li>
           <li>1 cup shredded mozzarella</li>
           <li>2/3 cup crem chease</li>
           <li>2 tablespoon unsalted butter</li>
           <li>1 teaspoon mustard (optional)</li>
           <li>black paper</li>
           <li>salt</li>
           </ul></td>
        <td width="50%"><h3 id="h"><br><br>&nbsp&nbsp&nbsp&nbspDirections:</h3><ol type="1">
                                                                 <li>Put the milk and macaroni in a medium saucepan.</li>
                                                                 <li>Let the milk to a boil over medium heat, stirring frequently<br> to keep the macaroni from clumping, then cook, stirring frequently, until the macaroni is tender and the milk has thickened to the consistency of heavy cream, 4 to 5 minutes.</li>
                                                                 <li> Remove the saucepan from the heat, add the Cheddar, mozzarella, cream cheese, butter, mustard, paper and 1 1/2 teaspoons salt, and stir until smooth, thick and creamy. </li>
                                                               </ol>
        &nbsp&nbsp&nbsp&nbsp&nbsp<h4>NOTE: (The dish will thicken as it cools; thin it out with a little hot water if desired.) </h4></td></tr>
    </table>
<br><br><br><br>
<br><br><br><br>

<hr>
<center><table border="0" width="80%">
<tr>
<td width="40%"><center><img src="media/logo.jpg" width="60%" height="50%"></center></td>
<td width="20%"><center><a href="lazy_chef.php" class="b1">HOME</a></center></td>
<td width="20%"><left><a href="#top" class="b1">GO UP</a></left></td>
</tr></table></center>
<HR>
<br><br>
 </body>
</html>
