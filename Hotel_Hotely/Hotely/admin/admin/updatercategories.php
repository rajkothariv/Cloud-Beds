<?php
include('connection.php');
$id=$_REQUEST['i3'];
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

$sql="update categoty set cname='$name',price='$price',isAC=$ac,isMWater=$mw,onecalldoc=$ocd,wifi=$wifi,`desc`='$desc' where cid=$id";


mysql_query($sql);

echo "<script> alert('Room Updated Successfully'); </script>";
echo "<script> document.location='rcategories.php'; </script>";

?>