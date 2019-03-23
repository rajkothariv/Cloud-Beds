<?php
include('connection.php');
$id=$_REQUEST['i3'];
$name=$_REQUEST['i1'];
$description=$_REQUEST['i2'];
$sql="update fcategory set `cname`='$name',`description`='$description`' where cid=$id";

mysql_query($sql);

echo "<script> alert('Food Category Updated Successfully'); </script>";
echo "<script> document.location='fcategories.php'; </script>";

?>