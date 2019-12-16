<?php
	require_once("includes/connection.php");
//2o βήμα εκτέλεση του ερωτήματος
	$esoda_query="SELECT * FROM esoda where esoda_kat_id = ".$_GET['catid'];
	$esoda_recordset=mysqli_query($connection,$esoda_query) 
						or die("Σφάλμα στο ερώτημα!!<hr/>".$esoda_query);
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
			<h1><?=$_GET['catname']?></h1>
			<?php
				//3o βημα , εκτύπωση
				while($esoda_record=mysqli_fetch_assoc($esoda_recordset)){
				?>
					<p>
						<?=$esoda_record['esoda_poso']?> ,
							<?=$esoda_record['esoda_date']?>
					</p>
					
				<?php }
			?>			
		
	</body>
</html>