<?php
	
	// LOGIN.PHP
	
	// errori muutujad peavad igal juhul olemas olema 
	$email_error = "";
	$password_error = "";
	
	// kontrollime et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "ktonibuty nazhimal knopku";
		
		//proverka pochty pustoy ili net
		if ( empty($_POST["email"]) ) {
			$email_error = "must have be";
		}
		
		//proverka porolya, pustoi ili net
		if ( empty($_POST["password"]) ) {
			$password_error = "must have be";
		} else {
			
			
		}
		
	}
	
?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	
	<h2>Log in</h2>
		
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
			<input type="submit" value="Log in">
		</form>
	
	<h2>Create user</h2>
	
</body>
</html>