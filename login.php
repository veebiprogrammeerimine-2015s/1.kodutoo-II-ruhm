<?php

	// $_POST["email"];
	
	//defineerime muutujad
	$email_error = "";
	$password_error = "";
	$email = "";
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//kas e-post on tühi
		if(empty($_POST["email"])){
			//jah oli tühi
			$email_error = "E-mail is required";
		}
		//kas password on tühi
		if(empty($_POST["password"])){
			//jah oli tühi
			$password_error = "Password is required";
		}
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//kas create email on tühi
		if(empty($_POST["email"])){
			//jah oli tühi
			$email_error = "E-mail is required";
		}	else{
			//testib emaili korrektsust
				$email = test_input($_post["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$email_error2 = "Invalid email format";
			}
		}
		//kas create password on tühi
		if(empty($_POST["password"])){
			//jah oli tühi
			$password_error = "Password is required";
		}	else{
				//kontrollib et parool oleks rohkem kui 8 sümbolit
				if(strlen($_Post["password"]) < 8 ){
				$password_error = "Must be longer than 8 symbols"
				}
			}
	}


?>
<html>
<head>
	<style>.error {color: #FF0000;}</style>
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
	<input name="email" type="email" placeholder="E-mail"> <?php echo $email_error?><br><br>
	<input name="password" type="password" placeholder="password"> <?php echo $password_error?> <br><br>
	<input type="submit" value="Create"> <br><br>
	</form>
</body>
</html>