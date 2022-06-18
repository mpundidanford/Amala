<?php
$conn = mysqli_connect('localhost','root','','amala');

if(!$conn){
    die('connection failed:' .mysqli_connect_errno());
}
?>