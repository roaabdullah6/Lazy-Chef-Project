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
<title>Kale, Black Bean and Avocado Burrito Bowl</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<?php include('inc/header.php'); ?>


<table width="70%" height="60%" align="center">
  <tr><td colspan="2" align="center"><h1 id="top">Kale, Black Bean and Avocado Burrito Bowl</h1><hr></td></tr>

  <tr><td align="center" colspan="2"><br><br><embed src="media/4.mp4" width="500" height="300"></td></tr>

  <tr><td colspan="2"><br><br><hr><br></td></tr>

  <tr>
      <td width="50%"> <br><br><br><h3>&nbsp&nbsp&nbspingreadents:</h3>
          <ul type="square">
          <li><b><u>Brown rice:</u></b>
                <ul type="circle">
                <li>1 cup brown rice, rinsed (short grain/arborio or long grain/basmati recommended)</li>
                <li>¼ teaspoon salt</li>

                </ul>
          </li>
          <li><b><u>Lime marinated kale
</u></b>
                <ul type="circle">
                <li>1 bunch curly kale, ribs removed and chopped into small, bite-sized pieces</li>
                <li>¼ cup lime juice</li>
                <li>2 tablespoons olive oil</li>
                <li>½ jalapeño, seeded and finely chopped</li>
                <li>½ teaspoon cumin</li>
                <li>¼ teaspoon salt</li>
                </ul>
          </li>
          <li><b><u>Avocado salsa verde</u></b>
                <ul type="circle">
                <li>11 avocado, pitted and sliced into big chunks</li>
                <li>½ cup mild salsa verde (any good green salsa will do)</li>
<li>½ cup fresh cilantro leaves (a few stems are ok)</li>
<li>2 tablespoons lime juice</li>
                </ul>
          </li>
          <li><b><u>Seasoned black beans</u></b>
                <ul type="circle">
                <li>2 cans black beans, rinsed and drained (or 4 cups cooked black beans)</li>
                <li>1 shallot, finely chopped (or ⅓ cup chopped red onion)</li>
<li>3 cloves garlic, pressed or minced</li>
<li>¼ teaspoon chili powder</li>
<li>¼ teaspoon cayenne pepper (optional)</li>



                </ul>
          </li>
          <li><b><u>Garnish</u></b>
                <ul type="circle">
                <li>Cherry tomatoes, sliced into thin rounds</li>
<li>Hot sauce (optional)</li>
                </ul>
          </li>
        </ul>
        </td>
        <td width="50%"><h3>&nbsp&nbsp&nbspDirections:</h3>
          <ol type="1">
          <li>Cook the rice: Bring a big pot of water to a boil, dump in rinsed brown rice and boil, uncovered, for 30 minutes. Turn off the heat, drain the rice and return it to the pot. Cover and let the rice steam in the pot for 10 minutes, then fluff the rice with a fork and season with ¼ teaspoon salt, or more to taste.</li>
          <li>Make the kale salad: Whisk together the lime juice, olive oil, chopped jalapeño, cumin and salt. Toss the chopped kale with the lime marinade in a mixing bowl.</li>
          <li>Make the avocado salsa verde: In a food processor or blender, combine the avocado chunks, salsa verde, cilantro and lime juice and blend well.</li>
          <li>Warm the beans: In a saucepan, warm 1 tablespoon olive oil over medium-low heat. Sauté the shallot and garlic until fragrant, then add the beans, chili powder and cayenne pepper. Cook until the beans are warmed through and softened, stirring often, about 5 to 7 minutes. If the beans seem dry at any point, mix in a little splash of water.</li>
          <li>To serve, spoon generous portions of rice, beans and kale salad into a bowl along with a couple spoonfuls of avocado salsa verde. Garnish with chopped cherry tomatoes.</li>

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
<td width="20%"><center><a href="lazy chef.html" class="b1">HOME</a></center></td>
<td width="20%"><left><a href="#top" class="b1">GO UP</a></left></td>
</tr></table></center>
<HR>
<br><br>
</body>
</html>
