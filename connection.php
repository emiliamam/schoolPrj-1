<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "info";

$connect = mysqli_connect($host, $user, $pass, $db);

if($connect == false)
{
  echo "Error connection";
}
 ?>
