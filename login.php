<?php
	
	//echo $_POST["email"];
	
	//Defineerime muutujad
	$email_error = "";
	$password_error = "";
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//echo "jah";
		
		//kas e-post on tühi
		$email_error = "See väli on kohustuslik";
		//kas parool on tühi
		$password_error = "See väli on kohustuslik";
		
	}
	//kas parool on tühi
	
?>
<html>
<head>
	<title>Login page</title>
</head>

<body>
	<h2>Login</h2>
	<form action="login.php" method="post">
		<input type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
		<input type="password" placeholder="Parool"> <?php echo $password_error; ?><br><br>
		<input type="submit" value="Logi sisse"><br><br>
	
	<h2>Create User</h2>

</body>

</html>
