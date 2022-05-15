<?php require('config/db.php'); ?>

<?php

if(isset($_POST['submit'])){


   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];
   $cpass =$_POST['cpassword'];

   $uppercase = preg_match('@[A-Z]@', $pass);
   $lowercase = preg_match('@[a-z]@', $pass);
   $number    = preg_match('@[0-9]@', $pass);
   $specialchars = preg_match('@[^\w]@', $pass);

//input validation - server side-
   function filterName ($name, $filter = "[^a-zA-Z0-9\-\_\.]"){
    return preg_match("~" . $filter . "~iU", $name) ? false : true;
}

   $select = " SELECT * FROM users WHERE email = '$email' && password = md5('$pass') ";
   $selectusername = " SELECT * FROM users WHERE username = '$username' ";

   $result = mysqli_query($conn, $select);
   $result2 = mysqli_query($conn, $selectusername);

   if(mysqli_num_rows($result) > 0){

      echo '<script>alert("email already exist!")</script>';

   }else{

      if($pass != $cpass){
         $error[] = "<script>alert('password not matched!')</script>";
      }else{
         if(!$uppercase || !$lowercase || !$number || !$specialchars || strlen($pass) < 8) {
             echo "<script>alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.')</script>";
           }

        else{
          if ( !filterName ($name) ){
            echo '<script>alert("username not valid!")</script>';
  }
  else{
    if(mysqli_num_rows($result2) > 0){

       echo '<script>alert("username already exist!")</script>';

    }else{

//prepared statement
      $insert = "INSERT INTO users(name,username, email, password ) VALUES(?,?,?,?)";
       //connect a prepared statement
       $stmt=mysqli_stmt_init($conn);
       //prepare the preaperd statement
       if(!mysqli_stmt_prepare($stmt,$insert)){
          echo '<script>alert("sql statement failed!")</script>';
       }else{
         //bind paramters inside database
         mysqli_stmt_bind_param($stmt,"ssss",$name,$username,$email,md5($pass));
         mysqli_stmt_execute($stmt);
       header('location:login_form.php');
      }
     }
    }
 }
}
}
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <!--<link rel="stylesheet" href="css/style.css">-->
   <style type="text/css">
    input[type=email], input[type=password] , input[type=text]{
      width: 30%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
   }
   button {
     width: 30%;
     padding: 12px 20px;
     background: #fbd0d9;
     color:crimson;
     text-transform: capitalize;
     font-size: 20px;
     cursor: pointer;
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
<center><img src="media/logo.jpg" height="40%" width="45%"></center>
<hr>

<div align="center">

   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <center><h2 class="p3"><i>register now</i></h2></center>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <br>
      <input type="text" name="username" required placeholder="enter your username">
      <br>
      <input type="email" name="email" required placeholder="enter your email">
      <br>
      <input type="password" name="password" required placeholder="enter your password">
      <br>
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <br>
      <button type="submit" name="submit" class="form-btn">register now</button>
      <br>
      <h3><span style="color: black ">already have an account?<a href="login_form.php"> login now</a></span></h3>


   </form>

</div>

</body>
</html>
