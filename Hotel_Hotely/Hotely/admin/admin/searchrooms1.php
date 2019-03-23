<?php 
include('header.php'); 
$i1=$_REQUEST['i1'];
$i2=$_REQUEST['nop'];
$i3=$_REQUEST['filter'];
$i4=$_REQUEST['cin'];
$i5=$_REQUEST['cout'];

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
       <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
			<form class="form-horizontal" action="bookroom.php" method="post">
              <div class="box-body">
            
			
				<div class="form-group">
            	 <div class="btn-group" style="margin-left:50px;" data-toggle="buttons">
          <?php
			$sql1="select * from room where cid='$i3' and accomodation='$i2' and roomname not in (select roomno from booking) limit 1";
			//echo $sql1;
			$result1=mysql_query($sql1);
			$row1=mysql_fetch_array($result1);
			$num=mysql_num_rows($result1);
			
			if($num>0)
			{
				$rand=$row1['roomname'];
				echo $rand;
			}
			else
			{
			$sql2="select * from room where cid='$i3' and accomodation='$i2' and roomname in (select roomno from booking where `checkin`>'$i5' or `checkout`<'$i4') limit 1";
			//echo $sql1;
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
					?>	
		</label>
							<input type="hidden" value="<?php echo $i1;?>" name="nperson">
				<input type="hidden" value="<?php echo $i2;?>" name="nop">
				<input type="hidden" value="<?php echo $i3;?>" name="filter">
				
				<input type="hidden" value="<?php echo $i4;?>" name="cin">
				<input type="hidden" value="<?php echo $i5;?>" name="cout">
				
                  </div>
                </div>
            
			<?php 	
			
			?>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="" class="btn btn-default"><a href="rooms.php" >Cancel</a></button>
                <button type="submit" class="btn btn-info pull-right">Book Now</a></button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
           
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include('footer.php'); ?>