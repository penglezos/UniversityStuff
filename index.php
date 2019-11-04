<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<h1>PHP</h1>
		<?php 
			echo "My first php code <br>"; 
			echo '<h3>PHP + HTML + CSS</h3>';
			echo "<p>My first \n php page</p>";
			echo '<p>My second \n php page</p>';
		?>
		<h2>Δήλωση μεταβλητών</h2>
		<?php
			$eponimo="Εγγλέζος";
			$age=21;
			$status=true;
			$height=1.78;
			echo "ΕΠΩΝΥΜΟ: ".$eponimo;
			echo "<br/>ΗΛΗΚΙΑ: ".$age;
			echo "<br/>ΚΑΤΑΣΤΑΣΗ: ".$status;
			echo "<br/>ΥΨΟΣ: ".$height;
		?>
		<h2>Πράξεις με ακέραιους</h2>
		<?php 
			$x=100; $y=50;
			$n=(100 + 50);
			$k=($x + $y);
			echo "<p>".$n.", ".$k." </p>";
			echo "<p>".($n + $k)." </p>";
			echo "<p>".($x - $y)." </p>";
			echo "<p>".($x * $y)." </p>";
			echo "<p>".($x / $y)." </p>";
			echo "<p>".($x % $y)." </p>";
		?>
		<h2>Πράξεις με δεκαδικούς</h2>
		<?php
			$x=100; $y=15.35;
			echo "<p>".($x + $y). "</p>";
			echo "<p>".($n + $k)." </p>";
			echo "<p>".($x - $y)." </p>";
			echo "<p>".($x * $y)." </p>";
			echo "<p>".($x / $y)." </p>";
			echo "<p>".($x % $y)." </p>";
		?>
		<h2>ΠΙΝΑΚΕΣ</h2>
		<?php
			$nums = array(5,10,30,100);
			//Δήλωση πίνακα με αρχικές τιμές
			$values = array("NIKOS",5,"ELENH",1.75);
			echo $nums[0]. "<br/>";
			echo $nums[1]. "<br/>";
			echo $nums[2]. "<br/>";
			echo $nums[3]. "<br/>";
			print_r($nums); 
		?>
		<h2>ΔΟΜΕΣ ΕΛΕΓΧΟΥ</h2>
		<?php
			$x = 10;
			if($x != 10) {
				echo "TRUE";
			}
			else {
				echo "FALSE";
			}
			if($x == 10) {
				echo "</br>TRUE";
			}
			if($x!=10) {
				echo "</br>Διάφορο του 10";
			}
			$admin = true;
			if ($admin == true) {
				echo "<br/>Welcome Admin!!";
			}
			else {
				echo "<br/>login!!";
			}
			$price = 250;
			if ($price > 200) {
				echo "<br/>".($price - ($price * 0.20));
			}
			else {
				echo $price;
			}   

		?>
		<h2>ΗΜΕΡΟΜΗΝΙΑ Κ ΩΡΑ ΣΥΣΤΗΜΑΤΟΣ</h2>
		<?php 
			echo "<p>".date("d/m/Y",time())."</p>";
			echo "<p>".time()."</p>";
		?>
	</body>
</html> 