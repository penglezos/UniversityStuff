<?php
	require_once("../includes/connection.php");

	$pid = $_GET['project_id'];
	$query = "SELECT * FROM projects WHERE id = ".$pid." LIMIT 1";
	$res = mysqli_query($con, $query);
	$p = mysqli_fetch_assoc($res);
?>
<div class="row-wrapper">
	<div class="big-title wow fadeInDown">
		<span>
			<?=$p["name"]?>
		</span>
	</div>
	<div class="project-image-wide">
		<img src="<?=$p["photo"]?>" width="100%"/>
	</div>
	<p>
		Date: <?=$p["created_at"]?><br>
		<a href="<?=$p["url"]?>" target="_blank">Link</a>
	</p>
	<p class="wow fadeIn" data-wow-duration="4s"><?=$p["description"]?></p>
</div>