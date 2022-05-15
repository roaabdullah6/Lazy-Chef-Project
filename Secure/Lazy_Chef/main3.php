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
 <head><title>one-pan chicken and veggies</title>
   <meta name="keywords" content="one pat,chicken,quick recipe">
   <link rel="stylesheet" type="text/css" href="font.css">
<?php include('inc/header.php'); ?>

 <table width="70%" height="60%" border="0" align="center">
  <tr><td colspan="2"><h1 id="top"><center>One-pan chicken and veggies</center></h1><hr></td></tr>

  <tr><td align="center" colspan="2"><br><img src="media/pic3.jpg" width="60%" ></td></tr>
  <tr><td colspan="2"><br><br><hr><br></td></tr>
  <tr>
       <td width="50%"><br><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspingreadents</h3>
           <ul>
           <li>1 cup of mixed vegetables</li>
           <li>1 cheacken breast</li>
           <li>2tbs olive oil</li>
           <li>1tbs lemon juice</li>
           <li>1 mineced garlic</li>
           <li>1/2tbs paprika</li>
           <li>1tbs rosemary</li>
           <li>pepper</li>
           <li>salt</li>
           </ul></td>
        <td width="50%"><h3>&nbsp&nbsp&nbsp&nbspDirections:</h3><ol type="1">
                                                                 <li>Heat the oven. Cover the baking sheet with alminum foil</li>
                                                                 <li>Lay out the vegetables. Then distribute the garlic, paprika, rosemary, pepper and salt. (keep some of the dressing for the chicken)</li>
                                                                 <li>Add lemon juice and olive oil the mix the vegetables.</li>
                                                                 <li>put the cheacken over the vegetables and dress it.</li>
                                                               </ol>
<h4>NOTE:For an easy clean up, carefully toss the aluminum foil</h4>
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
