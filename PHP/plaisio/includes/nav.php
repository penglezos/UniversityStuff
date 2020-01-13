<nav class="row clearfix">
	<div class="col90">
		<div id="menu-xl">
			<a href="#">Προϊόντα <i class="fas fa-caret-down"></i></a>
			<ul>
				<?php while($nav_record=mysqli_fetch_assoc($nav_recordset)){ // εκτύπωση κατηγοριών ?>
					<li>
						<a href="products.php?catid=<?=$nav_record['categories_id']?>">
							<?=$nav_record['categories_name']?>
						</a>
						<?php
							$subcats_query="select * from subcategories where categories_id like ".$nav_record['categories_id'];
							//echo $subcats_query;
							mysqli_query($connection,"set names 'utf8'");
							$subcats_recordset=mysqli_query($connection,$subcats_query);
							if(mysqli_num_rows($subcats_recordset)>0){ // επιστρέφει τον αριθμό των εγγραφών ενος recordset ?>
								<ul>
									<?php while($subcat_record=mysqli_fetch_assoc($subcats_recordset)) { //τυπωνει τις υποκατηγορίες?>
										<li>
											<a href="products.php?subcatid=<?=$subcat_record['subcategories_id']?>">
												<?=$subcat_record['subcategories_name']?>
											</a>
										</li>
									<?php } ?>
								</ul>
							<?php }
						?>
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