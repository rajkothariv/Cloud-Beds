<?php
session_start();
include('connection.php');
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

	<title>Services - Hotel</title>

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
					<div class="logo-block col-md-3"><a href="index.html" title="Hotely"><img src="images/logo.png" alt="Logo" /></a></div>
					<div class="col-md-9 contact-detail">
						<div class="phone">
							<img src="images/phone-ic.png" alt="Phone" />
							<h6>contact us</h6>
							<a href="tell:1800234567890" title="1-800-23-456-7890">9999999999</a>
						</div>
						<div class="address">
							<img src="images/address-ic.png" alt="Address" />
							<h6>our office</h6>
							<p>GP Ahmedabad</p>
						</div>
						<div class="menu-search">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search" />
									<button class="sb-search-submit"><img src="images/search-ic.png" alt="Search" /></button>
									<span class="sb-icon-search"></span>
								</form>
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
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
	</header><!-- Header Section /- -->
	
	<main class="site-main page-spacing">
		<!-- Page Banner -->
		<div class="container-fluid page-banner about-banner">
			<div class="container">
				<h3>Services</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Services</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		<div class="section-padding"></div>
		<!-- Services Section -->
		<div id="services-section" class="services-section container-fluid no-padding">
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>handson services</h3>
					<p>These men promptly escaped from a maximum security stock ade to the Los Angeles underground these Happy Days are yours and mine Happy Days as long wrong with that the Brady Bunch.</p>
				</div><!-- Section Header /- -->
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-6 srv-left">
						<div class="srv-box">
							<i class="fa fa-wifi"></i>
							<h4>high speed wifi</h4>
							<p>The Los Angeles underground these yours and mine Happy Days</p>
						</div>
						<div class="srv-box">
							<i class="fa fa-pie-chart"></i>
							<h4>restaurant</h4>
							<p>The Los Angeles underground these yours and mine Happy Days</p>
						</div>
						<div class="srv-box">
							<i class="fa fa-heart"></i>
							<h4>health &amp; fitness</h4>
							<p>The Los Angeles underground these yours and mine Happy Days</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 srv-img">
						<img src="images/services/services1.jpg" alt="Services" />
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 srv-right">
						<div class="srv-box">
							<i class="fa fa-picture-o"></i>
							<h4>hifi interiors</h4>
							<p>The Los Angeles underground these yours and mine Happy Days</p>
						</div>
						<div class="srv-box">
							<i class="fa fa-tint"></i>
							<h4>100% pure water</h4>
							<p>The Los Angeles underground these yours and mine Happy Days</p>
						</div>
						<div class="srv-box">
							<i class="fa fa-car"></i>
							<h4>pickup</h4>
							<p>The Los Angeles underground these yours and mine Happy Days</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Services Section /- -->
		
		<!-- Room Section -->
		<div id="room-section" class="room-section container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div id="room-carousel" class="carousel slide" data-ride="carousel">				
					<div class="carousel-inner" role="listbox">
					<div class="item active">
							<div class="col-md-6 no-padding room-img">
								<img src="images/room/room1.jpg" alt="Room">
							</div>
							<div class="col-md-6 no-padding room-detail">
								<h4>Basic Rooms</h4>
								<div class="room-facility">
									
									<div class="facility-box">
										<i><img src="images/room/facility-ic3.png" alt="Facility Icon" /></i>
										<h5>mineral <span>water</span></h5>
									</div>
								</div>
								<p>For Students with minimum investment.</p>
			
							</div>
		</div>
		<?php
		$sql="select * from categoty";
		$result=mysql_query($sql);
		
		while($row=mysql_fetch_array($result))
		{
		?>
						<div class="item">
							<div class="col-md-6 no-padding room-img">
								<img src="images/room/<?php echo $row['cimage']; ?>" alt="Room">
							</div>
							<div class="col-md-6 no-padding room-detail">
								<h4><?php echo $row['cname']; ?> </h4>
								<div class="room-facility">
									<?php if($row['wifi']==1)
										
										{ ?> 
									<div class="facility-box">
										<i><img src="images/room/facility-ic1.png" alt="Facility Icon" /></i>
										<h5>high speed <span>wifi</span></h5>
										</div> <?php } ?> 
									<?php if($row['onecalldoc']==1)
										
										{ ?> 
									<div class="facility-box">
										<i><img src="images/room/facility-ic2.png" alt="Facility Icon" /></i>
										<h5>one-call <span>doctor</span></h5>
										</div> <?php } ?> 
										
									<?php if($row['isMWater']==1)
										
										{ ?> 
									<div class="facility-box">
										<i><img src="images/room/facility-ic3.png" alt="Facility Icon" /></i>
										<h5>mineral <span>water</span></h5>
										</div> <?php } ?>
										<?php if($row['isAC']==1)
										
										{ ?> 
									<div class="facility-box">
										<i><img src="images/room/facility-ic3.png" alt="Facility Icon" /></i>
										<h5>AC <span>Room</span></h5>
										</div> <?php } ?>

								</div>
								<p><?php echo $row['desc'];  ?>
							</div>
		</div> <?php } ?>
					</div>
					<!-- Controls -->
					<div class="carousel-contorls">
						<a class="left carousel-control" href="#room-carousel" role="button" data-slide="prev">
							<span class="fa fa-angle-left" aria-hidden="true"></span>
						</a>
						<div class="num"></div>
						<a class="right carousel-control" href="#room-carousel" role="button" data-slide="next">
							<span class="fa fa-angle-right" aria-hidden="true"></span>				
						</a>
					</div>
				</div>
			</div><!-- Container /- -->		
			<div class="section-padding"></div>
		</div><!-- Room Section /- -->	
		<!-- Direrction Section -->
		<div id="direction-section" class="direction-section container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<!-- Section Header -->
					<div class="section-header">
						<h3>driving directions</h3>
						<p>We are in centre of your city. You can have access to anything from anywhere.</p>	
					</div><!-- Section Header /- -->
					<div class="dir-content">
						<div class="dir-box">
							<h4>2.3 <sub>KM</sub></h4>
							<p>LD College of Engineering</p>
						</div>
						<div class="dir-box">
							<h4>15 <sub>KM</sub></h4>
							<p>Sarkhej</p>
						</div>
					</div>
					<a class="read-more" title="view direction" href="https://www.google.co.in/maps/place/Government+Polytechnic+College+Ambawadi/@23.0263125,72.5475868,17z/data=!4m5!3m4!1s0x395e84e88e9e9ddb:0x3b6db1d0a5759804!8m2!3d23.0260768!4d72.5474265">view direction <i class="fa fa-long-arrow-right"></i></a>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
					<img src="images/dir-map.jpg" alt="Direrction Map" />
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Direrction Section /- -->
		
		<!-- Video Section -->
		<div id="video-section" class="video-section container-fluid no-padding">
			<img src="images/video-bg.jpg" alt="Video" />
			<div class="video-link">
				<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube" title="video">Watch our <img src="images/video-ic.png" alt="Video" /> Video Tour</a>
			</div>
		</div><!-- Video Section /- -->

	</main>
	
	<!-- Footer Section -->
	<div class="footer-section container-fluid no-padding">
		<!-- Top Footer -->
		<div class="top-footer container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Text Widget -->
					<aside class="col-md-4 col-sm-12 col-xs-12 widget text_widget">
						<h4 class="widget_title">about us</h4>
						<p>These men promptly escaped from a maximum security stock ade to the Los Angeles underground these Happy Days are yours and mine Happy Days as long wrong with that the Brady Bunch these men promptly escaped from a maximum security.</p>
						<ul class="social_widget">
							<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</aside><!-- Text Widget /- -->
					<!-- Newsletter -->
					<aside class="col-md-4 col-sm-6 col-xs-6 widget widget_newsletter">
						<h4 class="widget_title">newsletter</h4>
						<form>
							<input type="text" class="form-control" placeholder="your mail id" />
							<input type="submit" value="subscribe" />
						</form>
					</aside><!-- Newsletter /- -->
					<!-- Gallery -->
					<aside class="col-md-4 col-sm-6 col-xs-6 widget widget_gallery">
						<h4 class="widget_title">Gallery</h4>
						<ul>
							<li><a href="#"><img src="images/ftr-gallery1.jpg" alt="Gallery" /></a></li>
							<li><a href="#"><img src="images/ftr-gallery2.jpg" alt="Gallery" /></a></li>
							<li><a href="#"><img src="images/ftr-gallery3.jpg" alt="Gallery" /></a></li>
							<li><a href="#"><img src="images/ftr-gallery4.jpg" alt="Gallery" /></a></li>
							<li><a href="#"><img src="images/ftr-gallery5.jpg" alt="Gallery" /></a></li>
							<li><a href="#"><img src="images/ftr-gallery6.jpg" alt="Gallery" /></a></li>
						</ul>
					</aside><!-- Gallery /- -->
				</div>
			</div><!-- Container /- -->
		</div><!-- Top Footer -->
		<div class="bottom-footer container-fluid">
			<p>&copy; Copyrights 2016 Hotely. All Rights Reserved</p>
		</div>
	</div><!-- Footer Section /- -->
	
	<!-- JQuery v1.11.3 -->
	<script src="js/jquery.min.js"></script>
	
	<!-- Library JS -->
	<script src="libraries/lib.js"></script>
	
	<!-- Library - Theme JS -->	
	<script src="js/functions.js"></script>
	
</body>
</html>