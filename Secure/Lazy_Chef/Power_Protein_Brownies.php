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
<title>Power Protein Brownies</title>
<?php include('inc/header.php'); ?>

<table width="70%" height="60%" align="center">
  <tr><td colspan="2" align="center"><h1 id="top">Power Protein Brownies</h1><hr></td></tr>

  <tr><td align="center" colspan="2"><br><br><embed src="media/Power Protein Brownies.mp4" width="500" height="300"></td></tr>

  <tr><td colspan="2"><br><br><hr><br></td></tr>

  <tr>
       <td width="50%"><h3>&nbsp&nbsp&nbspingreadents:</h3>
        <ul type="circle">
                <li>3 bananas, very riped, chopped</li>
                <li>15 oz black beans, rinsed and drained (425g)</li>
                <li>½ cup dark cocoa powder (60g)</li>
                <li>⅔ cup almond butter, or nut butter of choice (160g)</li>
                <li>1 cup almond flour (95g)</li>
                <li>¼ teaspoon kosher salt</li>
                <li>1 teaspoon baking powder</li>
                <li>1 tablespoon pure vanilla extract</li>
                <li>¼ cup dark chocolate chips (40g)</li>
        </ul><br><br><br><br><br>
        </td>
        <td width="50%"><h3>&nbsp&nbsp&nbspDirections:</h3>
          <ol type="1">
          <li>Preheat the oven to 350°F (180°C). Grease and line a 8-inch (20 cm) square baking dish with parchment paper.</li>
          <li>In a food processor, combine the bananas, black beans, cocoa powder, almond butter, almond flour, salt, baking powder, and vanilla. Pulse until smooth.</li>
          <li>Pour the batter into the prepared baking dish. Sprinkle the dark chocolate chips over the top.</li>
          <li>Bake for 25 minutes, or until the brownies are set.</li>
          <li>Let cool, then slice into 12 pieces. Enjoy the brownies immediately, or store in the fridge for 1 week or in the freezer for up to 1 month.</li>
          <li>Enjoy!. And leave a comment</li>
          </ol><br><br>
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
