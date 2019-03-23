<?php
session_start();
include("connection.php");
$myuid=$_SESSION["loginuserid"];
$tmp=5;
$total=0;
date_default_timezone_set('Asia/Calcutta');
$date1=date("Y-m-d");


foreach($_SESSION['cart'] as $product_id => $x)
	{
	$result=mysql_query("Select * from food where fid=$product_id");
	$myrow=mysql_fetch_array($result);
	$name=$myrow['fname'];
	$name=substr($name,0,40);
	$price=$myrow['price'];
	$image=$myrow['image'];

	$line_cost=$price*$x;
	$total=$total+$line_cost;
	
	//echo $name."       ".$line_cost."   ";
	//echo "<BR>".$tmp."<BR>";
	if($tmp!=0)
	{
		
			$qry1="INSERT INTO `ord`(`userid`, `date`) VALUES ($myuid,'$date1')";
	//		echo $qry1."<BR>";
			mysql_query($qry1,$con);
			echo mysql_error();
			$tid=mysql_insert_id();
			//echo "id  ".$tid."sdds";
			echo mysql_error();
			$tmp=0;
		
	}
	
	
	
	$qry2="INSERT INTO `orderdetail`(`orderid`, `fname`, `quantity`, `totalprice`) VALUES ($tid,'$name',$x,$line_cost)";
	//echo $qry2;
	mysql_query($qry2,$con);
		echo mysql_error();
	}	
	//echo "<BR>".$tid."<BR>";
	//echo "<BR>".$total;
	$qry3="UPDATE `ord` SET `totalbill`=$total WHERE orderid=$tid";

	mysql_query($qry3,$con);
		echo mysql_error();
		
	unset($_SESSION['cart']);
	
	echo "<script> alert('Your Order Is  Complete'); </script>";
echo "<script> document.location='food.php'; </script>";
	
	
	
?>