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
  <title>Lemon Garlic Shrimp spaghetti</title>
  <link rel="stylesheet" type="text/css" href="css/font.css">
  <?php include('inc/header.php'); ?>

  <table width="70%" height="60%" border="0" align="center">
  <tr><td colspan="2"><h1 id="top"><center>Lemon garlic shrimp spaghetti</center></h1><hr></td></tr>
  <tr ><td align="center" colspan="2"><BR><embed src="media/vid2.mp4" autostart="true" width="800" height="500"></td></tr>
  <tr><td colspan="2"><br><br><hr><br></td></tr>
  <tr>
       <td width="50%"><br><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspingreadents</h3>
           <ul>
           <li>225g spaghetti</li>
           <li>2tbs olive oil</li>
           <li>1(8tbs)unsalted butter</li>
           <li>4cloves garlic</li>
           <li>1ts pepper flakes(optional)</li>
           <li>500g shrimp</li>
           <li>salt</li>
           <li>black pepper</li>
           <li>1ts dried oregano</li>
           <li>1cup(160g) baby spanich</li>
           <li>25g parmesan cheese</li>
           <li>1tbs chopped parsely</li>
           <li>1tbs lemon juice</li>
           </ul></td>
           <td width="50%"><h3>&nbsp&nbsp&nbsp&nbspDirections:</h3><ol type="1">
           <li>In a large pot, boil water and add pasta. Cook until al dente.</li>
           <li>Drain and set pasta aside.</li>
           <li>In the same pan, heat olive oil and 2 tablespoons of butter. Add garlic and crushed red pepper, cook until fragrant.</li>
           <li>Toss in shrimp, salt and pepper to taste, and stir until shrimp start to turn pink, but are not fully cooked.</li>
           <li>Add oregano and spinach, cook until wilted.</li>
           <li>Return cooked pasta to the pot, add remaining butter, parmesan, and parsley. Stir until well mixed and the butter is melted.</li>
           <li>When the shrimp are cooked, add lemon juice, mix once more, then serve while hot.</li>
                                                                   </ol>
           </td></tr>
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
