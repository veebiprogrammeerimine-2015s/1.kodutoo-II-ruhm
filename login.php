<?php

	//ECHO $_POST["email"];
	
	//defineerime muutujad
	$email_error="";
	$password_error="";
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "jah";
		
		//kas e-post on t�hi
		if(empty($_POST["email"])){
			
			//jah oli t�hi
			$email_error= "See v�li on kohustuslik";
			}
			
			//kas parool on t�hi
			if(empty($_POST["password"])){
				
				//jah oli t�hi
				$password_error="See v�li on kohustuslik";
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
			<input name"email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?><br><br>
			<input type="submit" value="Logi sisse"> <br><br>
		<form>
		<h2>Create user</h2>
		
	</body>
</html>