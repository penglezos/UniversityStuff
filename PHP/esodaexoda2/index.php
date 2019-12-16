<?php
	require_once("includes/connection.php");

//2o βήμα εκτέλεση του ερωτήματος
	$esoda_cat_query="SELECT * FROM esoda_katathgoria";
	mysqli_query($connection,"
    SET NAMES 'utf8'");
	$esoda_cat_recordset=mysqli_query($connection,$esoda_cat_query) 
						or die("Σφάλμα στο ερώτημα!!<hr/>".$esoda_cat_query);
	//mysqli_query() εκτελεί ένα ερώτημα στη βάση

	$exoda_cat_query="SELECT * FROM exoda_kat";
	mysqli_query($connection,"
    SET NAMES 'utf8'");
	$exoda_kat_recordset=mysqli_query($connection,$exoda_cat_query) 
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
	<h1>ΕΣΟΔΑ</h1>
	<ul class="cats">			
			<?php
				//3o βημα , εκτύπωση
				while($esoda_cat_record=mysqli_fetch_assoc($esoda_cat_recordset)){
					//print_r($exoda_cat_record);?>
					<li>
						<a href="esoda.php?catid=<?=$esoda_cat_record['esoda_cat_id']?>&catname=<?=$esoda_cat_record['esoda_kat_onoma']?>">
							<?=$esoda_cat_record['esoda_kat_onoma']?>
						</a>
					</li>
				<?php }
			?>			
		</ul>
		<br>
		<h1>ΕΞΟΔΑ</h1>
		<ul class="cats">			
			<?php
				//3o βημα , εκτύπωση
				while($exoda_kat_record=mysqli_fetch_assoc($exoda_kat_recordset)){
					//print_r($exoda_cat_record);?>
					<li>
						<a href="exoda.php?catid=<?=$exoda_kat_record['exoda_kat_id']?>&catname=<?=$exoda_kat_record['exoda_kat_name']?>">
							<?=$exoda_kat_record['exoda_kat_name']?>
						</a>
					</li>
				<?php }
			?>			
		</ul>
	</body>
</html>