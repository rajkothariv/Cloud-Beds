<?php
session_start();
include('connection.php');

if(isset($_SESSION['loginuserid']))
{	
$i4=$_REQUEST['cind'];
$i5=$_REQUEST['coutd'];
$i2=$_REQUEST['nop1'];
$i3=$_REQUEST['cat1'];
$i6=$_REQUEST['room1'];
$uid1=$_SESSION['loginuserid'];
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Booking - Hotel</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Google Font Familys -->	
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="libraries/lib.css">
    <link rel="stylesheet" type="text/css" href="libraries/calender/calendar.css">
	
	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/navigation-menu.css">
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="css/shortcodes.css" />
		
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->

	<a id="top"></a>
		
	<!-- Header Section -->
	<header id="header" class="header-section header-position container-fluid no-padding">
		<!-- Top Header -->
		<div class="top-header container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="logo-block col-md-3"><a href="index.php" title="Hotely"><img src="images/logo.png" alt="Logo" /></a></div>
					<div class="col-md-9 contact-detail">
						<div class="phone">
							<img src="images/phone-ic.png" alt="Phone" />
							<h6>contact us</h6>
							<a href="tell:1800234567890" title="1-800-23-456-7890"> 9876543210</a>
						</div>
						<div class="address">
							<img src="images/address-ic.png" alt="Address" />
							<h6>our office</h6>
							<p>GP AHMEDABAD</p>
						</div>
						<div class="menu-search">
							<div id="sb-search" class="sb-search">
								
							</div>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Top Header /- -->
		<!-- Menu Block -->
		<div class="menu-block">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<nav class="navbar navbar-default ow-navigation">
							<div class="navbar-header">
								<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a href="index.html" title="Hotely" class="navbar-brand">Hotely</a>
							</div>
							<div class="navbar-collapse collapse" id="navbar">
								
								<?php
								include("headermenu.php");
								?>
							</div>
						</nav>
					</div>
					<div class="col-md-2 book-now">
						<a href="#" title="Book Now">Book now</a>
					</div>
					
					<div class="col-md-3  " style="width:150px; "  >	
						
						</div>
					
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
	</header><!-- Header Section /- -->
	
	<main class="site-main page-spacing">
		<!-- Page Banner -->
		<div class="container-fluid page-banner about-banner">
			<div class="container">
				<h3>Confirm Booking</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">booking</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		
		<div class="section-padding"></div>
		
		<!-- Container -->
		<div class="container">
			<div class="row">
				<!-- Contenta Area -->
				<div class="col-md-8 col-sm-8 col-xs-12 content-area">
					<div id="booking-carousel" class="carousel slide booking-carousel" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/booking/booking-slide.jpg" alt="Slide">
							</div>
							<div class="item">
								<img src="images/booking/booking-slide.jpg" alt="Slide">
							</div>
						</div>
						<!-- Controls -->
						<a class="left carousel-control" href="#booking-carousel" role="button" data-slide="prev">
							<span class="fa fa-caret-left" aria-hidden="true"></span>
						</a>
						<a class="right carousel-control" href="#booking-carousel" role="button" data-slide="next">
							<span class="fa fa-caret-right" aria-hidden="true"></span>
						</a>
					</div>
					
					<!-- Form -->
		
	<div style="width: 308px; 
	margin-top: 0px; 
	padding: 28px 25px; 
	background-color: white; 
	border: 1px solid black; 
	border-radius: 5; 
	width:750px;
	left: 50%;
	height:Auto;
	margin-left:0px; 
	top:0px; ">
		
		
			<h3>Confirm Booking</h3>
			<BR><BR>
						<form action="bookingdb.php" method="post" class="row">
					
							<div class="form-group" >
							 <label for="inputPassword3" class="col-sm-2 control-label">Check in date</label>

							 <div class="col-sm-6">
								
								
								 <input type="text" readonly name="checkin" placeholder="Check-in" value="<?php echo $i4?>" class="form-control"/>
								
								
							</div>

					</div>
						<div class="form-group" >
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</div>
						<BR>
						<div class="form-group"  >
							 <label for="inputPassword3" style="width:auto;height:auto;"class="col-sm-2 control-label">Check Out date</label>

							 <div class="col-sm-6">
									<input type="text" readonly name="checkout" placeholder="Check-out" value="<?php echo $i5?>" class="form-control"/>
							</div>
						</div>
						<div class="form-group" >
						&nbsp;&nbsp;&nbsp;
						</div>
					
						<div class="form-group"  >
							 <label for="inputPassword3" style="width:auto;height:auto;margin-top:10px;" class="col-sm-2 control-label">Number Of Person</label>

							 
								<input type="text"  name="nop" style="width:335px;height:auto;margin-top:40px;" readonly="readonly" value="<?php echo $i2;?>" class="form-control"/>
							</div>
								
								
								
						<BR>
					
						<div class="form-group"  >
							 <label for="inputPassword3" style="width:auto;height:auto;" class="col-sm-2 control-label">Room Type</label>

			   <?php $sql3="select * from categoty where cid='$i3'";
			   
				   $result3=mysql_query($sql3);
				   $row3=mysql_fetch_array($result3);
				   $hardik3=$row3['price'];
				   $top3=$hardik3*$i2;
				 //  echo mysql_error()."SDfsdfdS".$row3['cname'];
				   ?>
				   
				   
			<input type="text" style="width:335px;height:auto;margin-left:140px;" name="category" readonly="readonly" value="<?php echo $row3['cname'];?>" class="form-control"/>		
	
				
							</div>
							
		<BR>
						<div class="form-group"  >
							 <label for="inputPassword3" style="width:auto;height:auto;" class="col-sm-2 control-label">Room Number</label>

								<input type="text" style="width:335px;height:auto;margin-left:140px;" name="roomno" readonly="readonly" value="<?php echo $i6;?>" class="form-control"/>		
			 
								
							</div>
								
								
								
					
					

							
							
						<?php
						$loginuserid=$_SESSION['loginuserid'];
						
						$tmp=mysql_query("select * from user where uid='$loginuserid'",$con);
						$row=mysql_fetch_array($tmp);
						
						?>
						
						
													
		<BR>
						<div class="form-group"  >
							 <label for="inputPassword3" style="width:auto;height:auto;" class="col-sm-2 control-label">Name</label>

								
			 <input type="text" name="name" style="width:335px;height:auto;margin-left:140px;"  readonly="readonly" value="<?php echo $row['name'];?>" class="form-control"/>
								
							</div>
								
						
						
							<BR>
						<div class="form-group"  >
							 <label for="inputPassword3" style="width:auto;height:auto;" class="col-sm-2 control-label">Email ID</label>

					<input type="text" name="email" style="width:335px;height:auto;margin-left:140px;" readonly="readonly" placeholder="your Email Id" value="<?php echo $row['email'];?>" class="form-control"/>			
			 
								
							</div>
							
							
<BR>
						<div class="form-group"  >
							 <label for="inputPassword3" style="width:auto;height:auto;" class="col-sm-2 control-label">Mobile Number</label>

					
			 <input type="text" name="mobile" readonly="readonly" style="width:335px;height:auto;margin-left:140px;" placeholder="your mobile" value="<?php echo $row['mobileno'];?>" class="form-control"/>
								
							</div>
							
								
						
					<BR>
						<div class="form-group"  >
							 <label for="inputPassword3" style="width:auto;height:auto;" class="col-sm-2 control-label">Total Price</label>

					
			 <input type="text" name="total" readonly="readonly" style="width:335px;height:auto;margin-left:140px;" placeholder="your mobile" value="<?php echo $top3;?>" class="form-control"/>
								
							</div>	
					</div>	


							
								


					</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12" style="padding-top:50px;margin-left:200px;">
<a href='booking-page.php' ><img src = 'back.jpg' width='50px' height='10px'></a>  				
	
					<button type="submit" style="margin-left:150px;" name="book" class="read-more" title="Book Now">Book Now <i class="fa fa-long-arrow-right"></i></button>
								
							</div>
						</form>
					</div><!-- Form /- -->
					
		
				</div><!-- Contenta Area /- -->
				<!-- Widget Area -->
				
			</div>
		</div><!-- Container /- -->
		
		<div class="section-padding"></div>
	</main>
	
	<!-- Footer Section -->
	<div class="footer-section container-fluid no-padding">
		<!-- Top Footer -->
		<?php
		include("connection.php");
		
		?>
		<div class="bottom-footer container-fluid">
			<p>&copy; Copyrights 2017 Hotely. All Rights Reserved</p>
		</div>
	</div><!-- Footer Section /- -->
	
	<!-- JQuery v1.11.3 -->
	<script src="js/jquery.min.js"></script>
	
	<!-- Library JS -->
	<script src="libraries/lib.js"></script>
	<script src="libraries/calender/jquery-ui-datepicker.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	
	
	<!-- Library - Theme JS -->	
	<script src="js/functions.js"></script>
	<?php
}
	else
{
header("location:login.php");	
}
?>
</body>
</html>