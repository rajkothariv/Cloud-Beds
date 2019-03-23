<?php
include('connection.php');
$id=$_REQUEST['i7'];

$name=$_REQUEST['i1'];
$mob=$_REQUEST['i2'];
$email=$_REQUEST['i3'];
$username=$_REQUEST['i4'];
$password=$_REQUEST['i5'];
$city=$_REQUEST['i6'];
$sql="update user set `uname`='$username',`password`='$password',`name`='$name',`email`='$email',`mobileno`='$mob',`city`='$city' where uid=$id";

mysql_query($sql);

echo "<script> alert('User Updated Successfully'); </script>";
echo "<script> document.location='users.php'; </script>";

?>