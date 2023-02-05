<?php
//$_SESSION['login_name']
session_start();
$login_name= $_SESSION['login_name'];
include('connect.php');


$sql = "SELECT name,gender,identity,number FROM users WHERE name = '$login_name'";

$outcome = mysqli_query($link,$sql);

$row_result = mysqli_fetch_assoc($outcome);

$gender=$row_result['gender'];
$name=$row_result['name'];
$number=$row_result['number'];
$identity=$row_result['identity'];

// echo $name."<br>";
// echo $gender."<br>";
// echo $identity."<br>";
// echo $number."<br>";

?>