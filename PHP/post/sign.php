<?php
if(!empty($_POST)){
	print_r($_POST);
}
?>
<!DOCTYPE html>
<html>
	<head>
	<title>
	    Form
		</title>
		<meta charset="utf-8"/>
		<style>
			.error{
				color:red;
				font-weight:bold;
			}
		</style>
	</head>
	<body>
	<h1>Φόρμα Εγραφής Πελάτη</h1>
		<form action="sign.php" method="post">
			<p>
				<?php
						$eponimo="";
						if(isset($_POST['eponimo'])){
							if(empty($_POST['eponimo'])){
								echo '<span class="error">doste eponimo</span>';
							}else  if (!preg_match('/^[a-zA-Z\x{0386}-\x{03CE}\s]+$/u',$_POST['eponimo'])){
								echo '<span class="error">lathos eponimo</span>';
								}
									else {
										//echo "<p>".$_POST['eponimo']."</p>";
										$eponimo=$_POST['eponimo'];
									}
						}
					?>
				<label for="eponimo">Επώνυμο :
					<input type="text" name="eponimo" size="25" placeholder="Επωνυμο" value="<?=$eponimo?>" maxlength="35" />
					
				</label>
			</p>
			<p>
				<label for="onoma">Όνομα :
					<input type="text" name="onoma" size="15" placeholder="Όνομα" maxlength="15" />
				</label>
			</p>
			<p>
				<label for="email">Email :
					<input type="text" name="email" size="25" placeholder="Email" maxlength="35" />
				</label>
			</p>
			<p>
				<label for="avatar">Avatar :<br />
					<input type="file" name="avatar" multiple="multiple" />
				</label>
			</p>
			<p>
				<label for="password">Password :<br />
					<input type="password" name="password" />
				</label>
			</p>
			<p>
				<label for="repassword">Επαλήθευση Password :<br />
					<input type="password" name="repassword" />
				</label>
			</p>
			<p>
				<label for="dieuthinsh">Διευθηνση και αριθμος :<br />
					<input type="text" name="dieuthinsh" />
				</label>
			</p>
			<p>
				<label for="TK">TK :<br />
					<input type="text" name="TK" />
				</label>
			</p>
			
			
			<button type="submit">ΕΓΓΡΑΦΉ</button>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			</form>
	</body>
</html>
