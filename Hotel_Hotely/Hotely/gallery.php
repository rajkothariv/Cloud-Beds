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

	<title>Portfolio - Hotel</title>

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
						<a href="booking-page.php" title="Book Now">Book now</a>
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
				<h3>gallery</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">GALLERY</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		<div class="section-padding"></div>
		<div class="container">
			<!-- Portfolio Section -->
			<div id="portfolio-section" class="container-fluid portfolio-section no-padding">		
				<!-- Portfolio Filters --> 
				<ul id="filters" class="portfolio-categories no-left-padding">
					<li><a data-filter="*" class="active" href="#">all</a></li>
					<li><a data-filter=".deluxe" href="#">deluxe room</a></li>
					<li><a data-filter=".single" href="#">single room</a></li>
					<li><a data-filter=".family" href="#">family room</a></li>
					<li><a data-filter=".luxury" href="#">luxury room</a></li>
					<li><a data-filter=".classic" href="#">classic room</a></li>
					<li><a data-filter=".double" href="#">double room</a></li>
				</ul><!-- / Portfolio Filters -->
				
				<div class="col-md-12 col-sm-12 col-xs-12 portfolio-list no-padding">
					<div class="col-md-4 col-sm-4 col-xs-6 no-padding portfolio-box deluxe">
						<a href="images/portfolio/portfolio1.jpg" title="Portfolio" class="popup-modal">
							<img width="387" height="350" alt="Portfolio" src="images/portfolio/portfolio1.jpg" />
							<h3><span> DELUXE ROOM </span></h3>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 no-padding portfolio-box single">
						<a href="images/portfolio/portfolio2.jpg" title="Portfolio" class="popup-modal">
							<img width="387" height="350" alt="Portfolio" src="images/portfolio/portfolio2.jpg" />
							<h3><span> single ROOM </span></h3>
						</a>						
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 no-padding portfolio-box family">
						<a href="images/portfolio/portfolio3.jpg" title="Portfolio" class="popup-modal">
							<img width="387" height="350" alt="Portfolio" src="images/portfolio/portfolio3.jpg" />
							<h3><span> family ROOM </span></h3>
						</a>						
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 no-padding portfolio-box luxury">
						<a href="images/portfolio/portfolio4.jpg" title="Portfolio" class="popup-modal">
							<img width="387" height="350" alt="Portfolio" src="images/portfolio/portfolio4.jpg" />
							<h3><span> luxury ROOM </span></h3>
						</a>						
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 no-padding portfolio-box classic">
						<a href="images/portfolio/portfolio5.jpg" title="Portfolio" class="popup-modal">
							<img width="387" height="350" alt="Portfolio" src="images/portfolio/portfolio5.jpg" />
							<h3><span> classic ROOM </span></h3>
						</a>						
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 no-padding portfolio-box double">
						<a href="images/portfolio/portfolio6.jpg" title="Portfolio" class="popup-modal">
							<img width="387" height="350" alt="Portfolio" src="images/portfolio/portfolio6.jpg" />
							<h3><span> double ROOM </span></h3>
						</a>						
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 no-padding portfolio-box luxury">
						<a href="images/portfolio/portfolio7.jpg" title="Portfolio" class="popup-modal">
							<img width="387" height="350" alt="Portfolio" src="images/portfolio/portfolio7.jpg" />
							<h3><span> luxury ROOM </span></h3>
						</a>						
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 no-padding portfolio-box wide double">
						<a href="images/portfolio/portfolio8.jpg" title="Portfolio" class="popup-modal">
							<img width="779" height="350" alt="Portfolio" src="images/portfolio/portfolio8.jpg" />
							<h3><span> double ROOM </span></h3>
						</a>						
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 no-padding portfolio-box family">
						<a href="images/portfolio/portfolio9.jpg" title="Portfolio" class="popup-modal">
							<img width="387" height="350" alt="Portfolio" src="images/portfolio/portfolio9.jpg" />
							<h3><span> family ROOM </span></h3>
						</a>						
					</div>
				</div>
				<nav class="ow-pagination">
					<ul class="pagination">						
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li>
							<a href="#" aria-label="Next">
								<span class="fa fa-angle-right" aria-hidden="true"></span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div><!-- Portfolio Section /- -->
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
	
	<!-- Library - Theme JS -->	
	<script src="js/functions.js"></script>
	
</body>
</html>