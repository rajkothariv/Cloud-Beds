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

	<title>Home - Hotel</title>

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
								<a href="index.html" title="Hotely" class="navbar-brand">Hotely</a>
							</div>
							<div class="navbar-collapse collapse" id="navbar">
								
								<?php
								include("headermenu.php");
								?>
								
							</div>
						</nav>
						
						
					</div>
					<div class="col-md-2 book-now" >	
						<a href="booking-page.php" title="Book Now">Book now</a>
					</div>
					<div class="col-md-2 " style="width:150px; " >	
						
						</div>
					
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
	</header><!-- Header Section /- -->
	
	<main class="site-main page-spacing">
		<!-- Slider Section -->
		<div id="slider-section" class="slider-section container-fluid no-padding">
			<div id="photo-slider" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/slider/slide1.jpg" alt="Slide" />
						<div class="carousel-caption">
							<h2 data-animation="animated fadeInDown">Welcome to Hotely</h2>
							<h6 data-animation="animated bounceIn"><span class="left-sep"></span>the place where you looking to<span class="right-sep"></span></h6>
							<a href="gallery.php" title="Explore Now" data-animation="animated fadeInUp">explore now <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="item">
						<img src="images/slider/slide1.jpg" alt="Slide" />
						<div class="carousel-caption">
							<h2 data-animation="animated fadeInDown">Welcome to Hotely</h2>
							<h6 data-animation="animated bounceIn"><span class="left-sep"></span>the place where you looking to<span class="right-sep"></span></h6>
							<a href="gallery.php" title="Explore Now" data-animation="animated fadeInUp">explore now <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="item">
						<img src="images/slider/slide1.jpg" alt="Slide" />
						<div class="carousel-caption">
							<h2 data-animation="animated fadeInDown">Welcome to Hotely</h2>
							<h6 data-animation="animated bounceIn"><span class="left-sep"></span>the place where you looking to<span class="right-sep"></span></h6>
							<a href="gallery.php" title="Explore Now" data-animation="animated fadeInUp">explore now <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>				
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#photo-slider" role="button" data-slide="prev">
					<span class="fa fa-angle-left" aria-hidden="true"></span>
				</a>
				<a class="right carousel-control" href="#photo-slider" role="button" data-slide="next">
					<span class="fa fa-angle-right" aria-hidden="true"></span>
				</a>
			</div>
			<p class="goto-next"><a href="#" title="Go to Next" class="bounce"><img src="images/slider/go-to-next.png" alt="Go To Next" /></a></p>
		</div><!-- Slider Section /- -->
		
		<div class="section-padding"></div>
		
		<!-- Offer Section -->
		<div class="container-fluid offer-section no-padding">
			<!-- container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>our great offers</h3>
					<p>Here are some of the things that we provide here at hotely. Review our great offers that are shown below. Enjoy your stay at our hotel.</p>
				</div><!-- Section Header /- -->
				<div class="offer-list">
					<div class="offer-box tall">
						<img src="images/offer/offer1.jpg" alt="Offer" />
						<div class="offer-detail">
							<h3>health &amp; <span>fitness</span></h3>
							<div class="price-detail">
								<h4>starts from - <span>Rs.100</span></h4>
									</div>
						</div>
					</div>
					<div class="offer-box wide">
						<img src="images/offer/offer2.jpg" alt="Offer" />
						<div class="offer-detail">
							<h3>Best <span>Dishes</span></h3>
							<div class="price-detail">
								<h4>starts from - <span>Rs.500</span></h4>
								
							</div>
						</div>
					</div>
					<div class="offer-box wide">
						<img src="images/offer/offer3.jpg" alt="Offer" />
						<div class="offer-detail">
							<h3>Swimming  <span>pool</span></h3>
							<div class="price-detail">
								<h4>starts from - <span>Rs. 300</span></h4>
								
							</div>
						</div>
					</div>
					<div class="offer-box full">
						<img src="images/offer/offer4.jpg" alt="Offer" />
						<div class="offer-detail">
							<h3>HIFI INTERIOR  <span>BEDROOMS</span></h3>
							<div class="price-detail">
								<h4>starts from - <span>Rs.1000</span></h4>
								
							</div>
						</div>
					</div>
				</div>
			</div><!-- container /- -->
		</div><!-- Offer Section /- -->
		<div class="section-padding"></div>
		
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
		<div class="section-padding"></div>
		
		<!-- Recommended Section -->
		<div id="recommended-section" class="recommended-section container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="section-header">
					<h3>recommended places</h3>
					<p>Escape into Ahmedabad most known places to enjoy ur stay. We will be glad to recommend some of the most attractive places in Ahmedabad.</p>
				</div>
				<div class="recommended-detail">
					<div class="col-md-6 col-sm-12 col-xs-12 no-padding hotel-detail">
						<div class="col-md-6 col-sm-6 col-xs-6 no-padding hotel-img-box">
							<img src="images/hotel/recommended1.jpg" alt="Recommended" height="267" width="297" />
							<span><a href="https://www.google.co.in/?gfe_rd=cr&ei=0ivnWNftMoTz8AflpqmQAQ&gws_rd=ssl#q=river+front+ahmedabad" title="Book Now">Visit</a></span>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 hotel-detail-box">
							<h4>RiverFront</h4>
							<p>The most visited place by locals and tourists. Many rides are available like boating.. do visit this place</p>
							<span>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half-o"></i>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 no-padding hotel-detail">
						<div class="col-md-6 col-sm-6 col-xs-6 no-padding hotel-img-box">
							<img src="images/hotel/recommended2.jpg" alt="Recommended" height="267" width="297" />
							<span><a href="#" title="Book Now">Visit</a></span>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 hotel-detail-box">
							<h4>Sabarmati Ashram</h4>
							<p>The Sabarmati Ashram was home to Mahatma Gandhi from 1917 to 1930 and was one of the main centres of the freedom strugle.</p>
							
							<span>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half-o"></i>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 no-padding hotel-detail">
						<div class="col-md-6 col-sm-6 col-xs-6 no-padding hotel-img-box">
							<img src="images/hotel/recommended3.jpg" alt="Recommended" height="267" width="297" />
							<span><a href="#" title="Book Now">Visit</a></span>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 hotel-detail-box">
							<h4>Siddi Saiyad Mosque</h4>
							<p>The Sidi Saiyyed Mosqque more popularly known as "Sidi Saiyyid ki Jaali", built in 1573.</p>
							<span>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							
							</span>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 no-padding hotel-detail">
						<div class="col-md-6 col-sm-6 col-xs-6 no-padding hotel-img-box">
							<img src="images/hotel/recommended4.jpg" alt="Recommended" height="267" width="297" />
							<span><a href="#" title="Book Now">Visit</a></span>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 hotel-detail-box">
							<h4>Kankaria Lake</h4>
							<p>It is the second largest lake in ahmedabad, located at Maninagar.</p>
							
							<span>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half-o"></i>
							</span>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Recommended Section /- -->
		
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
								<p>The location of the hotel is excellent, near to the station. Very good for a business trip. Just a few minutes walking distance to public transport.</p>
								<img src="images/testi1.jpg" alt="Testi" />
								<h4>devanshi parmar</h4>
							</div>
							<div class="item">
								<span>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
								<p>Best place to stay in ahmedabad. Home away from home. Very good and well maintained property.</p>
								<img src="images/testi1.jpg" alt="Testi" />
								<h4>raj kothari</h4>
							</div>
							<div class="item">
								<span>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
								<p>Very good and affordable rooms. The staff is friendly and very kind. Also the services are great. Really enjoyed the stay.</p>
								<img src="images/testi1.jpg" alt="Testi" />
								<h4>hardik tuvra</h4>
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
		
		<!-- Price Section -->
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
	<script src="libraries/calender/jquery-ui-datepicker.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
		
	<!-- Library - Theme JS -->	
	<script src="js/functions.js"></script>
	
</body>
</html>