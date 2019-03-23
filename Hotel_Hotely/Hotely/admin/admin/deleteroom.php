<?php
include('connection.php');
$id=$_REQUEST['i3'];
if(confirm('Are you sure you want to delete'))
{
$sql="delete from room where roomid=$id";

mysql_query($sql);

echo "<script> alert('Room Deleted Successfully'); </script>";
}
echo "<script> document.location='rooms.php'; </script>";

?>