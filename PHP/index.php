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
			echo "<p>".date("G:i:s", time())."</p>";
			date_default_timezone_set('Europe/Athens');
			setlocale(LC_TIME,' el-GR.UTF-8');
			echo "<p>".date("G:i:s",time())."</p>"; 
			//kwdika tha elenxi tin imera tis evdomados kai ean einai deutera na leei kalimera
			if (date("w",time()) == 1) {
				echo "Kali evdomada <br>";
			}
			if (date("w",time()) == 5) {
				echo "Kalo savvatokyriako";
			}
			if (date("w",time()) >=2 && date("w",time()) < 5) {
				echo "kali ergasia";
			}
			$day = date("w",time());
			$hour = date("G",time());
			if ($day >=1 && $day <=5 && $hour >=8 && $hour <=16) {
				echo "Access Granted<br>";
			}
			else {
				echo "Access Denied";
			}
			$month = date("n",time())-1;
			$dates = array("Κυριακή","Δευτέρα", "Τρίτη", "Τετάρτη", "Πέμπτη", "Παρασκευή", "Σάββατο");
			$months = array("Ιανουάριος","Φεβρουάριος","Μάρτιος","Απρίλιος","Μάιος","Ιούνιος","Ιούλιος","Αύγουστος","Σεπτέμβριος","Οκτόβριος","Νοέμβρης","Δεκέμβρης");
			echo"<p>".$dates[$day]." ".date("d",time())."".$months[$month]."".date("Y",time())."</p>";
		?>
		<h2>Δομές επανάληψης</h2>
		<?php
			for($i=1; $i<10; $i++){
				echo "<p>".$i."</p>";
			}

			for($i=1; $i<=6; $i++) {
				echo "<h".$i.">"."Επικεφαλιδα".$i;
			}
		?>

		<?php
			foreach ($months as $pointer => $value) {
				echo "<p>".$pointer." = ".$value."</p>";
				echo "<p>".$months[$pointer]."</p>";
			}
		?>
		
		<?php
			$social_media = array("facebook.com", "twitter.com", "instagram.com", "youtube.com");
			echo"$social_media[0]<br>";
			echo"$social_media[1]<br>";
			echo"$social_media[2]<br>";
			echo"$social_media[3]<br>";

			foreach ($social_media as $pointer => $value) {
				echo "<p>".$pointer." = ".$value."</p>";
				echo "<p>".$social_media[$pointer]."</p>";

				echo "<p><img width=\"100\"src=\"img/".$pointer.".png\"/>".$value."</p>";

				/*if ($pointer == 0) {
					echo "<img src='img/0.png' width='100' height='100' />";
				}	
				if ($pointer == 1) {
					echo "<img src='img/1.png' width='100' height='100' />";
				}
				if ($pointer == 2) {
					echo "<img src='img/2.png' width='100' height='100' />";
				}
				if ($pointer == 3) {
					echo "<img src='img/3.png' width='100' height='100' />";
				}
				*/
			}
		?>

		<h2>Πίνακες</h2>
		<?php
			$products  = array(array("Προιον Α",200),
						array("Προιον Β",50),
						array("Προιον Γ",350));
			echo "<pre>";
			print_r($products);
			echo "</pre>";


			$pelates = array(array("1", "Όνομα","Επώνυμο","Email","ID","Password","Διεύθυνση"),	
							array("2", "Όνομα","Επώνυμο","Email","ID","Password","Διεύθυνση"),
							array("3", "Όνομα","Επώνυμο","Email","ID","Password","Διεύθυνση"));
			echo "<pre>";
			print_r($pelates);
			echo "</pre>";
			
			foreach($pelates as $value) {
				echo "<p>";
				foreach($value as $pelatis) {
					echo $pelatis."";
				}
				echo "</p>";
			}
			
			foreach($pelates as $value) {
				echo "<p>".$value[a]." ".$value[1]." ".$value[2]."  ".$value[4]."</p>";
			}
		?>

		<h2>PHP + HTML + CSS</h2>
		<?php
			$products = array(array("274589","Samsung S10",987,5,10),
							array("389200","iPhone 11 Pro",1200,3,5),
							array("776321","XIAOMI Redmi Note 4",160,10,0));	
		?>
		<h2>ΠΡΟΙΝΤΑ</h2>
		<section id="products">
			<?php
				foreach($products as $product) { ?>
				<div class="products-item">
					<div class="products-image">
						<img width="100"src="img/<?=$product[0]?>.png"/>
					</div>
				<div class="product-name">
					<h3><?=$product[1]?></h3>
				</div>
				<div class="product-price">
					<p><?=$product[2]?> &euro;</p>
				</div>
			</div>
			<?php } ?>
		</section>
	</body>
</html> 