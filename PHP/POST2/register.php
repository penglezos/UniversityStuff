<?php
	if(empty($_POST)){
		header("location:sign.php");
	}
	session_start();
	?>
<!DOCTYPE html>
<html>
	<head>
	<title>
	    Form
	</title>
		<meta charset="utf-8"/>
	</head>
	<body>
	<pre>

<?php 
	//print_r($_POST); //metablith susthmatos apo tn php
	
	if (empty($_POST['eponimo'])){
		echo"Δεν δώσατε επώνυμο!!";
	}else{
		echo $_POST['eponimo'];
	}
	
	if (empty($_POST['onoma'])){
		echo"Δεν δώσατε όνομα!!";
	}else{
		echo $_POST['onoma'];
	}
	
	if (empty($_POST['email'])){
		echo"Δεν δώσατε email!!";
	}else{
		echo $_POST['email'];
	}
	?>
	<?php
	if (empty($_POST['password'])){
		echo"Δεν δώσατε password!!";
	}else if (empty($_POST['repassword'])){
		echo"Δεν δωσατε κωδικο επαληθευσης!!";
	}else if ($_POST['password']==$_POST['repassword']){
		echo"correct password!!!";
	}else{
		echo"wrong password";
	}
?>
<?php	
	if (empty($_POST['email'])){
		echo"give email please!!!";
	}else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		echo "give correct email";
	}else { echo $_POST['email'];
	}
	
	?>
	<?php
	if (empty($_POST['eponimo'])){
		echo"doste eponimo";
	}else  if (!preg_match('/^[a-zA-Z\x{0386}-\x{03CE}\s]+$/u',$_POST['eponimo'])){
		echo "lathos eponimo";
	}
	else{echo "<p>".$_POST['eponimo']."</p>";
	}
	?>
	<?php 
		$tk="12345";
			var_dump(is_numeric($tk));
			if (empty($_POST['TK'])){
				echo "dose TK";
			}else if (is_numeric($_POST['TK'])){
				echo "<p>".$_POST['TK']."</p>";
			}
			else {echo "lathos TK";
			}
	?>
	<?php
	if (empty($_POST['dieuthinsh'])){
		echo"dose dieuthinsh";
	}else if (!preg_match('/^[a-zA-Z0-9\x{0386}-\x{03CE}\s]+$/u',$_POST['eponimo'])){
		echo"lathos dieuthinsh";
	}
	else{echo "<p>".$_POST['dieuthinsh']."</p>";
	}
	?>
	<hr />
	<h2>διαχείριση αρχείων</h2>
		<?php
			
			print_r($_FILES);
			if(!empty($_FILES['avatar'])){
				if($_FILES['avatar']['error']==0){
					if($_FILES['avatar']['type']=="image/jpeg" ||
						$_FILES['avatar']['type']=="image/gif" ||
						$_FILES['avatar']['type']=="image/png") {
							if($_FILES['avatar']['size']<512000){
								//move_uploaded_file($_FILES['avatar']['tmp_name'],"images/avatars/".$_FILES['avatar']['name']);
								$epektasi=substr($_FILES['avatar']['name'],strrpos($_FILES['avatar']['name'],"."),strlen($_FILES['avatar']['name'])-strrpos($_FILES['avatar']['name'],"."));
								move_uploaded_file($_FILES['avatar']['tmp_name'],"images/avatars/".md5(time()."_".session_id()).$epektasi);
								echo "Το ".$_FILES['avatar']['name']." ανέβηκε με επιτυχία!!";								
							} else {
								echo "<p>το μέγεθος του αρχείου είναι πολύ μεγάλο (500Kb max)</p>";
							}
						} else {
							echo "<p>Εσφαλμένος τύπος αρχείου (JPG,GIF,PNG)</p>";						
						}
					} else {
						echo "<p>Προβλημα κατά το ανέβασμα του αρχείου</p>";
				}
			} else {
				echo "No avatar";
			}
		?>
	</pre>
	</body>	
</html>


























