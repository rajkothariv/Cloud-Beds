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

	<title>Login</title>

	<link rel="stylesheet" href="css/showhide.css"/>
   
        
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/showhide.js"></script>
	
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
					<div class="col-md-2 book-now">
						<a href="booking-page.php" title="Book Now">Book now</a>
						
						
					</div
					
					
					
					
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
				<h3>Login</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Login</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		<!-- Map Section
		<div class="map container-fluid no-padding">
			<div class="map-canvas" id="map-canvas-contact" data-lat="42.845934" data-lng="-106.386893" data-string="Hoffman Parkway, P.o Box 353 Mountain View. United States of America. " data-zoom="10"></div>
		</div><!--  Map Section /- -->
		<br><BR><BR><BR>
		<!-- Container -->
		<div class="container">
			<div class="row">
				<!-- Contact content -->
				<div class="col-md-4 col-sm-4 col-xs-12 contact-content">
					<h4>Have A Question?</h4>
					<p>For any queries or questions please contact us here. Recommendations are always welcome.</p>
					<p>We would like to hear from you. Please feel free to contact us anytime for your user reviews or queries regarding the booking.</p>
					<p>This charming luxury hotelis one of the finest hotels in ahmedabad for bussiness and for leisure. Adding to the Pure Vegetarian Dining Facilities, Hotel Hotely also provides Banqueting facility, Conference Room. The Hotel also provides easy access to all the Historical Places nearby. The Railway Station is situated just at the walking distance from the hotel.</p>
				</div><!-- Contact content /- -->
				<!-- Contact Content -->
				<div class="col-md-4 col-sm-4 col-xs-12 contact-content">
					
					
					
					<div id="first">
	    <form action=""  method="post" >
          <h3>Login to your  account.</h3>
	      
		  <input type="text" name="uname1" id="uname1" placeholder="Username" required=reaquired />
		  <input type="password" name="password1" id="loginpassword" placeholder="Password" required=reaquired />
		  <input type="submit" name="login" id="login" value="Sign In" />
		  <p id="one"><a href="#">Forgot Password ?</a></p>
		  <p id="two">Don't have account? <a href="#" id="signup" class="signup">Sign up here</a></p>
		</form>	
	 </div>
	 
	 <!-- Create div second for Signup Form-->
	 <div id="second">
	    <form action="" method="post"  >
	      <h3>Create a Free Account</h3>
	     
		  <input type="text" pattern="[a-zA-Z ]*$" title="Only Character is allow" id="name" name="name" placeholder="Full Name" required=reaquired />
	      <input type="email" id="registeremail" name="registeremail" placeholder="Email" required=reaquired />
		<input type="text"  id="uname" name="uname" placeholder="User Name" required=reaquired />
	     		 
		 <input type="password" id="registerpassword" name="registerpassword" placeholder="Password" required=reaquired />
		  <input type="text" pattern="[0-9]{10}" title="Only Number is allow and length is 10" id="contact" name="contact" placeholder="Contact Number" required=reaquired />
  <input type="text" id="city" pattern="[A-Za-z]*" title="Only Character is allow" name="city" placeholder="Your City" required=reaquired />
				
		<input type="submit" id="register"  name="register" value="Create your account" />
		  <p id="two">Already have an account? <a href="#" id="signin" class="signin">Sign in</a></p>
		</form>  
	 </div>
					
					
				</div><!-- Contact Content /- -->
				<!-- Contact Content -->
								<div class="col-md-4 col-sm-4 col-xs-12 contact-content">
					<h4>Contact Details</h4>
					<div class="contact-detail">
						<i class="fa fa-map-marker"></i>
						<h5>Office Address</h5>
						<p>Govt. Polytechnic, Ambawadi, Ahmedabad. India. </p>
					</div>
					<div class="contact-detail">
						<i class="fa fa-phone"></i>
						<h5>Phone</h5>
						<p><span>Local: <a href="#">079-6547320</a></span><span>Mobile: <a href="#">9876543210</a></span></p>
					</div>
					<div class="contact-detail">
						<i class="fa fa-envelope"></i>
						<h5>Email Address</h5>
						<p><a href="mailto:info@Hotely.com" title="info@Hotely.com">info@Hotely.com</a><a href="http://www.Hotely.com" title="www.Hotely.com">www.Hotely.com</a></p>
					</div>
					<ul>
						<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" title="Skype"><i class="fa fa-skype"></i></a></li>
						<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
					</ul>
				</div>
			</div>			
		</div><!-- Container /- -->
		
		<div class="section-padding"></div>
	</main>
	
	<!-- Footer Section -->
	<div class="footer-section container-fluid no-padding">
		<?php
		include("footer.php");
		
		?>
		<!-- Top Footer -->
		<div class="bottom-footer container-fluid">
			<p>&copy; Copyrights 2017 Hotely. All Rights Reserved</p>
		</div>
	</div><!-- Footer Section /- -->
	
	<!-- JQuery v1.11.3 -->
	<script src="js/jquery.min.js"></script>
	
	<!-- Library JS -->
	<script src="libraries/lib.js"></script>
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	
	
	<!-- Library - Theme JS -->	
	<script src="js/functions.js"></script>
	
</body>
</html>



<?php

if(isset($_POST['register']))
{
	$name=$_POST['name'];
	$email=$_POST['registeremail'];
	$pass=$_POST['registerpassword'];
	$contact=$_POST['contact'];
	$uname=$_POST['uname'];
	$city1=$_POST['city'];

	$ch="select * from user where uname='$uname'";
	
	$tmp2=mysql_query($ch,$con);
	//echo "<BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;".mysql_num_rows($tmp);
	//echo $qry11;
	
	if(mysql_num_rows($tmp2)== 0 )
	{
	

	$qry="insert into user(uname,name,email,password,mobileno,city) values ('$uname','$name','$email','$pass',$contact,'$city1')";
	//echo $qry;
	
	$qry1=mysql_query($qry,$con);
	if($qry1)
	{
		echo "<Script>alert('You have successfully Sign Up, Now you can login...!!!!!!');</script>";
	//	header("location:login.php");
	}
	else
	{
		echo mysql_error();
			
	}

	}
	else
	{
		echo $ch;
				echo "<Script>alert('Username Is Already Register Change your username');</script>";
				//	echo "<script> document.location='login.php'; </script>";
	}

}

if(isset($_POST["login"]))
{
		$uname1=$_POST['uname1'];
		$password1=$_POST['password1'];
		
	$qry11="select * from user where accstatus=0 and uname='$uname1' and password='$password1'";
	$tmp=mysql_query($qry11,$con);
	//echo "<BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;".mysql_num_rows($tmp);
	//echo $qry11;
	
	if(mysql_num_rows($tmp)!= 0 )
	{
		//echo $qry1;
		$row=mysql_fetch_array($tmp);
		$_SESSION['loginuser']=$uname1;
		$_SESSION['loginuserid']=$row['uid'];
		
			header("location:index.php");
	}
	else
	{
		
		echo "<Script>alert('Wrong Username And Password');</script>";
		echo mysql_error();
		
	}
		
		
}


?>



