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
        Rooms
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-bed"></i> Home</a></li>
        <li class="active">Rooms</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- Main row -->
      <div class="row">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
			
            <!-- /.box-header -->
            <div class="box-body">
<div id="Filters">
            <h5>Filter by Category</h5>
            <select name="filter" onchange="filter(this.value)">
  <option value="0">All Categories</option> 
  <option value="1">Luxury</option> 
  <option value="2">Deluxe</option>
	<option value="3">Comfort</option>  
</select><br>
<div id="results"><br> 
            <table id="example1" class="table table-bordered table-striped">
                <thead>
				
                <tr>
                  <th>Room Name</th>
                  <th>Category</th>
                  <th>Rate</th>
                  <th>Accomodation</th>
				  <th>Image</th>
				  <th>Action</th>
                </tr>
                </thead>
                
				<tbody>
                <?php 
			$sql="select * from room";
			
			$result=mysql_query($sql);
			while($row=mysql_fetch_array($result))
			{
			?>
				<tr>
                  <td><?php echo $row['roomname']; ?></td>
                  <?php 
						$raj=$row['roomid'];
					
						$temp=$row['cid'];
						$sql1="select * from categoty where cid=$temp"; 
						
						$result1=mysql_query($sql1);
						$row1=mysql_fetch_array($result1);
						$price=$row1['price'];
						?>
				  <td><?php echo $row1['cname']; ?> 
                  </td>
                  <td><?php echo $row['accomodation']*$price; ?></td>
                  <td> <?php echo $row['accomodation']; ?></td>
                  <td><img src="../../Images/<?php echo $row['image'];?>" height="100" width="150"></td>
				  <td> <a href="editrooms.php?id=<?php echo $row['roomid']; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="deleterooms.php?i3=<?php echo $row['roomid']; ?>"><i class="fa fa-trash-o"></i> Delete</a> </td>
			</tr> <?php } ?>
                 </tbody>
              </table>
            </div>
            </div>
                
                


  
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