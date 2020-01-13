<?php require_once("includes/connection.php"); ?>
<?php
	$nav_query="SELECT * FROM categories";
	mysqli_query($connection,"set names 'utf8'");
	$nav_recordset=mysqli_query($connection,$nav_query);	
	
	if(isset($_GET['catid'])){
		$products_query="SELECT * FROM products 
						inner join subcategories on products.subcategories_id=subcategories.subcategories_id
						inner join categories on subcategories.categories_id=categories.categories_id
						where subcategories.categories_id =".$_GET['catid'];
	}
	
	if(isset($_GET['subcatid'])){
		$products_query="SELECT * FROM products 
						inner join subcategories on products.subcategories_id=subcategories.subcategories_id
						inner join categories on subcategories.categories_id=categories.categories_id
						where subcategories.subcategories_id =".$_GET['subcatid'];
	}
	
	if(isset($_GET['keyword'])){
		$products_query="SELECT * FROM products 
						inner join subcategories on products.subcategories_id=subcategories.subcategories_id
						inner join categories on subcategories.categories_id=categories.categories_id
						where products_name like '%".$_GET['keyword']."%'
								OR products_description like '%".$_GET['keyword']."%'
								OR products_id like '%".$_GET['keyword']."%'
						";
	}
	//echo $products_query;die();
	mysqli_query($connection,"set names 'utf8'");
	$products_recordset=mysqli_query($connection,$products_query);
	
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
				
				//require_once("includes/products.php"); 
				
				while($product_record=mysqli_fetch_assoc($products_recordset)){
					echo $product_record['products_name']."<br />";
				}
				
				require_once("includes/footer.php"); 
			?>
		</div>	

		<!-- carousel files -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="js/slick.js"></script>
		
	</body>
</html>