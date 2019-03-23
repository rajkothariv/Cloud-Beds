<?php
session_start();
include("connection.php");
$cin=$_POST['checkin'];
$cout=$_POST['checkout'];
$nop1=$_POST['nop'];
$cat=$_POST['category'];
$total=$_POST['total'];
$uid1=$_SESSION['loginuserid'];
$rn=$_POST['roomno'];


$qry="insert into `booking` (`uid`,`checkin`,`checkout`,`roomno`,`billamount`) values ('$uid1','$cin','$cout','$rn',$total)"; //echo $qry;
//echo $qry;
$tmp=mysql_query($qry,$con);
//echo mysql_error();
echo "<script> alert('Booking Done Successfully');</script> ";
echo "<script> document.location='booking-page.php' </script>";

?>