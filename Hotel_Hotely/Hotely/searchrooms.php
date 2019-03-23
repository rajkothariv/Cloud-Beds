<?php 
session_start();
include("connection.php");
$i4=$_POST['checkin'];
$i5=$_POST['checkout'];
$i2=$_POST['nop'];
$i3=$_POST['category'];
$uid1=$_SESSION['loginuserid'];
if($i4<=$i5)
{

			$sql1="select * from room where cid='$i3' and accomodation='$i2' and roomname not in (select roomno from booking) limit 1";
			//echo $sql1;
			$result1=mysql_query($sql1);
			$row1=mysql_fetch_array($result1);
			$num=mysql_num_rows($result1);
			
			if($num>0)
			{
				$rand=$row1['roomname'];
			//	echo $rand;
			}
			else
			{
			$sql2="select * from room where cid='$i3' and accomodation='$i2' and roomname in (select roomno from booking where `checkin`>'$i5' or `checkout`<'$i4') limit 1";
			//echo $sql2.mysql_error();
			$result2=mysql_query($sql2);
			$row2=mysql_fetch_array($result2);
			$num1=mysql_num_rows($result2);
			if($num1>0)
			{
				$rand=$row2['roomname'];
			}
			else
			{
				$rand="Room Not Available";
			}
				
			}
	
if($rand!="Room Not Available")
{
echo "<script> alert('Please Confirm Your Booking Detail !!!');</script> ";
echo "<script> document.location='confirmbooking.php?uid=$uid1& cind=$i4 & coutd=$i5 & nop1=$i2 & cat1=$i3 & room1=$rand'; </script>";
//header("location:confirmbooking.php?uid=$uid1& cind=$i4 & coutd=$i5 & nop1=$i2 & cat1=$i3 & room1=$rand");
}	
else{
	
	
echo "<script> alert('Room Not Available '); </script>";
echo "<script> document.location='booking-page.php'; </script>";
}
} else { 
echo "<script> alert('Checkout date should be larger than or equal to checkin date'); </script>";
echo "<script> document.location='booking-page.php'; </script>";

}				?>	