<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	if( isset($_SESSION['user']) ) {
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);}
?>
<!DOCTYPE html>
<html>
<head>
<title>StaaCart - Online Shopping | Fashion & Furniture Products</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/png" href="../images/fav.png" sizes="32x32">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //timer -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->


</head>
	
<body>
<!-- header -->
<!--header-->	
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:14besefzafar@seecs.edu.pk" style="color:white;">Mail Us</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="tel:+1234567890" style="color:white;">Call Us</a></li>
						<li><?php if( isset($_SESSION['user']) ) {echo $userRow['userEmail'];} ?></li>
						<?php if( !isset($_SESSION['user']) ) {

						echo "<li><i class='glyphicon glyphicon-log-in' aria-hidden='true'></i><a href='login.php' style='color:white;'>Login</a></li>";
						echo "<li><i class='glyphicon glyphicon-book' aria-hidden='true'></i><a href='register.php' style='color:white;'>Register</a></li>";   }  
						if( isset($_SESSION['user']) ) {
						echo "<li><i class='glyphicon glyphicon-book' aria-hidden='true'></i><a href='logout.php?logout' style='color:white;'>Logout</a>	
						</li>";  }
						?>
						
						<li>
						<div>
						<form id="frmSearch" method="get" action="default.php">
		<input class="glyphicon glyphicon-search" type="text"  id="txtSearch" type="text" name="search" placeholder="Search..." " />
		
		</form>

			<script type="text/javascript">
    document.getElementById('frmSearch').onsubmit = function() {
        window.location = 'http://www.google.com/search?q=site:faizanzafar95.wordpress.com' + document.getElementById('txtSearch').value;
        return false;
    }
			</script>	
				</div>
						</li>
					</ul>
					</div>
				
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<ul class="social-icons">
						<li><a href="https://www.facebook.com" class="facebook"></a></li>
						<li><a href="https://www.twitter.com" class="twitter"></a></li>
						<li><a href="https://www.google.com" class="g"></a></li>
						<li><a href="https://www.instagram.com" class="instagram"></a></li>
				
				</div>
					</ul>

				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="index.php">Staa Cart <span>Shop your world</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li><a href="index.php" class="act " style="color:white;text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white;text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;">Fashion <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Men's Wear</h6>
												<li><a href="products.php">Clothing</a></li>
												<li><a href="products.php">Wallets</a></li>
												<li><a href="products.php">Shoes</a></li>
												<li><a href="products.php">Watches</a></li>
												<li><a href="products.php">Accessories</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Women's Wear</h6>
												<li><a href="products.php">Clothing</a></li>
												<li><a href="products.php">Wallets,Bags</a></li>
												<li><a href="products.php">Footwear</a></li>
												<li><a href="products.php">Watches</a></li>
												<li><a href="products.php">Accessories</a></li>
												<li><a href="products.php">Jewellery</a></li>
												<li><a href="products.php">Beauty & Grooming</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Kid's Wear</h6>
												<li><a href="products.php">Kids Home Fashion</a></li>
												<li><a href="products.php">Boy's Clothing</a></li>
												<li><a href="products.php">Girl's Clothing</a></li>
												<li><a href="products.php">Shoes</a></li>
												<li><a href="products.php">Brand Stores</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white;text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;">Furniture <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Home Collection</h6>
												<li><a href="furniture.php">Cookware</a></li>
												<li><a href="furniture.php">Sofas</a></li>
												<li><a href="furniture.php">Dining Tables</a></li>
												<li><a href="furniture.php">Shoe Racks</a></li>
												<li><a href="furniture.php">Home Decor</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Office Collection</h6>
												<li><a href="furniture.php">Carpets</a></li>
												<li><a href="furniture.php">Tables</a></li>
												<li><a href="furniture.php">Sofas</a></li>
												<li><a href="furniture.php">Shoe Racks</a></li>
												<li><a href="furniture.php">Sockets</a></li>
												<li><a href="furniture.php">Electrical Machines</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Decorations</h6>
												<li><a href="furniture.php">Toys</a></li>
												<li><a href="furniture.php">Wall Clock</a></li>
												<li><a href="furniture.php">Lighting</a></li>
												<li><a href="furniture.php">Top Brands</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							
						
							
							<li><a href="mail.php" style="color:white;text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;">Contact</a></li>
							<li><a href="team.php" style="color:white;text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;">About Us</a></li>

						</ul>
					</div>
					</nav>
				</div>

				<div class="header-right">
					<div class="cart box_1">
						<a href="checkout.php">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
					<img src="images/bag.png" alt="" />
							                       </h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header -->


<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Contact</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- mail -->
	<div class="mail animated wow zoomIn" data-wow-delay=".5s">
		<div class="container">
			<h3>Contact</h3>
			<p class="est">Get in touch with our competent team and provide your valuable feedback</p>
			<div class="mail-grids">
				<div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<form>
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						
						<input type="submit" value="Submit Now" >
					</form>
				</div>
				<div class="col-md-4 mail-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="mail-grid-right1">
						<img src="images/manager.jpg" alt=" " class="img-responsive" />
						<h4>Sami Bilal<br><br>Manager</h4>
						<ul class="phone-mail">
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: <a href="tel:+123456789">+123456789</a></li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:14besembelal@seecs.edu.pk">14besembelal@seecs.edu.pk</a></li>
						</ul>
						<ul class="social-icons">
							<li><a href="https://www.facebook.com" class="facebook"></a></li>
							<li><a href="https://www.twitter.com" class="twitter"></a></li>
							<li><a href="https://www.google.com" class="g"></a></li>
							<li><a href="https://www.instagram.com" class="instagram"></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<iframe class="animated wow slideInLeft" data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.5643184927694!2d72.98828531520432!3d33.64253698071941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9675aaaaaaab%3A0xc5180922c44eb86b!2sNUST-SEECS+(School+of+Electrical+Engineering+and+Computer+Science)!5e0!3m2!1sen!2s!4v1483367485208" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
<!-- //mail -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>We provide an online shopping experience to customers like never experienced before.<span>Shop for quality, review for feedback and become a part of our community.</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Contact</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="https://www.google.com/maps/place/NUST-SEECS+(School+of+Electrical+Engineering+and+Computer+Science)/@33.6425414,72.9882853,17z/data=!3m1!4b1!4m5!3m4!1s0x38df9675aaaaaaab:0xc5180922c44eb86b!8m2!3d33.642537!4d72.990474" target="_blank">SEECS, NUST <span>Islamabad</span></a>
						
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:14besefzafar@seecs.edu.pk" target="_blank">14besefzafar@seecs.edu.pk</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="tel:+0987654321" target="_blank">+0987654321</a></li>
					</ul>
				</div>

				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
					<h3>Site Map</h3>
					<div class="sitemap">
					<ul>
					<a href="index.php"><li>Home</li></a>
					<a href="products.php"><li>Fashion</li></a>
					<a href="furniture.php"><li>Furniture</li></a>
				
					<a href="login.php"><li>Login</li></a>
					<a href="register.php"><li>Register</li></a>
					<a href="single.php"><li>Product Details</li></a>
					<a href="checkout.php"><li>Cart</li></a>
			        <a href="mail.php"><li>Contact</li></a>
					<a href="team.php"><li>About Us</li></a>
					</ul>
					</div>
					</div>
<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
					<h3>Help</h3>
					<div class="sitemap">
					<ul>
					<a href="#"><li>Help Center</li></a>
					<a href="mail.php"><li>Contact Us</li></a>
					<a href="#"><li>How to Shop</li></a>
					<a href="checkout.php"><li>Track Your Order</li></a>
					</ul>
					</div>


<br>
<button class="donate" type="button">Donate To Us&rarr;</button>
					</div>

				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.php">Staa Cart<span>shop your world</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>&copy 2017 Staa Cart. All rights reserved. Design by Faizan, Hamza, Amin </p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>