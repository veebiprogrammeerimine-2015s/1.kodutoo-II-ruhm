<?php

	// $_POST["email"];
	
	//defineerime muutujad
	$email_error = "";
	$password_error = "";
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//echo"jah";
		//kas e-post on tühi
		if(empty($_POST["email"]) ){
			
			//jah oli tühi
			$email_error = "See väli on kohustuslik";
		}
		//kas password on tühi
		if(empty($_POST["email"])){
			
			//jah oli tühi
			$password_error = "See väli on kohustuslik";
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
	<input name="email" type="email" placeholder="E-mail"> <?php echo $email_error?><br><br>
	<input name="password" type="password" placeholder="password"> <?php echo $password_error?> <br><br>
	<input type="submit" value="Login"> <br><br>
	</form>
	
	<h2>Create user</h2>
	<form action="login.php" method="post">
	<input name="email" type "email" placeholder="E-mail"> <?php echo $email_error?><br><br>
	<input name="password" type="password" placeholder="password"> <?php echo $password_error?> <br><br>
	<input type="submit" value="Create"> <br><br>
	</form>
</body>
</html>