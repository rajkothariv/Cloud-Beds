<?php
include('connection.php');
$id=$_REQUEST['i3']; ?>

	<?php
$sql="delete from food where fid=$id";

mysql_query($sql);

echo "<script> alert('Food Deleted Successfully'); </script>"; 

echo "<script> document.location='food.php'; </script>";

?>