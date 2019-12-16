<?php
	require_once("includes/connection.php");
//2o βήμα εκτέλεση του ερωτήματος
	$exoda_query="SELECT * FROM exoda where exoda_kat_id = ".$_GET['catid'];
	$exoda_recordset=mysqli_query($connection,$exoda_query) 
						or die("Σφάλμα στο ερώτημα!!<hr/>".$exoda_query);
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
				while($exoda_record=mysqli_fetch_assoc($exoda_recordset)){
				?>
					<p>
						<?=$exoda_record['exoda_poso']?> ,
							<?=$exoda_record['exoda_date']?>
					</p>
					
				<?php }
			?>			
		
	</body>
</html>