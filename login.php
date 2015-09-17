<?php

	$email_error = "";
	$password_error = "";
	$password_fail = "";
	$password_right = "";
	$mail_error = "";
	$pass_error = "";
	$passc_error = "";
	
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if ($_POST["password"] == $_POST["confirm_password"]) {
		$password_right = "Paroolid klapivad";
}
	else {
		$password_fail = "Paroolid ei klapi.";
}
		if ( empty($_POST["email"])) {
			
			$email_error = "See väli on kohustuslik";
			
			
		}
		if ( empty($_POST["pass"])) {
			
			$password_error = "See väli on kohustuslik";
			
			
		}
		if ( empty($_POST["mail"])) {
			
			$mail_error = "See väli on kohustuslik";
			
			
		}
		if ( empty($_POST["password"])) {
			
			$pass_error = "See väli on kohustuslik";
			
			
		}
		if ( empty($_POST["confirm_password"])) {
			
			$passc_error = "See väli on kohustuslik";
			
			
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
	
	<h2>Kasutaja loomine</h2>
	
	<input name="mail" type="email" placeholder="E-post"><?php echo $mail_error  ?> <br><br> 
	<input name="password" type="password" placeholder="Parool"><?php echo $pass_error  ?> <br><br> 
	<input name="confirm_password" type="password" placeholder="Korda parooli"> <?php echo $password_fail; echo $password_right; echo $passc_error  ?> <br><br>
	<input name="name" type="name" placeholder="Eesnimi"> <br><br>
	<input name="lastname" type="name" placeholder="Perekonnanimi"> <br><br>
	<input type="submit" value="Loo kasutaja"> <br><br>
	</form>
</body>


</html>