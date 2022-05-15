<?php require('config/db.php');
session_start();
//Redirect
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
<title>Chocolate Snack Cupcakes</title>

<?php include('inc/header.php'); ?>

<table width="70%" height="60%" align="center">

  <tr><td colspan="2" align="center"><h1 id="top"> Chocolate Snack Cupcakes </h1><hr></td>
  <td width="50%"></td>

  <tr><td align="center" colspan="2"><br><br><embed src="media/Chocolate Snack Cupcakes.mp4" width="500" height="300"></td></tr>

  <tr><td colspan="2"><br><br><hr><br></td></tr>

  <tr>
       <td width="50%"><h3>&nbsp&nbsp&nbspingreadents:</h3>
          <ul type="square">
          <li><b><u>Cupcakes:</u></b>
                <ul type="circle">
                <li>1 ½ cups all-purpose flour (185 g)</li>
                <li>¾ cup cocoa powder (90 g)</li>
                <li>¾ teaspoon baking powder</li>
                <li>1 ½ teaspoons baking soda</li>
                <li>½ teaspoon salt</li>
                <li>1 ½ cups sugar (300 g)</li>
                <li>½ cup warm water (120 mL)</li>
                <li>1 cup buttermilk (240 mL)</li>
                <li>2 large eggs</li>
                <li>1 teaspoon vanilla extract</li>
                </ul>
          </li>
          <li><b><u>Marshmallow Filling:</u></b>
                <ul type="circle">
                <li>1 cup heavy cream (240 mL)</li>
                <li>1 cup marshmallow cream (115 g)</li>
                </ul>
          </li>
          <li><b><u>Ganache:</u></b>
                <ul type="circle">
                <li>1 cup semi-sweet chocolate chips (175 g)</li>
                <li>⅔ cup heavy cream (160 mL)</li>
                </ul>
          </li>
          <li><b><u>Icing:</u></b>
                <ul type="circle">
                <li>1 cup powdered sugar (120 g)</li>
                <li>1 tablespoon milk</li>
                </ul>
          </li>
        </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </td>
        <td width="50%"><h3>&nbsp&nbsp&nbspDirections:</h3>
          <ol type="1">
          <li>Preheat the oven to 350˚F (180˚C).</li>
          <li>Sift the flour, cocoa powder, baking powder, baking soda, and salt into a large bowl. Add the sugar and whisk to combine.</li>
          <li>Add the warm water, buttermilk, eggs, and vanilla and whisk until combined.</li>
          <li>Line 2 muffin tins with paper liners.</li>
          <li>Scoop the batter into prepared muffin tins, filling each cup a little more than halfway.</li>
          <li>Bake for about 20 minutes, until the tops of the cupcakes spring back when gently pressed. Let cool completely.</li>
          <li>Make the marshmallow filling: In a medium bowl, whip the heavy cream with an electric hand mixer until soft peaks form. Add the marshmallow cream and whip until stiff.</li>
          <li>Transfer the filling to a piping bag fitted with a medium round tip or a zip-top bag with a corner snipped off.</li>
          <li>Use the end of a whisk or another utensil to push down the center of each cupcake.</li>
          <li>Pipe the filling into the cupcakes, leveling off the tops if needed. Freeze for 15 minutes while you make the ganache and icing.</li>
          <li>Make the ganache: Add the chocolate chips and heavy cream to a medium microwave-safe bowl. Microwave in 30-second increments, until melted. Mix together until smooth.</li>
          <li>Make the icing: In a medium bowl, stir together the powdered sugar and milk until smooth. The icing should fall off the spatula in ribbons. If it is too thin, add a bit more powdered sugar.</li>
          <li>Transfer the icing to a piping bag fitted with a small tip or a zip-top bag with a corner snipped off.</li>
          <li>Dip the top of each cupcake in the ganache, then set aside to dry for 10 minutes.</li>
          <li>Pipe icing curls across the center of the cupcakes and let dry for 15 minutes at room temperature.</li>
          <li>Enjoy!. And leave a comment</li>
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
<td width="20%"><center><a href="lazy chef.php" class="b1">HOME</a></center></td>
<td width="20%"><left><a href="#top" class="b1">GO UP</a></left></td>
</tr></table></center>
<HR>
<br><br>
</body>
</html>
