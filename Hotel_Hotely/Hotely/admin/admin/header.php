<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cloud Bed Admin </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->0
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  
  <![endif]-->
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>HTY</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Cloud Bed</b>Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Raj Kothari</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Raj Kothari - Administrator Cloud Bed
                  
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                 
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Raj Kothari</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class=" treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-left"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="rooms.php">
            <i class="fa fa-bed"></i>
            <span>Rooms</span>
            <span class="pull-right-container">
			<?php $res=mysql_query("select * from room");
				  $no=mysql_num_rows($res); ?>
              <span class="label label-primary pull-right"><?php echo $no; ?></span>
            </span>
          </a>
         
        </li>
        <li>
          <a href="rcategories.php">
            <i class="fa fa-share"></i> <span>Room Categories</span>
            <span class="pull-right-container">
			<?php $res=mysql_query("select * from categoty");
				  $no=mysql_num_rows($res); ?>
              <small class="label pull-right bg-green"><?php echo $no; ?></small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="users.php">
            <i class="fa fa-user"></i>
            <span>Users</span>
					<span class="pull-right-container">
					<?php $res=mysql_query("select * from user");
				  $no=mysql_num_rows($res); ?>
              <small class="label pull-right bg-red"><?php echo $no; ?></small>
            </span>
          </a>

        </li>
        <li class="treeview">
          <a href="fcategories.php">
            <i class="fa fa-lemon-o"></i>
            <span>Food Categories</span>
            <span class="pull-right-container">
			<?php $res=mysql_query("select * from fcategory");
				  $no=mysql_num_rows($res); ?>
           <small class="label pull-right bg-blue"><?php echo $no; ?></small> </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="food.php">
            <i class="fa fa-cutlery"></i> <span>Food</span>
            <span class="pull-right-container">
			<?php $res=mysql_query("select * from food");
				  $no=mysql_num_rows($res); ?>
              <small class="label pull-right bg-yellow"><?php echo $no; ?></small> 
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="book.php">
            <i class="fa fa-table"></i> <span>Book Rooms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li>
          <a href="viewbooking.php">
            <i class="fa fa-calendar"></i> <span>View Room Bookings</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
		 <li>
          <a href="vieworders.php">
            <i class="fa fa-spoon"></i> <span>View Food Orders</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
