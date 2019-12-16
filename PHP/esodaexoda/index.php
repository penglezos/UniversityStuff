<?php
	require_once("includes/connection.php");

//2o βήμα εκτέλεση του ερωτήματος
	$exoda_cat_query="SELECT * FROM exoda_kat";
	$exoda_cat_recordset=mysqli_query($connection,$exoda_cat_query) 
						or die("Σφάλμα στο ερώτημα!!<hr/>".$exoda_cat_query);
	//mysqli_query() εκτελεί ένα ερώτημα στη βάση


?>
<!DOCTYPE html>
<html>
	<head>
		<title>$_GET</title>
		<meta charset="utf-8" />
		<style>
			.cats{
				padding:0;
				margin:0;
				list-style:none;
			}
			.cats li a{
				background-color:coral;
				border:solid 1px;
				padding:10px 20px;
				text-decoration:none;
				color:#000;
				display:inline-block;
				width:200px;
			}
			.cats li a:hover{
				background-color:#000;
				color:#fff;
			}
		</style>
	</head>
	<body>
		<ul class="cats">			
			<?php
				//3o βημα , εκτύπωση
				while($exoda_cat_record=mysqli_fetch_assoc($exoda_cat_recordset)){
					//print_r($exoda_cat_record);?>
					<li>
						<a href="exoda.php?catid=<?=$exoda_cat_record['exoda_kat_id']?>&catname=<?=$exoda_cat_record['exoda_kat_name']?>">
							<?=$exoda_cat_record['exoda_kat_name']?>
						</a>
					</li>
				<?php }
			?>			
		</ul>
	</body>
</html>