  <?php include('header.php'); 
$i1=$_REQUEST['i1'];
$i2=$_REQUEST['nop'];
$i3=$_REQUEST['filter'];
$i4=$_REQUEST['cin'];

$i5=$_REQUEST['cout'];
if($i4<=$i5)
{
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
			$sql1="select * from room where cid='$i3' and accomodation='$i2' and roomname not in (select roomno from booking where `checkin`<='$i5' and `checkout`>='$i4')";
      //echo $sql1;
			
			$result1=mysql_query($sql1);
			while($row1=mysql_fetch_array($result1))
			{	?>			
		<label class="btn btn-primary"  style="margin-left:50px;margin-bottom:20px;">  
		 &nbsp; &nbsp; &nbsp;<input type="radio"  value= " <?php echo $row1['roomname']; ?>"name="options" id="option2" autocomplete="off">  <?php echo $row1['roomname']; ?>
		</label>
			<?php } 	$sql2="select * from room where cid='$i3' and accomodation='$i2' and roomname in (select roomno from booking where `checkin`<='$i5' and `checkout`>='$i4')";
			$result2=mysql_query($sql2);
			$num=mysql_num_rows($result2);
			if($num>0)
			{
			while($row2=mysql_fetch_array($result2)) 
			{				
?>
			<label class="btn btn-warning" disabled style="margin-left:50px;"> 
		&nbsp; &nbsp; &nbsp;<input type="radio"  value= " <?php echo $row2['roomname']; ?>"name="options" id="option2" autocomplete="off">  <?php echo $row2['roomname']; ?>
			</label><?php } }?>
  
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
<?php }
else
{
	echo "<script> alert('Checkout date should be larger than or equal to checkin date'); </script>";
	echo "<script> document.location='book.php'; </script>";
}
include('footer.php'); ?>