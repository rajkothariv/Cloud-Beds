<?php
include('connection.php');
$id=$_REQUEST['i3']; ?>

	<?php
$sql="delete from room where roomid=$id";

mysql_query($sql);

echo "<script> alert('Room Deleted Successfully'); </script>"; 

echo "<script> document.location='rooms.php'; </script>";

?>