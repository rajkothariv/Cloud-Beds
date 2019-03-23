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

	<title>About - Hotel</title>

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
							<p>GP Ahmedabad</p>
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
								<a href="index.php" title="Hotely" class="navbar-brand">Hotely</a>
							</div>
							<div class="navbar-collapse collapse" id="navbar">
								
								<?php
								include("headermenu.php");
								?>
							</div>
						</nav>
					</div>
					<div class="col-md-2 book-now">
						<a href="booking-page.php" title="Book Now">Book now</a>
					</div>
					
					<div class="col-md-3  "  style="width:150px; " >	
					
						</div>
					
					
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
	</header><!-- Header Section /- -->
	
	<main class="site-main page-spacing">
		<!-- Page Banner -->
		<div class="container-fluid page-banner about-banner">
			<div class="container">
				<h3>about us</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">About Us</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		<div class="section-padding"></div>
		<!-- container -->
		<div class="container">		
			<div class="content-block container-fluid">
				<div class="row">
					<div class="col-md-5 col-sm-6 col-xs-12 content-img-block">
						<img src="images/booking/waiter-right.jpg" alt="Waiter" />
					</div>
					<div class="col-md-7 col-sm-6 col-xs-12">
						<h3>enjoy a memorable days in Ahmedabad's largest Hotel </h3>
						<p>Oone of the finest hotel in Ahmedabad, We believe in Quality <br><br>service.Customer Satisfaction is our main motto. Enjoy your days at our hotel with premium services and exclusive rooms. Make your days memorable at our hotel.</p>
						
					</div>
				</div>
			</div>
		</div><!-- container /- -->
		<div class="section-padding"></div>
		
		<!-- Testimonial Section -->
		<div id="testimonial-section" class="testimonial-section container-fluid no-padding">
			<!-- section Header -->
			<div class="section-header">
				<h3>what our client says</h3>
			</div><!-- section Header /- -->
			<!-- Container -->
			<div class="container">
				<div class="col-md-1"></div>
				<div class="col-md-10 col-sm-12 col-xs-12">
					<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<span>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
								<p>These men promptly escaped from a maximum security stock ade to the Los Angeles underground these Happy Days are yours and mine Happy Days as long wrong with that the Brady Bunch these HappDays are yours and mine Happy Days as long wrong Brady Bunch.</p>
								<img src="images/testi1.jpg" alt="Testi" />
								<h4>Devanshi Parmar</h4>
							</div>
							<div class="item">
								<span>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
								<p>These men promptly escaped from a maximum security stock ade to the Los Angeles underground these Happy Days are yours and mine Happy Days as long wrong with that the Brady Bunch these HappDays are yours and mine Happy Days as long wrong Brady Bunch.</p>
								<img src="images/testi1.jpg" alt="Testi" />
								<h4>Raj Kothari</h4>
							</div>
							<div class="item">
								<span>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
								<p>These men promptly escaped from a maximum security stock ade to the Los Angeles underground these Happy Days are yours and mine Happy Days as long wrong with that the Brady Bunch these HappDays are yours and mine Happy Days as long wrong Brady Bunch.</p>
								<img src="images/testi1.jpg" alt="Testi" />
								<h4>Devanshi Parmar</h4>
							</div>
						</div>
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#testimonial-carousel" data-slide-to="1"></li>
							<li data-target="#testimonial-carousel" data-slide-to="2"></li>
						</ol>

						<!-- Controls -->
						<a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev">
							<i class="arrow_carrot-left"></i>
						</a>
						<a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next">
							<i class="arrow_carrot-right"></i>
						</a>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Testimonial Section /- -->
		
