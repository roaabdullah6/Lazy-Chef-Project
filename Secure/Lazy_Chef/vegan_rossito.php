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
<title>Vegan Risotto-Style Oats with Peas & Mushrooms</title>
<?php include('inc/header.php'); ?>

<table width="70%" height="60%" align="center">

  <tr><td colspan="2" align="center"><h1 id="top"> Vegan Risotto-Style Oats with Peas & Mushrooms </h1><hr></td>
  <td width="50%"></td>

  <tr><td align="center" colspan="2"><br><br><embed src="media/2.mp4" width="500" height="300" ></td></tr>

  <tr><td colspan="2"><br><br><hr><br></td></tr>

  <tr>
       <td width="50%"><h3>&nbsp&nbsp&nbspingreadents:</h3>
          <ul type="square">

                <ul type="circle">
                <li>1 tablespoon extra virgin olive oil</li>
                <li>1 1/2 cups cremini mushrooms; sliced</li>
                <li>Fresh ground black pepper, to taste</li>
                <li>Salt, to taste</li>
                <li>1 1/4 cups low sodium vegetable broth</li>
                <li>1/2 cup quick cooking oats(300 g)</li>
                <li>1/2 cup frozen green peas</li>
                <li>1 tablespoon nutritional yeast</li>
                <li>1 tablespoon Italian parsley; chopped fine</li>

                </ul>
          </li>

        </ul><br><br><br><br><br><br>
        </td>
        <td width="50%"><h3>&nbsp&nbsp&nbspDirections:</h3>
          <ol type="1">
          <li>Heat the oil over medium heat in a medium-large nonstick saute pan.</li>
          <li>Saute the mushrooms for 8 minutes or until tender, stirring occasionally.</li>
          <li>Season with salt and pepper.</li>
          <li>Meanwhile, bring the vegetable broth to a low boil in a small pot.</li>
          <li>Stir in the oats, peas, nutritional yeast, salt, and pepper.</li>
          <li>Reduce the heat to medium-low, and simmer for about 5 minutes or until most of the liquid is absorbed, stirring occasionally.</li>
          <li>Remove the oats from heat, cover, and let sit for 1 minute.</li>
          <li>Gently stir the mushrooms and parsley into the oats, then serve.</li>

          </ol><br><br><br><br><br><br>
        </td>
</tr>
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
