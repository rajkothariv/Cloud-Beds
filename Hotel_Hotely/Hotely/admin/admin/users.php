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
        Users
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Users</li>
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
                  <th>Name</th>
                  <th>Mobile No</th>
                  <th>Email</th>
				  <th> Username </th>
				  <th> Password </th>
				  <th> City </th>
				<th>Action</th>
                </tr>
                </thead>
                
				<tbody>
                <?php 
			$sql="select * from user";
			
			$result=mysql_query($sql);
			while($row=mysql_fetch_array($result))
			{
				$id=$row['uid'];
			?>
				<tr>
                  <td><?php echo $row['name']; ?></td>
                  
				  <td><?php echo $row['mobileno']; ?> 
                  </td>
				  
                  <td><?php echo $row['email']; ?></td>
				  <td><?php echo $row['uname']; ?></td>
				  <td><?php echo $row['password']; ?></td>
				  <td><?php echo $row['city']; ?></td>
				  
                  <td> <a href="edituser.php?id=<?php echo $row['uid']; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="deleteuser.php?i3=<?php echo $row['uid']; ?>"><i class="fa fa-trash-o"></i> Delete</a> </td>
			</tr> <?php } ?>
                 </tbody>
              </table>
            </div>
			     <button type="button" class="btn btn-warning"><i class="fa fa-user"></i>  <a href="adduser.php"><font style="text-decoration:none;color:white;"> Add User</a></button>
                 
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