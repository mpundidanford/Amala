<?php
include ("connection.php");
session_start();
$username = "";
$password= "";

if(isset($_POST['admin_login'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn   , $_POST['password']);
}

$query = "SELECT * FROM `user_admin` WHERE username='$username' AND password ='$password'";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);

if (mysqli_num_rows($results) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: admin_homepage.php');
}

?>
