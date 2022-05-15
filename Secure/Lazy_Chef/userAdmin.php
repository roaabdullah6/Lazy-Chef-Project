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


 //to view data
$query = 'SELECT * FROM users';
$result = mysqli_query($conn, $query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

//for delete
if (isset($_GET['id'])) {
  $delete_id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "DELETE FROM users WHERE id = ('$delete_id')";

    if(mysqli_query($conn, $query)){
       header('Location:userAdmin.php');
    } else {
        echo 'ERROR: '. mysqli_error($conn);
    }
}
mysqli_free_result($result);
mysqli_close($conn);
 ?>

<html>
<head>
    <title> The Lazy Chef </title>
<?php include('inc/headerAdmin.php'); ?>
<center><h1 class="f">VIEW OR DELETE USERS</h1></center>

</div>

<div class="container">
   <?php foreach($users as $users) : ?>
            <div class="box">
                <div class="icon">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <center><h2 class="b1" ><?php echo $users['id']; ?></h2></center>
                </div>
                <div class="content">
                  <table border="0" width="100%">
                  <tr>
                  <td width="100%"><hr></td>
                  </tr></table>
                    <h3 class="b1"><?php echo $users['username']; ?></h3>
                    <p>Name: <?php echo $users['name']; ?><br><?php echo $users['email']; ?><br>Type: <?php echo $users['user_type']; ?></p>
                    <a class="b1" href="<?php echo ROOT_URL; ?>userAdmin.php?id=<?php echo $users['id']; ?>" > DELETE </a>
                </div>
            </div>
    <?php endforeach; ?>
</div>

<?php include('inc/footer.php'); ?>
