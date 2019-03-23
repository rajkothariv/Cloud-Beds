<?php include('header.php'); 

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
            <div class="box-header with-border">
              <h3 class="box-title">Book Rooms </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form class="form-horizontal" action="searchrooms.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Customer Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="i1" placeholder="Enter Customer Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No. of Persons</label>

                  <div class="col-sm-10">
                    <select name="nop"  style="width:30%">
				   
  <option value="1">1</option> 
   <option value="2">2</option> 
    <option value="3">3</option> 
	 <option value="4">4</option> 

	</select>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Type of Room</label>

                  <div class="col-sm-10">
                   <select name="filter"  >
				   <?php $sql="select * from categoty"; 
				   $result=mysql_query($sql);
				   $i=1;
				   while($row=mysql_fetch_array($result))
				   {
					  
				   ?>
  <option value="<?php echo $i;?>"><?php echo $row['cname']; ?></option> 
				   <?php $i++;} ?>
	</select>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Check in Date</label>
					
                  <div class="col-sm-10">
                   <input type="date" name="cin">
				   
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Check out Date</label>
					
                  <div class="col-sm-10">
                   <input type="date" name="cout">
				   
                  </div>
                </div>
				<div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="" class="btn btn-default"><a href="rooms.php" >Cancel</a></button>
                <button type="submit" class="btn btn-info pull-right">Search Rooms</a></button>
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