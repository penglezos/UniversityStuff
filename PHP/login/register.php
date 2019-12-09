<!DOCTYPE html>
<html>
	<head>
		<title>Register Page</title>
		<meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
    <div class="wrapper">
    <form action="sign.php" method="post" class="form-signin">       
      <h2 class="form-signin-heading">Φόρμα Εγγραφής</h2>
      Επώνυμο
      <input type="text" class="form-control" name="surname" placeholder="Επώνυμο" required="" autofocus="" />
      </br>
      Όνομα
      <input type="" class="form-control" name="name" placeholder="Όνομα" required=""/> 
      </br>    
      Email
      <input type="text" class="form-control" name="username" placeholder="Email" required="" autofocus="" />
      </br> 
      Κωδικός
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/> 
      </br>
      Κωδικός Επαλύθευσης
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/> 
      </br>
      Avatar
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Επιλογή Avatar" name="submit">
      </br>
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe">Θυμήσου Με
      </label>
     
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
</body>
</html>