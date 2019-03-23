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

<?php 
 include('header.php'); 

include('connection.php');
$a=$_REQUEST['options'];
$b=$_REQUEST['nperson'];
$c=$_REQUEST['nop'];
$d=$_REQUEST['filter'];
$e=$_REQUEST['cin'];
$f=$_REQUEST['cout'];
echo $a.$b.$c.$d.$e.$f;
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
              <h3 class="box-title">Confirm Booking </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form class="form-horizontal" action="confirmbooking.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Customer Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="i1" value="<?php echo $b;?>" 	readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No. of Persons</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="i2" value="<?php echo $c;?>" 	readonly>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Type of Room</label>

                  <div class="col-sm-10">
        		   <?php $sql="select * from categoty where cid='$d'";
			   
				   $result=mysql_query($sql);
				   $row=mysql_fetch_array($result);
				   $hardik=$row['price'];
				   $top=$hardik*$c;
				   ?>
                  <input type="text" class="form-control" name="i3" value="<?php echo $row['cname'];?>" 	readonly>
				  </div>
				  
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Check in Date</label>
					
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="i4" value="<?php echo $e;?>" 	readonly>
				   
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Check out Date</label>
					
                  <div class="col-sm-10">
                   <input type="text" class="form-control" name="i5" value="<?php echo $f;?>" 	readonly>
				   
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Room No</label>
					
                  <div class="col-sm-10">
                   <input type="text" class="form-control" name="i6" value="<?php echo $a;?>" 	readonly>
				   
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Total Price</label>
					
                  <div class="col-sm-10">
                   <input type="text" class="form-control" name="i7" value="<?php echo $top;?>" 	readonly>
				   
                  </div>
                </div>
				<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Payment Received</label>
					
				<div class="col-sm-10">
        			<label class="switch">
					
					<input type="checkbox" value="1" name="i8" > 
					<div class="slider round"></div>
					</label>
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
                <button type="submit" class="btn btn-info pull-right" name="confirm">Confirm</a></button>
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