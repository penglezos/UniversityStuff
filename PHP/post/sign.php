<!DOCTYPE html>
<html>
	<head>
	<title>
	    Form
		</title>
		<meta charset="utf-8"/>
	</head>
	<body>
	<h1>Φόρμα Εγραφής Πελάτη</h1>
		<form action="register.php" method="post">
			<p>
				<label for="eponimo">Επώνυμο :
					<input type="text" name="eponimo" size="25" placeholder="Επώνυμο" maxlength="35" />
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
				<label for="password">Επαλήθευση Password :<br />
					<input type="password" name="password" />
				</label>
			</p>
			
			<button type="submit">ΕΓΓΡΑΦΗ </button>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			</form>
	</body>
</html>
