


<?php
include('connection.php');
session_start();
$id=$_SESSION['lastid'];

?>
<body onLoad="emaill">
<font face="Segoe Ui" size="6" color="#666666" align="center"><center>Local Shop Mall <br /><hr />
<font face="Segoe Ui" size="5" color="#666666" align="center"></font>
<div style="background-color:#666666;height: 35px;margin-top:10px;"><font face="Segoe Ui" color="#FFFFFF" size="4" style="margin-top:10px;"><center>Order Confirmation</center></font></div></center></font><BR />
<font face="Segoe Ui" size="3" color="#000000" align="center" style='margin-left:30px;'>YOUR ORDER HAS BEEN PLACED.</font><BR />
<br />
<font face="Segoe Ui" size="3" color="#000000" align="center" style='margin-left:30px;'>You will also recive an order confirmation email with the details of your order.</font><BR /><br /> 

<font face="Segoe Ui" size="5" color="#000000" style='margin-left:30px;'> <b> Order Receipt </b><br /> </font>


<?php
$sql="select * from `order` where `id`=$id";

$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$bno=$row['buyer_no'];
$sno=$row['shopno'];
$top=$row['total_price'];
$date=$row['date'];
$ip=$row['ipaddress'];
$deltype=$row['deltype'];
$ship=$row['shipadd'];
$bill=$row['billadd'];

$sql1="select * from `buyer_registration` where `mobile`=$bno";

$result1=mysql_query($sql1);
$row1=mysql_fetch_array($result1);
$name=$row1['name'];
$mob=$row1['mobile'];
$email=$row1['email'];


?>
<br />

<font face="Segoe Ui" size="4" color="#666666" style='margin-left:30px;'> <b> Order Date: </b> <?php echo $date; ?> </font>

<font face="Segoe Ui" size="4" color="#666666" style='margin-left:650px;'> <b> Order Id: </b> <?php echo "LSM - ".$id; ?></font> 
<br /><br />

<table  CELLSPACING=0 style="border-width:thin;width:30%; margin-left:30px; ">

<tr>    <td bgcolor="#999999" style="heght:10%"> <font color="#333333"	> <font color="white" style="font-family:Segoe Ui"><center>BILLING INFORMATION </font></td> </tr></center>

<tr>    <td bgcolor="#CCCCCC"> <font color="#333333"style="font-family:Segoe Ui"	><b> <?php echo $name?> </b><?php echo "<br>".$bill."<br><br>"."<b>Mobile: </b>".$mob."<br><b>Email: </b>".$email;?> </font></td> </tr>

</tr>
</table>

<table  CELLSPACING=0 style="border-width:thin;width:30%; margin-left:650px; margin-top:-214px; ">
<tr>    <td bgcolor="#999999"> <font color="#333333"	> <font color="white" style="font-family:Segoe Ui"><center>SHIPPING INFORMATION </font></td> </tr></center>

<tr>    <td bgcolor="#CCCCCC"> <font color="#333333"style="font-family:Segoe Ui"	><b> <?php echo $name?> </b><?php echo "<br>".$ship."<br><br>"."<b>Mobile: </b>".$mob."<br><b>Email: </b>".$email;?> </font></td> </tr>

</tr>

</table><br /><br />
<table  CELLSPACING=0 style="border-width:thin;width:30%; margin-left:30px; height:20%">
<tr>    <td bgcolor="#999999"  style="height:10px;"> <font color="#333333"	> <font color="white" style="font-family:Segoe Ui"><center>PAYMENT METHOD  </font></td> </tr></center>

<tr>    <td bgcolor="#CCCCCC"> <font color="#333333"style="text-transform:capitalize;font-family:Segoe Ui"	> <center><?php  echo $deltype;?> </font></td> </tr></center>

</tr>

</table>

<table  CELLSPACING=0 style="border-width:thin;width:30%; margin-left:650px; height:20%;margin-top:-100px;">

<tr>    <td bgcolor="#999999"  style="height:10px;"> <font color="#333333"	> <font color="white" style="font-family:Segoe Ui"><center>SHIPPING METHOD (PENDING) </font></td> </tr></center>

<tr>    <td bgcolor="#CCCCCC"> <font color="#333333"style="text-transform:capitalize;font-family:Segoe Ui"	> <center><?php  echo "STANDARD";?> </font></td> </tr></center>

</tr>
</table>

<br /><br />

