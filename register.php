<?php

session_start();

header('location: login.php');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');
$con = mysqli_connect ('localhost', 'root','');
mysqli_select_db($con, 'tatai');
    
$sql= " SELECT * from register where username='$username'";
$result= mysqli_query($con, $sql);
$num= mysqli_num_rows($result);
if($num==1)
{
echo "Username already taken";
}
else
{
$reg="INSERT into register(username , password , email) values ('$username', '$password', '$email')";
mysqli_query($con, $reg);
echo "registration successfull";
}
?>