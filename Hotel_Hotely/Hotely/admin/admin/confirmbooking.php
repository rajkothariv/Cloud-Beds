<?php
include('connection.php');
$a=$_REQUEST['i1'];
$b=$_REQUEST['i2'];
$c=$_REQUEST['i3'];
$d=$_REQUEST['i4'];
$e=$_REQUEST['i5'];
$f=$_REQUEST['i6'];
$h=$_REQUEST['i7'];
$i=$_REQUEST['i8'];
$f=trim($f);
$query="select * from user where `uname`='$a'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$g=$row['uid'];
$sql="insert into `booking` (`uid`,`checkin`,`checkout`,`roomno`,`billamount`,`ispayment`) values ('$g','$d','$e','$f','$h','$i')"; 
$result1=mysql_query($sql);
echo "<script> alert('Booking Done Successfully');</script> ";
echo "<script> document.location='book.php' </script>";
?>