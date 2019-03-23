<?php
include('connection.php');
$id=$_REQUEST['i3']; ?>

	<?php
$sql="delete from categoty where cid=$id";

mysql_query($sql);

echo "<script> alert('Category Deleted Successfully'); </script>"; 

echo "<script> document.location='rcategories.php'; </script>";

?>