<table  CELLSPACING=0 style="border-width:thin;width:76.5%; margin-left:30px;">


<tr>    <td bgcolor="#999999"> <font color="#333333"	> <font color="white" style="font-family:Segoe Ui">NAME </font></td> 

<td bgcolor="#999999"> <font color="#333333"	> <font color="white" style="font-family:Segoe Ui">SKU </font></td>
<td bgcolor="#999999"> <font color="#333333"	> <font color="white" style="font-family:Segoe Ui">QTY.</font></td>
<td bgcolor="#999999"> <font color="#333333"	> <font color="white" style="font-family:Segoe Ui;text-align:right">TOTAL</font></td>
 </tr>
 <?php
$sql3="select * from `order_detail` where `oid`=$id";
$result3=mysql_query($sql3);

while($row3=mysql_fetch_array($result3))
{
		$pid=$row3['pid'];
		$qua=$row3['quantity'];
		$price=$row3['price'];
		$sql4="select * from `seller_product` where `id`=$pid";
	
		$result4=mysql_query($sql4);
		$row4=mysql_fetch_array($result4);
		$pname=$row4['productname'];?>
		<tr style="height:20pX;">    
		<td bgcolor="#CCCCCC"  style=" border-bottom:2px solid  ;BORDER-COLOR:#333333;"> <font color="#333333"style="font-family:Segoe Ui;height:20px;"> <?php echo $pname; ?> </font></td> 
		<td bgcolor="#CCCCCC" style=" border-bottom:2px solid  ;BORDER-COLOR:#333333;"> <font color="#333333"style="font-family:Segoe Ui;"> <?php echo "LSM - ".$pid; ?></font></td>
		<td bgcolor="#CCCCCC" style=" border-bottom:2px solid  ;BORDER-COLOR:#333333;"> <font color="#333333"style="font-family:Segoe Ui;"> <?php echo $qua; ?></font></td>
		<td bgcolor="#CCCCCC" style=" border-bottom:2px solid  ;BORDER-COLOR:#333333;"> <font color="#333333"style="font-family:Segoe Ui;"> <?php echo $price; ?></font></td>
		
		

<?php				
}
?>
<tr> <td> </td> </tr>
<tr> 

<?php
if($top<=100)
{
	$sopch=25;
	$to=$sopch+$top;
}
else if($top<=200 && $top >100)
{
	$sopch=50;
	$to=$sopch+$top;
}
else if($top<=300 && $top >200)
{
	$sopch=75;
	$to=$sopch+$top;
}
else
{
	$sopch=100;
	$to=$sopch+$top;
}

?>
<td colspan="4"bgcolor="#FFFFFF"  > <font color="#333333"style="font-family:Segoe Ui;height:20px;margin-left:850px;"> <?php echo "Subtotal: Rs. ".$top; ?> </font></td> 
</tr>

<tr> 
<td colspan="4"bgcolor="#FFFFFF"  > <font color="#333333"style="font-family:Segoe Ui;height:20px;margin-left:691px;"> <?php echo "Shopping & Handling Standard: Rs. ".$sopch; ?> </font></td> 
</tr>

<tr> 
<td colspan="4"bgcolor="#FFFFFF"  style=" border-bottom:2px solid  ;BORDER-COLOR:#333333"> <font color="#333333"style="font-family:Segoe Ui;height:20px;margin-left:886px;"> <?php echo "Tax: Rs. 0"; ?> </font></td> 
</tr>
<tr> <td> </td> </tr>
<tr> 
<td colspan="4"bgcolor="#CCCCCC"  style=" border-bottom:2px solid  ;BORDER-COLOR:#333333"> <font color="#333333"style="font-family:Segoe Ui;height:20px;margin-left:871px;"> <?php echo "<b> Total: Rs. ".$to."</b>"; ?> </font></td> 
</tr>

</table>
<br />
<center>
<button style="margin-right: 0;margin-left:-200px;" type="Submit" name="submit" class="btn btn-grey"> Save </button>   
<button style="margin-right: 0;margin-left:-200px;" type="Submit" name="submit" class="btn btn-grey" onClick="printd()"> Print </button>          </center> </div>

</tr></tr></body>
<script>
function printd()
{
		window.print();
}
</script>

<script>

function emaill()
{
<?php
$alldata="Hello";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
$headers .=	 "From:jay.kothari.v@gmail.com\r\n";
mail("$email","Welcome to Local Shop Mall","$alldata","$headers"); ?>}
</script>

