<?php
	
	//echo $_POST["email"];
	
	//defineerime muutujad
	
	$email_error = "";
	$pass_error = "";
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "jah";
		
		//kas e-post on tühi
	if( empty($_POST["email"]) ) {
		
		//jah oli tühi
		$email_error = "must be";
	

			//kas pass on tühi
	if( empty($_POST["pass"]) ) {
		
		//jah oli tühi
		$pass_error = "must be";
	}
	}
	}


?>

<html>
<head>
	<title>Login Page</title>
</head>
<body>
	siia tuleb login
	<h2>Login</h2>
	<form ation="login.php" method="post":>
	<input name="email" type="email" placeholder="e-mail" > <?php echo $email_error ?> <br><br>
	<input name="pass" type="pass" placeholder="parool"> <br><br> 
	<input type="submit" value="log in" > <br><br> 
	</form>
	
	<h2>Create user</h2>

	
</body>
</html>