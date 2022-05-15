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
<title>Vegetable Paella</title>
<?php include('inc/header.php'); ?>

<table width="70%" height="60%" align="center">
  <tr><td colspan="2" align="center"><h1 id="top">Vegetable Paella</h1><hr></td></tr>

  <tr><td align="center" colspan="2"><br><br><embed src="media/6.mp4" width="500" height="300"></td></tr>

  <tr><td colspan="2"><br><br><hr><br></td></tr>

  <tr>
       <td width="50%"><h3>&nbsp&nbsp&nbspingreadents:</h3>
        <ul type="circle">
                <li>3 tablespoons extra-virgin olive oil, divided</li>
                <li>1 medium yellow onion, chopped fine</li>
                <li>1 ½ teaspoons fine sea salt, divided</li>
                <li>2 teaspoons smoked paprika</li>
                <li>1 can (15 ounces) diced tomatoes (preferably the fire-roasted variety), drained</li>
                <li>2 cups short-grain brown rice</li>
                <li>6 garlic cloves, pressed or minced</li>
                <li>1 can (15 ounces) chickpeas, rinsed and drained, or 1 ½ cups cooked chickpeas</li>
                <li>3 cups vegetable broth</li>

        </ul><br><br><br><br><br>
        </td>
        <td width="50%"><h3>&nbsp&nbsp&nbspDirections:</h3>
          <ol type="1">
          <li>Arrange your oven racks in the upper and lower thirds of the oven, making sure that you have ample space between the two racks for your Dutch oven. You’re going to need a large Dutch oven (preferably 6 quarts/11-to-12” in diameter or bigger, although I got by with my 5.5-quart Le Creuset) or a large  skillet with a snug-fitting lid (both must be oven-safe!).</li>
          <li>Preheat the oven to 350 degrees Fahrenheit. Heat 2 tablespoons of the oil in your Dutch oven or skillet over medium heat until shimmering. Add the onion and a pinch of salt. Cook until the onions are tender and translucent, about 5 minutes.</li>
          <li>Stir in the garlic and paprika and cook until fragrant, about 30 seconds. Stir in the tomatoes and cook until the mixture begins to darken and thicken slightly, about 2 minutes Stir in the rice and cook until the grains are well coated with tomato mixture, about 1 minute. Stir in the chickpeas, broth, wine, saffron (if using) and 1 teaspoon salt.</li>
          <li>Increase the heat to medium-high and bring the mixture to a boil, stirring occasionally. Cover the pot and transfer it to the lower rack in the oven. Bake, undisturbed, until the liquid is absorbed and the rice is tender, 50 to 55 minutes.</li>

          </ol><br>
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
