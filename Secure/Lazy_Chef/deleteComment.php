<?php
require('config/db.php');
session_start();
if(!isset($_SESSION['user_name'])){
header('location:login_form.php');}

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


   //to view data
  $query = 'SELECT * FROM comments';
  $result = mysqli_query($conn, $query);
  $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //for delete
  if (isset($_GET['id'])) {
    $delete_id = mysqli_real_escape_string($conn, $_GET['id']);
      $query = "DELETE FROM comments WHERE id = ('$delete_id')";

      if(mysqli_query($conn, $query)){
         header('Location:commentsAdmin.php');
      } else {
          echo 'ERROR: '. mysqli_error($conn);
      }

  }
  mysqli_free_result($result);
  mysqli_close($conn);
?>
