<?php

	//echo $_POST["email"];

	//Defineerime muutujad
	$email_error = "";
	$password_error = "";
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo"jah";
		
		//kas e-post on tühi
		if( empty($_POST["email"]) ) {
			
			//jah oli tühi
			$email_error = "See väli on kohustuslik";
			
		}
		if( empty($_POST["password"]) ) {
			
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
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
		<input name="password" type="password" placeholder="Parool" > <?php echo $password_error; ?> <br><br>
		<input type="submit" value="Logi sisse"> <br><br>
		<p>Minu MVP idee selleks ülesandeks on luua selline leht, kus saab registreerida ja sisse logida. Sisult sarnaneks see vanade heade brauserimängudega, kus pidi mitu korda vajutama nuppudele, et leveleid ja tooteid tekitada(näiteks metsas puid lõhkuda ja siis salvestab iga nupuvajutusega uue koguse puitu vms). Edasi arendaks sellele mitmeid võimalusi juurde.</p>
		</form>
		
		
		<h2>Create user</h2>
		<a href="register.php"> <button>Registreeri  </button> </a>
		
	</body>
</html>