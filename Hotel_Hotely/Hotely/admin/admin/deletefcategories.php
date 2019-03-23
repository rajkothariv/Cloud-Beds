<?php
include('connection.php');
$id=$_REQUEST['i3']; ?>

	<?php
$sql="delete from fcategory where cid=$id";

mysql_query($sql);

echo "<script> alert('Category Deleted Successfully'); </script>"; 

echo "<script> document.location='fcategories.php'; </script>";

?>