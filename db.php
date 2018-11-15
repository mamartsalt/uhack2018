<?php

$con = mysqli_connect("localhost","root","","sofwenusers");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<?php
$connect = mysqli_connect("localhost","root","");

	$db = mysqli_select_db($connect, "uhack")

?>
