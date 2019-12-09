<?php
	if(empty($_POST)){
	header("location:sign.php");
	}
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
	

	</pre>
	</body>	
</html>