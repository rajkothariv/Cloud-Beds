<?php
include('connection.php');
$id=$_REQUEST['i3']; ?>

	<?php
$sql="delete from user where uid=$id";

mysql_query($sql);

echo "<script> alert('User Deleted Successfully'); </script>"; 

echo "<script> document.location='users.php'; </script>";

?>