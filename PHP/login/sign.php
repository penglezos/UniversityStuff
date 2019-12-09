<?php
	if(empty($_POST))
	{
		header("location:sign.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign</title>
		<meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
          .wrapper {	
    margin-top: 80px;
    margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #505050;
  border: 1px solid rgba(0,0,0,0.1);  
}
</style>
	</head>
	<body>
	<?php
        if(empty($_POST['surname'])){
          echo "Dose eponimo";
        }
        else {
          echo $_POST['surname'];
        }
	  ?>
	  <?php
        if(empty($_POST['name'])){
          echo "Dose onoma";
        }
        else {
          echo $_POST['name'];
        }
	  ?>
	   <?php
        if(empty($_POST['email'])){
          echo "Dose email";
        }
        else {
          echo $_POST['email'];
        }
	  ?>
	  <?php
		if(empty($_POST['password'])) {
			echo "<p>Dose kodiko!!</p>";
		}
		else if(empty($_POST['repassword'])){
			echo "<p>Doste kodiko epalithepsis!!</p>";
		}
		else if($_POST['password'] == $_POST['repassword']){
			echo "<p>sostoi kodikoi</p>";

		}else {
			echo "<p>oi kodikoi den teriazoun</p>";
		}
	  ?>
		<!-- 
			<pre>
		<?php
			print_r($_POST);
		?>
		</pre>

		<pre>
		<?php
			echo "<p>".$_POST['surname']."</p>";
			echo "<p>".$_POST['name']."</p>";
		?>
		</pre>
	-->
    </body>
</html>