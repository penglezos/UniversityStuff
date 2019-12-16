<?php
//1o βήμα η σύνδεση της PHP με την MySQL
	$host="localhost";
	$user="englezos";
	$pass="12345678";
	$database="esodaeksoda";
	
	$connection=@mysqli_connect($host,$user,$pass,$database);
		/* η mysqli_connect επιστρέφει FALSE όταν υπάρχει πρόβλημα 
			και ενα connection object οταν συνδεθεί
		*/
		
	if(!$connection){
		echo "Η σελίδα μας προσωρινά μη διαθέσιμη!!";		
	}
?>