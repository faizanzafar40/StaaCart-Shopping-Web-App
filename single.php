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
				<li class="active">Product Details</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
					<h3>Filter By Price</h3>
					<ul class="dropdown-menu1">
							<li><input type="range" name="price" min="0" max="100" value="30" /></li>	
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
						<li><a href="products.php">Best Selling</a> <span>(15)</span></li>
						<li><a href="products.php">Fashion</a> <span>(16)</span></li>
							<ul>
								<li><a href="products.php">New Arrivals</a> <span>(2)</span></li>
								<li><a href="products.php">Men</a> <span>(0)</span></li>
								<li><a href="products.php">Women</a> <span>(1)</span></li>
							</ul>
						<li><a href="furniture.php">Furniture</a> <span>(15)</span></li>
							<ul>
								<li><a href="furniture.php">Decor</a> <span>(2)</span></li>
								<li><a href="furniture.php">Dining</a> <span>(0)</span></li>
								<li><a href="furniture.php">Home</a> <span>(1)</span></li>
							</ul>
					</ul>
				</div>
				<div class="men-position animated wow slideInUp" data-wow-delay=".5s">
					<img src="images/home.jpg" alt=" " class="img-responsive" />
					<div class="men-position-pos">
					</div>
				</div>
			</div>
			<div class="col-md-8 single-right">
				<div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/si.jpg">
								<div class="thumb-image"> <img src="images/si.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="images/si1.jpg">
								 <div class="thumb-image"> <img src="images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="images/si2.jpg">
							   <div class="thumb-image"> <img src="images/si2.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li> 
						</ul>
					</div>
					<!-- flexslider -->
						<script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					<!-- flexslider -->
				</div>
				<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
					<h3>Marks & Spencer Formal Shirt</h3>
					<h4>Price: <span class="item_price">$250</h4>
					<p>Rate our Product</p>
					<div class="rating1">	
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1" checked>
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="description">
						<h5><i>Description</i></h5>
						<p>Marks & Spencer Solid Green Regular Fit Formal Shirt</p>
					</div>
					<div class="color-quality">
						<div class="color-quality-left">
							<p>Color</p><br>
							<ul>
								<li><a href="#"><span></span>Red</a></li>
								<li><a href="#" class="brown"><span></span>Blue</a></li>
								<li><a href="#" class="purple"><span></span>Purple</a></li>
								
							</ul>
						</div>
						<div class="color-quality-right">
							<p>Quantity</p><br>
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">1</option>
								<option value="null">2</option> 
								<option value="null">3</option>					
								<option value="null">4</option>
								<option value="null">5</option>								
								<option value="null">6</option>								
								<option value="null">7</option>								
								<option value="null">8</option>								
								<option value="null">9</option>								
								<option value="null">10</option>								
								
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="occasional">
						<p>Size</p><br>
						<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>S</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>M</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>L</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>XL</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="occasion-cart">
						<a class="item_add" href="#">add to cart </a>
					</div>
					<div class="social">
						<div class="social-left">
							<p>Share On :</p>
						</div>
						<div class="social-right">
							<ul class="social-icons">
								<li><a href="https://www.facebook.com" class="facebook"></a></li>
								<li><a href="https://www.twitter.com" class="twitter"></a></li>
								<li><a href="https://www.google.com" class="g"></a></li>
								<li><a href="https://www.instagram.com" class="instagram"></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<div class="bootstrap-tab animated wow slideInUp" data-wow-delay=".5s">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
							<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews(2)</a></li>
							<li role="presentation" class="dropdown">
								<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Information <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
									<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Stock</a></li>
									<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Discounts</a></li>
								</ul>
							</li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
								<h5>Product Description</h5>
								<p>Marks & Spencer Solid Green Regular Fit Formal Shirt</p>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="images/wahab.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Wahab</a></li>
												<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
											</ul>
											<p>I liked this shirt. Suits my style. I would encourage all to buy it!</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="images/umair.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Umair</a></li>
												<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
											</ul>
											<p>Too expensive for me. Doesn't fit me well.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="add-review">
										<h4>add a review</h4>
										<form>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											
											<input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
											<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
											<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>

											<input type="submit" value="Send" >

										</form>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1" aria-labelledby="dropdown1-tab">
								<p>Currently in stock: 123</p>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2" aria-labelledby="dropdown2-tab">
								<p>No discounts available</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //single -->
<!-- single-related-products -->
	<div class="single-related-products">
		<div class="container">
			<h3 class="animated wow slideInUp" data-wow-delay=".5s">Related Products</h3>
			<p class="est animated wow slideInUp" data-wow-delay=".5s">We understand your choice. View more alike products.</p>
			<div class="new-collections-grids">
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.php" class="product-image"><img src="images/bed.jpg" alt=" " class="img-responsive"></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
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
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.php">Bedding set</a></h4>
						<p>Versacci</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>$999</i> <span class="item_price">$800</span><a class="item_add" href="#">add to cart </a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 new-collections-grid">
					<div class="new-collections-grid1-sub">
						<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".6s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/jeans.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right">
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
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="single.php">Denim jeans</a></h4>
							<p>Levis</p>
							<div class="new-collections-grid1-left simpleCart_shelfItem">
								<p><i>$480</i> <span class="item_price">$400</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
					</div>
					<div class="new-collections-grid1-sub">
						<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".7s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="images/tie.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos">
									<a href="single.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
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
							<h4><a href="single.php">Tie</a></h4>
							<p>Armani</p>
							<div class="new-collections-grid1-left simpleCart_shelfItem">
								<p><i>$250</i> <span class="item_price">$200</span><a class="item_add" href="#">add to cart </a></p>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".8s">
						<div class="new-collections-grid1-image">
							<a href="single.php" class="product-image"><img src="images/carpet.jpg" alt=" " class="img-responsive"></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
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
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.php">Carpet</a></h4>
						<p>Plymouth</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>$340</i> <span class="item_price">$260</span><a class="item_add" href="#">add to cart </a></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //single-related-products -->
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
<!-- zooming-effect -->
	<script src="js/imagezoom.js"></script>
<!-- //zooming-effect -->
</body>
</html>