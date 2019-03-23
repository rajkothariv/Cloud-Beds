<?php
include('connection.php');
$id=$_REQUEST['i3']; ?>

	<?php
$sql1="delete from orderdetail where orderid=$id";	
$sql="delete from ord where orderid=$id";


mysql_query($sql);
mysql_query($sql1);

echo "<script> alert('Order Deleted Successfully'); </script>"; 

echo "<script> document.location='vieworders.php'; </script>";

?>