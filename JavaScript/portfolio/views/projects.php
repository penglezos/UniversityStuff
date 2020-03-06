<?php
	require_once("../includes/connection.php");

	$query = "SELECT * FROM projects ORDER BY created_at DESC";
	$res = mysqli_query($con, $query);
?>
<div class="row-wrapper">
	<div class="big-title wow fadeInDown">
		<span>
			PROJECTS
		</span>
	</div>
	
	<div id="projects">
	
		<?php
			$number = 1;
			while($p = mysqli_fetch_assoc($res)) {
		?>
		
		<div class="col25 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="<?=($number++*0.15)?>s">
			<a href="#/projects/<?=$p["id"]?>">
				<div class="project-image">
					<div class="project-title">
						<?=$p["name"]?>
						<div class="project-category"><?=$p["created_at"]?></div>
					</div>
					<img src="<?=$p["photo"]?>" width="100%"/>
				</div>
			</a>
		</div>
		
		<?php } ?>
		
	</div>
</div>