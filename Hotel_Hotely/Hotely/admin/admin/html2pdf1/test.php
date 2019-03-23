<?php
include('connection.php');
 require("html2fpdf.php"); 
$id=$_REQUEST['g'];
      $html = "<body bgcolor='yellow'><div >
<font ><center><h2>Hotel Hotely</h2> <br />
<font ></font></div><div ><font style='font-family:segoe ui;'><center>Booking Confirmation</center></font></div><BR />
<font >YOUR BOOKING HAS BEEN PLACED.</font><BR />
<br />
<font >You will also recive an booking confirmation email with the details of your booking.</font><BR /><br /> 

<font ><b>Booking Receipt</b><br/> </font></body>";
      $query = "SELECT * FROM `booking` where `bid`=$id";

	  
      $result = mysql_query($query);
     $row = mysql_fetch_array($result);
     	$bid=$row['bid'];
		$uid=$row['uid'];
		$checkin=$row['checkin'];
		$checkout=$row['checkout'];
		$roomno=$row['roomno'];
		$billamount=$row['billamount'];
		$ispayment=$row['ispayment'];
      
		$query1="select * from `user` where `uid`=$uid";
		$result1=mysql_query($query1);
		$row1=mysql_fetch_array($result1);
		$query2="select * from `room` where `roomname`='$roomno'";
		
		$result2=mysql_query($query2);
		$row2=mysql_fetch_array($result2);
		$cid=$row2['cid'];
		$nop=$row2['accomodation'];
		$query3="select * from `categoty` where `cid`=$cid";
		$result3=mysql_query($query3);
		$row3=mysql_fetch_array($result3);
		$cname=$row3['cname'];
		
		$price=$row3['price'];
	      $html .= '<div>
                      <label><br>Order Id:</label> '.'HH - '. $row['bid'].'<br><br><br>
					  <br>Customer Name:'. $row1['name'].'<br><br><br>
					  <br>Email:'. $row1['email'].'&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                      <label>Mobile:</label> '.  $row1['mobileno']. '<br>'.
					  '<br><br><br>
					  <br><br><br><br>
					  <br>Payment Type: '. 'Cash '.'<br>'.
					  '<br><br><br>
					  <br>'.'
					  
					  
					  
                    </div>';
		$html .='<br><Br><div> <table border=2 align=center width=90%> <tr> <th width=40%>Room Category </th> <th width=20%> Rate </th> <th width=20%>No. of Person </th><th width=20%>Rate </th></tr> ';
		
		
		
		$html .='<tr> <td>'.$cname.' </td> <td align=center> '.$price.' </td> <td align=center>'.$nop.' </td><td > Rs. '.$nop*$price.'</th></tr> ';
		
			$a=100;
			$b=10;
			$price+=$a+$b;	
	 $html.='<tr><td colspan=3 align=right>Subtotal: </td><td> Rs. '.$nop*$price.'</td><tr><td colspan=3 align=right>Service Tax: </td><td> Rs. 100'.'</td></tr><tr><td colspan=3 align=right>Swachh Bharat Cess: </td><td> Rs. 10</td><tr><td colspan=3 align=right><b>Total Price: </td><td> Rs. '.$nop*$price.'</td></b></tr> </table></div>';		
     
$html.='<br><br><Br><br><br><div><font align=right>For Hotel Hotely </div></font>';	
      $pdf = new HTML2FPDF('P', 'mm', 'Letter'); 
      $pdf->AddPage(); 
      $pdf->WriteHTML($html); 
      $pdf->Output('test.pdf', 'F');
		echo "<script> document.location='test.pdf'; </script>";
?> 