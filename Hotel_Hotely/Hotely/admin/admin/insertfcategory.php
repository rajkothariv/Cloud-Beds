<?php
include('connection.php');


$name=$_REQUEST['i1'];
$desc=$_REQUEST['i2'];
$sql="insert into fcategory (`cname`,`description`) values ('$name','$desc')";

mysql_query($sql);

echo "<script> alert('Food Category Inserted Successfully'); </script>";
echo "<script> document.location='fcategories.php'; </script>";

?>