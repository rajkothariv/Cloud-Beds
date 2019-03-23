<?php
include('connection.php');
 require("html2fpdf.php"); 
$id=$_REQUEST['i3'];
//echo $id;
      $html = "<body bgcolor='yellow'><div >
<font ><center><h2>Hotel Hotely</h2> <br />
<font ></font></div><div ><font style='font-family:segoe ui;'><center>Order Confirmation</center></font></div><BR />
<font >YOUR ORDER HAS BEEN PLACED.</font><BR />
<br />
<font >You will also recive an order confirmation email with the details of your order.</font><BR /><br /> 

<font ><b>Order Receipt</b><br/> </font></body>";
      $query = "SELECT * FROM `ord` where `orderid`=$id";

	  
      $result = mysql_query($query);
     $row = mysql_fetch_array($result);
     	$userid=$row['userid'];
		$date=$row['date'];
		$totalbill=$row['totalbill'];
		
      
		$query1="select * from `user` where `uid`=$userid";
		$result1=mysql_query($query1);
		$row1=mysql_fetch_array($result1);
		$cname=$row1['uname'];
		
		  $html .= '<div>
                      <label><br>Order Id:</label> '.'HH - '. $id.'<br><br><br>
					  <br>Customer Name:'. $row1['name'].'<br><br><br>
					  <br>Email:'. $row1['email'].'&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                      <label>Mobile:</label> '.  $row1['mobileno']. '<br>'.
					  '<br><br><br>
					  <br><br><br><br>
					  <br>Payment Type: '. 'Cash '.'<br>'.
					  '<br><br><br>
					  <br>'.'
					  
					  
					  
                    </div>';
		$html .='<br><Br><div> <table border=2 align=center width=90%> <tr> <th width=40%>Food </th> <th width=20%> Rate </th> <th width=20%>Quantity</th><th width=20%>Price </th></tr> ';
		
		$sql4="select * from orderdetail where orderid='$id'";
		$result4=mysql_query($sql4);
		$price=0;
		while($row4=mysql_fetch_array($result4))
		{
		
		$html .='<tr> <td>'.$row4['fname'].' </td> <td align=center> '.$row4['totalprice']/$row4['quantity'].' </td> <td align=center>'.$row4['quantity'].' </td><td > Rs. '.$row4['totalprice'].'</th></tr> ';
		$price+=$row4['totalprice'];
		
		}
			
			$a=100;
			$b=10;
			$price1=$price;
			$price+=$a+$b;	
			
	 $html.='<tr><td colspan=3 align=right>Subtotal: </td><td> Rs. '.$price1.'</td><tr><td colspan=3 align=right>Service Tax: </td><td> Rs. 100'.'</td></tr><tr><td colspan=3 align=right>Swachh Bharat Cess: </td><td> Rs. 10</td><tr><td colspan=3 align=right><b>Total Price: </td><td> Rs. '.$price.'</td></b></tr> </table></div>';		
	 
	 
     
$html.='<br><br><Br><br><br><div><font align=right>For Hotel Hotely </div></font>';	
      $pdf = new HTML2FPDF('P', 'mm', 'Letter'); 
      $pdf->AddPage(); 
      $pdf->WriteHTML($html); 
      $pdf->Output('test2.pdf', 'F');
	echo "<script> document.location='test2.pdf'; </script>";
?> 