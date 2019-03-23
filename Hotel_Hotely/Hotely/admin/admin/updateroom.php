<?php
include('connection.php');
$id=$_REQUEST['i3'];
$name=$_REQUEST['i1'];
$acc=$_REQUEST['i2'];
$sql="update room set roomname='$name',accomodation='$acc' where roomid=$id";

mysql_query($sql);

echo "<script> alert('Room Updated Successfully'); </script>";
echo "<script> document.location='rooms.php'; </script>";

?>