<?php

require('config/db.php');

session_start();



   //Redirect
   $username = !empty($_COOKIE['logs']) ? base64_decode($_COOKIE['logs']) : null;
   if(!empty($username) && isset($_COOKIE['token']) &&  isset($_COOKIE['cookie'])){
     if(isset($_SESSION['user_name'])){
        header('location:user_page.php');}
    if(isset($_SESSION['admin_name'])){
        header('location:Admin.php');}
   }

  //Senatazation
  if(isset($_POST['submit'])){
    //csrf-token
    $token=md5(uniqid(rand(),true));
    $_SESSION['csrf-token']=$token;
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = md5($_POST['password']);
   $select = " SELECT * FROM users WHERE username = '$username' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

       $row = mysqli_fetch_array($result);

//set cookie
$cookie1 = base64_encode($username);
$_SESSION['cookie1']=$cookie1;
       $cookie2 =sha1(mt_rand().time().$username);
       $_SESSION['cookie2']=$cookie2;
       setcookie("logs",$cookie1, time()+86400, "/", $_SERVER['HTTP_HOST'], false, false );  /* expire in 1 hour *///cookie
       setcookie("token",$token, time()+86400, "/", $_SERVER['HTTP_HOST'], true, true );//token
       setcookie("cookie",$cookie2, time()+86400, "/", $_SERVER['HTTP_HOST'], true, true );

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:Admin.php');

      }elseif($row['user_type'] == 'user'){

        $_SESSION['user_name'] = $row['name'];

         header('location:user_page.php');

      }

   }else{
echo "<script>alert('Login failed. Invalid email or password')</script>";   }

};

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <!--<link rel="stylesheet" href="css/style.css">-->
   <style type="text/css">
    input[type=username], input[type=password] {
      width: 30%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
}
.form-container form .form-btn{
   background: #fbd0d9;
   color:crimson;
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
}
    button {
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 30%;
    }
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }
    .container {
      width: 50%;
    }
</style>
<link rel="stylesheet" type="text/css" href="css/styleindex.css">

</head>
<body bgcolor="#c0c0c0">
  <div  align="center">
  	<h1>
      <center><img src="media/logo.jpg" height="40%" width="45%"></center><hr><br>
      <center><h1 class="p3"><i>LOG IN</i></h1></center>
  	</h1>
<div class="form-container" align="center">

   <form action="login_form.php" method="post" enctype="multipart/form-data">

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="username" name="username" required placeholder="Enter your username">
      <br>
      <input type="password" name="password" required placeholder="Enter your password">
      <br>
      <button type="submit" name="submit" value="OK" class="form-btn" >Log in</button><br><br><hr>
      <!--<p>don't have an account? <a href="register_form.php">register now</a></p>-->
   </form>
   <h3><span style="color: black ">don't have an account? <a href="register_form.php">Sign up</a></span></h3>
    <hr>
</div>

</body>
</html>
