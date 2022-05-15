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
<?php

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = base64_decode($_COOKIE['logs']); // Get Name from form
	$comment = htmlspecialchars($_POST['comment']); // Get Comment from form
	$sql = "INSERT INTO comments (name, comment)
			VALUES ('$name', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styleindex.css">
	<link rel="stylesheet" type="text/css" href="css/stylecomment.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
	<style>
  .f{font-family: Impact, fantasy;font-size: 40px; text-decoration: underline; color:rosybrown;}
  .f1{font-family: Impact, fantasy;font-size: 50px; text-decoration: underline; color:rosybrown;}
  </style>
  <style type="text/css">
   input[id=category], input[id=name] {
     width: 25%;
     height: 35%
     padding: 10px 15px;
     margin: 8px 0;
     display: inline-block;
     border: 1px solid #ccc;
     box-sizing: border-box;
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
   width: 100%;
    height: 100%;
    border: 1px solid #c0c0c0;
    outline: none;
    padding: 5px 10px;
    resize: none;
 }
.reply {
  margin-left:30px;
}
.reply .p{
  font-size: 10px;
  margin-left:30px;
}

 </style>
</head>
<body bgcolor="#c0c0c0">
<center><img src="media/logo.jpg" height="40%" width="45%"></center>
<table border="0" width="100%">
<tr>
<td width="100%"><hr></td>
</tr></table> <br>
<table width="100%" height="10%" border="0" align="center">
<tr>
<td width="5%"></td>
<td width="10%">
  <table width="100%" height="100%" border="0" align="center">
  <tr>
  <td width="50%"><center><i class="fa fa-home" aria-hidden="true"></i></center></td>
  <td width="50%"><left><a href="lazy_chef.php" class="b1"><b>HOME</b></a></left></td>
  </tr>
  </table>
</td>
<td width="10%">
  <table width="100%" height="100%" border="0" align="center">
  <tr>
  <td width="50%"><center><i class="fa fa-envelope" aria-hidden="true"></i></center></td>
  <td width="50%"><left><a href="contact.php" class="b1"><b>CONTACT</b></a></left></td>
  </tr>
  </table>
</td>
<td width="10%">
  <table width="100%" height="100%" border="0" align="center">
  <tr>
  <td width="50%"><center><i class="fa fa-commenting-o" aria-hidden="true"></i></center></td>
  <td width="50%"><a href="comments.php" class="b1"><left><b>COMMENTS</b></left></a></td>
  </tr>
  </table>
</td>
<td width="10%">
  <table width="100%" height="100%" border="0" align="center">
    <tr>
      <td width="50%"><center><i class="fa fa-sign-out" aria-hidden="true"></i></center></td>
      <td width="50%"><a href="logout.php" class="b1"><left><b>LOG OUT</b></left></a></td>
     </tr>
  </table>
</td>
<td width="5%"></td>
</tr>
</table>
<br>
<table border="0" width="100%">
<tr>
<td width="100%"><hr></td>
</tr></table>

	<table border="0" width="100%">
		<tr>
		<td width="25%"></td>
		<td width="50%">
	<div class="wrapper" align="center">
		<form action="comments.php" method="POST" class="form">
			<div>
				<div>
					<label for="name">Username</label>

					<input type="text" name="name" id="name" value="<?php echo base64_decode($_COOKIE['logs']) ?>" disabled>
				</div>
			</div>
			<div class="comment">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" class="form-com" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="form-container">
				<button name="submit" class="form-btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php

			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4>@<?php echo $row['name']; ?></h4>
				<p><?php echo $row['comment']; ?></p>
      <?php if(!empty($row['reply'])){ ?>
      <div class="reply">
        <br>
        <hr>
        <h5> @<?php echo $row['Admin_reply']; ?> - Admin </h5>
				<p><?php echo $row['reply']; ?></p>
			</div>
			<?php
    } ?> </div >
    <?php
				}
			}

			?>
		</div>
	</div>
</td>
<td width="25%"></td>
</tr></table>

  <?php include('inc/footer.php'); ?>
