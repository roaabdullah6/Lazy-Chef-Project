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
<title>Giant Caramel Candy Bar Cake</title>

<?php include('inc/header.php'); ?>

<table width="70%" height="60%" align="center">
  <tr><td colspan="2" align="center"><h1 id="top">Giant Caramel Candy Bar Cake</h1><hr></td></tr>

  <tr><td align="center" colspan="2"><br><br><embed src="media/Giant Caramel Candy Bar Cake.mp4" width="500" height="300"></td></tr>

  <tr><td colspan="2"><br><br><hr><br></td></tr>

  <tr>
       <td width="50%"><h3>&nbsp&nbsp&nbspingreadents:</h3>
          <ul type="square">
          <li><b><u>Shortbread:</u></b>
                <ul type="circle">
                <li>3 cups all-purpose flour (375 g)</li>
                <li>¾ cup granulated sugar (150 g)</li>
                <li>1 teaspoon salt</li>
                <li>2 cups unsalted butter, 4 sticks, cubed, room temperature (455 g)</li>
                </ul>
          </li>
          <li><b><u>Caramel Filling:</u></b>
                <ul type="circle">
                <li>¾ cup light brown sugar (165 g)</li>
                <li>¾ cup light corn syrup (165 g)</li>
                <li>¾ cup unsalted butter, 1 1/2 sticks (170 g)</li>
                <li>¾ cup unsalted butter, 1 1/2 sticks (170 g)</li>
                <li>1 pinch salt</li>
                </ul>
          </li>
          <li><b><u>Chocolate Ridges:</u></b>
                <ul type="circle">
                <li>1 cup milk chocolate chips, melted (175 g)</li>
                </ul>
          </li>
          <li><b><u>Chocolate Coating:</u></b>
                <ul type="circle">
                <li>2 cups milk chocolate chips (350 g)</li>
                <li>3 tablespoons coconut oil</li>
                </ul>
          </li>
          <li><b><u>Special Equipment:</u></b>
                <ul type="circle">
                <li>baking pan, 12x4½- in (30x11-cm)</li>
                </ul>
          </li>
        </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </td>
        <td width="50%"><h3>&nbsp&nbsp&nbspDirections:</h3>
          <ol type="1">
          <li>Preheat the oven to 350˚F (180˚C). Grease a 12x4½- in (30x11-cm) baking pan and line with parchment paper.</li>
          <li>Make the shortbread: In a large bowl, whisk together the flour, granulated sugar, and salt. Add the butter. Use your hands to work it into the flour until a dough forms. Transfer to the prepared loaf pan and spread evenly. Cover with foil.</li>
          <li>Bake for 45 minutes, then remove the foil and bake for another 45-60 minutes, until light golden brown. Let cool completely.</li>
          <li>Make the caramel filling: In a medium, heavy-bottomed saucepan, combine the brown sugar, corn syrup, butter, cream, and salt. Over medium-high heat, bring the caramel to a boil and let cook for 5 minutes. 5. Then, reduce the heat to low and cook for 10 more minutes, until slightly deeper golden in color. Remove the pot from the heat.</li>
          <li>Pour the caramel over the shortbread cookie. Let cool in the refrigerator for 2 hours or until set.</li>
          <li>Once the cookie has chilled, line a baking sheet with parchment paper.</li>
          <li>Make the chocolate ridges. Pour ⅓ of the melted chocolate onto the prepared baking sheet and spread into a 13x5-inch (33x12 cm) rectangle.</li>
          <li>Lift the cookie out of the pan using the parchment paper, and remove the paper. Place the cookie on top of the chocolate rectangle. Pour the remaining melted chocolate on top of the caramel. Spread the chocolate to the edges in a zig-zag motion to create textured ridges. Return to the refrigerator for 20 minutes, until the chocolate hardens.</li>
          <li>While the cookie is chilling, make the chocolate glaze: Add the chocolate chips and coconut oil to a medium microwave-safe bowl. Melt in the microwave in 30 seconds intervals, stirring between each, until smooth. Set aside to cool for 15 minutes.</li>
          <li>Remove the cookie from the refrigerator. Invert 2 jars or glasses on a baking sheet or piece of parchment paper. Set the cookie bar on the jars and pour the chocolate glaze over the cookie. Use a spatula to carefully push the chocolate over the edges of the cookie to coat the sides, being careful not to flatten the edges. Carefully return to the refrigerator to chill for at least 1 hour, until the chocolate is hardened. Keep refrigerated until ready to serve.</li>
          <li>Cut into ¾-inch (2 cm) thick slices with a sharp knife.</li>
          <li>Enjoy!. And leave a comment</li>
          </ol><br><br><br><br><br><br><br><br><br>
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
<?php include('inc/footer.php'); ?>
