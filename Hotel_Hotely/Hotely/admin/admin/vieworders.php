<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
function filter(item){
$.ajax({
type: "POST",
url: "filter.php",
data: { value: item},
success:function(data){
   $("#results").html(data);
}
});
}
</script>
<?php include('header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Food Orders
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-spoon"></i> Home</a></li>
        <li class="active">Food</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- Main row -->
      <div class="row">
      <div class="box">
            <div class="box-header">
              
            </div>
			
            <!-- /.box-header -->
            <div class="box-body">
<div id="results"><br> 
            <table id="example1" class="table table-bordered table-striped">
                <thead>
				
                <tr>
                  <th>Order ID</th>
                  <th>Name</th>
                  <th>Mobile</th>
				  <th> Date </th>
				  <th> Total Bill </th>
				  <th> Status </th>
				<th>Action</th>
                </tr>
                </thead>
                
				<tbody>
                <?php 
			$sql="select * from ord";
			
			$result=mysql_query($sql);
			while($row=mysql_fetch_array($result))
			{
				$id=$row['orderid'];
			?>
				<tr>
                  <td><?php echo "FHH".$row['orderid']; ?></td>
                    <?php 
					$temp=$row['userid'];
			$sql1="select * from user where `uid`='$temp'";
			
			$result1=mysql_query($sql1);
			$row1=mysql_fetch_array($result1);
			?>
				  <td><?php echo $row1['name']; ?> 
                  </td>
				  
                  <td><?php echo $row1['mobileno']; ?></td>
				  <td><?php echo $row['date']; ?></td>
				  <td><?php echo $row['totalbill']; ?></td>
				  <td><?php if($row['status']){$temp="Delivered";} else {$temp="Not Delivered";}echo $temp; ?></td>
				
                  <td> <a href="editorder.php?id=<?php echo $row['orderid']; ?>&name=<?php echo $row1['name']; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="deleteorder.php?i3=<?php echo $row['orderid']; ?>"><i class="fa fa-trash-o"></i> Delete</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="vieworderdetail.php?i3=<?php echo $row['orderid']; ?>"><i class="fa fa-eye"></i> View Order</a>
				  &nbsp;&nbsp;&nbsp;&nbsp;<a href="html2pdf1/printbill.php?i3=<?php echo $row['orderid']; ?>"><i class="fa fa-print"></i> Print Bill</a>
				  
				  
			</tr> <?php } ?>
                 </tbody>
              </table>
           
                
                


  
	</div>
			  
        


          <!-- Calendar -->
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include('footer.php'); ?>