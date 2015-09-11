<?php

	$email_error = "";
	$password_error = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if ( empty($_POST["email"])) {
			
			$email_error = "See väli on kohustuslik";
			
			
		}
		if ( empty($_POST["pass"])) {
			
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
	<input name="email" type="email" placeholder="E-post"> <?php echo $email_error  ?> <br><br>
	<input name="pass" type="password" placeholder="Parool"> <?php echo $password_error  ?><br><br>
	<input type="submit" value="Logi sisse"> <br><br>
	</form>
	<h2>Create user</h2>

</body>


</html>