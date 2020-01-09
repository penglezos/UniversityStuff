<nav class="row clearfix">
	<div class="col90">
		<div id="menu-xl">
			<a href="#">Προϊόντα <i class="fas fa-caret-down"></i></a>
			<ul>
				<?php while($nav_record=mysqli_fetch_assoc($nav_recordset)){ ?>
					<li>
						<a href="products.php?catid=<?=$nav_record['categories_id']?>">
							<?=$nav_record['categories_name']?>
						</a>						
					</li>	
				<?php } ?>
			</ul>
		</div>
		<div id="menu-s">Menu S</div>
	</div>
	<div class="col10">Help</div>
</nav>

<!-- 

<ul>
						<li><a href="#">Τηλεοράσεις</a></li>
						<li><a href="#">Ακουστικά</a></li>
						<li><a href="#">VR</a></li>
						<li><a href="#">Κονσόλες</a></li>
						<li><a href="#">Ταινίες</a></li>
						<li><a href="#">Projectors</a></li>
					</ul>
					-->