<div id="price-section" class="price-section container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>our awesome plans</h3>
					<p>Here are the basic three plans that are provided at our hotel.</p>
				</div><!-- Section Header /- -->
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="price-box">
							<div class="price-img-box">
								<img src="images/price/price1.jpg" alt="Price" />
								
								<?php
								$qry1="select * from categoty where cid=3";
								$row1=mysql_query($qry1,$con);
								$data1=mysql_fetch_array($row1);
							
								
								?>
								<h4><sup>Rs.</sup><?php echo $data1['price'];?><sub>per</sub> <span>night</span></h4>
							</div>
							<h3>comfort room</h3>
							<ul>
							<?php
							if(1==1)
							{
								?>
								<li>Restaurant Foods</li>
								<?php
							}
								else
								{
									?>
									<li><del>Restaurant Foods<del></li>
									<?php
								}
								?>
								
								
									<?php
							if($data1['onecalldoc']==1)
							{
								?>
								<li>One-Call Doctor</li>
								<?php
							}
								else
								{
									?>
									<li><del>One-Call Doctor<del></li>
									<?php
								}
								?>
								
									<?php
							if($data1['isAC']==1)
							{
								?>
								<li>AC</li>
								<?php
							}
								else
								{
									?>
									<li><del>AC<del></li>
									<?php
								}
								?>
									<?php
							if(1==1)
							{
								?>
								<li>Swimming Pool</li>
								<?php
							}
								else
								{
									?>
									<li><del>Swimming Pool<del></li>
									<?php
								}
								?>
									<?php
							if($data1['wifi']==1)
							{
								?>
								<li>High Speed Free Wifi</li>
								<?php
							}
								else
								{
									?>
									<li><del>High Speed Free Wifi<del></li>
									<?php
								}
								?>
								
							</ul>
							
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="price-box">
							<div class="price-img-box">
								<img src="images/price/price2.jpg" alt="Price" />
								
								
								<?php
								$qry1="select * from categoty where cid=2";
								$row1=mysql_query($qry1,$con);
								$data1=mysql_fetch_array($row1);
							
								
								?>
								<h4><sup>Rs.</sup><?php echo $data1['price'];?><sub>per</sub> <span>night</span></h4>
							</div>
							<h3>deluxe room</h3>
							<ul>
							<?php
							if(1==1)
							{
								?>
								<li>Restaurant Foods</li>
								<?php
							}
								else
								{
									?>
									<li><del>Restaurant Foods<del></li>
									<?php
								}
								?>
								
								
									<?php
							if($data1['onecalldoc']==1)
							{
								?>
								<li>One-Call Doctor</li>
								<?php
							}
								else
								{
									?>
									<li><del>One-Call Doctor<del></li>
									<?php
								}
								?>
								
									<?php
							if($data1['isAC']==1)
							{
								?>
								<li>AC</li>
								<?php
							}
								else
								{
									?>
									<li><del>AC<del></li>
									<?php
								}
								?>
									<?php
							if(1==1)
							{
								?>
								<li>Swimming Pool</li>
								<?php
							}
								else
								{
									?>
									<li><del>Swimming Pool<del></li>
									<?php
								}
								?>
									<?php
							if($data1['wifi']==1)
							{
								?>
								<li>High Speed Free Wifi</li>
								<?php
							}
								else
								{
									?>
									<li><del>High Speed Free Wifi<del></li>
									<?php
								}
								?>
								
								
							</ul>
							
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="price-box">
							<div class="price-img-box">
								<img src="images/price/price3.jpg" alt="Price" />
								<?php
								$qry1="select * from categoty where cid=1";
								$row1=mysql_query($qry1,$con);
								$data1=mysql_fetch_array($row1);
							
								
								?>
								<h4><sup>Rs.</sup><?php echo $data1['price'];?><sub>per</sub> <span>night</span></h4>
							</div>
							<h3>luxury room</h3>
							<ul>
							<?php
							if(1==1)
							{
								?>
								<li>Restaurant Foods</li>
								<?php
							}
								else
								{
									?>
									<li><del>Restaurant Foods<del></li>
									<?php
								}
								?>
								
								
									<?php
							if($data1['onecalldoc']==1)
							{
								?>
								<li>One-Call Doctor</li>
								<?php
							}
								else
								{
									?>
									<li><del>One-Call Doctor<del></li>
									<?php
								}
								?>
								
									<?php
							if($data1['isAC']==1)
							{
								?>
								<li>AC</li>
								<?php
							}
								else
								{
									?>
									<li><del>AC<del></li>
									<?php
								}
								?>
									<?php
							if(1==1)
							{
								?>
								<li>Swimming Pool</li>
								<?php
							}
								else
								{
									?>
									<li><del>Swimming Pool<del></li>
									<?php
								}
								?>
									<?php
							if($data1['wifi']==1)
							{
								?>
								<li>High Speed Free Wifi</li>
								<?php
							}
								else
								{
									?>
									<li><del>High Speed Free Wifi<del></li>
									<?php
								}
								?>
								
							</ul>
							
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Price Section /- -->
		

		<!-- Statistics Section -->
		<div id="statistics-section" class="statistics-section container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>fun facts</h3>
					<p>These are some of our achievements. Support us to increase the numbers</p>
				</div><!-- Section Header /- -->
				<div class="row">
					<!-- col-md-3 /- -->
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="statistics-box">
							<i><img src="images/fun/fun-ic1.png" alt="Icon" /></i>
							<h6>guests</h6>
							<h2><span id="statistics_count-1" data-statistics_percent="630"></span>&nbsp;</h2>
						</div>
					</div><!-- col-md-3 /- -->
					<!-- col-md-3 /- -->
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="statistics-box">
							<i><img src="images/fun/fun-ic2.png" alt="Icon" /></i>
							<h6>coffee cups</h6>
							<h2><span id="statistics_count-2" data-statistics_percent="800"></span>&nbsp;</h2>
						</div>
					</div><!-- col-md-3 /- -->
					<!-- col-md-3 /- -->
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="statistics-box">
							<i><img src="images/fun/fun-ic3.png" alt="Icon" /></i>
							<h6>satisfaction</h6>
							<h2><span id="statistics_count-3" data-statistics_percent="95"></span>%</h2>
						</div>
					</div><!-- col-md-3 /- -->
					<!-- col-md-3 /- -->
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="statistics-box">
							<i><img src="images/fun/fun-ic4.png" alt="Icon" /></i>
							<h6>awards</h6>
							<h2><span id="statistics_count-4" data-statistics_percent="50"></span>&nbsp;</h2>
						</div>
					</div><!-- col-md-3 /- -->
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Statistics Section /- -->
		
	</main>
	
	<!-- Footer Section -->
	<div class="footer-section container-fluid no-padding">
		<!-- Top Footer -->
		<?php
		include("footer.php");
		?>
		<div class="bottom-footer container-fluid">
			<p>&copy; Copyrights 2017 Hotely. All Rights Reserved</p>
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