<?php

session_start();
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$con = mysqli_connect ('localhost', 'root','');
mysqli_select_db($con, 'tatai');

$sql= " SELECT * from register where username='$username' && password= '$password'";
$result= mysqli_query($con, $sql);
$num= mysqli_num_rows($result);
if($num == 1)
{
$_SESSION['username']=$username;
header('location: welcome.php');
}
else
{
header('location: login.php');
}
?>