
<?php include('header.php'); 
$id=$_REQUEST['id'];
$sql="select * from user where uid=$id";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);

?>
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
        <li><a href="rooms.php">Users</a></li>
		<li>Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <!-- /.row -->
      <!-- Main row -->
      <div class="col-md-6">
       <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="updateuser.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="i1" value="<?php echo $row['name']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Mobile No</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="i2" value="<?php echo $row['mobileno']; ?>">
                  </div>
                </div>
				
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="i3" value="<?php echo $row['email']; ?>">
                  </div>
                </div>
					
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="i4" value="<?php echo $row['uname']; ?>">
                  </div>
                
				
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="i5" value="<?php echo $row['password']; ?>">
                  </div>
                
				
                </div>
<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">City</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="i6" value="<?php echo $row['city']; ?>">
                  </div>
                
				
                </div>

				<input type="hidden" name="i7" value="<?php echo $id;?>"> 
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="" class="btn btn-default"><a href="rooms.php" >Cancel</a></button>
                <button type="submit" class="btn btn-info pull-right">Update</a></button>
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
  <style>
 
</style>

 <?php include('footer.php'); ?>