<?php require_once("includes/connection.php"); ?>
<?php
	$nav_query="SELECT * FROM categories";
	mysqli_query($connection,"set names 'utf8'");
	$nav_recordset=mysqli_query($connection,$nav_query);
	
	$offers_home_query="SELECT * FROM products 	
						inner join subcategories on products.subcategories_id=subcategories.subcategories_id
						inner join categories on subcategories.categories_id=categories.categories_id
						where products_offer > 0 
					LIMIT 0,4"; // limit θέτει όριο στις εγγραφές που θα επιστρέψει η Mysql 0,4 επιτρέφει τις 4 πρώτες εγγραφες
	mysqli_query($connection,"set names 'utf8'");
	$offers_home_recordset=mysqli_query($connection,$offers_home_query);
	
?>
<!doctype html>
<html>
	<head>
		<title>SimplePSD</title>
		<?php require_once("includes/head.php"); ?>
		
	</head>
		
	<body>
		<div id="wrapper">
			<?php 			
				require_once("includes/header.php"); 
				require_once("includes/nav.php"); 
				require_once("includes/slideshow.php"); 
				require_once("includes/offers_home.php"); 
				require_once("includes/popular_home.php"); 
				
				$subcatid=1;
				require_once("includes/categories_products_home.php"); 
				 
				$subcatid=2;
				require_once("includes/categories_products_home.php"); 
				
				$subcatid=3;
				require_once("includes/categories_products_home.php"); 
					
				require_once("includes/featured_products_home.php"); 
				require_once("includes/footer.php"); 
			?>
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