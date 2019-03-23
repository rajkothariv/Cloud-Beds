<?php
include('connection.php');
$id=$_REQUEST['i3'];
$name=$_REQUEST['i1'];
$acc=$_REQUEST['i2'];
$sql="update food set `fname`='$name',`price`='$acc' where `fid`=$id";

mysql_query($sql);

echo "<script> alert('Food Updated Successfully'); </script>";
echo "<script> document.location='food.php'; </script>";

?>