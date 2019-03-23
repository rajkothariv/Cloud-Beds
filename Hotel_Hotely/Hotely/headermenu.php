

<ul class="nav navbar-nav" >
									<li class="dropdown ">
										<a href="index.php" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
										<i class="ddl-switch fa fa-angle-down"></i>
										
									</li>
									<?PHP
									if(!isset($_SESSION['loginuser']))
									{
									?>	
									<li><a href="about-page.php" title="About Us">about Us</a></li>
									<?PHP
									}
									?>
																		
									
									<?PHP
									if(!isset($_SESSION['loginuser']))
									{
									?>	
									
									<li><a href="gallery.php" title="Gallery">Gallery</a></li>
									<?PHP
									}
									?>
								<li class="dropdown">
										<a href="#" title="Rooms" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Rooms</a>
										<i class="ddl-switch fa fa-angle-down"></i>
										<ul class="dropdown-menu">
												
													
												<?php
									if(isset($_SESSION['loginuser']))
									{
									?>
											<li><a href="booking-page.php" title="Booking">Booking</a></li>
													
													
							
										
										
									</li>
									
									<?php
									}
									?>
									</ul>
									
									<li><a href="food.php" title="Food Menu">Food Menu</a></li>
									
							<?php
									if(isset($_SESSION['loginuser']))
									{
									?>							
							<li><a href="history.php" title="History">History</a></li>
										<?php
									}?>										
									<li><a href="contact-us.php" title="Contact">Contact</a></li>
									<?php
									if(isset($_SESSION['loginuser']))
									{
									?>
					<li><a href="view_cart.php?action=noaction" title="View Cart">View Cart</a></li>
<!--					<a href='view_cart.php'><img src = 'viewcart1.png' width='140px' height='80px' style="margin-top:10px; margin-bottom:10px;"></a>  -->
									<?php
									}
									?>
<?php
									if(isset($_SESSION['loginuser']))
									{
									?>
									<li><a href="logout.php" title="Logout">Logout</a></li>
									<?php
									}
									else
									{
									?>
									<li><a href="login.php" title="Login">Login</a></li>
									<?php
									}
									?>
									
								</ul>
								