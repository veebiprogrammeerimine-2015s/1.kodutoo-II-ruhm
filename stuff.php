<?php
	//echo $_POST["email"];
	// Defineerime muutujad
	$email_error ="";
	$password_error ="";
	$first_name_error ="";
	
	
	// kontrollin, kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "jah";
		
		// kas email on tühi
		if(empty($_POST["email"])) {
			
			// jah oli tühi
			$email_error = "See väli on kohustuslik";
		}
		if(empty($_PASSWORD["password"])) {
			
			$password_error = "See väli on kohustuslik";
		}
		if(empty($_POST["first name"])) {
			
			$first_name_error ="See väli on kohustuslik";
		}
		
		if(empty($_POST["email1"])) {
			
			$email1_error = "See väli on kohustuslik";
		}
		
		if(empty($_PASSWORD["password1"])) {
			
			$password1_error = "See väli on kohustuslik";
		}
		
	}
	
?>
<html>
<head>
	<title>Login page</title>
</head>

<body>
	
	<h2>Login</h2>
	<form action="login.php" method="post">
		<input name="email" type="email" placeholder="E-post" > <?php echo $email_error ?> <br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error ?> <br><br>
		<input type="submit" value="Logi sisse"> <br><br>
	</form>
	<h2>Create user</h2>
	<form action="creat user.php" method="post">
		<input name="first name" type="text" placeholder="Eesnimi" > <?php echo $first_name_error ?> <br><br>
		<input name="email" type="email" placeholder="E-post" > <?php echo $email_error ?> <br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error ?> <br><br>
		<input type="submit" value="Loo konto"> <br><br>
	</form>
	
	
	
	
	
</body>

</html>