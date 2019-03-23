<?php include('header.php'); 

?>
  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper" style="height:5000px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Book
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-bed"></i> Home</a></li>
        <li><a href="rooms.php">Book</a></li>
		
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <!-- /.row -->
      <!-- Main row -->
      <div class="col-md-6">
       <div class="box box-info" style="width:1100px;height:4000px;">
            
            <!-- /.box-header -->
            <!-- form start -->
			<form class="form-horizontal" action="" method="post" style="width:2000;">
              <div class="box-body" style="width:1000px;">
				Select Date: <input type="date" name="d1">
				
			  <button type="submit" name="submit"class="btn btn-info ">View Bookings</a></button>
			</form> <br>
				<br>
				<table style="border:1px ;width:1300px;border-spacing:10px;border-collapse:separate" >
				<td style="background-color:gold;width:20px;height:20px;text-align:center" ></td>
				<td> - Booked </td>
				<td style="background-color:green;width:20px;height:20px;text-align:center" ></td>
				<td> - Empty </td>
				</td>
				</table> <br> 
				<table class="mainbox" style="border:1px ;width:1000px;border-spacing:10px;border-collapse:separate;margin-top:-100px;" >
				<?php if(isset($_POST['submit']))
				{
					$a=$_REQUEST['d1'];
					echo "<h4 style='margin-left:300px;'> Bookings for date ".$a."</h4>";
					$sql="select * from room  ";
					$result=mysql_query($sql);
					$i=0;?> <tr> <?php
					while($row=mysql_fetch_array($result))
					{
						if($i==3)
						{ $i=0;?>
							</tr> <tr>
						<?php } ?>
						<?php 
						$rname=$row['roomname'];
						$sql1="select * from `booking` where  `roomno` = '$rname'";
						
						$result1=mysql_query($sql1);
						$num1=mysql_num_rows($result1);
						
						if($num1==0)
						{	
						?>
						
						<td style="background-color:green;width:250px;height:190px;text-align:center;color:white;" ><i class="fa fa-bed"></i><br><?php echo $row['roomname']; ?></td>
						<?php } ?>
						<?php
						if($num1>0) {
							$flag=0;
							while($row1=mysql_fetch_array($result1))
							{
								
							if($row1['checkin']<=$a && $row1['checkout']>=$a)
							{
								$flag=1;
								$temp=$row1['uid'];
								$sql3="select * from user where `uid`=$temp";
								
								$result3=mysql_query($sql3);
								$row3=mysql_fetch_array($result3);
								if($row1['ispayment'])
								{
									$pay="yes";
									$abc="Checkin Date: ".$row1['checkin']."<br>"."Checkout Date: ".$row1['checkout']."<br>"."Name of Customer:".$row3['name']."<br>"."Mobile No: ".$row3['mobileno']."<br>"."Amount: ".$row1['billamount']."<br>Payment: ".$pay."<form class='form-horizontal' action='updatebooking.php' method='post' style='width:2000;'>
			<input type='hidden' name='a' value='".$row1['checkin']."'>
			<input type='hidden' name='b' value='".$row1['checkout']."'>
			<input type='hidden' name='c' value='".$row3['name']."'>
			<input type='hidden' name='d' value='".$row3['mobileno']."'>
			<input type='hidden' name='e'  value='".$row1['billamount']."'>
				<input type='hidden' name='f'  value='".$row1['ispayment']."'>
				<input type='hidden' name='g'  value='".$row1['bid']."'>
			  <button type='submit' name='submit'class='btn btn-info '>Edit Booking</a></button>
			  <button type='submit' name='submit'class='btn btn-info 'formaction='html2pdf1/test.php'>Generate Bill</a></button></form> <br>";
								}
								else
								{
									$pay="no";
									$abc="Checkin Date: ".$row1['checkin']."<br>"."Checkout Date: ".$row1['checkout']."<br>"."Name of Customer:".$row3['name']."<br>"."Mobile No: ".$row3['mobileno']."<br>"."Amount: ".$row1['billamount']."<br>Payment: ".$pay."<form class='form-horizontal' action='updatebooking.php' method='post' style='width:2000;'>
			<input type='hidden' name='a' value='".$row1['checkin']."'>
			<input type='hidden' name='b' value='".$row1['checkout']."'>
			<input type='hidden' name='c' value='".$row3['name']."'>
			<input type='hidden' name='d' value='".$row3['mobileno']."'>
			<input type='hidden' name='e'  value='".$row1['billamount']."'>
				<input type='hidden' name='f'  value='".$row1['ispayment']."'>
				<input type='hidden' name='g'  value='".$row1['bid']."'>
			  <button type='submit' name='submit'class='btn btn-info '>Edit Booking</a></button>
			  <button type='submit' name='submit'class='btn btn-info 'formaction='html2pdf1/test.php'>Generate Bill</a></button></form> <br>";
								}
								
						 	}
							
						
							}
							
						
							if($flag==1) {?>
	
						<td class="def "style="background-color:gold;width:250px;height:180px;text-align:center;color:black;"><?php echo $row['roomname']; ?> <div class="abc" style="text-align:left;background-color:gold;width:250px;height:180px;padding:5px;color:black;display:none;" ><?php echo $abc;  ?>	</td>
						</a>
					
					<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
    $('.def').hover(function () {
        $('.abc').toggle(150);
    });
</script>
					
	
	</div> <br><br>
	
							<?php } else { ?> 
						<td style="background-color:green;width:10px;height:20px;text-align:center;color:white;" ><i class="fa fa-bed" style="height"></i><br><?php echo $row['roomname']; ?></td>
							
							<?php } } ?>
						<?php
								$i++;	} }	?>
				</table>
				<div class="form-group">
            	 <div class="btn-group" style="margin-left:50px;" data-toggle="buttons">
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            
          </div>
           
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include('footer.php'); ?>