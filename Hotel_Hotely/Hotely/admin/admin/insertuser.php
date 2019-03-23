<?php
include('connection.php');


$name=$_REQUEST['i1'];
$mob=$_REQUEST['i2'];
$email=$_REQUEST['i3'];
$username=$_REQUEST['i4'];
$password=$_REQUEST['i5'];
$city=$_REQUEST['i6'];
$sql="insert into user (`uname`,`password`,`name`,`email`,`mobileno`,`city`) values ('$username','$password','$name','$email','$mob','$city')";

mysql_query($sql);

echo "<script> alert('User Inserted Successfully'); </script>";
echo "<script> document.location='users.php'; </script>";

?>