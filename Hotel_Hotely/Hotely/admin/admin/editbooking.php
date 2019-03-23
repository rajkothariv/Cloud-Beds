<?php
include('connection.php');
$i1=$_REQUEST['i1'];
$i2=$_REQUEST['i2'];
$i3=$_REQUEST['i3'];
$i4=$_REQUEST['i4'];
$i5=$_REQUEST['i5'];
$i6=$_REQUEST['i6'];
if($i6=="yes")
{
	$i7=1;
}
else
{
	$i7=0;
}
$sql="update booking set `checkin`='$i2',`checkout`='$i3',`billamount`='$i4',`ispayment`='$i7' where `bid`=$i5";
echo $sql;
mysql_query($sql);
echo "<script> alert('Booking Updated Successfully'); </script>";
echo "<script> document.location='viewbooking.php'; </script>";

?>