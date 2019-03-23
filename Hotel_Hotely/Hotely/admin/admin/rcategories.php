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
        <li><a href="#"><i class="fa fa-share"></i> Home</a></li>
        <li class="active">Room Categories</li>
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
                  <th>Category</th>
                  <th>Rate</th>
                  <th>Description</th>
				  <th> Ac? </th>
				  <th> Wifi? </th>
				  <th> MineralWater? </th>
				  <th> OneCallDoc? </th>
				  <th>Action</th>
                </tr>
                </thead>
                
				<tbody>
                <?php 
			$sql="select * from categoty";
			
			$result=mysql_query($sql);
			while($row=mysql_fetch_array($result))
			{
				$id=$row['cid'];
			?>
				<tr>
                  <td><?php echo $row['cname']; ?></td>
                  
				  <td><?php echo $row['price']; ?> 
                  </td>
				  
                  <td><?php echo $row['desc']; ?></td>
				  <?php 
				  if($row['isAC']=='1')
				  { ?>
					<td> Yes</td>
                    
				  <?php }
					else
				  { ?>
					<td> No</td>
                    <?php 
				  } ?>
				  <?php 
				  if($row['wifi']=='1')
				  { ?>
					<td> Yes</td>
                    
				  <?php }
					else
				  { ?>
					<td> No</td>
                    <?php 
				  } ?>
				  <?php 
				  if($row['isMWater']=='1')
				  { ?>
					<td> Yes</td>
                    
				  <?php }
					else
				  { ?>
					<td> No</td>
                    <?php 
				  } ?>
				  <?php 
				  if($row['onecalldoc']=='1')
				  { ?>
					<td> Yes</td>
                    
				  <?php }
					else
				  { ?>
					<td> No</td>
                    <?php 
				  } ?>
				  
                  <td> <a href="editrcategories.php?id=<?php echo $row['cid']; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="deletercategories.php?i3=<?php echo $row['cid']; ?>"><i class="fa fa-trash-o"></i> Delete</a> </td>
			</tr> <?php } ?>
                 </tbody>
              </table>
            </div>
			     <button type="button" class="btn btn-warning"><i class="fa fa-align-left"></i>  <a href="addrcategories.php"><font style="text-decoration:none;color:white;"> Add Categories</a></button>
                 
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