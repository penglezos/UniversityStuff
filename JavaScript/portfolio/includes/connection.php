<?php
	$host="localhost";
	$user="root";
	$pass="";
	$database="portfolio_4neppo1";
	
	$con = @mysqli_connect($host,$user,$pass,$database);
	
	if(!$con){
		echo "Η σελίδα μας προσωρινά μη διαθέσιμη!!";		
	}
?>