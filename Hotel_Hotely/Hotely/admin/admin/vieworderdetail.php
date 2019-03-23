<style>
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<?php include('header.php'); 

$id=$_REQUEST['i3'];

$sql="select * from ord where orderid=$id";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Order
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-knife"></i> Home</a></li>
        <li><a href="rooms.php">Orders</a></li>
		<li>View Detail</li>
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
              <h3 class="box-title">View Order Detail </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="vieworders.php">
              <div class="box-body">
                <div class="form-group">
                  
                  
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Order ID</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="i2" value="<?php echo $id; ?>" readonly>
                  </div>
                </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Order Contents</label>

                  <div class="col-sm-10">
        			<table class="table table-bordered table-striped">
					<tr>
					<th> Food Name </th>
					<th> Quantity </th>
					<th> Rate </th>
					<th> Price </th>
					<?php $sql1="select * from orderdetail where `orderid` ='$id'";
				
					$result1=mysql_query($sql1);
					$num=mysql_num_rows($result1);
					$hardik=0;
					while($row1=mysql_fetch_array($result1))
					{
					
						?>
						<tr>
						<td> <?php echo $row1['fname']; ?></td>
						<td><?php  echo $row1['quantity']; ?></td>
						<td><?php  echo $row1['totalprice']/$row1['quantity']; ?></td>
						<?php $hardik+=$row1['totalprice']; ?>
						<td> <?php echo $row1['totalprice']; ?></td>
						</tr>
						<?php 
					} ?>
						<tr>
						<th colspan="3"> Total Price </th>
						<td> <?php echo $hardik; ?>
						</tr>
					</table>
                  </div>
                </div>
				<input type="hidden" name="i3" value="<?php echo $id;?>"> 
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="" class="btn btn-default"><a href="vieworders.php" >Back</a></button>
              
              
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