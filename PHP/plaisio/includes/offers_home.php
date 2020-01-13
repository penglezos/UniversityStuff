<div class="row clearfix  row-white products-home">
	<div class="col100 products-home-title-bar">
		<div class="col90">
			<h2>Προσφορές</h2>
		</div>
		<div class="col10">
			<a href="#">see more</a>
		</div>						
	</div>
	<div class="col100 products-home-items">
		<?php while($offers_home_record=mysqli_fetch_assoc($offers_home_recordset)) {?>
			<div class="col25 products-home-item">
				<div class="price-off"><?=$offers_home_record['products_offer']?>% OFF</div>
				<div class="col100 items-img">
					<img src="images/products/<?=$offers_home_record['products_id']?>.jpg" /><br />
					<?=$offers_home_record['products_id']?>
				</div>
				<div class="col100 items-title">
					<a href="product.php?pid=<?=$offers_home_record['products_id']?>">
						<p><?=$offers_home_record['products_name']?></p>
					</a>
				</div>
				<div class="col100 items-category">
					<a href="products.php?subcatid=<?=$offers_home_record['subcategories_id']?>">
						<h3><?=$offers_home_record['categories_name']. " / ".$offers_home_record['subcategories_name']?></h3>
					</a>							
				</div>
				<div class="col100">
					<div class="col50">
						<p class="items-price-old text-right"><?=$offers_home_record['products_price']?>&euro;</p>
					</div>
					<div class="col50">
						<p class="items-price text-left">
							<?=$offers_home_record['products_price']-(($offers_home_record['products_price']*$offers_home_record['products_offer'])/100)?>&euro;
						</p>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>	