<?php
include('connection.php');

$name=$_REQUEST['i1'];
$desc=$_REQUEST['i2'];
$price=$_REQUEST['i4'];
if(isset($_REQUEST['ac']))
{
	$ac=1;
	
}
else
{
	$ac=0;
}
if(isset($_REQUEST['mwater']))
{
	$mw=1;
	
}
else
{
	$mw=0;
}
if(isset($_REQUEST['wifi']))
{
	$wifi=1;
	
}
else
{
	$wifi=0;
}
if(isset($_REQUEST['onecalldoc']))
{
	$ocd=1;
	
}
else
{
	$ocd=0;
}

$sql="insert into categoty(`cname`,`desc`,`wifi`,`onecalldoc`,`isAC`,`isMWater`,`price`) values ('$name','$desc','$wifi','$ocd','$ac','$mw','$price')";


mysql_query($sql);

echo "<script> alert('Room Added Successfully'); </script>";
echo "<script> document.location='rcategories.php'; </script>";

?>