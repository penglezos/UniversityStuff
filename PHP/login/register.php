<!DOCTYPE html>
<html>
	<head>
		<title>Register Page</title>
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
    <div class="wrapper">
    <form action="sign.php" method="post" class="form-signin">       
      <h2 class="form-signin-heading">Φόρμα Εγγραφής</h2>
      
      Επώνυμο
      <input type="text" class="form-control" name="surname" placeholder="Επώνυμο" autofocus="" />
      
      </br>
      
      Όνομα
      <input type="" class="form-control" name="name" placeholder="Όνομα"/> 
      </br>    
      Email
      <input type="text" class="form-control" name="email" placeholder="Email"  autofocus="" />
      </br> 
      Κωδικός
      <input type="password" class="form-control" name="password" placeholder="Password"/> 
      </br>
      Κωδικός Επαλύθευσης
      <input type="password" class="form-control" name="repassword" placeholder="rePassword" /> 
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