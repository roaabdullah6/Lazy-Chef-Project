<?php

require('config/db.php');
session_start();
if(!isset($_SESSION['admin_name'])){

  header('location:login_form.php');
}

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


if(isset($_POST['submit'])){
  if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $reply = mysqli_real_escape_string($conn, $_POST['reply']);
    $Admin_reply = base64_decode($_COOKIE['logs']);
    $insert = "UPDATE comments SET reply='$reply', Admin_reply='$Admin_reply' WHERE id= '$id'";
    if(mysqli_query($conn, $insert)){
        header('location:commentsAdmin.php');
      } else {
        echo 'ERROR: '. mysqli_error($conn);
      }
}}

   ?>
<html>
<head>
    <title> Comment Reply </title>
    <style type="text/css">
  label[id="commID"]  , label[id="comment"]   {
       width: 20%;
       padding: 12px 20px;
       margin: 8px 0;
       display: inline-block;
       border: 1px solid #ccc;
       box-sizing: border-box;
       font-size: 18px;
       font-family: "monstserrat";
   }
   .form-container .form-btn{
      background: #fbd0d9;
      color:rosybrown;
      text-transform: capitalize;
      font-size: 15px;
      cursor: pointer;
      padding: 7px 13px;
      border-radius: 12px;
      border: 1px;
   }
   .comment .form-com{
     width: 20%;
      height: 20%;
      border: 1px solid #c0c0c0;
      outline: none;
      padding: 5px 10px;
      resize: none;
   }
   </style>
<?php include('inc/headerAdmin.php'); ?>

<div class="form-container" align="center">
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <?php
      if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM comments WHERE id= ('$id')";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result)
			?>
      <div>
        <label id="commID">Comment ID: <?php echo $row['id']; ?></label><br>
        <label id="comment">Comment: <?php echo $row['comment']; ?> </label>
      </div>
      <?php
    } }
      ?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="comment">
				<br><label for="reply" font-size= 25px;
        font-family= "monstserrat">Reply:</label><br>
				<textarea id="reply" name="reply" class="form-com" placeholder="Enter your reply" required></textarea>
			</div><br>
			<div class="form-container">
				<input type="submit" name="submit" value="Post reply" class="form-btn">
			</div>
   </form>
</div>

<?php include('inc/footer.php'); ?>
