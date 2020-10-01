<?php
      $host= "localhost";
      $dbusername= "root";
      $dbpassword= "";
      $dbname="tatai";

$conn =new mysqli ($host, $dbusername, $dbpassword, $dbname);
if(mysqli_connect_error())
{
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
?>