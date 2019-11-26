<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset="utf-8"/>
	</head>
	<body>
        <?php
		function grdate($keys,$seperator) {
            $day = date("w",time());
			$month = date("n",time())-1;
			$dates = array("Κυριακή","Δευτέρα", "Τρίτη", "Τετάρτη", "Πέμπτη", "Παρασκευή", "Σάββατο");
			$datesshort = array("Κυρ","Δευ", "Τρί", "Τετ", "Πέμ", "Παρ", "Σάβ");
			$months = array("Ιανουάριου","Φεβρουάριου","Μάρτιου","Απρίλιου","Μάιου","Ιούνιου","Ιούλιου","Αύγουστου","Σεπτέμβριου","Οκτόβριου","Νοέμβρη","Δεκέμβρη");
			$monthsshort = array("Ιαν","Φεβ","Μάρ","Απρ","Μάι","Ιούν","Ιούλ","Αύγ","Σεπ","Οκτ","Νοέ","Δεκ");
			
			if ($keys == "f") {
				echo"<p>".$dates[$day]." ".date("d",time())." ".$months[$month]." ".date("Y",time())."</p>";
			}
			if ($keys == "s") {
				echo"<p>".$datesshort[$day]." ".date("d",time())." ".$monthsshort[$month]." ".date("Y",time())."</p>";
			}
			if ($keys == "m") {
				echo"<p>".date("d.m.Y",time())."</p>";
			}
			else {
				echo "error";
			}
        }
		grdate("f","");
		grdate("s","");
		grdate("m",".");
        ?>

		<?php
		function grtime() {
			date_default_timezone_set('Europe/Athens');
			setlocale(LC_TIME,' el-GR.UTF-8');
			echo "<p>".date("G:i:s",time())."</p>"; 
		}
		grtime();
		?>
    </body>
</html