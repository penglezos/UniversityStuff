<?php require_once("includes/connection.php"); ?>
<?php
	$nav_query="SELECT * FROM categories";
	mysqli_query($connection,"set names 'utf8'");
	$nav_recordset=mysqli_query($connection,$nav_query);
	
?>
<!doctype html>
<html>
	<head>
		<title>SimplePSD</title>
		<?php require_once("includes/head.php"); ?>
		
	</head>
		
	<body>
		<div id="wrapper">
			<?php require_once("includes/header.php"); ?>
			<?php require_once("includes/nav.php"); ?>
			<?php require_once("includes/slideshow.php"); ?>
			
			<div class="row clearfix  row-white products-home">
				<div class="col100 products-home-title-bar">
					<div class="col90">
						<h2>Daily Deals</h2>
					</div>
					<div class="col10">
						<a href="#">see more</a>
					</div>						
				</div>
				<div class="col100 products-home-items">
					<div class="col25 products-home-item">
						<div class="price-off">27% OFF</div>
						<div class="col100 items-img">
							<img src="images/products/PER.513843.jpg" />
						</div>
						<div class="col100 items-title">
							<a href="#">
								<p>Citizen Eco-Drive</p>
							</a>
						</div>
						<div class="col100 items-category">
							<a href="#">
								<h3>Mens Watch</h3>
							</a>							
						</div>
						<div class="col100">
							<div class="col50">
								<p class="items-price-old text-right">260,90&euro;</p>
							</div>
							<div class="col50">
								<p class="items-price text-left">228,90&euro;</p>
							</div>
						</div>
					</div>
					<div class="col25 products-home-item">
						<div class="price-off">50% OFF</div>
						<div class="col100 items-img">
							<img src="images/products/PER.910013.jpg" />
						</div>
						<div class="col100 items-title">
							<a href="#">
								<p>Mens Faul-Leather</p>
							</a>
						</div>
						<div class="col100 items-category">
							<a href="#">
								<h3>Bomber Jacket</h3>
							</a>							
						</div>
						<div class="col100">
							<div class="col50">
								<p class="items-price-old text-right">240,50&euro;</p>
							</div>
							<div class="col50">
								<p class="items-price text-left">120,50&euro;</p>
							</div>
						</div>
					</div>
					<div class="col25 products-home-item">
						<div class="price-off">40% OFF</div>
						<div class="col100 items-img">
							<img src="images/products/TLS.050849.jpg" />
						</div>
						<div class="col100 items-title">
							<a href="#">
								<p>Dell Inspiron 13.3"</p>
							</a>
						</div>
						<div class="col100 items-category">
							<a href="#">
								<h3>Touchscreen Laptop</h3>
							</a>							
						</div>
						<div class="col100">
							<div class="col50">
								<p class="items-price-old text-right">799,50&euro;</p>
							</div>
							<div class="col50">
								<p class="items-price text-left">478,00&euro;</p>
							</div>
						</div>
					</div>
					<div class="col25 products-home-item">
						<div class="price-off">75% OFF</div>
						<div class="col100 items-img">
							<img src="images/products/TLS.140584.jpg" />
						</div>
						<div class="col100 items-title">
							<a href="#">
								<p>Panasonic</p>
							</a>
						</div>
						<div class="col100 items-category">
							<a href="#">
								<h3>Lumix DMC-GH4</h3>
							</a>							
						</div>
						<div class="col100">
							<div class="col50">
								<p class="items-price-old text-right">1000,00&euro;</p>
							</div>
							<div class="col50">
								<p class="items-price text-left">250,00&euro;</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="row clearfix  row-white products-home">
				<div class="col100">
					<div class="col100 products-home-title-bar">
						<div class="col90">
							<h2>Popular Products</h2>
						</div>
						<div class="col10">
							<a href="#">see more</a>
						</div>						
					</div>
				</div>
				<div class="col100  products-home-items">
					<div class="col25 products-home-item">					
						<div class="col100 items-img">
							<img src="images/products/TLS.140584.jpg" />
						</div>
						<div class="col100 items-title">
							<a href="#">
								<p>Panasonic</p>
							</a>
						</div>
						<div class="col100 items-category">
							<a href="#">
								<h3>Lumix DMC-GH4</h3>
							</a>							
						</div>
						<div class="col100">							
							<div class="col100">
								<p class="items-price text-center">299,99&euro;</p>
							</div>
						</div>	
					</div>	
					<div class="col25 products-home-item">
						<div class="col100 items-img">
							<img src="images/products/TLS.140584.jpg" />
						</div>
						<div class="col100 items-title">
							<a href="#">
								<p>Panasonic</p>
							</a>
						</div>
						<div class="col100 items-category">
							<a href="#">
								<h3>Lumix DMC-GH4</h3>
							</a>							
						</div>
						<div class="col100">							
							<div class="col100">
								<p class="items-price text-center">299,99&euro;</p>
							</div>
						</div>	
					</div>
					<div class="col25 products-home-item">
						<div class="col100 items-img">
							<img src="images/products/TLS.140584.jpg" />
						</div>
						<div class="col100 items-title">
							<a href="#">
								<p>Panasonic</p>
							</a>
						</div>
						<div class="col100 items-category">
							<a href="#">
								<h3>Lumix DMC-GH4</h3>
							</a>							
						</div>
						<div class="col100">							
							<div class="col100">
								<p class="items-price text-center">299,99&euro;</p>
							</div>
						</div>	
					</div>
					<div class="col25 products-home-item">
						<div class="col100 items-img">
							<img src="images/products/TLS.140584.jpg" />
						</div>
						<div class="col100 items-title">
							<a href="#">
								<p>Panasonic</p>
							</a>
						</div>
						<div class="col100 items-category">
							<a href="#">
								<h3>Lumix DMC-GH4</h3>
							</a>							
						</div>
						<div class="col100">							
							<div class="col100">
								<p class="items-price text-center">299,99&euro;</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="row clearfix  row-white products-home">
				<div class="col100">					
						<div class="col100 products-home-title-bar">
							<div class="col90">
								<h2>Electronics</h2>
							</div>
							<div class="col10">
								<a href="#">see more</a>
							</div>						
						</div>					
				</div>
				<div class="col100">
					<div id="slideshow" class="col50">
						<!-- Slider HTML Code { -->
					 <div class=" col100 carousel carousel-electronics">
							<div class="item">
								<div class="col40 item-content">
									<div class="title col100">
										<h2>Τίτλος</h2>
									</div>
									<div class="description col100">
										<p>Περιγραφή</p>
									</div>
									<div class="col100 button">
										<a href="#">περισσότερα</a>
									</div>
								</div>
							  <img src="images/slider/01.jpg" alt="slide1" />
							</div>
							<div class="item">
								<div class="col40 item-content">
									<div class="title col100">
										<h2>Τίτλος</h2>
									</div>
									<div class="description col100">
										<p>Περιγραφή</p>
									</div>
									<div class="col100 button">
										<a href="#">περισσότερα</a>
									</div>
								</div>
							  <img src="images/slider/02.jpg" alt="slide2" />
							</div>
							<div class="item">
								<div class="col40 item-content">
									<div class="title col100">
										<h2>Τίτλος</h2>
									</div>
									<div class="description col100">
										<p>Περιγραφή</p>
									</div>
									<div class="col100 button">
										<a href="#">περισσότερα</a>
									</div>
								</div>							 
							</div>
							<div class="item">
								<div class="col40 item-content">
									<div class="title col100">
										<h2>Τίτλος</h2>
									</div>
									<div class="description col100">
										<p>Περιγραφή</p>
									</div>
									<div class="col100 button">
										<a href="#">περισσότερα</a>
									</div>
								</div>
							  <img src="images/slider/04.jpg" alt="slide4" />
							</div>
							<div class="item">
								<div class="col40 item-content">
									<div class="title col100">
										<h2>Τίτλος</h2>
									</div>
									<div class="description col100">
										<p>Περιγραφή</p>
									</div>
									<div class="col100 button">
										<a href="#">περισσότερα</a>
									</div>
								</div>
							  <img src="images/slider/05.jpg" alt="slide5" />
							</div>
						  </div>
					</div>
					<div class="col50">
						<div class="col50">p2</div>
						<div class="col50">p3</div>
						<div class="col50">p4</div>
						<div class="col50">p5</div>
					</div>					
				</div>
			</div>
			<div class="row clearfix  row-white">
				<div class="col100">Fashion</div>
				<div class="col100">
					<div class="col50">P1</div>
					<div class="col50">
						<div class="col50">p2</div>
						<div class="col50">p3</div>
						<div class="col50">p4</div>
						<div class="col50">p5</div>
					</div>					
				</div>
			</div>
			<div class="row clearfix  row-white">
				<div class="col100">Sports</div>
				<div class="col100">
					<div class="col50">P1</div>
					<div class="col50">
						<div class="col50">p2</div>
						<div class="col50">p3</div>
						<div class="col50">p4</div>
						<div class="col50">p5</div>
					</div>					
				</div>
			</div>
			<div class="row clearfix  row-white">
				<div class="col100">
					Featured Collections
				</div>
				<div class="col100">
					<div class="col33">P1</div>
					<div class="col33">P2</div>
					<div class="col33">P3</div>
					<div class="col33">P4</div>
					<div class="col33">P5</div>
					<div class="col33">P6</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col100">
					Title
				</div>
				<div class="col100">
					Form
				</div>
			</div>
			<footer class="row clearfix">
				<div class="col25">A</div>
				<div class="col25">B</div>
				<div class="col25">C</div>
				<div class="col25">D</div>
			</footer>
		</div>	

		<!-- carousel files -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="js/slick.js"></script>
		<!-- carousel files -->
		 <script type="text/javascript">
			/* carousel στα προιόντα Electronics */
			$(document).ready(function(){
			  $('.carousel-electronics').slick({
				 dots: true,
				infinite: true,
				speed: 500,
				slidesToShow: 1,
				slidesToScroll: 1
			  });
			});
			
			/* κεντρικό carousel στην αρχή της σελίδας */
			$(document).ready(function(){
			  $('.carousel-home').slick({
				 dots: true,
				infinite: true,
				speed: 500,
				slidesToShow: 1,
				slidesToScroll: 1
			  });
			});
			
		  </script>
	</body>
</html>