<?php
session_start();
include("connection.php");

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
$(document).ready(function()
{
  $("tr:even").css("background-color", "#CCE5FF");
});
$(document).ready(function()
{
  $("tr:first").css("background-color", "#FFE5CC");
});
</script>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Booking - Hotel</title>
	
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
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
							<a href="tell:1800234567890" title="1-800-23-456-7890">9876543210</a>
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
					
						<div class="col-md-3  " style="width:150px; " >	
					
						</div>
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
	</header><!-- Header Section /- -->
	
	<main class="site-main page-spacing">
		<!-- Page Banner -->
		<div class="container-fluid page-banner about-banner">
			<div class="container">
				<h3>History</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">History</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		
		<div class="section-padding"></div>
		
		<!-- Container -->
		<div class="container">
			<div class="row">
				<!-- Contenta Area -->
				<div class="col-md-8 col-sm-8 col-xs-12 content-area">
				
					
					<!-- Form -->
		
	<div style="width: 308px; 
	margin-top: 0px; 
	padding: 28px 25px; 
	background-color: white; 
	border: 1px solid black; 
	border-radius: 5; 
	width:900px;
	left: 50%;
	margin-left:0px; 
	top:0px; ">
		<div class="booking-form2">
		
			<h3>Your Booking History</h3>
						
						  <div class="box-body">

            
			  <?php 
				date_default_timezone_set('Asia/Calcutta');
				
			$tmp=$_SESSION['loginuserid'];
			
			$sql="select * from booking where uid=$tmp order by checkin desc"; 
			$result=mysql_query($sql);
			//echo $sql;
			if(mysql_num_rows($result)==0)
			{
				echo "No Done Any Booking Yet";
			}
			else{
			?>
			
<div id="results"><br> 
            <table id="example1" class="table" >
                <thead class="thead-default">
				
                <tr>
                  
                  <th>Check-in</th>
                  <th>Check-Out</th>
                  <th>Room No</th>
				  <th>Bill</th>
				  <th>Status</th>
                </tr>
                </thead>
              <?php
			while($row=mysql_fetch_array($result))
			{
			?>
				<tbody>
                <tr>
              
				     <td><?php  echo $row['checkin']; ?></td>
					    <td><?php echo $row['checkout']; ?></td>
						   <td><?php echo $row['roomno']; ?></td> 
						   <td><?php echo $row['billamount']; ?></td>
						   
						   <td><?php 
						   if((date("Y-m-d")>=$row['checkin']) and (date("Y-m-d")<=$row['checkout']))
						   {
						   $status="Current Check In";
						   }
						   else if((date("Y-m-d")<=$row['checkin']) and (date("Y-m-d")<=$row['checkout']))
						   {
							   $status="Feature Booking";
						   }
						   else
						   {
								$status="Already Check-Out";
						   }
						   echo $status;
						   ?>
						   </td>
                 
			</tr> 
			<?php
			} 
			
			}
			?>
                 </tbody>
              </table>
            </div>
          
                
                


  
	</div>
						
						
						
						
						
						
						
						
						
					</div><!-- Form /- -->
					
		
				</div><!-- Contenta Area /- -->
				<!-- Widget Area -->
				<!-- Widget Area /- -->
			</div>
		</div><!-- Container /- -->
		
		<div class="section-padding"></div>
	</main>
	
	<!-- Footer Section -->
	<div class="footer-section container-fluid no-padding">
		<!-- Top Footer -->
		<?php include("footer.php");?>
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
	
</body>
</html>