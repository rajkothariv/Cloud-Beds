<?php
session_start();
include ('connection.php');
if(isset($_SESSION['loginuserid']))
{
		$tmp=$_SESSION['loginuserid'];
		date_default_timezone_set('Asia/Calcutta');
		
		$sql="select * from booking where uid=$tmp order by checkin desc"; 
		echo mysql_error();
			$result=mysql_query($sql);
			//echo $sql;
			while($row=mysql_fetch_array($result))
			{
						if((date("Y-m-d")>=$row['checkin']) and (date("Y-m-d")<=$row['checkout']))
						{
						   $status="Current Check In";
						 }
			}
	if($status=="Current Check In")
	{
?>
<html>

<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  
  <link rel="stylesheet" type="text/css" href="style/style.css" />

  
  
  
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
				<h3>Customer Order</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Cart</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		
		
	
	
  <div id="main" style="margin-left:100px;">
    <div id="header">
      
    <div id="content_header"></div>
    <div id="site_content">
<h3>Customer Order</h3>
      <div id="content" style="width: 974px; border: 3px solid #d0d0d0; border-radius: 4px; padding:5px; margin-top: 10px; margin-right: 5px;">
<?php
		

	if (isset($_GET['product_id']))
	$product_id=$_GET['product_id'];
	
	if (isset($_GET['action']))
	$action=$_GET['action'];
	

	switch($action)
	{
		case "add":
			if (isset($_SESSION['cart'][$product_id]))
			$_SESSION['cart'][$product_id]++;
			else
			$_SESSION['cart'][$product_id]=1;
		
		break;
		case "remove":
			if (isset($_SESSION['cart'][$product_id]))
			{
				$_SESSION['cart'][$product_id]--;
				if ($_SESSION['cart'][$product_id]==0)
				unset($_SESSION['cart'][$product_id]);
			}
		break; 
		case "empty":
			unset($_SESSION['cart']);
		break;
		
		case "noaction":
			
		break;
	}
if (isset($_SESSION['cart']))
	{	
	echo "<table cellpadding='5' cellspacing='5' style='width:100%;'>";
	
		echo "<tr style='color:#ff0000;'>";
		echo "<td align='center'>Image</td>";
		echo "<td align='center' style='width: 150px; word-break: break-all;'>Product Name</td>";
		
		echo "<td align='center'>Price</td>";
		echo "<td align='center'>Quantity</td>";
		echo "<td align='center'>Action</td>";
		echo "<td align='center'>Subtotal</td>";
		echo "</tr>";
	$total=0;
	foreach($_SESSION['cart'] as $product_id => $x)
	{
	$result=mysql_query("Select * from food where fid=$product_id");
	$myrow=mysql_fetch_array($result);
	$name=$myrow['fname'];
	$name=substr($name,0,40);
	$price=$myrow['price'];
	$image=$myrow['image'];
	
	$line_cost=$price*$x;
	$total=$total+$line_cost;
	
	
		echo "<tr style='color:black'>";
		echo "<td align='center'><br /><img style ='border-radius:500px ;'height='75px' width='75px' src='".'../../../Hotely/Images/'.$myrow['image']."'></td>";
		echo "<td align='center' style=' word-wrap:break-word; word-break: break-all; width:100px;'>$name</td>";

		echo "<td align='center'> $price.00</td>";
		echo "<td align='center'>x$x | <a href='view_cart.php?product_id=".$product_id."&action=add' style='text-decoration:none;'>Add</a></td>";
		echo "<td align='center' style='width:100px;'><a href='view_cart.php?product_id=".$product_id."&action=remove' style='text-decoration:none;'>Remove</a></td>";
		echo "<td align='center'>=  $line_cost.00";
		echo "</tr>";
		}
echo "<TR> </tr>";
echo "<TR> </tr>";
echo "<TR> </tr>";
		echo "<tr style='color:#ff0000;'>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		
		echo "<td align='center'>Total</td>";
		echo "<td align='center' colspan='2'>Action</td>";
		echo "</tr>";
		echo "<tr style='color:#000000;'>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td align='center'><br /><b>=  $total.00</b></td>";
		echo "<td align='center'><br /><a href='view_cart.php?product_id=".$product_id."&action=empty'><img src = 'cart_11.png'></a></td>";
		echo "<td align='center'><br /><a href='checkout.php'><img src = 'checkout.png' width='120px' height='40px'></a></td>";
		echo "</tr>";
		echo "</table>";
	}
 	else
		echo "<font color='#000000'><h3><b>Cart is empty</b></h3><br /></font>";

?>
	  
	<a href='food.php'><img src = 'back.jpg' width='50px' height='10px'></a>  
	  </div>
    </div>
    
  </div>
  
 
<div class="section-padding"></div>
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
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	
	
	<!-- Library - Theme JS -->	
	<script src="js/functions.js"></script>
	
 
  
  
  <?php
	}
	else
	{
		echo "<script> alert('you are not currently checkin Hotel'); </script>";
		echo "<script> document.location='booking-page.php'; </script>";
	}
  }
else
{
header("location:login.php");	
}
?>
</body>
</html>
