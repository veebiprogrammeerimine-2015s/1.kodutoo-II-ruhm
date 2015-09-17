<?php

	//echo $_POST["email"];
	
	//defineerime muutujad
	$email_error = "";
	$password_error = "";
	$firstname_error = "";
	$lastname_error = "";
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "jah";
		
		//Kas epost on tühi
		if( empty($_POST["email"]) ) {
			
			//jah oli tühi
			$email_error = "E-post on kohustuslik!";
		}
		//Kas parool on tühi
		if( empty($_POST["password"]) ) {
			
			//jah oli tühi
			$password_error = "Parool on kohustuslik!";
		
		}
		if( empty($_POST["text"]) ) {
			
			//jah oli tühi
			$firstname_error = "Eesnimi on kohustuslik!";
		
		}
		
		if( empty($_POST["text"]) ) {
			
			//jah oli tühi
			$lastname_error = "Perekonnanimi on kohustuslik!";
		
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
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
			<input type="submit" value="Logi sisse"> <br><br>
		</form>
		<h2>Create user</h2>
		<form action="login.php" method="post"> 
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
			<input name="password" type="password" placeholder="Parool uuesti"> <?php echo $password_error; ?> <br><br>
			<input name="firstname" type="text" placeholder="Eesnimi"> <?php echo $firstname_error; ?> <br><br>
			<input name="lastname" type="text" placeholder="Perekonnanimi"> <?php echo $lastname_error; ?> <br><br>
			<input type="submit" value="Registreeru"> <br><br>
		</form>
	</body>

</html>