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
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
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
              <h3 class="box-title">Edit Food Order </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="updatefcategories.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="i1" value="<?php echo $name; ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Order ID</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="i1" value="'FHH'.<?php echo $id; ?>">
                  </div>
                </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">One Call Doc</label>

                  <div class="col-sm-10">
        			<label class="switch">
					<?php if($row['onecalldoc']==1) { ?>
					<input type="checkbox" value="yes" name="onecalldoc" checked> <?php } 
					else
					{ ?>
						<input type="checkbox" value="yes" name="onecalldoc" >
					<?php } ?>
					<div class="slider round"></div>
					</label>
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
 <?php include('footer.php'); ?>