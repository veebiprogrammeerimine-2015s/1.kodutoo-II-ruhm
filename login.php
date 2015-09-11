<?php

	//echo $_POST["email"];

	//defineerime muutujad
	$email_error = "";
	$password_error = "";
	
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] ==  "POST") {
		
		//echo "jah";
		
		// kas e-post on tühi
		if( empty($_POST["email"])){
			
			$email_error = "See väli on kohustuslik";
		}
		
		// kas parool on tühi
		if( empty($_POST["parool"])){
			
			$password_error = "See väli on kohustuslik";
			
		}
	}
?>
<html>
<head>
<Title>Login page</title>


</head>
<body>

	<h2>Login</h2>	
	<form action="login.php" method="post">
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error;  ?> <br><br>
		<input name="password" type="password" placeholder="Parool">  <?php echo $password_error; ?><br><br>
		<input type="Submit" value="Logi sisse"><br><br>
		
	</form>
	
	<h2>Create user</h2>
	
	

</body>
</html>