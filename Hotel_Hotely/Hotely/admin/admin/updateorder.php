<?php
include('connection.php');
$id=$_REQUEST['i2'];
$delivered=$_REQUEST['delivered'];
if($delivered=="yes")
{
	$temp=1;
}
else
{
	$temp=0;
}
$sql="update ord set `status`='$temp' where `orderid`=$id";
mysql_query($sql);
echo "<script> alert('Order Updated Successfully'); </script>";
echo "<script> document.location='vieworders.php'; </script>";

?>