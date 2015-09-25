<?php
	
	// Defineerin muutujad
	$email_error ="";
	$password_error ="";
	$first_name_error ="";
	$last_name_error ="";
	$email_error ="";
	$password1_error ="";
	$password2_error ="";
	
	
	// kontrollin, kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if(empty($_POST["email"])) {
			
			$email_error = "See väli on kohustuslik";
		}
		if(empty($_PASSWORD["password"])) {
			
			$password_error = "See väli on kohustuslik";
		}
		if(empty($_POST["first name"])) {
			
			$first_name_error ="See väli on kohustuslik";
		}
		if(empty($_POST["last name"])) {
			
			$last_name_error ="See väli on kohustuslik";
		}
		if(empty($_POST["email"])) {
			
			$email_error = "See väli on kohustuslik";
		}
		
		if(empty($_PASSWORD["password1"])) {
			
			$password1_error = "See väli on kohustuslik";
		}
		
		if(empty($_PASSWORD["password2"])) {
			
			$password2_error = "See väli on kohustuslik";
		}
	}
	
?>
<html>
<head>
	<title>"Ajaveeb"-i sisselogimine</title>
</head>

<body>
	
	<h2>Login</h2>
	<form action="login.php" method="post">
		<input name="email" type="email" placeholder="E-mail" > <?php echo $email_error ?> <br><br>
		<input name="password" type="password" placeholder="Salasõna"> <?php echo $password_error ?> <br><br>
		<input type="submit" value="Logi sisse"> <br><br>
	</form>
	
	<h2>Create user</h2>
	<form action="login.php" method="post">
		<input name="first name" type="text" placeholder="Eesnimi" > <?php echo $first_name_error ?> <br><br>
		<input name="last name" type="text" placeholder="Perekonnanimi"> <?php echo $last_name_error ?> <br><br>
		<input name="email" type="email" placeholder="E-mail" > <?php echo $email_error ?> <br><br>
		<input name="password1" type="password" placeholder="Salasõna"> <?php echo $password1_error ?> <br><br>
		<input name="password2" type="password" placeholder="Korda salasõna"> <?php echo $password2_error ?> <br><br>
		<input type="submit" value="Loo konto"> <br><br>
	</form>
	
</body>

</html>