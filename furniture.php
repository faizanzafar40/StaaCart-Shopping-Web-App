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

<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Furniture</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
					<h3>Filter By Price</h3>
					<ul class="dropdown-menu1">
									<input type="range" name="price" min="0" max="100" value="30" />
</li>	
					</ul>
						<script type='text/javascript'>//<![CDATA[ 
						$(window).load(function(){
						 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 100000,
								values: [ 10000, 60000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );


						});//]]>
						</script>
						<script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <!---->
				</div>
				<div class="categories animated wow slideInUp" data-wow-delay=".5s">
					<h3>Categories</h3>
					<ul class="cate">
						<li><a href="furniture.php">Best Selling</a> <span>(15)</span></li>
						<li><a href="furniture.php">Home Collections</a> <span>(16)</span></li>
							<ul>
								<li><a href="furniture.php">Cookware</a> <span>(2)</span></li>
								<li><a href="furniture.php">Sofas</a> <span>(5)</span></li>
								<li><a href="furniture.php">Dining Tables</a> <span>(1)</span></li>
								<li><a href="furniture.php">New Arrivals</a> <span>(0)</span></li>
								<li><a href="furniture.php">Home Decore</a> <span>(1)</span></li>
							</ul>
						<li><a href="furniture.php">Sales</a> <span>(15)</span></li>
						<li><a href="furniture.php">Decorations</a> <span>(15)</span></li>
							<ul>
								<li><a href="furniture.php">Wall Clock</a> <span>(2)</span></li>
								<li><a href="furniture.php">New Arrivals</a> <span>(0)</span></li>
								<li><a href="furniture.php">Lights</a> <span>(1)</span></li>
							</ul>
					</ul>
				</div>
				<div class="new-products animated wow slideInUp" data-wow-delay=".5s">
					<h3>New Products</h3>
					<div class="new-products-grids">
						<div class="new-products-grid">
							<div class="new-products-grid-left">
								<a href="single.php"><img src="images/wall.jpg" alt=" " class="img-responsive" /></a>
							</div>
							<div class="new-products-grid-right">
								<h4><a href="single.php">Wall Lamp</a></h4>
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="simpleCart_shelfItem new-products-grid-right-add-cart">
									<p> <span class="item_price">$180</span><a class="item_add" href="#">add to cart </a></p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="new-products-grid">
							<div class="new-products-grid-left">
								<a href="single.php"><img src="images/chair.jpg" alt=" " class="img-responsive" /></a>
							</div>
							<div class="new-products-grid-right">
								<h4><a href="single.php">Rocking chair</a></h4>
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="simpleCart_shelfItem new-products-grid-right-add-cart">
									<p> <span class="item_price">$250</span><a class="item_add" href="#">add to cart </a></p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="new-products-grid">
							<div class="new-products-grid-left">
								<a href="single.php"><img src="images/ch.jpg" alt=" " class="img-responsive" /></a>
							</div>
							<div class="new-products-grid-right">
								<h4><a href="single.php">Chandelier</a></h4>
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="simpleCart_shelfItem new-products-grid-right-add-cart">
									<p> <span class="item_price">$200</span><a class="item_add" href="#">add to cart </a></p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="men-position animated wow slideInUp" data-wow-delay=".5s">
					<img src="images/29.jpg" alt=" " class="img-responsive" />
					<div class="men-position-pos">
						<h4>Fall Collection</h4>
						<h5 style="color: white;"><span>20%</span> Flat Discount</h5>
					</div>
				</div>
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids animated wow slideInRight" data-wow-delay=".5s">
						<div class="sorting">
							<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
							<option value="null">Sort by default</option>
								<option value="null">Sort by popularity</option> 
								<option value="null">Sort by rating</option>					
								<option value="null">Sort by price</option>									
							</select>
						</div>
						<div class="sorting-left">
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
							<option value="null">Go to Page...</option>
								<option value="null">Go to Page 2</option> 
								<option value="null">Go to Page 3</option>
								<option value="null">Go to Page 4</option>					
								<option value="null">Show all</option>								
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="products-right-grids-position animated wow slideInRight" data-wow-delay=".5s">
						<img src="images/dine.jpg" alt=" " class="img-responsive" />
						<div class="products-right-grids-position1">
							<h4>Latest Collection of 2017</h4>
							<p>Make your home truly your own with our products</p>
						</div>
					</div>
				</div>
				<div class="products-right-grids-bottom">
					<div class="col-md-4 products-right-grids-bottom-grid">
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/30.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="single.php">Centre Table</a></h4>
							<p>Braxton</p>
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<p><i>$325</i> <span class="item_price">$250</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/32.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="single.php">Media Cabinet</a></h4>
							<p>Bermex</p>
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<p><i>$325</i> <span class="item_price">$250</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/31.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="single.php">Entertainment Unit</a></h4>
							<p>AICO</p>
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<p><i>$585</i> <span class="item_price">$489</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 products-right-grids-bottom-grid">
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/33.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="single.php">2 Seater Sofa</a></h4>
							<p>Chandra</p>
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<p><i>$280</i> <span class="item_price">$250</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/tablelamp.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="single.php">Table Lamp</a></h4>
							<p>Caracole</p>
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<p><i>$500</i> <span class="item_price">$480</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/sidetable.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="single.php">Side Table</a></h4>
							<p>Dimplex</p>
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<p><i>$580</i> <span class="item_price">$480</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 products-right-grids-bottom-grid">
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/ear.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="single.php">Wall decor</a></h4>
							<p>Damas</p>
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<p><i>$305</i> <span class="item_price">$280</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/glass.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="single.php">Glass Showcase</a></h4>
							<p>Cyan</p>
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<p><i>$389</i> <span class="item_price">$299</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/34.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="single.php">Analog Wall Clock</a></h4>
							<p>Casio</p>
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<p><i>$585</i> <span class="item_price">$489</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<nav class="numbering animated wow slideInRight" data-wow-delay=".5s">
				  <ul class="pagination paging">
					<li>
					  <a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					  </a>
					</li>
					<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
					  <a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					  </a>
					</li>
				  </ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
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