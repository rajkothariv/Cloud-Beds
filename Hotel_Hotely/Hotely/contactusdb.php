<?php
include("connection.php");

$name1=$_REQUEST['name'];
$message1=$_POST['message'];
$email1=$_POST['email'];

//echo $name1."   ".$message1."     ".$email1;
$qry="insert into message(name,emailid,message) values('$name1','$email1','$message1')";

mysql_query($qry,$con);
//echo mysql_error();
echo "<script> alert('your Message is sent Successfully'); </script>";
echo "<script> document.location='contact-us.php'; </script>";
?>